<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdminLogin extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
                $this->load->library('session');
			
	}
	function index()
	{
	//start
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		
               
		$this->load->view('cms/cmsmeta1_view');
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
	        $this->load->view('admin/login');
		$this->load->view('cms/footer6_view');
		
	//end	
        }
        
        function loginAdmin(){
            
            //$userstatus = $this->user_model->userstatus($unameval,$pswdval);
            $unameval = $_POST['uname'];
            $pswdval = $_POST['pwd'];
            $userstatus = $this->admin_model->userstatus($unameval,$pswdval);
            echo $userstatus;
            //echo 'hello';
        }

}