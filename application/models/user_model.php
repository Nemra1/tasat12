<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_model {

    function __construct() {
        parent::__construct();
    }
        
    /*********************************Function to Check Unique Usename**************************************/
    
    function uniqueUser($unameval) {

        $qur1 = "select username from tbl_user_list where username = '$unameval'";
        $res = $this->db->query($qur1);
        if ($res->num_rows() > 0) {
            return TRUE;
        }
    }
    
    /*********************************Function for USER Registration**************************************/

    function registeruser($patr, $fname, $lname, $uname, $pass, $pemail, $usertype, $regdate, $activation) {
        //start

        $query = "insert into tbl_user_list (username,password,user_type,user_registrations_date,user_profile_activation_code) 
            values ('$uname','$pass','$usertype','$regdate','$activation')";

        $this->db->query($query);
        
            $qur = "select user_id_pk from tbl_user_list where username='$uname'";

            $res = $this->db->query($qur);

            if ($res->num_rows() > 0) {
                $row = $res->row();

                $user_id_fk = $row->user_id_pk;
            }
            
            if($usertype=='1')
            {
                $tbl_name = "tbl_cl_profile";
                $col_pre = "cl";
            }
            if($usertype=='2')
            {
                $tbl_name = "tbl_it_profile";
                $col_pre = "it";
            }
//            if($usertype=='3')
//            {
//                $tbl_name = "tbl_tc_profile";
//                $col_pre = "tc";
//            }

            $query2 = "insert into $tbl_name (user_id_fk,".$col_pre."_patronymic,".$col_pre."_first_name,".$col_pre."_last_name,".$col_pre."_primary_email) 
                values ('$user_id_fk','$patr','$fname','$lname','$pemail')";
            
            $this->db->query($query2);

            $qur3 = "select * from $tbl_name where user_id_fk='$user_id_fk'";

            $res2 = $this->db->query($qur3);

            if ($res2->num_rows() > 0) {
                $row2 = $res2->row();
                if($usertype=='1')
            {
                $email = $row2->cl_primary_email;
            }
            if($usertype=='2')
            {
                $email = $row2->it_primary_email;
            }
//            if($usertype=='3')
//            {
//                $email = $row2->tc_primary_email;
//            }
                
            }

            $newdata = array(
                'userid' => $user_id_fk,
                'username' => $uname,
                'email' => $email
            );

            $this->session->set_userdata($newdata);
            return TRUE;
         
        
        //end
    }
    
     /*********************************Function for Translation Company Registration**************************************/

    function registerusertc($fname, $regno, $uname, $pass, $pemail, $usertype, $regdate, $activation) {
        //start

            $query = "insert into tbl_user_list (username,password,user_type,user_registrations_date,user_profile_activation_code) 
                values ('$uname','$pass','$usertype','$regdate','$activation')";
            //echo $query;
           $this->db->query($query);
           //echo '<br>';
            $qur = "select user_id_pk from tbl_user_list where username='$uname'";
           $res = $this->db->query($qur);

            if ($res->num_rows() > 0) {
                $row = $res->row();

                $user_id_fk = $row->user_id_pk;
            }
            
           $qur1 = "INSERT INTO tbl_tc_profile(user_id_fk, tc_first_name, tc_registration_number, tc_primary_email) VALUES ('$user_id_fk', '$fname','$regno', '$pemail')";
           $this->db->query($qur1);     
            
            $qur3 = "select * from tbl_tc_profile where user_id_fk='$user_id_fk'";

            $res2 = $this->db->query($qur3);

            if ($res2->num_rows() > 0) {
                $row2 = $res2->row();
               $email = $row2->tc_primary_email;                
            }

            $newdata = array(
                'userid' => $user_id_fk,
                'username' => $uname,
                'email' => $email
            );

            $this->session->set_userdata($newdata);
            
            return TRUE;
         
        
        //end
    }
        
    /*********************************Function to insert and check captcha**************************************/
    
    function insert_captcha($caps){
            $query = $this->db->insert_string('captcha', $caps);
            $this->db->query($query);
        }
       
    /*********************************Function for User Profile Activation Link**********************************/

    function activateuser($key) {
        $qury = "update tbl_user_list set user_activation_status= '1' where user_profile_activation_code = '$key'";
        $result = $this->db->query($qury);
        return $result;
    }
    
    /*************************Function for Updating User Details during Registration******************************/

    function addprofile($about, $add, $city, $country, $dob, $fax, $native, $pcontact, $scontact, $smail, $zipcd, $dp_path, $pdoc_path, $sval1) {
        
        $usertp = "select user_type from tbl_user_list where user_id_pk='$sval1'";

        $res = $this->db->query($usertp);

        if ($res->num_rows() > 0) {
            $row = $res->row();

            $usertype = $row->user_type;
        }

        if($usertype=='1')
        {
            $tbl_name = "tbl_cl_profile";
            $col_pre = "cl";
        }
        if($usertype=='2')
        {
            $tbl_name = "tbl_it_profile";
            $col_pre = "it";
        }
//        if($usertype=='3')
//        {
//            $tbl_name = "tbl_tc_profile";
//            $col_pre = "tc";
//        }   
       $qur = "update $tbl_name set ".$col_pre."_dob = '$dob', ".$col_pre."_about = '$about', ".$col_pre."_profile_picture = '$dp_path', ".$col_pre."_address = '$add',
                ".$col_pre."_city = '$city', ".$col_pre."_country = '$country', ".$col_pre."_zipcode = '$zipcd', ".$col_pre."_secondary_email = '$smail', ".$col_pre."_primary_contact = '$pcontact',
                ".$col_pre."_secondary_contact = '$scontact', ".$col_pre."_fax = '$fax', ".$col_pre."_native_language = '$native' where user_id_fk = '$sval1'";
        //echo $qur.'<br>';
        $res1 = $this->db->query($qur);
       if(!empty($pdoc_path))
       {
       
       $qur2 = "insert into tbl_user_profile_docs(user_id_fk,user_doc_path) values ('$sval1','$pdoc_path')";
        //echo $qur2;
      $res2 = $this->db->query($qur2);
        }
       else $res2 = TRUE;
       
       if ($res1 && $res2) {
            return true;
        } else {
            return false;
        }
    }    
    
    /*************************Function for Updating Translation Company Details during Registration******************************/

    function addprofiletc($about, $add, $city, $country, $url, $fax, $pcontact, $scontact, $smail, $zipcd, $dp_path, $pdoc_path, $sval1) {
          
       $qur = "update tbl_tc_profile set tc_url = '$url', tc_about = '$about', tc_profile_picture = '$dp_path', tc_address = '$add',
                tc_city = '$city', tc_country = '$country', tc_zipcode = '$zipcd', tc_secondary_email = '$smail', tc_primary_contact = '$pcontact',
                tc_secondary_contact = '$scontact', tc_fax = '$fax' where user_id_fk = '$sval1'";
        //echo $qur.'<br>';
        $res1 = $this->db->query($qur);
       if(!empty($pdoc_path))
       {
       
       $qur2 = "insert into tbl_user_profile_docs(user_id_fk,user_doc_path) values ('$sval1','$pdoc_path')";
        //echo $qur2;
      $res2 = $this->db->query($qur2);
        }
       else $res2 = TRUE;
       
       if ($res1 && $res2) {
            return true;
        } else {
            return false;
        }
    }    
    
    /******************************Function for Individual Translator Registration Backup***********************************/
    
//    function addprofiles($about, $add, $city, $country, $dob, $fax, $native, $pcontact, $scontact, $smail, $zipcd, $dp_path, $pdoc_path, $sval1) {
//        $qur = "update tbl_cl_profile set cl_dob = '$dob', cl_about = '$about', cl_profile_picture = '$dp_path', cl_address = '$add', cl_city = '$city', cl_country = '$country', cl_zipcode = '$zipcd', cl_secondary_email = '$smail', cl_primary_contact = '$pcontact', cl_secondary_contact = '$scontact', cl_fax = '$fax', cl_native_language = '$native' where user_id_fk = '$sval1'";
//        //echo $qur.'<br>';
//        $res1 = $this->db->query($qur);
//        $qur2 = "insert into tbl_user_profile_docs(user_id_fk,user_doc_path) values ('$sval1','$pdoc_path')";
//        //echo $qur2;
//        $res2 = $this->db->query($qur2);
//        if ($res1 || $res2) {
//            return true;
//        } else {
//            return false;
//        }
//    }
//    
    /**********************************************************************************************************************/
    
   /***********************************Function for Inserting User Expertise Details**************************************/
    
    function userexpertise1($userid, $expval,$domain,$source,$target,$rpw,$currency1,$rpm,$currency2){
        $qurchk = "select user_id_fk from tbl_user_expertise where user_id_fk='$userid' and expertise_id_fk='$expval'";
        $res1 = $this->db->query($qurchk);
        if ($res1->num_rows() == 0) {    
            
            $qur = "insert into tbl_user_expertise (user_id_fk,expertise_id_fk) values('$userid','$expval')";
            $res2 = $this->db->query($qur);
            $sel= "select user_expertise_id_pk from tbl_user_expertise where user_id_fk='$userid' and expertise_id_fk='$expval'";
            $res3 = $this->db->query($sel);
            if ($res3->num_rows() > 0) {
                $row = $res3->row();
                $userexpid = $row->user_expertise_id_pk;
            }
            
            $qur2 = "insert into tbl_expertise_detail (user_expertise_id_fk, expertise_domain, expertise_source, expertise_target, 
                expertise_ratepermin, expertise_rateperword) values ('$userexpid','$domain','$source','$target','$currency1.$rpm','$currency2.$rpw')";
            $res4 = $this->db->query($qur2);
            //return $qur2;
        }else{
            $sel= "select user_expertise_id_pk from tbl_user_expertise where user_id_fk='$userid' and expertise_id_fk='$expval'";
            $res3 = $this->db->query($sel);
            if ($res3->num_rows() > 0) {
                $row = $res3->row();
                $userexpid = $row->user_expertise_id_pk;
            }
            
            $qur2 = "insert into tbl_expertise_detail (user_expertise_id_fk, expertise_domain, expertise_source, expertise_target, 
                expertise_ratepermin, expertise_rateperword) values ('$userexpid','$domain','$source','$target','$currency1.$rpm','$currency2.$rpw')";
            $res4 = $this->db->query($qur2);
            //return "Got Row";
        }
        $q11="SELECT t1.user_expertise_id_fk, t2.user_id_fk, t1.expertise_source, t1.expertise_target
                , t1.expertise_ratepermin, t1.expertise_rateperword,t1.expertise_domain
                    FROM tbl_expertise_detail as t1
                    INNER JOIN tbl_user_expertise as t2
                    ON t2.expertise_id_fk=$expval AND t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$userid;";
        $res11=  $this->db->query($q11);
        $arr1=array();
        if($res11->num_rows()>0){
            while ($row = $res11->_fetch_assoc()) {
                    array_push($arr1, $row);
                    }
          return $arr1;
        }  else {
        echo "no extertise found";    
        }
        //return $res1;
        //return "No Row";
    }
    
	function userexpertise2($userid, $expval,$domain,$source,$target,$rpw,$currency1,$rpm,$currency2){
        $qurchk = "select user_id_fk from tbl_user_expertise where user_id_fk='$userid' and expertise_id_fk='$expval'";
        $res1 = $this->db->query($qurchk);
        if ($res1->num_rows() == 0) {    
            
            $qur = "insert into tbl_user_expertise (user_id_fk,expertise_id_fk) values('$userid','$expval')";
            $res2 = $this->db->query($qur);
            $sel= "select user_expertise_id_pk from tbl_user_expertise where user_id_fk='$userid' and expertise_id_fk='$expval'";
            $res3 = $this->db->query($sel);
            if ($res3->num_rows() > 0) {
                $row = $res3->row();
                $userexpid = $row->user_expertise_id_pk;
            }
            
            $qur2 = "insert into tbl_expertise_detail (user_expertise_id_fk, expertise_domain, expertise_source, expertise_target, 
                expertise_ratepermin, expertise_rateperword) values ('$userexpid','$domain','$source','$target','$currency1$rpm','$currency2$rpw')";
            $res4 = $this->db->query($qur2);
            //return $qur2;
        }else{
            $sel= "select user_expertise_id_pk from tbl_user_expertise where user_id_fk='$userid' and expertise_id_fk='$expval'";
            $res3 = $this->db->query($sel);
            if ($res3->num_rows() > 0) {
                $row = $res3->row();
                $userexpid = $row->user_expertise_id_pk;
            }
            
            $qur2 = "insert into tbl_expertise_detail (user_expertise_id_fk, expertise_domain, expertise_source, expertise_target, 
                expertise_ratepermin, expertise_rateperword) values ('$userexpid','$domain','$source','$target','$currency1$rpm','$currency2$rpw')";
            $res4 = $this->db->query($qur2);
            //return "Got Row";
        }
        $q11="SELECT t1.user_expertise_id_fk, t2.user_id_fk, t1.expertise_source, t1.expertise_target
                , t1.expertise_ratepermin, t1.expertise_rateperword,t1.expertise_domain
                    FROM tbl_expertise_detail as t1
                    INNER JOIN tbl_user_expertise as t2
                    ON t2.expertise_id_fk=$expval AND t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$userid;";
        $res11=  $this->db->query($q11);
        $arr1=array();
        if($res11->num_rows()>0){
            while ($row = $res11->_fetch_assoc()) {
                    array_push($arr1, $row);
                    }
          return $arr1;
        }  else {
        echo "no extertise found";    
        }
        //return $res1;
        //return "No Row";
    }
    
    function expertiselist()
    {
        $arr=array();
        $suid=$this->session->userdata('userid');
        $query=$this->db->query("SELECT * FROM `tbl_expertise` WHERE `expertise_status`=1");
        if($query->num_rows()>0){
            while ($row = $query->_fetch_assoc()) {
                    array_push($arr, $row);
                    }
          return $arr;
        }
    }  
    
     
    /*************************Function for Enter EMPLOYEE Contact****************/
    
    function enterempcontacts($patr,$fname,$lname,$dsgn,$email,$mob,$userid)
    {
    //start
       //echo $uid;
        $qry = "insert into tbl_tc_emp_record (user_id_fk,tc_emp_first_name, tc_emp_last_name, tc_emp_patronymic, tc_emp_designation, tc_emp_email, 
           tc_emp_mobile) values('$userid','$fname','$lname','$patr','$dsgn','$email','$mob')";
       $query = $this->db->query($qry);
       if ($query) {
           $qry2 = "select * from tbl_tc_emp_record where user_id_fk='$userid'";
           $query2 = $this->db->query($qry2);
           $emparr = array();
           while($row=$query2->_fetch_assoc())
           {
               array_push($emparr, $row);
           }
            return $emparr;
        } else {
            return false;
        }
       
       //return $qry;
    //end
     }    
    
    /*************************End of Enter EMPLOYEE Contact**************************/
     
    /*********************************Function for Registration Session Logout***********************************/
   
    function registercomplete(){
        $newdata = array(
                'userid' => ""
            );
        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();
        redirect(WEB_URL);
    }

    /*********************************End of User Registration functions*****************************************/
    

    /*********************************Function for user login authentication**************************************/
    
    function userstatus($unameval, $pswdval) {

        $qur1 = "select * from tbl_user_list where username = '$unameval' and password = '$pswdval'";
        //return $qur1;
        $res = $this->db->query($qur1);

        if ($res->num_rows() > 0) {
            $row = $res->row();

            $user_id_fk = $row->user_id_pk;
            $user_type = $row->user_type;
            $user_active_stat = $row->user_activation_status;
            
    if($user_active_stat == "0")
       {
           return "inactive";
         }
            else
            {     
             //return "here";
                if($user_type=='1')
                {
                    $tbl_name = "tbl_cl_profile";
                    $col_pre = "cl";
                }
                if($user_type=='2')
                {
                    $tbl_name = "tbl_it_profile";
                    $col_pre = "it";
                }
                if($user_type=='3')
                {
                    $tbl_name = "tbl_tc_profile";
                    $col_pre = "tc";
                }   

                $qur2 = "select * from $tbl_name where user_id_fk='$user_id_fk'";
                $res2 = $this->db->query($qur2);
                if ($res2->num_rows() > 0) {
                    $row2 = $res2->row();

                    if($user_type=='1')
                    {
                    $user_patr = $row2->cl_patronymic;
                    $user_fname = $row2->cl_first_name;
                    $user_lname = $row2->cl_last_name;
                    }
                    if($user_type=='2')
                    {            
                    $user_patr = $row2->it_patronymic;
                    $user_fname = $row2->it_first_name;
                    $user_lname = $row2->it_last_name;
                    }
                    if($user_type=='3')
                    {            
                    $user_patr = " ";
                    $user_fname = $row2->tc_first_name;
                    $user_lname = " ";
                    }   

                    $logindata = array(
                        'login_user_id' => $user_id_fk,
                        'login_user_type' => $user_type,
                        'login_user_patr' => $user_patr,
                        'login_user_fname' => $user_fname,
                        'login_user_lname' => $user_lname
                    );

                    $this->session->set_userdata($logindata);            
                    $data['login_user_type'] = $this->session->userdata('login_user_type');

                    return $data['login_user_type'];
                }
            
            }
        }
    }

    
    /************************************Function for Login Session Check*****************************************/
    
    function loginCheck() {
        $session_id = $this->session->userdata('session_id');
        //echo '<br>';
        $data['sessionval1'] = $this->session->userdata('login_user_id');
        /*echo $this->session->userdata('login_user_patr');
        echo $this->session->userdata('login_user_fname');
        echo $this->session->userdata('login_user_lname');*/

        if ((!isset($session_id)) || ($data['sessionval1'] == "")) {
            //echo 'error';
//            $logindata = array(
//                'uri' => $_SERVER['REQUEST_URI']
//            );
//            $this->session->set_userdata($logindata);
//            echo $this->session->userdata('uri');
            
            redirect(WEB_URL);
        }
    }
    
    
    /*********************************Function for Logout**************************************/
    
    function logout() {
        $logindata = array(
            'login_user_id' => ""
        );
        $this->session->unset_userdata($logindata);
        $this->session->sess_destroy();
        redirect(WEB_URL);
    }    
    
    /*********************************End of Login/Logout Functions***************************/
    
    
    /*********************************Function for Reset Password*****************************/
    
    function passwordreset($unameval,$resetmail,$activation){
         //return 'resetfail';
        $qur = "select user_id_pk, user_type from tbl_user_list where username='$unameval'";

        $res = $this->db->query($qur);

        if ($res->num_rows() > 0) { 
            $row = $res->row();
            $user_id = $row->user_id_pk;
            $user_type = $row->user_type;
            if($user_type=='1')
            {
                $tbl_name = "tbl_cl_profile";
                $col_pre = "cl";
            }
            if($user_type=='2')
            {
                $tbl_name = "tbl_it_profile";
                $col_pre = "it";
            }
            if($user_type=='3')
            {
                $tbl_name = "tbl_tc_profile";
                $col_pre = "tc";
            }   
            
            $verify = "select user_id_fk from $tbl_name where ".$col_pre."_primary_email = '$resetmail'";
            //return $verify;
            $verifyres = $this->db->query($verify);
            if($verifyres->num_rows() > 0){
            $qur2 = "update tbl_user_list set user_profile_passwordreset_code = '$activation' where user_id_pk = '$user_id'";
            //echo $qur2;
                $res2 = $this->db->query($qur2);
                if ($res2) {
                    return 'mailsent';
                } else {
                    return 'resetfail';
                }
            }else {
                return 'resetfail';
            }
        }
        else return 'resetfail';
    }
    
    function searchkey($key){
        $qur = "select * from tbl_user_list where user_profile_passwordreset_code ='$key'";
        //return $qur;
        $res = $this->db->query($qur);

        if ($res->num_rows() > 0) { 
            return TRUE;
        } 
        else return FALSE;
    }
            
    function resetpass($newpass,$key){
        $qur = "select user_id_pk from tbl_user_list where user_profile_passwordreset_code ='$key'";
        $res = $this->db->query($qur);
        if ($res->num_rows() > 0) {               
            $row = $res->row();
            $user_id = $row->user_id_pk;
            $qur2 = "update tbl_user_list set password = '$newpass' where user_id_pk = '$user_id'";
            $res2 = $this->db->query($qur2);
            if ($res2) {
                $qur3 = "update tbl_user_list set user_profile_passwordreset_code = NULL where user_id_pk = '$user_id'";
                $res3 = $this->db->query($qur3);
                if ($res3) {
                    return 'resetsuccessful';
                } else {
                    return 'resetfail';
                }
            } else {
                return 'resetfail';
            }
        }
        else return 'resetfail';      
        //echo $key." ".$newpass;
    }


    /************************************End of Reset Password********************************/
    
    /*************************Function for Fetching User Profile Data**************************/
    
    function getprofiledata($uid,$utype){        
	//start
                echo $uid.'<br>'.$utype.'<br>';
		//$profiledata = array();
                
                if($utype=='1')
                {
                    $tbl_name = "tbl_cl_profile";
                    $col_pre = "cl";
                }
                if($utype=='2')
                {
                    $tbl_name = "tbl_it_profile";
                    $col_pre = "it";
                }
                if($utype=='3')
                {
                    $tbl_name = "tbl_tc_profile";
                    $col_pre = "tc";
                }
                
                
		$qry1 = "select * from tbl_user_list where user_id_pk ='$uid'";
		$query1 = $this->db->query($qry1);
		if($query1->num_rows() > 0)
		{
			$profiledata[] = $query1->row();
		}
                
		$qry = "select * from $tbl_name where user_id_fk ='$uid'";
		$query = $this->db->query($qry);
		if($query->num_rows() > 0)
		{
			$profiledata[] = $query->row();
		}
                
		$qry2 = "select * from tbl_user_profile_docs where user_id_fk ='$uid'";
		$query2 = $this->db->query($qry2);
		if($query2->num_rows() > 0)
		{
			$profiledata[] = $query2->row();
		}
                if($utype=='3')
                {
                    $qry3 = "select * from tbl_tc_emp_record where user_id_fk ='$uid'";
                    $query3 = $this->db->query($qry3);
                    if($query3->num_rows() > 0)
                    {
                            $profiledata[] = $query3->num_rows();
                            $profiledata[] = $query3->result();
                    }
                }
                
		/*$qry4 = "select * from tbl_user_expertise where user_id_fk ='$uid'";
		$query4 = $this->db->query($qry4);
		if($query4->num_rows() > 0)
		{
                    $profiledata[] = $query4->num_rows();
                    $profiledata[] = $query4->result();
                    
                    $t=0;
                    
                    while($t<$profiledata[5])
                    {
                    $puid = $profiledata[6][$t]->user_expertise_id_pk;
                    
                    $qry5 = "select * from tbl_expertise_detail where user_expertise_id_fk ='$puid'";
                    $query5 = $this->db->query($qry5);
                    if($query5->num_rows() > 0)
                    {
                        $profiledata[] = $query5->num_rows();
                        $profiledata[] = $query5->result();
                        $profiledata['key'] = $query5->num_rows();
                    }
                    
                    $t++;
                    }
                    
		}*/
                //print_r($profiledata);
		return $profiledata;
	//end
     }    
    
    /****************************End of Fetching User Profile Data*****************************/
     
    /*************************Function for Fetching Expertise Data**************************/
    
    function getexpertisedatawt($uid){
	//start
                //echo $uid;
        $qry1 = "SELECT `user_expertise_id_pk` FROM `tbl_user_expertise` WHERE `user_id_fk` = '$uid'";
        $query1 = $this->db->query($qry1);
        if($query1->num_rows() > 0)
        {
           $expdatanum = $query1->num_rows();
            //echo $exid=$row->user_expertise_id_pk;
            $q="SELECT t1.user_expertise_id_fk, t2.user_id_fk, t1.expertise_source, t1.expertise_target
                , t1.expertise_ratepermin, t1.expertise_rateperword,t1.expertise_domain
                    FROM tbl_expertise_detail as t1
                    INNER JOIN tbl_user_expertise as t2
                    ON t2.expertise_id_fk=3 AND t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$uid; ";
                    //ON t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$uid; ";
            $res1=  $this->db->query($q);
            $result2 = array();
            while ($row2 = $res1->_fetch_assoc()) {
                array_push($result2, $row2);
            }
            return $result2;
        }
        //return $expdata;;
	//end
        //$q="SELECT `expertise_domain`, `expertise_source`, `expertise_target` FROM `tbl_expertise_detail`
              //  WHERE `user_expertise_id_fk`='$ueid'";
     }    
     
     
     function getexpertisedatact($uid){
	//start
                //echo $uid;
        $qry1 = "SELECT `user_expertise_id_pk` FROM `tbl_user_expertise` WHERE `user_id_fk` = '$uid'";
        $query1 = $this->db->query($qry1);
        if($query1->num_rows() > 0)
        {
            $expdatanum = $query1->num_rows();
            //echo $exid=$row->user_expertise_id_pk;
            $q="SELECT t1.user_expertise_id_fk, t2.user_id_fk, t1.expertise_source, t1.expertise_target
                , t1.expertise_ratepermin, t1.expertise_rateperword,t1.expertise_domain
                    FROM tbl_expertise_detail as t1
                    INNER JOIN tbl_user_expertise as t2
                    ON t2.expertise_id_fk=1 AND t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$uid; ";
                    //ON t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$uid; ";
            $res1=  $this->db->query($q);
            $result2 = array();
            while ($row2 = $res1->_fetch_assoc()) {
                array_push($result2, $row2);
            }
            return $result2;
        }
        //return $expdata;;
	//end
        //$q="SELECT `expertise_domain`, `expertise_source`, `expertise_target` FROM `tbl_expertise_detail`
              //  WHERE `user_expertise_id_fk`='$ueid'";
     }
     
     function getexpertisedatast($uid){
	//start
                //echo $uid;
        $qry1 = "SELECT `user_expertise_id_pk` FROM `tbl_user_expertise` WHERE `user_id_fk` = '$uid'";
        $query1 = $this->db->query($qry1);
        if($query1->num_rows() > 0)
        {
            $expdatanum = $query1->num_rows();
            //echo $exid=$row->user_expertise_id_pk;
            $q="SELECT t1.user_expertise_id_fk, t2.user_id_fk, t1.expertise_source, t1.expertise_target
                , t1.expertise_ratepermin, t1.expertise_rateperword,t1.expertise_domain
                    FROM tbl_expertise_detail as t1
                    INNER JOIN tbl_user_expertise as t2
                    ON t2.expertise_id_fk=2 AND t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$uid; ";
                    //ON t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$uid; ";
            $res1=  $this->db->query($q);
            $result2 = array();
            while ($row2 = $res1->_fetch_assoc()) {
                array_push($result2, $row2);
            }
            return $result2;
        }
        //return $expdata;;
	//end
        //$q="SELECT `expertise_domain`, `expertise_source`, `expertise_target` FROM `tbl_expertise_detail`
              //  WHERE `user_expertise_id_fk`='$ueid'";
     }  
     
     function getexpertisedataoi($uid){
	//start
                //echo $uid;
        $qry1 = "SELECT `user_expertise_id_pk` FROM `tbl_user_expertise` WHERE `user_id_fk` = '$uid'";
        $query1 = $this->db->query($qry1);
        if($query1->num_rows() > 0)
        {
            $expdatanum = $query1->num_rows();
            //echo $exid=$row->user_expertise_id_pk;
            $q="SELECT t1.user_expertise_id_fk, t2.user_id_fk, t1.expertise_source, t1.expertise_target
                , t1.expertise_ratepermin, t1.expertise_rateperword,t1.expertise_domain
                    FROM tbl_expertise_detail as t1
                    INNER JOIN tbl_user_expertise as t2
                    ON t2.expertise_id_fk=4 AND t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$uid; ";
                    //ON t1.user_expertise_id_fk=t2.user_expertise_id_pk AND t2.user_id_fk=$uid; ";
            $res1=  $this->db->query($q);
            $result2 = array();
            while ($row2 = $res1->_fetch_assoc()) {
                array_push($result2, $row2);
            }
            return $result2;
        }
        //return $expdata;;
	//end
        //$q="SELECT `expertise_domain`, `expertise_source`, `expertise_target` FROM `tbl_expertise_detail`
              //  WHERE `user_expertise_id_fk`='$ueid'";
     }  
    
    /*************************End of Fetching Expertise Data**************************/
     
    /*************************Function for EDIT PROFILE********************/
    
    function update2tc($fnm,$regid,$url,$uid)
    {
    //start
        $qur = "update tbl_tc_profile set tc_first_name = $fnm, tc_registration_number = $regid, tc_url = $url where user_id_fk = '$uid'";
        //$res = $this->db->query($qur);       
        //echo $qur;
        return "success";
    //end
     }    
    
    /*************************End of EDIT PROFILE**************************/
     
    /*************************Function for Delete EMP Contact****************/
    
    function delempcontact($a){
	//start
                //echo $uid;
        $qry1 = "DELETE FROM tbl_tc_emp_record WHERE tc_emp_record_id_pk='$a'";
        //echo $qry1;
       $query1 = $this->db->query($qry1);
       if($query1)
       {
           return $a;
       }else
       {
           return FALSE;
       }
        //return $expdata;;
	//end
     }    
    
    /*************************End of Delete EMP Contact**************************/
     
    /*************************Function for Changing My Password**************************/
     
    function changemypassword($uid,$passold,$passnew){
        $qur = "update tbl_user_list set password='$passnew' where password ='$passold' AND user_id_pk='$uid'";
        $query = $this->db->query($qur);
        if($query)
            return true;
        else
            return false;
    }

//end of user_model.php file
}

?>