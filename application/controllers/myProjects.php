<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MyProjects extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
			
	}
	
	function index()
	{
	//start
		redirect(WEB_URL.'myProjects/recommendedprojects');
	//end	
	}
	
	function recommendedProjects()
	{
	//start 
        $this->user_model->loginCheck();
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Recommended Projects ";
                $data['recommend']=$this->project_model->recommendedProjects();
             
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
	
	function ongoingProjects()
	{
	//start
		 $this->user_model->loginCheck();
            $data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Ongoing Projects ";
                 $data['ongoing']=$this->project_model->showOngoingproject();
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
	
	function completedProjects()
	{
	//start
             $this->user_model->loginCheck();
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Completed Projects ";
                 $data['completed']=$this->project_model->showcompletedproject();
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
	
	function allProjects()
	{
	//start
             $this->user_model->loginCheck();
             $offsetval = 0;
        if ($this->uri->segment(3) != '') {
            $offsetval = $this->uri->segment(3);
        }
        $data['base'] = WEB_URL;
        $per_pg = 5;
        $offset = $offsetval;
        $config['base_url'] = $data['base'] . '/myProjects/allProjects';
        $config['per_page'] = $per_pg;
        $config['total_rows'] = $this->project_model->projectCount();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - All Projects ";
                 $data['all']=  $this->project_model->showAllproject($offset,$per_pg); 
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
	
	function activeBids()
	{
	//start
             $this->user_model->loginCheck();
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Bidded Projects ";
                  $data['bidded']=  $this->project_model->biddedProjects(); 
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
	
	function showbookmarkedProjects()
	{
	//start
             $this->user_model->loginCheck();
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Bookmarked Projects ";
                $data['bookmark']=$this->project_model->showbookmarkedProjects();
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
        
        function bidProject()
	{
	
             $this->user_model->loginCheck();
		
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Bid Project ";
                $id="";
                                         if (isset($_REQUEST['id'])){
                                           $id = $_REQUEST['id'];
                                              
                                         }     
                $data['details'] = $this->project_model->viewProject($id);
                $data['avge']= $this->project_model->avgBid($id);
                $data['totalbid']=$this->project_model->totalBids($id);
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/bid_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
 /* function  insertBiddata(){
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('price', 'Price','trim|required|alpha|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('duration', 'Duration', 'trim|required|callback_lang_check');
        $this->form_validation->set_rules('sender_message', 'Proposal', 'trim|required|callback_lang_check');
        
        if ($this->form_validation->run() === FALSE) {
            $this->bidProject();
        } else {
//
        }
        }*/
        
       function updateafterbid()
       {
           $proval=$_POST['proval'];
           $this->project_model->updateafterbid($proval);
       }
        
        function insertBid(){
             $this->user_model->loginCheck();
            $price=$_POST['price'];
            $duration=$_POST['duration'];
            $proposal=$_POST['proposal'];
            $pid="";
            if(isset($_POST['proid'])){
                $pid=$_POST['proid'];
            }
            $this->project_model->insertBid($pid,$price,$duration,$proposal);  
            redirect(WEB_URL.'myProjects/activeBids');
        }
        
        function cancelledprojects()
	{
	//start
             $this->user_model->loginCheck();
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Cancelled Projects ";
                $data['cancelled']=$this->project_model->showcancelledproject();
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/cancelledprojects');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
         function Onhold_projects()
	{
	//start
              $this->user_model->loginCheck();
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects - Onhold Projects ";
                 $data['onhold']=$this->project_model->showonholdProject();
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/onholdprojects');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
        function editBidProject()
	{
	//start
             $this->user_model->loginCheck();
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
		$this->load->view('idashboard/iprojects/editbid_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
       
        function trackProject()
        {
        //start
             $this->user_model->loginCheck();
         /*load js start here*/
           $impcss = array();
           $data['impcss'] = $impcss;
           $impjs = array();
           $data['impjs'] = $impjs;
         /*load js end here*/
         $data['pactive'] = "active";
         $data['pagetitle'] = "Projects - Track Project";
         $id="";
        if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];}
         $data['clientdetails']=$this->project_model->trackProject($id);
         $data['translator']=$this->project_model->transProject($id);
         $this->load->view('cms/cmsmeta1_view',$data);
         $this->load->view('cms/langnmenu2_view');
         $this->load->view('cms/bluestrip3_view');
         $this->load->view('idashboard/dashboard_usermenu_view');
         $this->load->view('idashboard/quicklins_view');
         $this->load->view('project/trackaproject_view');
         $this->load->view('cms/registeration5_view');
         $this->load->view('cms/footer6_view');
        //end 
        }          
         
         function BidsRequestList()
        {
        //start 
         $this->user_model->loginCheck();
         $data['pactive'] = "active";
         $data['pagetitle'] = "Projects - Bids Request List ";
         $data['bid']=  $this->project_model->bidRequests(); 
         $this->load->view('cms/cmsmeta1_view',$data);
         $this->load->view('cms/langnmenu2_view');
         $this->load->view('cms/bluestrip3_view');
         $this->load->view('idashboard/dashboard_usermenu_view');
         $this->load->view('idashboard/quicklins_view');
         $this->load->view('project/bidrequestlist');
         $this->load->view('cms/registeration5_view');
         $this->load->view('cms/footer6_view');
        //end 
        }
    function bidSuccess(){
         $this->user_model->loginCheck();
             $data['pactive'] = "active";
         $data['pagetitle'] = "Projects - Bids Request List ";
         $this->load->view('cms/cmsmeta1_view',$data);
         $this->load->view('cms/langnmenu2_view');
         $this->load->view('cms/bluestrip3_view');
         $this->load->view('idashboard/dashboard_usermenu_view');
         $this->load->view('idashboard/quicklins_view');
         $this->load->view('idashboard/iprojects/bidsuccess');
         $this->load->view('cms/registeration5_view');
         $this->load->view('cms/footer6_view');
        }
 function archiveProject(){
            	//start
      $this->user_model->loginCheck();

		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects -Archive Projects ";
                $data['archive'] = $this->project_model->archiveProject();
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/archiveprojects');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
        }
//        function archive(){
//             $this->user_model->loginCheck();
//              $id="";
//              if (isset($_REQUEST['id'])){
//              $id = $_REQUEST['id'];
//              
//              }
//              $this->project_model->archive($id);
//             redirect(WEB_URL.'myProjects/archiveProject');
//        }
        function  projectView1()
         
        {
            $this->user_model->loginCheck();
               	//start
		
                                  $offsetval = 0;
                                  $id="";
                                         if (isset($_REQUEST['pd'])){
                                         $id = $_REQUEST['pd'];}
        if ($this->uri->segment(3) != '') {
            $offsetval = $this->uri->segment(3);
        }
        $data['base'] = WEB_URL;
        $per_pg = 5;
        $offset = $offsetval;
        $config['base_url'] = $data['base'] .'/myProjects/projectView1';
        $config['per_page'] = $per_pg;
        $config['total_rows'] = $this->project_model->projectCount();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
		$data['pactive'] = "active";
		$data['pagetitle'] = "Projects -View Details ";
                $data['details'] = $this->project_model->viewProject($id);
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/iprojects/bookmarkview');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end
        }
    function showprojectList() {
        $this->user_model->loginCheck();
        //start
        $domain = "";
//        $from = "";
//        $to = "";
//        if (isset($_POST['ip_val']) && isset($_POST['ip_val2'])) {
//            $from = $_POST['ip_val'];
//        $to = $_POST['ip_val2'];}
        if (isset($_GET['domainvalue'])) {
            $domain = $_GET['domainvalue'];
        }
        $offsetval = 0;
        if ($this->uri->segment(3) != '') {
            $offsetval = $this->uri->segment(3);
        }
        $data['base'] = WEB_URL;
        $per_pg = 5;
        $offset = $offsetval;
        $config['base_url'] = $data['base'] . '/myProjects/showprojectList';
        $config['per_page'] = $per_pg;
        $config['total_rows'] = $this->project_model->projectCount();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects -Browse Projects";
        $data['browse'] = $this->project_model->browseProject($domain, $offset, $per_pg);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('idashboard/dashboard_usermenu_view');
        $this->load->view('idashboard/quicklins_view');
        $this->load->view('project/showprojectlists');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end		
    }
 function browseLocation() {
     $this->user_model->loginCheck();
        $location = "";
        if (isset($_POST['location'])) {
            $location = $_POST['location'];
        }
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Browse Projects ";
        $data['browse'] = $this->project_model->browseLocation($location);
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('project/newprojectlist');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
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
        $config['base_url'] = $data['base'] . '/myProjects/browseBylang';
        $config['per_page'] = $per_pg;
        $config['total_rows'] = $this->project_model->projectCount();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $browse = $this->project_model->browsebylang($from, $to);
        $sample = '<table>';
        foreach ($browse as $details) {
            $sample.='<tr><th>Project Name</th><th>Project Type</th><th>Project Domain</th><th>Skills</th><th>Avg Bid</th><th>Started On</th><th>Budget</th></tr>';
            $sample.='<tr><td>' . $details['pro_name'] . '</td><td>' . $details['pro_type'] . '</td><td>' . $details['pro_domain'] . '</td><td>' . $details['pro_langfrom'] .
                    '</td><td>' . $details['bid_amount'] . '</td> <td>' . $details['pro_bidclose'] . '</td><td>' . $details['pro_budget_max'] . '</td></tr>';
        }
        $sample.='</table>';
        echo $sample;
    }
    function browseByprice() {
        $this->user_model->loginCheck();
        $price = "";
        if (isset($_POST['price'])) {
            $price = $_POST['price'];
        }
        $data['pactive'] = "active";
        $data['pagetitle'] = "Projects - Browse Projects ";
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
       if($status==1){
       $this->ongoingProjects();}
elseif ($status==2) {
    $this->Onhold_projects();
}
elseif ($status==3) {
    $this->completedProjects();
}
elseif ($status==4) {
    $this->cancelledprojects();

}
else{
    $this->archiveProject();
}

}
      function bookmarkProject() {
        $this->user_model->loginCheck();
         if (isset($_REQUEST['pid'])) {
          $pid = $_REQUEST['pid'];
        }
        
        $this->project_model->bookmarkedProjects($pid);
        $this->showprojectList();
       
    }
//end of myProjects Controller	
}	
?>