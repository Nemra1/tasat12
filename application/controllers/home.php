<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
			
	}
	function index()
	{
	//start
		/*load js start here*/
        /*echo $session_id = $this->session->userdata('session_id');
        echo '<br>';
        echo $data['sessionval1'] = $this->session->userdata('login_user_id');*/
                //$this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['homecls'] = "active";
		$this->load->view('layout/metainfo_view',$data);
		$this->load->view('layout/header_view');
		$this->load->view('layout/menu_view');
		$this->load->view('layout/banner_view');
		$this->load->view('layout/translationblock_view');
		$this->load->view('layout/left_view');
		$this->load->view('layout/right_view');
		$this->load->view('layout/footer_view');
	//end	
	}
                
	function forgotPassword()
	{
	//start
		/*load js start here*/
        /*echo $session_id = $this->session->userdata('session_id');
        echo '<br>';
        echo $data['sessionval1'] = $this->session->userdata('login_user_id');*/
                //$this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['homecls'] = "active";
		$this->load->view('layout/metainfo_view',$data);
		$this->load->view('layout/header_view');
		$this->load->view('layout/menu_view');
		$this->load->view('layout/banner_view');
		$this->load->view('layout/translationblock_view');
		$this->load->view('layout/left_view');
		$this->load->view('layout/right_view_1');
		$this->load->view('layout/footer_view');
	//end	
	}
        
        function resetPassword(){
            $unameval = $_POST['uname'];
            $resetid = $_POST['resetid'];
            $activation = md5(uniqid(rand(), true));
            
            $resetrslt = $this->user_model->passwordreset($unameval,$resetid,$activation);
            //echo $resetrslt; 
            if($resetrslt == "mailsent")
            {
                /*****Reset Password Mail*****/

                $this->email->from('no-reply@tasat.com', 'CALL-INTERPRETER');
                $this->email->to($resetid);
                $this->email->reply_to('blessy@mangium.com');
                $this->email->subject('Reset your CALL-INTERPRETER account password.');

                $msg='<html><body><table>';         
                $msg='<table><tr><td><img src="'.IMG_PATH.'images/logo.jpg"'.'></td></tr>';
                $msg.='<tr><td> </td></tr>';
                $msg.='<tr><td><b>Hi,</td></tr>';
                $msg.='<tr><td>You&#39;re receiving this e-mail because you requested a password reset for your user account at CALL-INTERPRETER.</td></tr>';
                $msg.='<tr><td><a href="'.WEB_URL.'home/reset/'.$activation.'">Click Here</a> to RESET your Password.</td></tr>';
                $msg.='<tr><td>Your Username is <b>'.$unameval.'</td></tr>';
                //$msg.='<tr><td>If you have problems, please paste the above URL into your web browser.</td></tr>';
                $msg.='<tr><td> </td></tr><tr><td> </td></tr>';
                $msg.='<tr><td>Thanks,</td></tr>';
                $msg.='<tr><td><B>CALL-INTERPRETER Support<b/></td></tr>';
                $msg.='</table></body></html>';  

                //echo $msg;
                $this->email->message($msg);

                if ($this->email->send()) {
                    echo 'mailsent';
                } else {
                    echo 'resetfail';
                }
            }
            else echo $resetrslt;
            
        }
        
        function reset()
        {        
	//start
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
                
                        $data['homecls'] = "active";
                        $data['key'] = $this->uri->segment(3,0);
                        
                        $searchkey=$this->user_model->searchkey($data['key']);
                        //echo $searchkey;
                        if($searchkey){
                            
                        $this->load->view('layout/metainfo_view',$data);
                        $this->load->view('layout/header_view');
                        $this->load->view('layout/menu_view');
                        $this->load->view('layout/banner_view');
                        $this->load->view('layout/translationblock_view');
                        $this->load->view('layout/left_view');
                        $this->load->view('layout/right_view_2');
                        $this->load->view('layout/footer_view');
                        
                        }
                        else redirect(WEB_URL);
                        
                        /*$key = $this->uri->segment(3,0);
                        $result=$this->user_model->activateuser($key);
                        if($result){
                            redirect(WEB_URL.'home/activeProfile');
                        }*/
                
	//end	
        }
        
        function resetupdate(){
            $newpass = $_POST['newpassconf'];
            $key = $_POST['key'];
            $result=$this->user_model->resetpass($newpass,$key);
            echo $result;
        }
        
        function activeProfile()
	{
	//start
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['homecls'] = "active";
		$this->load->view('layout/metainfo_view',$data);
		$this->load->view('layout/header_view');
		$this->load->view('layout/menu_view');
		$this->load->view('layout/banner_view');
		$this->load->view('layout/translationblock_view');
		$this->load->view('layout/left_view_1');
		$this->load->view('layout/right_view');
		$this->load->view('layout/footer_view');
	//end	
	}
        
        function uploadfail()
	{
	//start
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['homecls'] = "active";
		$this->load->view('layout/metainfo_view',$data);
		$this->load->view('layout/header_view');
		$this->load->view('layout/menu_view');
		$this->load->view('layout/banner_view');
		$this->load->view('layout/translationblock_view');
		$this->load->view('layout/left_view_2');
		$this->load->view('layout/right_view');
		$this->load->view('layout/footer_view');
	//end	
	}
        
	function viewClient() {  //edited by blessy
        $this->load->view('cms/cmsmeta1_view');
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('Client/viewclient');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
    }
         
         function editProfile(){
                       $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Edit Client Profile";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('Client/ceditprofile');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
         }
         
         function editTranslator()
         {
            
         	//start
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['tactive'] = "active";
		$data['pagetitle'] = "Translator - Profile";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('idashboard/profile/edittranslator');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end   
        }

        function shortlistBidder(){
            //start
                        /*load js start here*/
                                        $impcss = array();
                                        $data['impcss'] = $impcss;
                                        $impjs = array();
                                        $data['impjs'] = $impjs;
                        /*load js end here*/
                        $data['tactive'] = "active";
                        $data['pagetitle'] = "Shortlisted Bidders";
                        $this->load->view('cms/cmsmeta1_view',$data);
                        $this->load->view('cms/langnmenu2_view');
                        $this->load->view('cms/bluestrip3_view');
                        $this->load->view('dashboard/dashboard_usermenu_view');
                        $this->load->view('dashboard/quicklins_view');
                        $this->load->view('client/bid/shortlistbidder');
                        $this->load->view('cms/registeration5_view');
                        $this->load->view('cms/footer6_view');
                //end   
        }
        function ignoredBidder(){
            //start
                        /*load js start here*/
                                        $impcss = array();
                                        $data['impcss'] = $impcss;
                                        $impjs = array();
                                        $data['impjs'] = $impjs;
                        /*load js end here*/
                        $data['tactive'] = "active";
                        $data['pagetitle'] = "Ignored Bidders";
                        $this->load->view('cms/cmsmeta1_view',$data);
                        $this->load->view('cms/langnmenu2_view');
                        $this->load->view('cms/bluestrip3_view');
                        $this->load->view('dashboard/dashboard_usermenu_view');
                        $this->load->view('dashboard/quicklins_view');
                        $this->load->view('client/bid/ignorebidder');
                        $this->load->view('cms/registeration5_view');
                        $this->load->view('cms/footer6_view');
                //end   
        }

         function myProfile()
         {   
                $this->user_model->loginCheck();
                $uid = $this->session->userdata('login_user_id');
                $utype = $this->session->userdata('login_user_type');
                $data['profiledata'] = $this->user_model->getprofiledata($uid,$utype);
                
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/profile/myprofile');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');

	 }   

//end of HOME Controller	
}	
?>