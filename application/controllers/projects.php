<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); //controller for the CLIENT

class Projects extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('project_model');
    }

    function index() {
        //start
        redirect(WEB_URL . 'projects/Add_Project');
        //end	
    }

    function Add_project() {
        //start
        /* load js start here */
        $this->user_model->loginCheck();
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Add Project";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/addprojects_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function insertProjectdetail() {
        $this->user_model->loginCheck();
        // $this->output->enable_profiler(TRUE);
        $protype = $_POST['proj_type'];
        $pid=$this->project_model->getProjectid();
      
        if($pid==NULL){
            $file_pid=1;
        }
        else{
        $file_pid= $pid+1;
        }
        if ($_POST['proj_type'] == 'Written') {
            $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
            $this->form_validation->set_rules('projname', 'Name', 'trim|required');
            $this->form_validation->set_rules('prodomain', 'Domain', 'callback_lang_checkpjt');
            $this->form_validation->set_rules('lang_from', 'language', 'callback_lang_checkpjt');
            $this->form_validation->set_rules('lang_to', 'language', 'callback_lang_checkpjt');
            $this->form_validation->set_rules('prodesc', 'Description', 'trim|required|min_length[3]|max_length[150]');
            $this->form_validation->set_rules('proj_bidclose', 'completion', 'trim|required');
            $this->form_validation->set_rules('proj_complete', 'Expected completion date', 'required');
            $this->form_validation->set_rules('proj_budget2', 'min and max budget', 'numeric|required');
            //$this->form_validation->set_rules('file', 'file', 'trim|required');
            if ($this->form_validation->run() === FALSE) {
                $this->Add_project();
            } else {
                
                $protype = $_POST['proj_type'];
                $proname = $_POST['projname'];
                $prodesc = $_POST['prodesc'];
                $lang_from = $_POST['lang_from'];
                $lang_to = $_POST['lang_to'];
                $my_dropdown = $_POST['prodomain'];
                $proj_bidclose = $_POST['proj_bidclose'];
                $proj_complete = $_POST['proj_complete'];
                $proj_budget1 = $_POST['proj_budget1'];
                $proj_budget2 = $_POST['proj_budget2'];
                $onweb = $_POST['proj_showsite'];
               $pjtfile = $_FILES['file']['name'];
                if ($pjtfile != "") {
                    $allowedExts = array("doc", "txt", "docx", "pdf");
                    $temp = explode(".", $_FILES["file"]["name"]);
                    $extension = end($temp);
                    if ((($_FILES["file"]["type"] == "application/application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "text/plain")) && ($_FILES["file"]["size"] < 2097152) && in_array($extension, $allowedExts)) {
                        if ($_FILES["file"]["error"] > 0) {
                           "Return Code: " . $_FILES["file"]["error"] . "<br>";
                        } else {
                            $folderpath = "./projectuploads/$file_pid/";
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
                $this->project_model->insertprojectData($protype, $proname, $prodesc, $lang_from, $lang_to, $my_dropdown, $proj_bidclose, $proj_complete, $proj_budget1, $proj_budget2, $onweb, $pjtfile);
                //redirect(WEB_URL . 'dashboard');
                //}
            }
        } else {

//                  
//            $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
//            $this->form_validation->set_rules('projname1', 'Name', 'trim|required');
//            $this->form_validation->set_rules('prodomain1', 'Domain', 'callback_lang_check');
//            $this->form_validation->set_rules('projlang_from1', 'language', 'callback_lang_check');
//            $this->form_validation->set_rules('projlang_to1', 'language', 'callback_lang_check');
//            $this->form_validation->set_rules('prodesc1', 'Description', 'trim|required|min_length[10]|max_length[150]');
//            $this->form_validation->set_rules('proj_bidclose1', 'completion', 'trim|required');
//            $this->form_validation->set_rules('service', 'service', 'required');
////        $this->form_validation->set_rules('proj_budget_1', 'min budget', 'numeric|required');
//            $this->form_validation->set_rules('proj_budget_02', 'min and max budget', 'numeric|required');
//            $this->form_validation->set_rules('file1', 'file', 'trim|required');
//            if ($this->form_validation->run() === FALSE) {
//               $this->Add_project();
//            } 
//           else {
            // insert data into db

            $protype = $_POST['proj_type'];
            $proname = $_POST['projname1'];
            $prodesc = $_POST['prodesc1'];
            $lang_from = $_POST['projlang_from1'];
            $lang_to = $_POST['projlang_to1'];
            $timeevent=$_POST['projevent'];
            $t=$_POST[am];
            $time=$timeevent.''.$t;
            $duration=$_POST['duration1'];
            $domain = $_POST['prodomain1'];
            $service=$_POST['service'];
            $proj_bidclose = $_POST['proj_bidclose1'];
            $proj_budget1 = $_POST['proj_budget_01'];
            $proj_budget2 = $_POST['proj_budget_02'];
            $onweb = $_POST['proj_showsite'];
            $showinterpreter = $_POST['proj_showinterpreter1'];
            $pjtfile = $_FILES['file1']['name'];
            if ($pjtfile != "") {
                $allowedExts = array("doc", "txt", "docx", "pdf");
                $temp = explode(".", $_FILES["file1"]["name"]);
                $extension = end($temp);
                if ((($_FILES["file1"]["type"] == "application/application/vnd.openxmlformats-officedocument.wordprocessingml.document") || ($_FILES["file1"]["type"] == "application/pdf") || ($_FILES["file1"]["type"] == "application/msword") || ($_FILES["file1"]["type"] == "text/plain")) && ($_FILES["file1"]["size"] < 2097152) && in_array($extension, $allowedExts)) {
                    if ($_FILES["file1"]["error"] > 0) {
                        echo "Return Code: " . $_FILES["file1"]["error"] . "<br>";
                    } else {
                        $folderpath = "./projectuploads/$file_pid/";
                        mkdir($folderpath, 0777);

                        "Upload: " . $_FILES["file1"]["name"] . "<br>";
                        "Type: " . $_FILES["file1"]["type"] . "<br>";
                         "Size: " . ($_FILES["file1"]["size"] / 1024) . " kB<br>";
                         "Temp file: " . $_FILES["file1"]["tmp_name"] . "<br>";

                        if (file_exists("$folderpath" . $_FILES["file1"]["name"])) {
                          $_FILES["file1"]["name"] . " already exists. ";
                        } else {
                            move_uploaded_file($_FILES["file1"]["tmp_name"], "$folderpath" . $_FILES["file1"]["name"]);
                            "Stored in: " . "$folderpath" . $_FILES["file1"]["name"];
                        }
                    }
                } else {
                    echo "Invalid file";
                }
            }
            $this->project_model->insertProject($protype, $proname, $prodesc, $lang_from, $lang_to, $domain, $proj_bidclose, $proj_budget1, $proj_budget2,$service,$time,$duration, $showinterpreter, $onweb, $pjtfile);
           redirect(WEB_URL . 'dashboard');
            // }
        }
    }

    function lang_check($str) {
        $this->user_model->loginCheck();
        //$from = $_POST['projlang_from'];
        //$to = $_POST['projlang_to'];
        //If the selection equals "Select" that means it equals 0(which is the "hidden" value of it)
        if ($str == "0") {
            $this->form_validation->set_message('lang_check', 'Please select the value.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function lang_checkpjt($str) {
        $this->user_model->loginCheck();

        if ($str == "select") {
            $this->form_validation->set_message('lang_checkpjt', 'Please select the value.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function Edit_project() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Edit Projects";
        $id = $_REQUEST['id'];
        $data['edit'] = $this->project_model->vieweditProject($id);
        $data['filename']=  $this->project_model->getFiles($id);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/editprojects_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function saveEdit() {
        $this->user_model->loginCheck();
        $id = $_POST['id'];
        $prodesc = $_POST['prodesc'];
        $lang_from = $_POST['projlang_from'];
        $lang_to = $_POST['projlang_to'];
        $my_dropdown = $_POST['domain'];
        $proj_bidclose = $_POST['proj_bidclose'];
        $proj_complete = $_POST['proj_complete'];
        $proj_budget1 = $_POST['proj_budgetmin'];
        $proj_budget2 = $_POST['proj_budgetmax'];
        $timeevent=$_POST['projevent'];
        
       // $t=$_POST['am'];
        $time=$timeevent;//.''.$t;
        $onweb = $_POST['proj_showsite'];
        $fileupload=$_POST['filenw'];
        $this->project_model->updateData($id, $prodesc, $lang_from, $lang_to, $my_dropdown, $proj_bidclose, $proj_complete,$time, $proj_budget1, $proj_budget2, $onweb,$fileupload);
        redirect(WEB_URL . 'projects/New_projects');
    }
    function deleteFile(){
        if (isset($_REQUEST['pid'])) {
            $id = $_REQUEST['pid'];
            $this->project_model->deleteFile($id);
        } 
        
    }
            function trackProject() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Track Project";
        $id = "";
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }
        $data['clientdetails'] = $this->project_model->trackProject($id);
        $data['translator'] = $this->project_model->transProject($id);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('project/trackaproject_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function New_projects() {
        $this->user_model->loginCheck();
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - New Projects";
        $data['newproject'] = $this->project_model->showNewproject();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/newprojects');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Onhold_projects() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - On Hold Projects";
        $data['onhold'] = $this->project_model->showonholdProject();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/onholdprojects');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Current_projects() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Current Projects";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/currentprojects');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Ongoing_projects() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - On Going Projects";
        $data['ongoing'] = $this->project_model->showOngoingproject();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/ongoingprojects');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

   function changeStatus(){
        $this->user_model->loginCheck();
        $status = "";
        $id="";
        if (isset($_POST['status'])) {
         $status = $_POST['status'];
        }
            if (isset($_POST['pid'])) {
         $id = $_POST['pid'];
        }
       $this->project_model->changeStatus($status,$id);
       $this->allprojects();
    }

    function completedprojects() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Completed Projects ";
        $data['completed'] = $this->project_model->showcompletedproject();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/comp-projects');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function allprojects() {
        $this->user_model->loginCheck();
        $offsetval = 0;
        if ($this->uri->segment(3) != '') {
            $offsetval = $this->uri->segment(3);
        }
        $data['base'] = WEB_URL;
        $per_pg = 5;
        $offset = $offsetval;
        $config['base_url'] = $data['base'] . '/projects/allprojects';
        $config['per_page'] = $per_pg;
        $config['total_rows'] = $this->project_model->projectCount();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - All Projects ";
        $data['all'] = $this->project_model->showAllproject($offset, $per_pg);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/allprojects');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function cancelledprojects() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Cancelled Projects ";
        $data['cancelled'] = $this->project_model->showcancelledproject();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/cancelledprojects');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Bidded_projects() {
        $this->user_model->loginCheck();
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Bidded Projects";
        $userid = $this->session->userdata('login_user_id');
        $type = $this->session->userdata('login_user_type');
        $data['bidded'] = $this->project_model->myBids($userid, $type);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/biddedprojects');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function bidderdetails() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Bidder Details ";

        $ab = base_url();
        $imgurl = $ab . 'images/viewprofile.png';
        $genurl = $ab . 'index.php/projects/bidder_proposal';
        $id = $_REQUEST['id'];
        $bidderlist = $this->project_model->showBiddetails($id);

        $data['a'] = '<table>';
        $data['a'].='<tr><th>Translator Name</th>
                      <th>Location</th>
                      <th>Translator Rating</th>
                      <th>Gender</th>
                      <th>Bid Amount</th>
                      <th>Action</th>
                </tr>';
        foreach ($bidderlist as $details) {

            $data['a'].='<tr><td>' . $details['it_first_name'] . '</td>
                        <td>' . $details['it_country'] . '</td>
                        <td>' . '***' . '</td>
                        <td>' . $details['bid_amount'] . '</td> 
                        <td>' . $details['bid_amount'] . '</td>
                        <td><a href="' . $genurl . '?id=' . $details['project_id_fk'] . '&uid='.$details['user_id_fk'] .'"><img src="' . $imgurl . '"/></a></td>
                        </tr>';
        }
        $data['a'].='</table>';

        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/bidderdetails');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        // end	
    }

    function bidder_proposal() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Bidder's Proposal ";
        $pid = $_REQUEST['id'];
        $uid=$_REQUEST['uid'];
        
        $data['bidderlist'] = $this->project_model->showBidder($pid,$uid);
        $data['expertise'] = $this->project_model->getExpertise($pid,$uid);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/bidder_proposal');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function tasatactivity() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - TASAT Activity ";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/tasatactivity');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function confirm() {
        $this->user_model->loginCheck();
        //start
    
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Translator Hired";
        $uid="";
        $pid="";
        if(isset($_REQUEST['ui'])){
           $uid=$_REQUEST['ui'];
        }
        if(isset($_REQUEST['pi'])){
           $pid=$_REQUEST['pi'];   
        }
        $this->project_model->confirmTranslator($uid,$pid);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/conformation');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function browseProjects() {
       // $this->user_model->loginCheck();
        $domain = "";
        if (isset($_REQUEST['domainvalue'])) {
            $domain = $_REQUEST['domainvalue'];
        }

        $offsetval = 0;
        if ($this->uri->segment(3) != '') {
            $offsetval = $this->uri->segment(3);
        }
        $data['base'] = WEB_URL;
        $per_pg = 5;
        $offset = $offsetval;
        $config['base_url'] = $data['base'] . '/projects/browseProjects';
        $config['per_page'] = $per_pg;
        $config['total_rows'] = $this->project_model->projectCount();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - All Projects ";
        $data['browse'] = $this->project_model->browseProject($domain, $offset, $per_pg);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('project/projectlist');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
//    
    }

    function browseBylang() {
        $this->user_model->loginCheck();
        $from = "";
        $to = "";
        if (isset($_POST['ip_val1']) && isset($_POST['ip_val2'])) {
            $from = $_POST['ip_val1'];
            $to = $_POST['ip_val2'];
        }
        $offsetval = 0;
        if ($this->uri->segment(3) != '') {
            $offsetval = $this->uri->segment(3);
        }
        $data['base'] = WEB_URL;
        $per_pg = 5;
        $offset = $offsetval;
        $config['base_url'] = $data['base'] . '/projects/browseBylang';
        $config['per_page'] = $per_pg;
        $config['total_rows'] = $this->project_model->projectCount();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $browse = $this->project_model->browsebylang($from, $to);
        $sample = '<table>';
        $sample.='<tr><th>Project Name</th>
            <th>Project Type</th>
            <th>Project Domain</th>
            <th>Skills</th>
            <th>Avg Bid</th>
            <th>Started On</th>
            <th>Budget</th></tr>';
        foreach ($browse as $details) {

            $sample.='<tr><td>' . $details['pro_name'] . '</td>
                <td>' . $details['pro_type'] . '</td>
                <td>' . $details['pro_domain'] . '</td>
                <td>' . $details['pro_langfrom'] . '</td>
                <td>' . $details['bid_amount'] . '</td> 
                <td>' . $details['pro_bidclose'] . '</td>
                <td>' . $details['pro_budget_max'] . '</td></tr>';
        }
        $sample.='</table>';
        echo $sample;
    }

    function browseLocation() {
        $this->user_model->loginCheck();
        $location = "";
        if (isset($_POST['location'])) {
            $location = $_POST['location'];
        }
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - All Projects ";
        $data['browse'] = $this->project_model->browseLocation($location);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('project/projectlist');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
    }

    function browseByprice() {
        $this->user_model->loginCheck();
        $price = "";
        if (isset($_POST['price'])) {
            $price = $_POST['price'];
        }
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - All Projects ";
        $browse = $this->project_model->browseByprice($price);
        $sample = '<table>';
        $sample.='<tr><th>Project Name</th>
            <th>Project Type</th>
            <th>Project Domain</th>
            <th>Skills</th>
            <th>Avg Bid</th>
            <th>Started On</th>
            <th>Budget</th></tr>';
        foreach ($browse as $details) {

            $sample.='<tr><td>' . $details['pro_name'] . '</td>
                <td>' . $details['pro_type'] . '</td>
                <td>' . $details['pro_domain'] . '</td>
                <td>' . $details['pro_langfrom'] . '</td>
                <td>' . $details['bid_amount'] . '</td>
                <td>' . $details['pro_bidclose'] . '</td>
                <td>' . $details['pro_budget_max'] . '</td></tr>';
        }
        $sample.='</table>';
        echo $sample;
    }

    function findProject() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Find Project";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('project/projectlist2');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function findProjects() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Find Projects";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('iproject/projectlist2');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function projectView() {
       
        $id = "";
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }
        $data['avge'] = $this->project_model->avgBid($id);
        $data['details'] = $this->project_model->viewProject($id);
        $data['bidder']=$this->project_model->viewBidder($id);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('project/projectview');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
    }

    function projectView1() {
        $this->user_model->loginCheck();
        $id = $_REQUEST['id'];
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - View Project";
        $data['details'] = $this->project_model->viewProject($id);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('project/projectview1');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
    }

    function projectView2() { //start
        $this->user_model->loginCheck();
    $id = "";
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
        }
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - New Project Detail";
        $data['details'] = $this->project_model->viewNewproject($id);
        $data['filename']=$this->project_model->getFiles($id);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('project/projectview2');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
    }

    function shortlistmsg() {
        $this->user_model->loginCheck();
        //start
        $uid="";
        $pid="";
        if(isset($_REQUEST['ui'])){
           $uid=$_REQUEST['ui'];
        }
        if(isset($_REQUEST['pi'])){
           $pid=$_REQUEST['pi'];   
        }
        $this->project_model->shortlist($uid,$pid);
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Translator shortlisted";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/translator/shortlistmsg');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end 
    }

    function ignoredmsg() {
        $this->user_model->loginCheck();
        //start
          $uid="";
        $pid="";
        if(isset($_REQUEST['ui'])){
           $uid=$_REQUEST['ui'];
        }
        if(isset($_REQUEST['pi'])){
           $pid=$_REQUEST['pi'];   
        }
        $this->project_model->ignorelist($uid,$pid);
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Translator Ignored";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/translator/ignoredmsg');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end 
    }

    function archiveProject() {
        $this->user_model->loginCheck();
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects -Archive Projects ";
        $data['archive'] = $this->project_model->archiveProject();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/projects/archive');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

  

//end of client "Projects.php controller".
}

?>