<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Finance extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
			
	}
	function index()
	{
		redirect(WEB_URL.'Finance/dispute');
	//end	
	}
	
	function Request_funds()
	{
	//start
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Request Funds";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/request_funds_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function Transfer_funds()
	{
	//start
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Transfer Funds";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/transfer_funds_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function History()
	{
	//start
		/*load js start here*/
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Transaction History";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/transaction_history_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
    function  translatorDisputes(){
           $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Disputes";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('disputes/translatordisputes');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
        }
		
    
    function viewtransDisputes(){
       $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "View Disputes";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('disputes/viewtransdisputes');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');       
        }
       
 function  paymentVoucher(){
           $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Payment Voucher ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/payvoucher');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
        }
        
        function  paymentVoucherlist(){
           $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Payment Voucher List ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/payvoucherlist');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
        }
        
         function  receiptVoucher(){
           $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Receipt Voucher ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/receiptvoucher');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
        }
        
     function  receiptVoucherlist(){
           $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Receipt Voucher List ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/receiptlist');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
        }
        
         function  successPayment(){
           $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Success Payment ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/thankpayment');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
        }
        
        function  Cancelled(){
           $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Cancelled Transactions";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/cancelled_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
        }
        
        function  cancelPayment(){
           $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Cancel Payment";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('idashboard/dashboard_usermenu_view');
		$this->load->view('idashboard/quicklins_view');
		$this->load->view('idashboard/ifinance/cancelpayment');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
        }
        
        
        
//end of Finance Controller	
}	
?>