<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Project_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function insertprojectData($protype, $proname, $prodesc, $lang_from, $lang_to, $prodomain, $proj_bidclose, $proj_complete, $proj_budget1, $proj_budget2, $onweb, $pjtfile) {
        //  $userid = $this->session->userdata('login_user_id');
        $userid = $this->session->userdata('login_user_id');

        $sql1 = "INSERT INTO tbl_projects(pro_name,pro_desc,pro_type,pro_domain,pro_langfrom,pro_langto,pro_bidclose,pro_completion,pro_budget_min,pro_budget_max,pro_onwebsite,pro_status)
           VALUES('$proname','$prodesc','$protype','$prodomain','$lang_from','$lang_to','$proj_bidclose','$proj_complete','$proj_budget1','$proj_budget2','$onweb',0)";
        $this->db->query($sql1);

        $sql2 = "SELECT pro_id_pk FROM tbl_projects 
       ORDER BY pro_id_pk DESC LIMIT 1";
        $res2 = $this->db->query($sql2);

        if ($res2->num_rows() > 0) {
            $row = $res2->row();
            $pid = $row->pro_id_pk;

            $sql3 = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql3);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;
                $sql4 = "INSERT INTO tbl_project_files(pro_id_fk,pro_file_name) VALUES('$pid','$pjtfile')";
                $this->db->query($sql4);

                $sql5 = "INSERT INTO tbl_project_client (pro_id_fk,client_id_fk) VALUES('$pid','$cid')";
                $this->db->query($sql5);
            }
        }
        // return true;
    }

    function insertProject($protype, $proname, $prodesc, $domain, $lang_from, $lang_to, $proj_bidclose, $proj_budget1, $proj_budget2,$service,$time, $showinterpreter, $onweb, $pjtfile) {
        $userid = $this->session->userdata('login_user_id');

        $sql1 = "INSERT INTO tbl_projects(pro_type,pro_name,pro_desc,pro_domain,pro_langfrom,pro_langto,pro_bidclose,pro_budget_min,pro_budget_max,pro_duration,pro_event_time,pro_trans_online,pro_onwebsite,pro_status)
           VALUES('$protype','$proname','$prodesc','$domain','$lang_from','$lang_to','$proj_bidclose','$proj_budget1','$proj_budget2','$service','$time','$showinterpreter','$onweb',0)";
        $this->db->query($sql1);
        echo $sql2 = "SELECT pro_id_pk FROM tbl_projects 
       ORDER BY pro_id_pk DESC LIMIT 1";
        $res2 = $this->db->query($sql2);

        if ($res2->num_rows() > 0) {
            $row = $res2->row();
            $pid = $row->pro_id_pk;

            $sql3 = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql3);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;
                $sql4 = "INSERT INTO tbl_project_files(pro_id_fk,pro_file_name) VALUES('$pid','$pjtfile')";
                $this->db->query($sql4);

                $sql5 = "INSERT INTO tbl_project_client (pro_id_fk,client_id_fk) VALUES('$pid','$cid')";
                $this->db->query($sql5);
            }
        }
    }
    function deleteFile($id){
        $sql = "delete  from tbl_project_files WHERE pro_id_fk='$id'";
        $query = $this->db->query($sql); 
    }
            function projectCount() {
        $result = array();
        $sql = "SELECT * from tbl_projects";
        $this->count = $this->db->query($sql);
        return $this->count->num_rows();
    }

    function getProjectid() {
        $result = array();
        $sql = "SELECT pro_id_pk from tbl_projects ORDER BY pro_id_pk DESC LIMIT 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $id = $row->pro_id_pk;
        }
    }

    function showNewproject() {

        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $sql = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
        $res = $this->db->query($sql);
        if ($res->num_rows() > 0) {
            $row = $res->row();
            $cid = $row->cl_profile_id_pk;
            $sql = "SELECT * from tbl_projects p ,tbl_project_client c WHERE pro_status=0 
                AND p.pro_id_pk=c.pro_id_fk
                AND  c.client_id_fk='$cid'";
            $query = $this->db->query($sql);
            while ($row = $query->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function showOngoingproject() {

        $result = array();

        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');
        if ($usertype == 1) {
            $sql = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;
            }
            $sql1 = "SELECT * from tbl_project_translator WHERE project_status=1 AND cli_id_fk='$cid'";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $cid = $row->cli_id_fk;
                $usid = $row->trans_userid_fk;
            }
            $sql2 = "SELECT user_type  from tbl_user_list WHERE user_id_pk='$usid'";
            $res2 = $this->db->query($sql2);
            if ($res2->num_rows() > 0) {
                $row = $res2->row();
                $type = $row->user_type;
            }
            if ($type == 2) {
                $sql3 = "SELECT * FROM tbl_projects r,tbl_it_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk =t.trans_userid_fk
                       and t.trans_userid_fk=l.user_id_pk
                       and t.project_status=1
                      and r.pro_id_pk=t.project_id_fk
                     )";
                $res3 = $this->db->query($sql3);
                while ($row = $res3->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }
            if ($type == 3) {
                $sql4 = "SELECT * FROM tbl_projects r,tbl_it_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk =t.trans_userid_fk
                       and t.trans_userid_fk=l.user_id_pk
                       and t.project_status=1
                      and r.pro_id_pk=t.project_id_fk
                     )";
                $res4 = $this->db->query($sql4);
                while ($row = $res4->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }
        } if ($usertype == 2 || $usertype == 3) {

            $sql5 = "SELECT * FROM tbl_projects r,tbl_cl_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.cl_profile_id_pk=t.cli_id_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk)
                      and t.project_status=1";
            $res5 = $this->db->query($sql5);
            while ($row = $res5->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function showOnholdproject() {
        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');
        if ($usertype == 1) {
            $sql = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;
            }
            $sql1 = "SELECT * from tbl_project_translator WHERE project_status=2 AND cli_id_fk='$cid'";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $cid = $row->cli_id_fk;
                $uid = $row->trans_userid_fk;

                $sql2 = "SELECT user_type  from tbl_user_list WHERE user_id_pk='$uid'";
                $res2 = $this->db->query($sql2);
                if ($res2->num_rows() > 0) {
                    $row = $res2->row();
                    $type = $row->user_type;
                }
                if ($type == 2) {
                    $sql3 = "SELECT * FROM tbl_projects r,tbl_it_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk =t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk 
                      and t.project_status=2)";
                    $res3 = $this->db->query($sql3);
                    while ($row = $res3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($type == 3) {
                    $sql4 = "SELECT * FROM tbl_projects r,tbl_tc_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk=t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                      and t.project_status=2)";
                    $res4 = $this->db->query($sql4);
                    while ($row = $res4->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        if ($usertype == 2 || $usertype == 3) {
            $sql5 = "SELECT * FROM tbl_projects r,tbl_cl_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.cl_profile_id_pk=t.cli_id_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk)
                      and t.project_status=2";
            $res5 = $this->db->query($sql5);
            while ($row = $res5->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function showcompletedproject() {
        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');
        if ($usertype == 1) {
            $sql = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;
            }
            $sql1 = "SELECT * from tbl_project_translator WHERE project_status=3 AND cli_id_fk='$cid'";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $cid = $row->cli_id_fk;
                $uid = $row->trans_userid_fk;

                $sql2 = "SELECT user_type  from tbl_user_list WHERE user_id_pk='$uid'";
                $res2 = $this->db->query($sql2);
                if ($res2->num_rows() > 0) {
                    $row = $res2->row();
                    $type = $row->user_type;
                }
                if ($type == 2) {
                    $sql3 = "SELECT * FROM tbl_projects r,tbl_it_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk =t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                      and t.project_status=3)";
                    $res3 = $this->db->query($sql3);
                    while ($row = $res3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($type == 3) {
                    $sql4 = "SELECT * FROM tbl_projects r,tbl_tc_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk=t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                      and t.project_status=3)";
                    $res4 = $this->db->query($sql4);
                    while ($row = $res4->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        if ($usertype == 2 || $usertype == 3) {
            $sql5 = "SELECT * FROM tbl_projects r,tbl_cl_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.cl_profile_id_pk=t.cli_id_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                      and t.project_status=3)";
            $res5 = $this->db->query($sql5);
            while ($row = $res5->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
        ;
    }

    function showcancelledproject() {
        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');
        if ($usertype == 1) {
            $sql = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;
            }
            $sql1 = "SELECT * from tbl_project_translator WHERE project_status=4 AND cli_id_fk='$cid'";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $cid = $row->cli_id_fk;
                $uid = $row->trans_userid_fk;

                $sql2 = "SELECT user_type  from tbl_user_list WHERE user_id_pk='$uid'";
                $res2 = $this->db->query($sql2);
                if ($res2->num_rows() > 0) {
                    $row = $res2->row();
                    $type = $row->user_type;
                }
                if ($type == 2) {
                    $sql3 = "SELECT * FROM tbl_projects r,tbl_it_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk =t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                      and project_status=4)";
                    $res3 = $this->db->query($sql3);
                    while ($row = $res3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($type == 3) {
                    $sql4 = "SELECT * FROM tbl_projects r,tbl_tc_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk=t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                       and project_status=4)";
                    $res4 = $this->db->query($sql4);
                    while ($row = $res4->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        if ($usertype == 2 || $usertype == 3) {
            $sql5 = "SELECT * FROM tbl_projects r,tbl_cl_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.cl_profile_id_pk=t.cli_id_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                       and project_status=4)";
            $res5 = $this->db->query($sql5);
            while ($row = $res5->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function archiveProject() {

        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');
        if ($usertype == 1) {
            $sql = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;
            }
            $sql1 = "SELECT * from tbl_project_translator WHERE project_status=5 AND cli_id_fk='$cid'";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $cid = $row->cli_id_fk;
                $uid = $row->trans_userid_fk;

                $sql2 = "SELECT user_type  from tbl_user_list WHERE user_id_pk='$uid'";
                $res2 = $this->db->query($sql2);
                if ($res2->num_rows() > 0) {
                    $row = $res2->row();
                    $type = $row->user_type;
                }
                if ($type == 2) {
                    $sql3 = "SELECT * FROM tbl_projects r,tbl_it_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk =t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                       and project_status=5)";
                    $res3 = $this->db->query($sql3);
                    while ($row = $res3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($type == 3) {
                    $sql4 = "SELECT * FROM tbl_projects r,tbl_tc_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk=t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.
                       and project_status=5)";
                    $res4 = $this->db->query($sql4);
                    while ($row = $res4->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        if ($usertype == 2 || $usertype == 3) {
            $sql5 = "SELECT * FROM tbl_projects r,tbl_cl_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.cl_profile_id_pk=t.cli_id_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk 
                       and project_status=5)";
            $res5 = $this->db->query($sql5);
            while ($row = $res5->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function archive($id) {

        $sql = "UPDATE tbl_project_translator SET project_status=5 WHERE project_id_fk='$id'";
        $this->db->query($sql);
        return true;
    }

    function showAllproject($offset, $per_pg) {
        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');
        if ($usertype == 1) {
            $sql1 = $sql = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql1);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;
                $sql = "SELECT * from tbl_projects,tbl_project_client,tbl_project_translator
                WHERE client_id_fk='$cid' and pro_id_pk=pro_id_fk
                    and pro_id_pk=project_id_fk
                    
                ORDER BY pro_id_pk LIMIT $offset,$per_pg";
                $query = $this->db->query($sql);
                while ($row = $query->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }
        }
        return $result;
    }

    function bookmarkedProjects() {
        
    }

    function insertBid($price, $duration, $proposal) {
        $sql = "INSERT INTO tbl_biddetails(bid_amount, bid_exp_completion_date,bid_proposal) VALUES('$price','$duration','$proposal')";
        $this->db->query($sql);
        return true;
    }

    function avgBid($id) {
        $result = array();
        $sql = "SELECT avg(bid_amount) FROM tbl_biddetails
                 WHERE project_id_fk=(SELECT pro_id_pk FROM tbl_projects WHERE  pro_id_pk='$id')";
        $query = $this->db->query($sql);
         while ($row = $query->_fetch_assoc()) {
                        array_push($result, $row);
                    }

        return $row;
    }

    function totalBids($id) {
        $result = array();
        $sql = "SELECT * from tbl_projects,tbl_biddetails  WHERE project_id_fk=pro_id_pk
                AND pro_id_pk='$id'
                AND bid_status=1";
        $res1 = $this->db->query($sql);
    while ($row = $res1->_fetch_assoc()) {
                        array_push($result, $row);
                    }

      //  echo $result;

        return $result;
    }

    function showBiddetails($id) {
        $result = array();
        $sql1 = "SELECT user_id_fk
FROM tbl_biddetails AS bid 
WHERE bid.project_id_fk ='$id'";
        $res1 = $this->db->query($sql1);
        if ($res1->num_rows() > 0) {
            $row = $res1->row();
            $userid = $row->user_id_fk;

            $sql2 = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$userid'";
            $res2 = $this->db->query($sql2);
            if ($res2->num_rows() > 0) {
                $row = $res2->row();
                $usertype = $row->user_type;
                if ($usertype == '2') {
//
//                    $sql3 = "SELECT it_first_name,it_country,bid_amount,bid_proposal,project_id_fk
//FROM tbl_biddetails AS bid, tbl_it_profile AS c
//WHERE bid.project_id_fk ='$id'";
                    $sql3 = "SELECT it_first_name, it_country, bid_amount, bid_proposal, project_id_fk, bid.user_id_fk
FROM tbl_biddetails AS bid, tbl_it_profile AS c
WHERE bid.project_id_fk ='$id'
AND bid.user_id_fk = (
SELECT user_id_pk
FROM tbl_user_list, tbl_it_profile
WHERE user_id_pk = user_id_fk )
LIMIT 0 , 30";
                    $query3 = $this->db->query($sql3);
                    while ($row = $query3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        return $result;
    }

    function showBidder($fid) {

        $result = array();
        $sql1 = "SELECT user_id_fk
FROM tbl_biddetails AS bid 
WHERE bid.project_id_fk ='$fid'";
        $res1 = $this->db->query($sql1);
        if ($res1->num_rows() > 0) {
            $row = $res1->row();
            $userid = $row->user_id_fk;

            $sql2 = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$userid'";
            $res2 = $this->db->query($sql2);
            if ($res2->num_rows() > 0) {
                $row = $res2->row();
                $usertype = $row->user_type;
                if ($usertype == '2') {

                    $sql3 = "SELECT it_first_name,it_last_name,it_about,it_country,bid_amount,bid_proposal,project_id_fk
FROM tbl_biddetails AS bid, tbl_it_profile AS c
WHERE bid.project_id_fk ='$fid'";
                    $query3 = $this->db->query($sql3);
                    while ($row = $query3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        return $result;
    }

    function getExpertise($fid) {
        $result = array();
        $sql1 = "SELECT user_id_fk
FROM tbl_biddetails AS bid 
WHERE bid.project_id_fk ='$fid'";
        $res1 = $this->db->query($sql1);
        if ($res1->num_rows() > 0) {
            $row = $res1->row();
            $userid = $row->user_id_fk;

            $sql2 = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$userid'";
            $res2 = $this->db->query($sql2);
            if ($res2->num_rows() > 0) {
                $row = $res2->row();
                $usertype = $row->user_type;
                if ($usertype == '2') {
                    $sql3 = "SELECT it_profile_id_pk FROM tbl_it_profile WHERE user_id_fk='$userid'";
                    $res3 = $this->db->query($sql3);
                    if ($res3->num_rows() > 0) {
                        $row = $res3->row();
                        $tid = $row->it_profile_id_pk;
                        $sql4 = "SELECT expertise_name FROM tbl_expertise WHERE expertise_id_pk=(select expertise_id_fk from tbl_user_expertise where 
           user_id_fk=(select user_id_fk from tbl_it_profile where it_profile_id_pk='$tid'))";
                        $res4 = $this->db->query($sql4);
                        while ($row = $res4->_fetch_assoc()) {
                            array_push($result, $row);
                        }
                    }
                }
            }
        }
        return $result;
    }

    function bidRequests() {
        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');

        $sql = "SELECT * from tbl_bid_request WHERE translator_user_id='$userid'
            AND bid_request_status=0";
        $res = $this->db->query($sql);
        if ($res->num_rows() > 0) {
            $row = $res->row();
            $cid = $row->client_id_fk;
            $pid = $row->project_id_fk;

            $sql2 = "SELECT * FROM tbl_cl_profile,tbl_projects,tbl_project_client 
                    WHERE  pro_id_pk='$pid' 
                    AND    client_id_fk=cl_profile_id_pk 
                    AND    pro_id_fk=pro_id_pk  
                    AND cl_profile_id_pk='$cid'";
            $res1 = $this->db->query($sql2);
            while ($row = $res1->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function myBids($userid, $type) {
        if ($type == 1) {
            $sql = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;
            }
            $result = array();
            $sql = "SELECT count(pro_id_pk),p.pro_id_pk, p.pro_name, b.bid_datetime, b.bid_exp_completion_date, b.bid_amount
FROM tbl_biddetails b, tbl_projects p, tbl_project_client c
WHERE b.project_id_fk = p.pro_id_pk
AND p.pro_id_pk=c.pro_id_fk
AND b.bid_status =1
AND c.client_id_fk ='$cid'";

            $query = $this->db->query($sql);
            while ($row = $query->_fetch_assoc()) {
                array_push($result, $row);
            }
            return $result;
        }
    }

    function viewProject($id) {
        $result = array();
        $sql = "SELECT * from tbl_projects p ,tbl_cl_profile t ,tbl_project_client c,tbl_biddetails b WHERE p.pro_id_pk=28
                AND p.pro_id_pk= c.pro_id_fk
                AND t.cl_profile_id_pk=c.client_id_fk
                AND b.project_id_fk=p.pro_id_pk";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }
function viewNewproject($id){
     $result = array();
     $sql = "SELECT * from tbl_projects,tbl_project_files WHERE pro_id_pk='$id'and pro_id_fk=pro_id_pk";
   $query = $this->db->query($sql);  
   while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    
}
    function vieweditProject($id) {
        $result = array();
        $sql = "SELECT * from tbl_projects,tbl_project_files  WHERE pro_id_pk='$id'
                and pro_id_fk=pro_id_pk";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function insertData($id, $prodesc, $lang_from, $lang_to, $my_dropdown, $proj_bidclose, $proj_complete, $proj_budgetmin, $proj_budgetmax, $onweb) {

        $sql = "UPDATE tbl_projects SET 
          pro_desc='$prodesc',
          pro_langfrom='$lang_from',
          pro_langto='$lang_to',
          pro_domain='$my_dropdown',
          pro_bidclose='$proj_bidclose',
          pro_completion='$proj_complete',
          pro_budget_min='$proj_budgetmin',
          pro_budget_max='$proj_budgetmax',
          pro_onwebsite='$onweb' 
                
          WHERE pro_id_pk='$id'";

        $this->db->query($sql);

        return true;
    }

    function browseProject($domain, $offset, $per_pg) {
        $result = array();
        $select = "select";
        $sql = "SELECT * from tbl_projects,tbl_biddetails WHERE project_id_fk=pro_id_pk";
        if (!empty($domain) || ($domain != $select)) {
            $sql.=" AND pro_domain LIKE '%$domain%'";
        }
        $sql.=" ORDER BY pro_id_pk LIMIT $offset,$per_pg";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function browsebylang($from, $to) {

        $result = array();
        $sql = "SELECT * from tbl_projects,tbl_biddetails WHERE project_id_fk=pro_id_pk
                    AND  pro_langfrom LIKE '%$from%' AND  pro_langto LIKE '%$to%'";

        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function browseLocation($location) {
        $result = array();
        $sql = "SELECT *  FROM  tbl_projects p ,tbl_project_client c,tbl_cl_profile pro ,tbl_biddetails b WHERE 
             p.pro_id_pk=c.pro_id_fk
         AND pro.cl_profile_id_pk=c.client_id_fk 
         AND p.pro_id_pk=b.project_id_fk 
         AND pro.cl_country ='$location'";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function browseByprice($price) {
        $result = array();
        $order = "";
        if ($price == 0) {
            $order = 'DESC';
        }

        $sql = "SELECT * from tbl_projects,tbl_biddetails WHERE project_id_fk=pro_id_pk
         ORDER BY bid_amount $order";

        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function trackProject($id) {
        $result = array();

        $sql = "SELECT pro_name,pro_duration,cl_first_name FROM tbl_project_client client ,tbl_cl_profile profile ,tbl_projects  projects 
                WHERE (client.pro_id_fk='$id' and client.client_id_fk=profile.cl_profile_id_pk and  projects.pro_id_pk=client.pro_id_fk)";

        $query = $this->db->query($sql);

        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function transProject($id) {

        $result = array();
        $sql1 = "SELECT * FROM tbl_biddetails, tbl_tc_profile WHERE project_id_fk='$id'";
        $query = $this->db->query($sql1);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function changeStatus($status, $id) {
        $prostatus = "";
        if ($status == "Ongoing") {
            $prostatus = "1";
        }
        if ($status == "Onhold") {
            $prostatus = "2";
        }
        if ($status == 2) {
            $prostatus = "4";
        }
        if ($status == 3) {
            $prostatus = "6";
        }
        if ($status == 4) {
            $prostatus = "3";
        }
        $sql = "UPDATE tbl_project_translator SET project_status='$prostatus' WHERE project_id_fk='$id'";
        $this->db->query($sql);
        return true;
    }

}

// end of the project_model.php
//location:application/models/project_model.php
?>
