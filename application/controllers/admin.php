<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        //start

        $data['admindashactive'] = "active";
        $data['pagetitle'] = "My Dashboard";
        $data['all'] = $this->admin_model->all_project_count();
        $data['list'] = $this->admin_model->projectList();
        $data['client'] = $this->admin_model->newClientlist();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/admindashboard');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');

        //end	
    }

    function showUsers() {
        //start
//$this->admin_model->loginCheck();
        $data['adminuseractive'] = "active";
        $data['pagetitle'] = "Users";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/user/users');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end
    }

    function userProfile() {
        //start
        // $this->admin_model->loginCheck();
        $data['active'] = "active";
        $data['pagetitle'] = "UserProfile";
        $cid = " ";
        if (isset($_POST['cid'])) {
           echo $cid = $_POST['cid'];
            
        }
      $data['user'] = $this->admin_model->getClient($cid);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/user/userprofile');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');

        //end   
    }

    function userDetails() {
        //start
        //    $this->admin_model->loginCheck();
        $data['active'] = "active";
        $data['pagetitle'] = "UserDetails";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/user/userdetails');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');

        //end    
    }

    function clientApproval() {
        $cid = " ";
        if (isset($_POST['cid'])) {
            $cid = $_POST['cid'];
        }
        $data['client'] = $this->admin_model->clientApproval($cid);
        $this->load->view('admin/approveprofile', $data);
    }
    function clientReject(){
             $cid = " ";
        if (isset($_POST['cid'])) {
            $cid = $_POST['cid'];
        }
        $data['client'] = $this->admin_model->clientReject($cid);
        $this->load->view('admin/approveprofile', $data);   
    }
    
    
      function showProjects() {
        //start
        // $this->admin_model->loginCheck();
        $status = " ";
        if (isset($_REQUEST['status'])) {
            $status = $_REQUEST['status'];
        }
        $data['status'] = $this->admin_model->projectbystatus($status);
        $data['adminprojactive'] = "active";
        $data['pagetitle'] = "Projects";
        $data['all'] = $this->admin_model->all_project_count();
        $data['new'] = $this->admin_model->new_project_count();
        $data['ongoing'] = $this->admin_model->ongoing_project_count();
        $data['completed'] = $this->admin_model->completed_project_count();
        $data['cancel'] = $this->admin_model->cancel_project_count();
        $data['ptype'] = $this->admin_model->protypeList();

        if (!empty($status)) {
            $data['list'] = $this->admin_model->projectbystatus($status);
        } else {
            $data['list'] = $this->admin_model->projectList();
        }

        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/projects/projectdetails');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');

        //end
    }

    function changeType() {
        //   $this->admin_model->loginCheck();
        $protype = "";
        if (isset($_POST['pval'])) {
            $protype = $_POST['pval'];
        }
        if (!empty($protype)) {
            $ptype = $this->admin_model->projectType($protype);
        }
        $sample = "";
        foreach ($ptype as $prodetails) {

            $sample.='<td>' . $prodetails['pro_name'] . '</td>';

            $sample.='<td>' . $prodetails['pro_type'] . '</td>';
            $sample.='<td>' . $prodetails['pro_budget_max'] . '</td>';
            $sample.='<td>' . $prodetails['pro_bidclose'] . '</td>';
            $sample.='<td>' . $prodetails['pro_duration'] . '</td>';
            $sample.='<td>' . '1' . '</td>';
        }
        echo $sample;
    }

//    
//function prostatus(){
//    
//}
    function trackProject() {
        //  $this->admin_model->loginCheck();
        $id = "";
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }
        $data['client'] = $this->admin_model->getClientname($id);
        $data['trans'] = $this->admin_model->getTranslator($id);
        $data['adminprojsactive'] = "active";
        $data['pagetitle'] = "Projects";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('project/trackaproject_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
    }

    function verifyProject() {
        //start
//$this->admin_model->loginCheck();
        $id = "";
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }

        $data['adminprojsactive'] = "active";
        $data['pagetitle'] = "Projects";
        $data['details'] = $this->admin_model->viewProject($id);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        //$this->load->view('admin/quicklins_view');
        $this->load->view('admin/projects/projectview');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');

        //end
    }

    function approveProject() {
        //$this->admin_model->loginCheck();
        $pid = "";
        if (isset($_REQUEST['pid'])) {
            $pid = $_REQUEST['pid'];
            $this->admin_model->approveProject($pid);
            $this->showProjects();
        }
    }

    function billing() {
        //start
        //$this->admin_model->loginCheck();
        $data['adminbillactive'] = "active";
        $data['pagetitle'] = "Transactions";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/billing/billing');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function invoiceCreated() {
//$this->admin_model->loginCheck();
        $data['factive'] = "active";
        $data['pagetitle'] = "Finance - Invoice Created";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/billing/successfullinvoice');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
    }

    function payVoucherlist() {
        //start
        // $this->admin_model->loginCheck();
        $data['adminbillactive'] = "active";
        $data['pagetitle'] = "Payment Voucher List";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/billing/payvoucherlist');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function viewPayVoucher() {
        //start
        //$this->admin_model->loginCheck();
        $data['adminbillactive'] = "active";
        $data['pagetitle'] = "Payment Voucher";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/billing/payvoucher');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function receiptVoucherlist() {
        //start
        //  $this->admin_model->loginCheck();
        $data['adminbillactive'] = "active";
        $data['pagetitle'] = "Receipt Voucher List";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/billing/receiptlist');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function successPayment() {
        //start
        // $this->admin_model->loginCheck();
        $data['factive'] = "active";
        $data['pagetitle'] = "Finance - Successfull Payment ";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/billing/thankpayment');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function cancelPayment() {
        //start
        // $this->admin_model->loginCheck();
        $data['factive'] = "active";
        $data['pagetitle'] = "Finance - Cancel Payment ";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/billing/cancelpayment');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function cancelledPayment() {
        //start
        // $this->admin_model->loginCheck();
        $data['factive'] = "active";
        $data['pagetitle'] = "Finance - Cancelled Payment ";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/billing/cancelled_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function dispute() {
        //start
        // $this->admin_model->loginCheck();
        $data['admindisactive'] = "active";
        $data['pagetitle'] = "Disputes";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/disputes/disputes');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function feedback() {
        //start
        //    $this->admin_model->loginCheck();
        $data['adminfdactive'] = "active";
        $data['pagetitle'] = "Feedback";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/feedback/feedback');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function myFeedbacks() {
        //start
        //  $this->admin_model->loginCheck();
        $data['adminfdactive'] = "active";
        $data['pagetitle'] = "Feedback";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/feedback/myfeedbacks');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function Feedback_Given() {
        //start
        //   $this->admin_model->loginCheck();
        $data['adminfdactive'] = "active";
        $data['pagetitle'] = "Feedbacks - Feedback Given";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/feedback/given_feedback');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function inboxMessage() {
        //start
        // $this->admin_model->loginCheck();
        $data['adminmsgactive'] = "active";
        $data['pagetitle'] = "Inbox";
        
        $data['inboxdata']=  $this->admin_model->getallinboxdataadmin();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/messages/inbox', $data);
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function sentMessage() {
        //start
        //  $this->admin_model->loginCheck();
        $data['sent'] = $this->admin_model->sentMessages();
        $data['adminmsgactive'] = "active";
        $data['pagetitle'] = "Sent";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/messages/sent');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function archiveMessage() {
        //start
        //   $this->admin_model->loginCheck();
        $data['adminmsgactive'] = "active";
        $data['pagetitle'] = "Archive";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/messages/archive');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');


        //end
    }

    function Message() {
        //start  msg_id+".."+name+".."+date+".."+text+".."+pro_id
     //$this->admin_model->loginCheck();
     $msgid='';
         if (isset($_POST['msg_id'])) {
            $data['msgid'] = $_POST['msg_id'];
        }
         if (isset($_POST['name'])) {
            $data['name1'] = $_POST['name'];
        }
         if (isset($_POST['date'])) {
            $data['date'] = $_POST['date'];
        }
         if (isset($_POST['text'])) {
            $data['text'] = $_POST['text'];
        }
         if (isset($_POST['pro_id'])) {
            $data['pro_id'] = $_POST['pro_id'];
        }
         if (isset($_POST['pro_name'])) {
            $data['pro_name'] = $_POST['pro_name'];
        }
//         if (isset($_POST['pro_id_pk'])) {
//            $data['pro_id'] = $_POST['pro_id_pk'];
//        }
         if (isset($_POST['user_id'])) {
            $data['user_id'] = $_POST['user_id'];
        }
        $pro_id=$data['pro_id'];
        $user_id=$data['user_id'];
        $msg_id=$data['msgid'];
      //  echo $msgid."..".$name."..".$date."..".$text."..".$pro_id;exit;
        
        $data['inboxdata']=  $this->admin_model->previousListmsg($pro_id,$user_id,$msg_id);
        $this->load->view('admin/messages/message',$data);
        
        //end
    }

    
     function replyMessage() {
         $replydata=array();
       $reply = $_POST['reply'];
        //$msgid = $_POST['msgid'];
       $pro_id=$_POST['pid'];
       $user_id=$_POST['uid'];
      //echo  $cid=$_POST['cid'];
        $msg_id=$this->admin_model->replyMessage($reply,$pro_id,$user_id);
        //echo $msg_id;exit;
        $data['inboxdata']=  $this->admin_model->previousListmsg($pro_id,$user_id,$msg_id);//old messages
        //print_r($data);exit;
        $replydata=$this->admin_model->prevconvafterreply($pro_id,$user_id,$msg_id);
        //print_r($replydata);exit;
        foreach($replydata as $replyd){
            if($replyd['user_type']==1){ 
                $data['name1']=$replyd['cl_first_name']." ".$replyd['cl_last_name'];
                $data['user_id'] = $replyd['msg_client_id'];
            }else if($replyd['user_type']==2){
                $data['name1']=$replyd['it_first_name']." ".$replyd['it_last_name']; 
                $data['user_id'] = $replyd['msg_translator_id'];
            }else if($replyd['user_type']==3){
                $data['name1']=$replyd['tc_first_name'];
                $data['user_id'] = $replyd['msg_translator_id'];
            }
        $data['msgid']=$replyd['msg_id'];
        $data['date']=$replyd['msg_date'];
        $data['text']=$replyd['msg_text'];
        $data['pro_id']=$replyd['msg_project_id'];
        $data['pro_name']=$replyd['pro_name'];
        }
        $this->load->view('admin/messages/message',$data);
        //redirect(WEB_URL . 'cmessages/sent');
    }
    
    function sendMessage() {
        //start
        //   $this->admin_model->loginCheck();
        $data['adminmsgactive'] = "active";
        $data['pagetitle'] = "Message";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('messages/tasatsendmessage');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end
    }

    function clientuserlist() {
        //  $this->admin_model->loginCheck();
        $cli = $this->admin_model->clientuserlist();
        $client = "<select id='useradmin' name='user' onChange='test(this.value);'>";
        $client.='<option value="0">' . 'select' . ' </option>';
        foreach ($cli as $details) {
            $client.=' <option value=' . $details['user_id_fk'] . '> ' . $details['cl_first_name'] . ' ' . $details['cl_last_name'] . '</option> ';
        }
        $client .= '</select>';
        echo $client;
    }

    function transuserlist() {
        //  $this->admin_model->loginCheck();
        $t = $this->admin_model->transuserlist();

        $trans = "<select id='transad' name='user' onChange='test(this.value);'>";
        $trans.='<option vlaue="0">' . 'select' . ' </option>';
        foreach ($t as $details) {

            $trans.=' <option value=' . $details['user_id_fk'] . '> ' . $details['it_first_name'] . ' ' . $details['it_last_name'] . '</option> ';
        }
        $trans.='</select>';
        echo $trans;
    }

    function projectLists() {
        // $this->admin_model->loginCheck();
        $uid = " ";
        if (isset($_POST['uid'])) {
            $uid = $_POST['uid'];
        }
        $project = $this->admin_model->msgprolist($uid);
        $pjt = "<select id='selectpro' name='pro'>";
        $pjt.='<option>' . 'select' . ' </option>';
        foreach ($project as $details) {
            $pjt.='<option value=' . $details['pro_id_pk'] . '> ' . $details['pro_name'] . '</option>';
        }
        $pjt.="</select>";
        echo $pjt;
    }

    function saveMessage() {
        //   $this->admin_model->loginCheck();
        $user = $_POST['user'];
        $pjt = $_POST['pro'];
        $message = $_POST['message'];
        $msgfile = "";
        $id= $this->admin_model->getid();
        if (isset($_FILES['msgfile']['name'])) {
            $msgfile = $_FILES['msgfile']['name'];
        }
        if ($msgfile != "") {
            $allowedExts = array("doc", "txt", "docx", "pdf");
            $temp = explode(".", $_FILES["msgfile"]["name"]);
            $extension = end($temp);
            if ((($_FILES["msgfile"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($_FILES["msgfile"]["type"] == "application/pdf") || ($_FILES["msgfile"]["type"] == "application/msword") || ($_FILES["msgfile"]["type"] == "text/plain")) && ($_FILES["msgfile"]["size"] < 2097152) && in_array($extension, $allowedExts)) {
                if ($_FILES["msgfile"]["error"] > 0) {
                    echo "Return Code: " . $_FILES["msgfile"]["error"] . "<br>";
                } else {
                    $folderpath = "./messageuploads/$id/";
                    mkdir($folderpath, 0777);

                    "Upload: " . $_FILES["msgfile"]["name"] . "<br>";
                    "Type: " . $_FILES["msgfile"]["type"] . "<br>";
                    "Size: " . ($_FILES["msgfile"]["size"] / 1024) . " kB<br>";
                    "Temp file: " . $_FILES["msgfile"]["tmp_name"] . "<br>";

                    if (file_exists("$folderpath" . $_FILES["msgfile"]["name"])) {
                        $_FILES["msgfile"]["name"] . " already exists. ";
                    } else {
                        move_uploaded_file($_FILES["msgfile"]["tmp_name"], "$folderpath" . $_FILES["msgfile"]["name"]);
                        "Stored in: " . "$folderpath" . $_FILES["msgfile"]["name"];
                    }
                }
            } else {
                echo "Invalid file";
            }
        }

        $this->admin_model->saveclientMessage($user, $pjt, $message, $msgfile);
        $this->sentMessage();
    }

    function crm() {
        //  $this->admin_model->loginCheck();
        //start
        $data['admincrmactive'] = "active";
        $data['pagetitle'] = "MIS";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/crm/crm');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end
    }

    function reminder() {
        //start
        //   $this->admin_model->loginCheck();
        $data['admindashactive'] = "active";
        $data['pagetitle'] = "MIS";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/reminders');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end
    }

    function settings() {
        //start
        //  $this->admin_model->loginCheck();
        $data['adminaccactive'] = "active";
        $data['pagetitle'] = "Settings";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/settings_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end
    }

    function changePassword() {
        //start
        //   $this->admin_model->loginCheck();
        $data['adminaccactive'] = "active";
        $data['pagetitle'] = "Change Password";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/changepswd');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end
    }

    function createuser_view() {
        //start
        //  $this->admin_model->loginCheck();
        $data['adminaccactive'] = "active";
        $data['pagetitle'] = "Admin - CreateUser";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/createuser_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function edituser_view() {
        //start
        //$this->admin_model->loginCheck();
        $data['adminaccactive'] = "active";
        $data['pagetitle'] = "Admin - EditUser";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/edituser_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function mis() {
        //start
        // $this->admin_model->loginCheck();
        $data['adminaccactive'] = "active";
        $data['pagetitle'] = "Admin - Management Information System";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/mis/mis');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	  
    }

    function mis_details() {
        //start
        // $this->admin_model->loginCheck();
        $data['adminaccactive'] = "active";
        $data['pagetitle'] = "Admin - Management Information System";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('admin/admin_usermenu_view');
        $this->load->view('admin/quicklins_view');
        $this->load->view('admin/mis/misclient_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	  
    }

    function sendMail() {
        $cid = "";
        if (isset($_POST['cid'])) {
            $cid = $_POST['cid'];
            echo $cid;
//            $em=$this->admin_model->getClient($cid);
//echo $em;
//            $this->email->from('no-reply@tasat.com', 'TASAT');
//            $this->email->to($em);
//            $this->email->reply_to('blessy@mangium.com');
//            $this->email->subject('Message from TASAT.');
//            $msg = '<html><body><table>';
//            $msg = '<table><tr><td><img src="' . IMG_PATH . 'images/logo.jpg"' . '></td></tr>';
//            $msg.='<tr><td> </td></tr>';
//            $msg.='<tr><td>Thank You for connecting with TASAT, a Platform for Multilingual Translations.</td></tr>';
//            $msg.='<tr><td>Thanks,</td></tr>';
//            $msg.='<tr><td><B>TASAT Support<b/></td></tr>';
//            $msg.='</table></body></html>';
//            $this->email->message($msg);
//            if ($this->email->send()) {
//                //echo 'Your email was sent.';
//                redirect(WEB_URL . 'admin');
//            }
//         else {
//            show_error($this->email->print_debugger());
//        }
        }
    }
////////////////*** AUTOCOMPLETE MESSAGES*************/////////
    
    function transsuggestions() {
       // echo $id = $this->session->userdata('login_user_id');
          $term = $this->input->post('term', TRUE);
        $data = $this->admin_model->admintrans(array('keyword' => $term));
        //print_r($data);exit;
//       $this->output->set_content_type('application/json')->set_output(json_encode($data));
        $json_array = array();
     
    foreach ($data as $row)
        if($row['user_type']==2){
            //array_push($json_array, $row['it_first_name'].' '.$row['it_last_name'], $row['user_id_fk']);
            array_push($json_array,array('label'=>$row['it_first_name'],'value'=>$row['user_id_fk']));
        }else if($row['user_type']==3)
        {
            array_push($json_array,array('label'=>$row['tc_first_name'],'value'=>$row['user_id_fk']));
            //array_push($json_array, $row['tc_first_name']);            
        }
        
echo(json_encode($json_array));
        
      //  return $json_array;
}
 
}

//end of the controller
/* location:application/controllers/admin.php */
?>