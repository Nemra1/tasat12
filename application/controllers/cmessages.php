<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cmessages extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        redirect(WEB_URL . 'Cmessages/Inbox');
        //end	
    }

    function clientInbox() {
        //start
         $this->user_model->loginCheck();
        $data['cmactive'] = "active";
        $data['pagetitle'] = "Inbox";
        $data['inbox'] = $this->feedback_model->inboxMessage();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/messages/inbox');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    

    function Sent() {
        //start
         $this->user_model->loginCheck();
        $data['cmactive'] = "active";
        $data['pagetitle'] = "Sent Messages";
        $data['sent'] = $this->feedback_model->sentMessage();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/messages/sent');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Trash() {
        //start
         $this->user_model->loginCheck();
        $data['cmactive'] = "active";
        $data['pagetitle'] = "Trash Messages";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/messages/trash');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Message() {
        //start
         $this->user_model->loginCheck();
        $data['cmactive'] = "active";
        $data['pagetitle'] = "Message";
        $msgid="";
        $pid="";
        if(isset($_REQUEST['msgid'])){
        $msgid = $_REQUEST['msgid'];
        }
        if(isset($_REQUEST['pid'])){
        $pid=$_REQUEST['pid'];
             }
        $data['list'] = $this->feedback_model->messageList($msgid,$pid);
        $data['pre'] =$this->feedback_model->previousList($pid);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/messages/message');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function sendMessage() {
        //start
         $this->user_model->loginCheck();
        $data['type'] = $this->session->userdata('login_user_type');
        $data['cmactive'] = "active";
        $data['pagetitle'] = "Message";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('messages/sendmessage');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function saveMessage() {
         $this->user_model->loginCheck();
        $sendto = $_POST['gen'];
        $message = $_POST['messages'];
        $pjtfile = $_FILES['file']['name'];
        if ($pjtfile != "") {
            $allowedExts = array("doc", "txt", "docx", "pdf");
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);
            if ((($_FILES["file"]["type"] == "application/application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "text/plain")) && ($_FILES["file"]["size"] < 2097152) && in_array($extension, $allowedExts)) {
                if ($_FILES["file"]["error"] > 0) {
                    "Return Code: " . $_FILES["file"]["error"] . "<br>";
                } else {
                    $folderpath = "./messageuploads/";
                    mkdir($folderpath, 0777);
                    "Upload: " . $_FILES["file"]["name"] . "<br>";
                    "Type: " . $_FILES["file"]["type"] . "<br>";
                    "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                    "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
                    if (file_exists("$folderpath" . $_FILES["file"]["name"])) {
                        $_FILES["file"]["name"] . " already exists. ";
                    } else {
                        move_uploaded_file($_FILES["file"]["tmp_name"], "$folderpath" . $_FILES["file"]["name"]);
                        "Stored in: " . "$folderpath" . $_FILES["file"]["name"];
                    }
                }
            } else {
                echo "Invalid file";
            }
        }
        if ($sendto == 'translator') {
            $this->feedback_model->message_totranslator($message, $pjtfile);
        }
        if ($sendto == 'tasat') {
            $this->feedback_model->message_totasat($message, $pjtfile);
        }
        if ($sendto == 'client') {
            $this->feedback_model->message_toclient($message, $pjtfile);
        }
        redirect(WEB_URL . 'dashboard');
    }

    function replyMessage() {
        $reply = $_POST['reply'];
        $msgid = $_POST['msgid'];
        echo $pid=$_POST['pid'];
       echo $tid=$_POST['tid'];
      echo  $cid=$_POST['cid'];
        $this->feedback_model->replyMessage($reply,$msgid,$pid,$tid,$cid);
        //redirect(WEB_URL . 'cmessages/sent');
    }

    function Archive() {
        //start
         $this->user_model->loginCheck();
        $data['cmactive'] = "active";
        $data['pagetitle'] = "Archive Messages";
         if(isset($_REQUEST['msgid'])){
         $msgid = $_REQUEST['msgid'];
        }
        $data['archive']=$this->feedback_model->archiveMessage($msgid);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/messages/archive');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function clisuggestions() {
// Search term from jQuery
        $term = $this->input->post('term', TRUE);
        //$rows = $this->feedback_model->Autocompletemessage(array('keyword' => $term));
        $json_array = array();
        foreach ($rows as $row)
            array_push($json_array, $row->cl_first_name);
        echo json_encode($json_array);
    }

//    function transsuggestions() {
//        echo $id = $this->session->userdata('login_user_id');
////        $data = $this->feedback_model->it($id);
////        $this->output->set_content_type('application/json')->set_output(json_encode($data));
//        //$type = $this->session->userdata('login_user_type');
//        $term = $this->input->post('term', TRUE);
//        $rows = $this->feedback_model->Autocompletetrans(array('keyword' => $term), $id);
//
////        $json_array = array();
////        foreach ($rows as $row)
////            $a = $row->it_first_name . ' ' . $row->it_last_name;
////        array_push($json_array, $a);
////        echo json_encode($json_array);
//    }
    function transsuggestions(){
        
        $pid=$_POST['pid'];
          $t = $this->feedback_model->Autocompletetrans($pid);
          
          print_r($t[0]);
          print_r($t[1]);
          $a="";
          foreach ($t as $details) {
      
                $a.=' <option value='.$details[0].'> '.$details[1].'</option> ';
       
           }
          // $a.=' <input type=hidden value='.$details['user_id_fk'].'/> ';
          echo $a;
          
    }
            
    function prosuggestions() {

         $t = $this->feedback_model->prosuggestions();
         $pjt="";
         foreach($t as $details){
             $pjt.=' <option value='.$details['pro_id_pk'].'> '.$details['pro_name'].'</option> ';
         }
       echo $pjt;
    }

//end of HOME Controller	
}

?>