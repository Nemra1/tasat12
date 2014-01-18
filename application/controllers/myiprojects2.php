<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Myiprojects extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
			
	}
	
	function index()
	{
	//start
		redirect(WEB_URL.'Myiprojects/recommendedprojects');
	//end	
	}
	
	function recommendedprojects()
	{
	//start
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Recommended Projects ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/recommend');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	
	function ongoing()
	{
	//start
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Ongoing Projects ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/ongoing');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function completed()
	{
	//start
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Completed Projects ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/completed');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function allprojects()
	{
	//start
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - All Projects ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/allprojects');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function bidded()
	{
	//start	
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Bidded Projects ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/bidded');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function bookmarkedProjects()
	{
	//start
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Bookmarked Projects ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/bookmarkedProjects');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	

//end of Myiprojects Controller	
}	
?>