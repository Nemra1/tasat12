<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    
        function index()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['active'] = "active";
		$data['pagetitle'] = "My Dashboard";
                $data['all']=$this->admin_model->all_project_count();
                $data['ongoing']=$this->admin_model->ongoing_project_count();
                $data['bid']=$this->project_model-> bidRequests();
                
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
                
	//end	
	}
	
	function reminders()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['active'] = "active";
		$data['pagetitle'] = "My Reminders";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/reminders');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
        
      
	
	function Change_Password()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');                       
        $this->form_validation->set_rules('passwordcurrent', 'Current Password', 'required'); 
        $this->form_validation->set_rules('passwordnew', 'New Password', 'required|min_length[6]');      
        $this->form_validation->set_rules('passwordconf', 'Confirm Password', 'required|matches[passwordnew]');     
        
        if ($this->form_validation->run() == FALSE)
        {
                $data['active'] = "active";
		$data['pagetitle'] = "Change Password";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/profile/changepswd');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
        }
       else
        {
                $uid = $this->session->userdata('login_user_id');
                $passold = $_POST['passwordcurrent'];
                $passnew = $_POST['passwordconf'];
                $res = $this->user_model->changemypassword($uid,$passold,$passnew);

                if ($res) {
                    //echo 'Your email was sent.';
                    redirect(WEB_URL.'dashboard/passwordChanged');
                    //$session_id = $this->session->userdata('session_id');
                } else redirect(WEB_URL.'dashboard/Change_Password');
        }     
        //end
      }
        
        function passwordChanged()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['active'] = "active";
		$data['pagetitle'] = "Change Password";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/profile/passwordchanged');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}

////////////////safi starts////////////////
function videochat()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$uid = $this->session->userdata('login_user_id');
		$data=$this->admin_model->getuser_details_chat($uid);
                $_SESSION['username']=$data['username'];
                $_SESSION['password']=$data['password'];
	        
		$data['active'] = "active";
		$data['pagetitle'] = "My Reminders";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/chat/chat');
		//$this->load->view('123flashchat',$data);
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
function flashchat()
{
    $uid = $this->session->userdata('login_user_id');
		$data['user_details']=$this->admin_model->getuser_details_chat($uid);
               // $_SESSION['username']=$data['username'];
               // $_SESSION['password']=$data['password'];
    $this->load->view('123flashchat', $data);
}


//END of dashboard.php controller..
}
?>
