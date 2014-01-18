<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); //controller for the tastatranslators

class tastatranslators extends CI_Controller {

    function index() {
        //start
        redirect(WEB_URL . 'tastatranslators/searchtranslator');
        //end	
    }

    function searchtranslator() {
        //start
        /* load js start here */
        $uid = $this->session->userdata('login_user_id');
        $data['plist'] = $this->gen_model->getallprojectlist($uid);
        $this->user_model->loginCheck();
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['uid'] = $uid;
        $data['countylist'] = $this->gen_model->getallcountries();
        $data['tactive'] = "active";
        $data['pagetitle'] = "Translator - Search Translator ";
        $data['listres1'] = $this->gen_model->translatorlist1();
        $data['listres2'] = $this->gen_model->translatorlist2();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/translator/search_view');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }
    function preferred_translators() {
        //start
        /* load js start here */
        $this->user_model->loginCheck();
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['tactive'] = "active";
        $data['pagetitle'] = "Translator - Preferred Translators";
        $data['uid'] = $this->session->userdata('login_user_id');
        $uid=$this->session->userdata('login_user_id');
        $data['plist'] = $this->gen_model->getallprojectlist($uid);
        $data['countylist'] = $this->gen_model->getallcountries();
        $data['preflistres'] = $this->gen_model->preftranslator();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/translator/preferred_translator');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function translator_profile() {
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['tactive'] = "active";
        $data['pagetitle'] = "Translator - Profile";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        //$this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/translator/translatorprofile_second - Copy');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function findTranslator() {
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['countylist'] = $this->gen_model->getallcountries();
        $data['listres1'] = $this->gen_model->translatorlist1();
        $data['listres2'] = $this->gen_model->translatorlist2();
        $data['tactive'] = "active";
        $data['pagetitle'] = "Translator - Search Translator ";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/translator/findtranslator');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }
    function transProfilelogin() {
        $ittcid = $_REQUEST['id'];
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['itandtcdata'] = $this->gen_model->itandtcprofiledata($ittcid);
        //$countryid=$this->gen_model->countryid($ittcid);
        // $data['itandtcdata']=$this->gen_model->itandtcexpertise($ittcid);
        //$data['itandtccity']=$this->gen_model->itandtccountry($data);
        $data['tactive'] = "active";
        $data['pagetitle'] = "Translator - Profile";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/translator/trans_profile');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end 
    }

    //////////////////////safi code starts///////////////////////
    function transProfile() {
        $ittcid = $_REQUEST['id'];
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        $data['itandtcdata'] = $this->gen_model->itandtcprofiledata($ittcid);
        //$countryid=$this->gen_model->countryid($ittcid);
        // $data['itandtcdata']=$this->gen_model->itandtcexpertise($ittcid);
        //$data['itandtccity']=$this->gen_model->itandtccountry($data);
        $data['tactive'] = "active";
        $data['pagetitle'] = "Translator - Profile";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        //$this->load->view('dashboard/quicklins_view');
        //$this->load->view('dashboard/translator/trans_profile');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end 
    }

    function exertisedetail() {
        $exval = $_REQUEST['eval'];
        $exdet = $this->gen_model->expertisedomainitandtc($exval);
        $sample = "";
        if (!empty($exdet)) {
            foreach ($exdet as $details) {
                $sample.='<p>' . $details['expertise_name'] . '</p>';
            }
        }
        echo $sample;
    }

    function translatorlist() {
        $data['tval'] = $_POST['tval'];
        $data['eval'] = $_POST['eval'];
        $data['slang'] = $_POST['slang'];
        $data['tlang'] = $_POST['tlang'];
        $data['loc'] = $_POST['loc'];
        $uid = $this->session->userdata('login_user_id');
        $data['plist'] = $this->gen_model->getallprojectlist($uid);
        $data['listresult'] = $this->gen_model->translatorlist($data);
        $data['u_id']=$this->session->userdata('login_user_id');
        $this->load->view('dashboard/translator/filtering_translator', $data);
    }
    
    function translist()
    {
       $data['tval'] = $_POST['tval'];
        $data['eval'] = $_POST['eval'];
        $data['slang'] = $_POST['slang'];
        $data['tlang'] = $_POST['tlang'];
        $data['loc'] = $_POST['loc'];
        $data['listresult'] = $this->gen_model->translatorlist($data);
        $this->load->view('dashboard/translator/filteringindex', $data); 
    }
    
    function preftransfilter() {
        $data['tval'] = $_POST['tval'];
        $data['eval'] = $_POST['eval'];
        $data['slang'] = $_POST['slang'];
        $data['tlang'] = $_POST['tlang'];
        $data['loc'] = $_POST['loc'];
        $uid = $this->session->userdata('login_user_id');
        $data['plist'] = $this->gen_model->getallprojectlist($uid);
        $data['listresult'] = $this->gen_model->preftransfilter($data);
        $data['u_id']=$this->session->userdata('login_user_id');
        $this->load->view('dashboard/translator/filtering_translator', $data);
    }
    
    function addpreferred(){
        $cid=$_POST['cid'];
        $uid=$_POST['uid'];
        $this->gen_model->addpreferred($cid,$uid);
    }
    //////////////////////safi code ends/////////////////////// 

    function track_requestbid() {
        //start
         $uid = $this->session->userdata('login_user_id');
        $data['tractporjlistit'] = $this->gen_model->trackbidprojit($uid);
        $data['tractporjlisttc'] = $this->gen_model->trackbidprojtc($uid);
        $data['tactive'] = "active";
        $data['pagetitle'] = "Translator - Track Request Bid";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/translator/trackrequestbid');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function shortlist() {
        //start
        $this->user_model->loginCheck();

        $data['tactive'] = "active";
        $data['pagetitle'] = " Short Listed Bidder List";
        $data['list'] = $this->gen_model->viewShortlisted();
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/translator/shortlist');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function ignore() {
        //start
        $this->user_model->loginCheck();
        $data['list'] = $this->gen_model->viewIgnorelist();
        $data['tactive'] = "active";
        $data['pagetitle'] = " Ignored Bidder List";
        $this->load->view('cms/cmsmeta1_view', $data);
        $this->load->view('cms/langnmenu2_view');
        $this->load->view('cms/bluestrip3_view');
        $this->load->view('dashboard/dashboard_usermenu_view');
        $this->load->view('dashboard/quicklins_view');
        $this->load->view('dashboard/translator/ignore');
        $this->load->view('cms/registeration5_view');
        $this->load->view('cms/footer6_view');
        //end	
    }

    function prolistdet() {
        $tid = $_REQUEST['tid'];
        $cid = $_REQUEST['cid'];
        $pid = $_REQUEST['pid'];
        $this->gen_model->prolistdet($tid, $cid, $pid);
    }

//end of client "tastatranslators.php controller".
}

?>