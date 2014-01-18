<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Translator extends CI_Controller
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
		$data['pagetitle'] = "My Dashboard ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/dashboard_view');
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
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/reminders');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
//	function Change_Password()
//	{
//	//start
//		/*load js start here*/
//                $this->user_model->loginCheck();
//				$impcss = array();
//				$data['impcss'] = $impcss;
//				$impjs = array();
//				$data['impjs'] = $impjs;
//		/*load js end here*/
//		$data['active'] = "active";
//		$data['pagetitle'] = "Change Password";
//		$this->load->view('cms/cmsmeta1_view',$data);
//		$this->load->view('cms/langnmenu2_view');
//		$this->load->view('cms/bluestrip3_view');
//		$this->load->view('idashboard/dashboard_usermenu_view');
//		$this->load->view('idashboard/quicklins_view');
//		$this->load->view('idashboard/profile/changepswd');
//		$this->load->view('cms/registeration5_view');
//		$this->load->view('cms/footer6_view');
//	//end	
//	}
                
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
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/profile/changepswd');
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
                    redirect(WEB_URL.'translator/passwordChanged');
                    //$session_id = $this->session->userdata('session_id');
                } else redirect(WEB_URL.'translator/Change_Password');
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
	
        function myProfile(){  
                $this->user_model->loginCheck();
                $uid = $this->session->userdata('login_user_id');
                $utype = $this->session->userdata('login_user_type');
                
                if($utype==2)
                {
                $data['profiledata'] = $this->user_model->getprofiledata($uid,$utype);
                $data['expdatawt'] = $this->user_model->getexpertisedatawt($uid);
                $data['expdatact'] = $this->user_model->getexpertisedatact($uid);
                $data['expdatast'] = $this->user_model->getexpertisedatast($uid);
                $data['expdataoi'] = $this->user_model->getexpertisedataoi($uid);
                
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/profile/itprofile');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
                }
                if($utype==3)
                {
                $data['profiledata'] = $this->user_model->getprofiledata($uid,$utype);
                $data['expdatawt'] = $this->user_model->getexpertisedatawt($uid);
                $data['expdatact'] = $this->user_model->getexpertisedatact($uid);
                $data['expdatast'] = $this->user_model->getexpertisedatast($uid);
                $data['expdataoi'] = $this->user_model->getexpertisedataoi($uid);
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/profile/tcprofile');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
                }

	 }   	
         
         function update2tc(){
             echo $fnm = $_POST['fnm'];
             echo $regid = $_POST['regid'];
             echo $url = $_POST['url'];exit;
             $uid = $this->session->userdata('login_user_id');
             $res = $this->user_model->update2tc($fnm,$regid,$url,$uid);
             echo $res;             
         }
         
         function rmv(){
             $a=$_POST['a'];
             $res = $this->user_model->delempcontact($a);
             echo $res;             
             //return $a;
         }


//END of dashboard.php controller..
}
?>