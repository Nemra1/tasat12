<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed'); //controller for the CLIENT

class Myfeedbacks extends CI_Controller {

function index() {
//start
redirect(WEB_URL . 'Myfeedbacks/Feedback_to_Translator');
//end	
}

function Feedback_to_Translator() {
//start
/* load js start here */
$impcss = array();
$data['impcss'] = $impcss;
$impjs = array();
$data['impjs'] = $impjs;
/* load js end here */
$data['fdactive'] = "active";
$data['pagetitle'] = "Feedbacks - Feedback to Translator";
$this->load->view('cms/cmsmeta1_view', $data);
$this->load->view('cms/langnmenu2_view');
$this->load->view('cms/bluestrip3_view');
$this->load->view('dashboard/dashboard_usermenu_view');
$this->load->view('dashboard/quicklins_view');
$this->load->view('dashboard/cfeedbacks/tasatfb');
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
$this->load->view('dashboard/dashboard_usermenu_view');
$this->load->view('dashboard/quicklins_view');
$this->load->view('dashboard/cfeedbacks/tasatfb');
$this->load->view('cms/registeration5_view');
$this->load->view('cms/footer6_view');
//end	
}

function View_Feedback() {
//start
/* load js start here */

$user = "";
if (isset($_POST['user'])) {
 $user = $_POST['user'];
}
if (isset($_POST['user1'])) {
 $user = $_POST['user1'];
}
$impcss = array();
$data['impcss'] = $impcss;
$impjs = array();
$data['impjs'] = $impjs;
$data['fdactive'] = "active";
$data['pagetitle'] = "Feedbacks - View Feedbacks";
$data['view'] = $this->feedback_model->viewfeedback($user);
$this->load->view('cms/cmsmeta1_view', $data);
$this->load->view('cms/langnmenu2_view');
$this->load->view('cms/bluestrip3_view');
$this->load->view('dashboard/dashboard_usermenu_view');
$this->load->view('dashboard/quicklins_view');
$this->load->view('dashboard/cfeedbacks/view_feedback_view');
$this->load->view('cms/registeration5_view');
$this->load->view('cms/footer6_view');
//end	
}

function givenFeedbacks() {
//start
/* load js start here */
$impcss = array();
$data['impcss'] = $impcss;
$impjs = array();
$data['impjs'] = $impjs;
/* load js end here */
$data['fdactive'] = "active";
$data['pagetitle'] = "Feedbacks - My Feedbacks";
$this->load->view('cms/cmsmeta1_view', $data);
$this->load->view('cms/langnmenu2_view');
$this->load->view('cms/bluestrip3_view');
$this->load->view('dashboard/dashboard_usermenu_view');
$this->load->view('dashboard/quicklins_view');
$this->load->view('dashboard/cfeedbacks/given_feedback');
$this->load->view('cms/registeration5_view');
$this->load->view('cms/footer6_view');
//end	
}

function insertFeedback() {

$projectname = $_POST['projectname'];
$name = $_POST['transname'];
$email = $_POST['email'];
$message = $_POST['message'];
$this->feedback_model->insertFeedback($projectname, $name, $email, $message);
redirect(WEB_URL . 'Myfeedbacks/Feedback_to_Translator');
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
//end of myfeedbacks.php controller".
}

?>