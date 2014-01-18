<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AboutUs extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
			
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
		$data['abtuscls'] = "active";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('cms/content4_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}

//end of ABOUTUS Controller	
}	
?>