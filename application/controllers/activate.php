<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Activate extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
			
	}
        
        function index() 
        {
        //start
        redirect(WEB_URL . 'home');
        //end	
        }
        
        function verify()
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
		$this->load->view('layout/left_view');
		$this->load->view('layout/right_view');
		$this->load->view('layout/footer_view');
                
                $key = $this->uri->segment(3,0);
                $result=$this->user_model->activateuser($key);
                if($result){
                    redirect(WEB_URL.'home/activeProfile');
                }
	//end	
	}
        
        function testmail(){
            /*****Activation Mail*****/
        
        $this->email->from('no-reply@tasat.com', 'TASAT');
        $this->email->to('anshul11mangium.com');
        $this->email->reply_to('blessy@mangium.com');
        $this->email->subject('Email Testing');
        
        $msg="Hello";
        
        //echo $msg;
        $this->email->message($msg);

        if ($this->email->send()) {
            echo 'Your email was sent.';
          //redirect(WEB_URL.'registration/personalinfo');
        } else {
            show_error($this->email->print_debugger());
        }
        }

//end of HOME Controller	
}	
?>