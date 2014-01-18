<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Feedback extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        redirect(WEB_URL . 'Feedback/Client_feedback');
        //end	
    }

    function View_Feedback() {
        //start
        $user="";

        if (isset($_POST['user'])) {
          echo  $user = $_POST['user'];
        }
        if (isset($_POST['user1'])) {
          echo  $user = $_POST['user1'];
        }
        
        $data['fdactive'] = "active";
        $data['pagetitle'] = "Feedbacks - My Feedbacks";
        $data['view'] = $this->feedback_model->viewfeedback($user);
        $this->load->view('cms/cmsmeta1_view',$data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/ifeedback/view_feedback_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Feedbacks() {
        //start
        $data['fdactive'] = "active";
        $data['pagetitle'] = "Feedbacks";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        //$this->load->view('idashboard/dashboard_usermenu_view');
        //$this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/ifeedback/view_feedback_view_general');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Feedback_to_Client() {
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['fdactive'] = "active";
        $data['pagetitle'] = "Feedbacks - Feedback to Client";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/ifeedback/tasatfb');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Feedback_to_TASAT() {
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['fdactive'] = "active";
        $data['pagetitle'] = "Feedbacks - Feedback to TASAT";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/ifeedback/tasatfb');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function Feedback_Given() {
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['fdactive'] = "active";
        $data['pagetitle'] = "Feedbacks - Feedback Given";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('idashboard/ifeedback/given_feedback');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function clientFeedbacklist() {
        //start
        $data['fdactive'] = "active";
        $data['pagetitle'] = "Feedbacks";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/cfeedbacks/feedbacklist');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end 
    }
    function insertFeedback() {
        $projectname = $_POST['projectname'];
        $name=$_POST['transname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $this->feedback_model->insertFeedback($projectname,$name, $email, $message);
        redirect(WEB_URL . 'feedback/View_Feedback');
    }

    function suggestions() {

        // Search term from jQuery

        $term = $this->input->post('term', TRUE);
        $rows = $this->feedback_model->GetAutocomplete(array('keyword' => $term));
        $json_array = array();
        foreach ($rows as $row)
            array_push($json_array, $row->pro_name);

        echo json_encode($json_array);
    }

//end of HOME Controller	
}

//location:application/controller/feedback	
?>