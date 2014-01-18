<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //controller for the CLIENT
class Myfinancials extends CI_Controller
{

	function index()
	{
	//start
		redirect(WEB_URL.'Myfinancials/Invoice');
	//end	
	}
	
	function Invoice()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Invoice Lists";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/invoicelistview');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function View_invoice()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Invoice Details";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/invoice_specific_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function History()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
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
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/transaction_history_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function Transfer_funds()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
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
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/transfer_funds_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function Deposit_funds()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Deposit Funds";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/deposit_funds_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function Cancelled()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
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
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/cancelled_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function Subscription_fee()
	{
	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Subscription Fee";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/subscription_fee_view');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
	}
	
	function  clientDisputes(){
                $this->user_model->loginCheck();
           $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['fdactive'] = "active";
		$data['pagetitle'] = "Disputes";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('disputes/clientdisputes');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view'); 
        }
		
     function viewDisputes(){
                $this->user_model->loginCheck();
       $impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['fdactive'] = "active";
		$data['pagetitle'] = "View Disputes";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('disputes/viewdisputes');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');       
        }	
        function invoiceDetail(){
            	//start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Invoice Detail";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/invoicedetails');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
            
        }
function payVoucher(){
    //start
		/*load js start here*/
                $this->user_model->loginCheck();
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
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/payvoucher');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
}
 function receiptVoucher(){
     //start
		/*load js start here*/
                $this->user_model->loginCheck();
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
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/receiptvoucher');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
}
function receiptVoucherlist(){
    //start
		/*load js start here*/
                $this->user_model->loginCheck();
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
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/receiptlist');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
}
function payVoucherlist(){
      //start
		/*load js start here*/
                $this->user_model->loginCheck();
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
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/payvoucherlist');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
}
       
function successPayment(){
    //start
		/*load js start here*/
                $this->user_model->loginCheck();
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
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/thankpayment');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
}
function cancelPayment(){
    //start
		/*load js start here*/
                $this->user_model->loginCheck();
				$impcss = array();
				$data['impcss'] = $impcss;
				$impjs = array();
				$data['impjs'] = $impjs;
		/*load js end here*/
		$data['factive'] = "active";
		$data['pagetitle'] = "Finance - Cancel Payment ";
		$this->load->view('cms/cmsmeta1_view',$data);
		$this->load->view('cms/langnmenu2_view');
		$this->load->view('cms/bluestrip3_view');
		$this->load->view('dashboard/dashboard_usermenu_view');
		$this->load->view('dashboard/quicklins_view');
		$this->load->view('dashboard/myfinancials/cancelpayment');
		$this->load->view('cms/registeration5_view');
		$this->load->view('cms/footer6_view');
	//end	
}
//end of client "myfinancials.php controller".
}
?>