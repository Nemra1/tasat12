<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tmessages extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        redirect(WEB_URL . 'Tmessages/Inbox');
        //end	
    }

 function translatorInbox() {
        //start
      $this->user_model->loginCheck();
        $data['cmactive'] = "active";
        $data['pagetitle'] = "Inbox";
        $data['inbox'] = $this->feedback_model->inboxMessage();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/messages/inbox');
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
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/messages/sent');
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
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/messages/trash');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Archive() {
        //start
         $this->user_model->loginCheck();
        $data['cmactive'] = "active";
        $data['pagetitle'] = "Archive Messages";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/messages/archive');
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
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/messages/message');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function sendMessage() {
        //start
         $this->user_model->loginCheck();
        $data['cmactive'] = "active";
        $data['pagetitle'] = "Message";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
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

//end of HOME Controller	
}

?>