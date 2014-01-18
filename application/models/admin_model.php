<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    /*     * *********************Admin Login************************* */

    function userstatus($unameval, $pswdval) {
        $qur1 = "select * from tbl_admin_users where adminuser_username = '$unameval' and adminuser_password = '$pswdval'";
        //return $qur1;
        $res = $this->db->query($qur1);

        if ($res->num_rows() > 0) {
            $row = $res->row();

            $adminuser_id = $row->adminuser_id_pk;
            $adminuser_access = $row->adminuser_accesslevel;
            $adminuser_stat = $row->adminuser_status;

            if ($adminuser_stat == "0") {
                return "inactive";
            } else {

                $logindata = array(
                    'admin_id' => $adminuser_id,
                    'admin_access' => $adminuser_access
                );

                $this->session->set_userdata($logindata);
                $data['admin_access'] = $this->session->userdata('admin_access');

                return $data['admin_access'];
            }
        }
    }

    /*     * **********************************Function for Login Session Check**************************************** */

    function loginCheck() {
        $session_id = $this->session->userdata('session_id');
        //echo '<br>';
        $data['sessionval1'] = $this->session->userdata('login_user_id');
        /* echo $this->session->userdata('login_user_patr');
          echo $this->session->userdata('login_user_fname');
          echo $this->session->userdata('login_user_lname'); */

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

    /*     * *******************************Function for Logout************************************* */

    function logout() {
        $logindata = array(
            'login_user_id' => ""
        );
        $this->session->unset_userdata($logindata);
        $this->session->sess_destroy();
        redirect(WEB_URL);
    }

    /*     * *******************************End of Login/Logout Functions************************** */

    /*     * *********************************End Of Admin Login**************************************** */

    function all_project_count() {
        $this->db->from('tbl_projects');
        return $this->db->count_all_results();
    }

    function new_project_count() {
        $this->db->where('pro_status', 0);
        $this->db->from('tbl_projects');
        return $this->db->count_all_results();
    }

    function ongoing_project_count() {
        $this->db->where('pro_status', 1);
        $this->db->from('tbl_projects');
        return $this->db->count_all_results();
    }

    function completed_project_count() {
        $this->db->where('pro_status', 3);
        $this->db->from('tbl_projects');
        return $this->db->count_all_results();
    }

    function cancel_project_count() {

        $this->db->where('pro_status', 4);
        $this->db->from('tbl_projects');
        return $this->db->count_all_results();
    }

    function protypeList() {
        $result = array();
        $sql = "SELECT * FROM tbl_projects WHERE pro_status=0";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function projectbystatus($status) {
        $result = array();
        if ($status == 1 || $status == 3) {
            // echo $sql="SELECT * FROM tbl_projects WHERE pro_status='$status'";
            $sql = "SELECT * FROM tbl_project_translator,tbl_projects,tbl_cl_profile
                        WHERE project_id_fk =pro_id_pk 
                        AND cli_id_fk=cl_profile_id_pk
                        AND pro_status='$status'";
            $query = $this->db->query($sql);
            while ($row = $query->_fetch_assoc()) {
                array_push($result, $row);
            }
        } elseif ($status == 4) {
            $sql1 = "SELECT * FROM tbl_project_translator,tbl_projects,tbl_cl_profile
                        WHERE project_id_fk =pro_id_pk 
                        AND cli_id_fk=cl_profile_id_pk
                        and (pro_status !=1 and pro_status!=3)";
            $query = $this->db->query($sql1);
            while ($row = $query->_fetch_assoc()) {
                array_push($result, $row);
            }
        } else {
            $sql1 = "SELECT * FROM tbl_project_translator,tbl_projects,tbl_cl_profile
                        WHERE project_id_fk =pro_id_pk 
                        AND cli_id_fk=cl_profile_id_pk";

            $query = $this->db->query($sql1);
            while ($row = $query->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function projectType($protype) {
        $result = array();
        if ($protype == 'all') {
            $sql1 = "SELECT * FROM tbl_projects WHERE pro_status=0";
            $query1 = $this->db->query($sql1);
            while ($row = $query1->_fetch_assoc()) {
                array_push($result, $row);
            }
        } else {
            $sql2 = "SELECT * FROM tbl_projects WHERE 
                pro_type='$protype'
                 AND pro_status=0";
            $query2 = $this->db->query($sql2);
            while ($row = $query2->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

//    function projectDetails() {
//        $sql1 = "SELECT *  FROM  tbl_projects p ,tbl_project_client c,tbl_cl_profile pro ,tbl_biddetails b WHERE 
//                p.pro_id_pk=c.pro_id_fk
//                AND pro.cl_profile_id_pk=c.client_id_fk 
//                AND p.pro_id_pk=b.project_id_fk ";
//        $query1 = $this->db->query($sql1);
//        if ($query1->num_rows() > 0) {
//            $row = $query1->row();
//            $uid = $row->user_id_fk;
//
//            $sql2 = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$uid'";
//            $query2 = $this->db->query($sql2);
//            if ($query2->num_rows() > 0) {
//                $row = $query2->row();
//                $usertype = $row->user_type;
//                if( \\\\\\){
//                    
//                }
//            }

    function projectList() {
        $result = array();

        $sql = "SELECT * FROM tbl_projects,tbl_cl_profile,tbl_project_client
                        WHERE pro_id_pk=pro_id_fk
                        AND cl_profile_id_pk=client_id_fk";

        $query = $this->db->query($sql);

        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function getClient($cid) {
        $result = array();
        $sql = "SELECT cl_primary_email  FROM  tbl_cl_profile WHERE cl_profile_id_pk='$cid'";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function getClientname($id) {
        $result = array();
        $sql = "SELECT cl_first_name,cl_last_name FROM tbl_cl_profile,tbl_project_client WHERE pro_id_fk='$id'
                      AND client_id_fk=cl_profile_id_pk";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
    }

    function clientuserlist() {
        $result = array();
        $sql = "SELECT DISTINCT cl_first_name,cl_last_name,user_id_fk FROM tbl_cl_profile,tbl_project_client,tbl_project_translator WHERE 
                      client_id_fk=cl_profile_id_pk
                      AND client_id_fk=cli_id_fk
                      AND pro_id_fk=project_id_fk";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function newClientlist() {
        $result = array();
        $sql = "SELECT * FROM tbl_cl_profile WHERE approval_status=0
             ORDER BY cl_profile_id_pk desc limit 6";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function msgprolist($uid) {
        $result = array();
        $sql = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$uid'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $type = $row->user_type;
            if ($type == 1) {
                $sql = "SELECT pro_name,pro_id_pk FROM tbl_projects,tbl_project_client
                               WHERE client_id_fk=(SELECT cl_profile_id_pk FROM tbl_cl_profile  WHERE  user_id_fk='$uid')
                               AND pro_id_pk=pro_id_fk";
                $query = $this->db->query($sql);
                while ($row = $query->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }
            if ($type == 2 || $type == 3) {
                $sql = "SELECT DISTINCT pro_name,pro_id_pk  FROM tbl_projects,tbl_project_translator 
                  WHERE pro_id_pk IN (SELECT project_id_fk  FROM tbl_project_translator WHERE trans_userid_fk='$uid')";
                $query = $this->db->query($sql);
                while ($row = $query->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }
        }
        return $result;
    }

    function sentMessages() {
        $result = array();
        $sql1 = "SELECT msg_client_id,msg_translator_id FROM tbl_message WHERE
              msg_status=6 OR msg_status=7";
        $query = $this->db->query($sql1);
        if ($query->num_rows()) {
            $row = $query->row();
            $cid = $row->msg_client_id;
            $tuid = $row->msg_translator_id;
            if ($tuid != 0) {
                $sql2 = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$tuid'";
                $query2 = $this->db->query($sql2);
                if ($query2->num_rows()) {
                    $row = $query2->row();
                    $type = $row->user_type;

                    if ($type == 2) {
                        $sql3 = "SELECT * FROM tbl_message,tbl_message_text,tbl_it_profile 
                WHERE   user_id_fk='$tuid'";
                        $query = $this->db->query($sql3);
                    }

                    if ($type == 3) {
                        $sql4 = "SELECT * FROM tbl_message,tbl_message_text,tbl_tc_profile 
                WHERE   user_id_fk='$tuid'";
                        $query = $this->db->query($sql4);
                    }
                    while ($row = $query->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            } else {
                $sql5 = "SELECT * FROM  tbl_message,tbl_message_text,tbl_cl_profile,tbl_user_list WHERE
                   msg_id=msg_id_fk AND 
                   cl_profile_id_pk='$cid' AND
                    `user_id_fk` = user_id_pk";
                $query = $this->db->query($sql5);
                while ($row = $query->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }
        }
        return $result;
    }

    function showMessage($msgid, $pid) {
        $result = array();
        $sql1 = "SELECT * FROM  tbl_message,tbl_message_text,tbl_cl_profile 
WHERE  msg_id=msg_id_fk 
AND`cl_profile_id_pk`=msg_client_id
AND msg_client_id='$cid'";
        $query = $this->db->query($sql1);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function getTranslator($id) {
        $result = array();
        $sql = "SELECT trans_userid_fk FROM tbl_project_translator WHERE project_id_fk='$id'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $tuid = $row->trans_userid_fk;

            $sql1 = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$tuid'";
            $query1 = $this->db->query($sql1);
            if ($query1->num_rows() > 0) {
                $row = $query1->row();
                $type = $row->user_type;
                if ($type == 2) {
                    $sql2 = "SELECT it_first_name,it_last_name,user_type,user_id_pk FROM tbl_user_list,tbl_it_profile
                         WHERE user_id_pk=user_id_fk ";
                    $query2 = $this->db->query($sql2);
                    while ($row = $query2->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        return $result;
    }

    function transuserlist() {
        $result = array();
        $sql = "SELECT user_type FROM tbl_user_list WHERE user_id_pk IN (SELECT trans_userid_fk FROM tbl_project_translator)";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $type = $row->user_type;
            if ($type == 2) {
                $sql1 = "SELECT it_first_name,it_last_name,user_type,user_id_fk FROM tbl_user_list,tbl_it_profile
                         WHERE user_id_pk=user_id_fk ";
                $query1 = $this->db->query($sql1);
                while ($row = $query1->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }
        }
        return $result;
    }

    function viewProject($id) {
        $result = array();
        $sql = "SELECT * FROM tbl_project_client client ,tbl_cl_profile profile ,tbl_projects  projects 
                WHERE   (pro_id_pk='$id' and 
                        client.client_id_fk=profile.cl_profile_id_pk and 
                        projects.pro_id_pk=client.pro_id_fk)";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function approveProject($pid) {
        $sql = "UPDATE tbl_projects SET approval_status=1 WHERE pro_id_pk='$pid'";
        $this->db->query($sql);
    }

    function getid() {
        $sql = "select  msg_id from tbl_message order by msg_id desc limit 0,1";
        $res = $this->db->query($sql);
        if ($res->num_rows() > 0) {
            $row = $res->row();
            $mid = $row->msg_id;
        }
        return $mid;
    }

    function saveclientMessage($user, $pjt, $message, $msgfile) {
        $sql = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$user'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $type = $row->user_type;
            if ($type == 1) {
                $sql = "INSERT INTO tbl_message(msg_client_id,msg_project_id,msg_translator_id,msg_admin_id,msg_status) VALUES('$user','$pjt',0,1,6)";
                $this->db->query($sql);
                $sql1 = "SELECT msg_id FROM `tbl_message` 
                      order by msg_id desc limit 0,1";
                $query = $this->db->query($sql1);
                if ($query->num_rows() > 0) {
                    $row = $query->row();
                    $msgid = $row->msg_id;
                    $sql2 = "INSERT INTO tbl_message_text(msg_id_fk,msg_text,msg_file)VALUES('$msgid','$message','$msgfile')";
                    $this->db->query($sql2);
                }
            }
            if ($type == 2 || $type == 3) {
                $sql = "INSERT INTO tbl_message(msg_client_id,msg_project_id,msg_translator_id,msg_admin_id,msg_status) VALUES(0,'$pjt','$user',1,7)";
                $this->db->query($sql);
                $sql1 = "SELECT msg_id FROM `tbl_message` 
                 ORDER BY msg_id DESC LIMIT 0,1";
                $query = $this->db->query($sql1);
                if ($query->num_rows() > 0) {
                    $row = $query->row();
                    $msgid = $row->msg_id;
                    $sql2 = "INSERT INTO tbl_message_text(msg_id_fk,msg_text,msg_file)VALUES('$msgid','$message','$msgfile')";
                    $this->db->query($sql2);
                }
            }
        }
    }

    /*     * **************************************************user profile approval******************************************* */

    function clientApproval($cid) {
        $client = array();
        $sql = "UPDATE `tbl_cl_profile` SET `approval_status`=1 WHERE `cl_profile_id_pk`='$cid'";
        $query = $this->db->query($sql);
        if ($query == TRUE) {
            $client = $this->newClientlist();
            return $client;
        } else {
            return 0;
        }
    }

    function clientReject($cid) {
        $client = array();
        $sql = "UPDATE `tbl_cl_profile` SET `approval_status`=2 WHERE `cl_profile_id_pk`='$cid'";
        $query = $this->db->query($sql);
        if ($query == TRUE) {
            $client = $this->newClientlist();
            return $client;
        } else {
            return 0;
        }
    }

    function getClientprofile($cid) {
        $result = array();
        $sql = "SELECT * FROM WHERE  cl_profile_id_pk='$cid'";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    /*     * *****************************admin billing************************************************* */

    function getClientlist() {
        $result = array();
        $sql = "SELECT distinct cl_profile_id_pk,cl_first_name,cl_last_name FROM tbl_cl_profile,tbl_project_client WHERE 
              cl_profile_id_pk=client_id_fk";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function getProjectlist($cid) {
        $result = array();
        $sql = "SELECT * FROM tbl_projects,tbl_project_client WHERE
           pro_id_pk=pro_id_fk
           AND client_id_fk='$cid'
                AND (pro_status !=0 AND pro_status!=6)";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function getbidAmount($cid, $pid) {
        $result = array();
        $sql = "SELECT bid_amount FROM tbl_biddetails,tbl_project_client WHERE project_id_fk=pro_id_fk
        AND bid_status=1
        AND client_id_fk='$cid'
        AND project_id_fk='$pid'";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function saveInvoice($date, $clientid, $invamt, $projectid, $discount, $disc) {

        if (!empty($disc)) {
            $amt = round($invamt * ( $disc / 100));
            $bal = $invamt - $amt;
        } else {
            $amt = round($invamt * ($discount / 100));
        }
        $sql = "INSERT INTO tbl_admin_invoice(inv_cli_id,inv_admin_uid,inv_due_date,inv_pro_id,inv_amount, inv_balance) VALUES('$clientid',1,$date','$projectid','$amt','$bal')";
        $query = $this->db->query($sql);
    }

    function invoiceList() {
        $result = array();
        $result1 = array();
        $result2 = array();
        // $userid = $this->session->userdata('login_user_id');//use $userid instead of 1 in inv_admin_uid

        $sql1 = "SELECT inv_cli_id,inv_pro_id FROM tbl_admin_invoice WHERE inv_admin_uid=1 ";
        $query1 = $this->db->query($sql1);
        while ($row = $query1->_fetch_assoc()) {
            array_push($result1, $row);
        }
        foreach ($result1 as $value) {
            $sql2 = "SELECT a.inv_cli_id,a.inv_pro_id,p.pro_name,cp.cl_first_name,cp.cl_last_name,a.admin_inv_id,a.inv_amount,a.inv_status
                  FROM tbl_admin_invoice AS a,tbl_project_client AS c,tbl_cl_profile AS cp,tbl_projects AS p
                 WHERE a.inv_cli_id=cp.cl_profile_id_pk
                 AND   a.inv_cli_id='{$value['inv_cli_id']}'
                 AND   a.inv_pro_id= p.pro_id_pk
                 AND   a.inv_pro_id='{$value['inv_pro_id']}'
                 AND   cp.cl_profile_id_pk=c.client_id_fk
                 AND   p.pro_id_pk=c.pro_id_fk";
            $query2 = $this->db->query($sql2);
            while ($row = $query2->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function viewInvoicedetail($cid, $pid) {
        $result = array();
        $sql = "SELECT user_type FROM tbl_user_list WHERE user_id_pk=(SELECT trans_userid_fk FROM tbl_project_translator WHERE cli_id_fk='$cid'
             AND project_id_fk='$pid')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $usertype = $row->user_type;
            if ($usertype == 2) {
                $sql = "SELECT a.inv_cli_id,a.inv_pro_id,a.inv_date,p.pro_name,cp.cl_first_name,cp.cl_last_name,
                               a.admin_inv_id,a.inv_amount,a.inv_status,ip.it_first_name,ip.it_last_name,ul.user_type
                        FROM tbl_admin_invoice AS a,tbl_project_client AS c,tbl_cl_profile AS cp,tbl_projects AS p,
                             tbl_it_profile AS ip ,tbl_user_list AS ul,tbl_project_translator AS pt
                        WHERE a.inv_cli_id=cp.cl_profile_id_pk
                        AND   a.inv_cli_id='$cid'
                        AND   a.inv_pro_id= p.pro_id_pk
                        AND   a.inv_pro_id='$pid'
                        AND   cp.cl_profile_id_pk=c.client_id_fk
                        AND   p.pro_id_pk=c.pro_id_fk
                        AND   ul.user_id_pk=ip.user_id_fk
                        AND   ul.user_id_pk=pt.trans_userid_fk
                        AND   pt.project_id_fk=p.pro_id_pk";
                $query1 = $this->db->query($sql);
                while ($row = $query1->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }
            if ($usertype == 3) {
                $sql = "SELECT a.inv_cli_id,a.inv_pro_id,a.inv_date,p.pro_name,cp.cl_first_name,cp.cl_last_name,a.admin_inv_id,a.inv_amount,a.inv_status,tp.tc_first_name,ul.user_type
FROM tbl_admin_invoice AS a,tbl_project_client AS c,tbl_cl_profile AS cp,tbl_projects AS p,tbl_tc_profile AS tp ,tbl_user_list AS ul,tbl_project_translator AS pt
                 WHERE a.inv_cli_id=cp.cl_profile_id_pk
                 AND   a.inv_cli_id='$cid'
                 AND   a.inv_pro_id= p.pro_id_pk
                 AND   a.inv_pro_id='$pid'
                 AND   cp.cl_profile_id_pk=c.client_id_fk
                 AND   p.pro_id_pk=c.pro_id_fk
                 AND   ul.user_id_pk=tp.user_id_fk
                 AND   ul.user_id_pk=pt.trans_userid_fk
                 AND   pt.project_id_fk=p.pro_id_pk";
                $query1 = $this->db->query($sql);
                while ($row = $query1->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }
        }

        return $result;
    }

    function viewpayVoucher($invid) {
        
    }

    function savePayment($id, $amount) {
        $sql = "INSERT INTO tbl_payment_voucher(pay_inv_uid,pay_amount)VALUES('$id','$amount')";
        $this->db->query($sql);
    }

    // $sql="insert into tbl_payment_voucher()values('')";



    /*     * ******************** safi code starts ************************** */
    function getallinboxdataadmin() {
        $result = array();
        $result1 = array();
        $result2 = array();
        $result3 = array();
        $result4 = array();
        $result5 = array();

        //client starts
        $sql = "select msg_client_id from tbl_message where msg_status=2";
        $res = $this->db->query($sql);

        while ($row = $res->_fetch_assoc()) {
            array_push($result, $row);
        }
        //print_r($result);exit;
        foreach ($result as $clientid) {
            $sql1 = "select distinct m.msg_project_id, m.msg_id,c.cl_first_name,c.cl_last_name,m.msg_date,t.msg_text
                ,tul.user_type, p.pro_name,p.pro_id_pk,c.user_id_fk
                     from tbl_cl_profile c,tbl_message m,tbl_message_text t, tbl_user_list tul, tbl_projects p
                     where c.user_id_fk='{$clientid['msg_client_id']}'
                     and m.msg_project_id=p.pro_id_pk
                     and m.msg_id=t.msg_id_fk
                     and m.msg_status=2
                     and tul.user_type=1";
        }
        if(!empty($sql1)){
        $query1 = $this->db->query($sql1);
        while ($row1 = $query1->_fetch_assoc()) {
            array_push($result1, $row1);
        }
        }
        //print_r($result1);
        //print_r($result1); exit;
        //translator starts
        $sql2 = "select msg_translator_id from tbl_message where msg_status=4";
        $res2 = $this->db->query($sql2);

        while ($row2 = $res2->_fetch_assoc()) {
            array_push($result2, $row2);
        }
        
        foreach ($result2 as $transtype) {
            $sql3 = "select user_type,user_id_pk from tbl_user_list 
                     where user_id_pk in ('{$transtype['msg_translator_id']}')";
            $query3 = $this->db->query($sql3);

            while ($row3 = $query3->_fetch_assoc()) {
                array_push($result3, $row3);
            }
        }
        //print_r($result3);exit;
        foreach ($result3 as $trans) {
            if ($trans['user_type'] == 2) {
                 $sql4 = "select distinct it.user_id_fk, it.it_first_name, it.it_last_name,  m.msg_id,
                        tul.user_type,t.msg_text,m.msg_date ,m.msg_project_id,p.pro_name,p.pro_id_pk,it.user_id_fk
                        from tbl_it_profile it,tbl_message m,tbl_message_text t, tbl_user_list tul, tbl_projects p
                         where it.user_id_fk='{$trans['user_id_pk']}'
                             and m.msg_project_id=p.pro_id_pk
                         and it.user_id_fk=m.msg_translator_id
                         and m.msg_id=t.msg_id_fk
                         and m.msg_status=4
                        and tul.user_type=2";
            }
            if ($trans['user_type'] == 3) {
                 $sql5 = "select distinct  tc.user_id_fk, tc.tc_first_name,  m.msg_id, tul.user_type,t.msg_text,
                        m.msg_date,m.msg_project_id,p.pro_name,p.pro_id_pk,tc.user_id_fk
                        from tbl_tc_profile tc,tbl_message m,tbl_message_text t, tbl_user_list tul, tbl_projects p
                        where tc.user_id_fk='{$trans['user_id_pk']}'
                             and m.msg_project_id=p.pro_id_pk
                        and tc.user_id_fk=m.msg_translator_id
                        and m.msg_id=t.msg_id_fk
                        and m.msg_status=4
                        and tul.user_type=3";
            }
        }
       if(!empty($sql4)){
        $query4 = $this->db->query($sql4);

        while ($row4 = $query4->_fetch_assoc()) {
            array_push($result4, $row4);
        }
       }
       if(!empty($sql5)){
        $query5 = $this->db->query($sql5);

        while ($row5 = $query5->_fetch_assoc()) {
            array_push($result4, $row5);
        }
       }
       if(!empty($result4) || !empty($result1)){
        $result5 = array_merge($result1, $result4);
        }
        //print_r($result5);
        return $result5;
    }
/////////message///////////////////////////
    function getuserid($uid)
    {
       $q="select user_type from tbl_user_list where user_id_pk='$uid'";
        $res=  $this->db->query($q);
        $row = $res->row();
        $type = $row->user_type; 
        return $type;
    } 
    
    function previousListmsg($pid,$uid,$mid) {
        
        $result = array();
       // $userid = $this->session->userdata('login_user_id');
       // $usertype=$this->session->userdata('login_user_type');
        $type=  $this->getuserid($uid);
        $arr=array();
        if($type==1)
        {
            $where = "AND m.`msg_client_id` = '{$uid}'";
            $cond="m.msg_status=2 or  m.msg_status=6";
        }else{
           $where = "AND m.`msg_translator_id` = '{$uid}'";
           $cond="m.msg_status=4 or  m.msg_status=7";
        }
        //echo $where;exit;
        //$query['where'] = 'AND'.implode($where);
        //print_r($query);exit;   
        $sql = "SELECT count(*) a 
                FROM tbl_message m,tbl_message_text t 
                WHERE m.msg_admin_id=1 
                AND m.msg_project_id='$pid' 
                AND m.msg_id!='$mid' 
                AND m.msg_id=t.msg_id_fk";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
             $count = $row->a;
             
       $sql1="select distinct m.msg_id,m.msg_client_id,m.msg_translator_id,m.msg_project_id,m.msg_date,
                   t.msg_text,m.msg_status,
                   tul.user_id_pk,tul.user_type,
                   cl.cl_first_name,cl.cl_last_name,
                   it.it_first_name,it.it_last_name,
                   tc_first_name
                   from tbl_message m
                   inner join tbl_message_text t
                   on m.msg_id=t.msg_id_fk and m.msg_project_id='$pid' AND m.msg_id!='$mid'".$where."
                   inner join tbl_user_list tul
                   on m.msg_client_id=tul.user_id_pk or m.msg_translator_id=tul.user_id_pk
                   left join tbl_cl_profile cl
                   on tul.user_id_pk=cl.user_id_fk and m.msg_status=2
                   left join tbl_it_profile it
                   on tul.user_type=2 and it.user_id_fk=tul.user_id_pk
                   left join tbl_tc_profile tc
                   on tul.user_type=3 and tc.user_id_fk=tul.user_id_pk
                   where $cond 
                    ORDER BY m.msg_id DESC LIMIT 0,$count";
   
            $query1 = $this->db->query($sql1);
            while ($row = $query1->_fetch_assoc()) {
                array_push($result, $row);
           }
     }
 return $result;
    }
    
    function prevconvafterreply($pid,$user_id,$mid)
    {
        //echo $pid.$user_id.$mid;exit;
        $result=array();
        $type=  $this->getuserid($user_id);
        $arr=array();
        if($type==1)
        {
           $where = "AND m.`msg_client_id` = '{$user_id}'";
           $a="m.msg_status=2 or  m.msg_status=6";
        }else{
           $where = "AND m.`msg_translator_id` = '{$user_id}'";
           $a="m.msg_status=4 or  m.msg_status=7";
        }
        
         $sql1="select distinct m.msg_id,m.msg_client_id,m.msg_translator_id,m.msg_project_id,m.msg_date,t.msg_text,
                   tul.user_id_pk,tul.user_type,
                   cl.cl_first_name,cl.cl_last_name,
                   it.it_first_name,it.it_last_name,
                   tc_first_name,
                   p.pro_name
                   from tbl_message m
                   inner join tbl_message_text t
                   on m.msg_id=t.msg_id_fk and m.msg_project_id=$pid AND m.msg_id='$mid'
                   inner join tbl_projects p
                   on p.pro_id_pk=msg_project_id and p.pro_id_pk='$pid'
                   inner join tbl_user_list tul
                   on m.msg_client_id=tul.user_id_pk or m.msg_translator_id=tul.user_id_pk and tul.user_id_pk='$user_id'
                   left join tbl_cl_profile cl
                   on tul.user_id_pk=cl.user_id_fk and m.msg_status=2
                   left join tbl_it_profile it
                   on tul.user_type=2 and it.user_id_fk=tul.user_id_pk
                   left join tbl_tc_profile tc
                   on tul.user_type=3 and tc.user_id_fk=tul.user_id_pk
                   where $a
                    ORDER BY m.msg_id DESC LIMIT 0,1";
      
            $query1 = $this->db->query($sql1);
            while ($row = $query1->_fetch_assoc()) {
                array_push($result, $row);
           }
        return $result;
        
    }
    
    
    function replyMessage($reply,$pid,$uid) {
        $usertype=  $this->getuserid($uid);
        if($usertype==1)
        {
            $insert = $uid;
            $tabl_col="msg_client_id";
            $status='6';
        }else{
           $insert =$uid;
           $tabl_col="msg_translator_id";
           $status='7';
        }
        
        
        $sql="INSERT INTO `tbl_message`
                   (`msg_project_id`, `$tabl_col`, `msg_admin_id`, `msg_status`) 
                   VALUES ($pid,$uid,1,$status)";
         $this->db->query($sql);
         $last_id_inserted= $this->db->insert_id();
         $sql1=$this->db->query("INSERT INTO `tbl_message_text`( `msg_id_fk`, `msg_text`) VALUES ($last_id_inserted,'$reply')");
         if($sql1){
             return $last_id_inserted;
         }else{echo "sorry for inconvenience";}
    }
    
    
    function admintrans($options=array()){
        $result=array();
        $sql="SELECT distinct tbd.`user_id_fk` ,tul.user_type, tc.tc_first_name, it.it_first_name, it.it_last_name
                FROM `tbl_biddetails` tbd 
                inner join tbl_user_list as tul
                on tul.user_id_pk=tbd.user_id_fk
                left join tbl_tc_profile as tc
                on tc.user_id_fk=tbd.user_id_fk 
                left join tbl_it_profile as it
                on it.user_id_fk=tbd.user_id_fk 
                WHERE (tbd.`bid_status`=0 or tbd.`bid_status`=1)
                and (it.it_first_name  like '$options[keyword]%' or tc.tc_first_name  like '$options[keyword]%')";
           
        $res=  $this->db->query($sql);
         while ($row = $res->_fetch_assoc()) {
                array_push($result, $row);
           }
        return $result;
        }

function getuser_details_chat($uid)
{
    $sql=$this->db->query("SELECT * FROM `tbl_user_list` WHERE `user_id_pk`='$uid'");
     if ($sql->num_rows() > 0) {
	while ($row = $sql->_fetch_assoc()) {
                return $row;
           }
  
      
     }
}
    
    /*     * ******************** safi code ends ************************** */
}

?>
