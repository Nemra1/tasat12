<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Project_model extends CI_Model {

    private $db;

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function insertprojectData($protype, $proname, $prodesc, $lang_from, $lang_to, $prodomain, $proj_bidclose, $proj_complete, $proj_budget1, $proj_budget2, $onweb, $pjtfile) {
     
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

    function insertProject($protype, $proname, $prodesc, $domain, $lang_from, $lang_to, $proj_bidclose, $proj_budget1, $proj_budget2, $service,$duration, $time, $showinterpreter, $onweb, $pjtfile) {
        $userid = $this->session->userdata('login_user_id');

        $sql1 = "INSERT INTO tbl_projects(pro_type,pro_name,pro_desc,pro_domain,pro_langfrom,pro_langto,pro_bidclose,pro_budget_min,pro_budget_max,pro_completion,pro_duration,pro_event_time,pro_trans_online,pro_onwebsite,pro_status)
           VALUES('$protype','$proname','$prodesc','$domain','$lang_from','$lang_to','$proj_bidclose','$proj_budget1','$proj_budget2','$service','$duration',$time','$showinterpreter','$onweb',0)";
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
             echo   $sql4 = "INSERT INTO tbl_project_files(pro_id_fk,pro_file_name) VALUES('$pid','$pjtfile')";
                $this->db->query($sql4);

                $sql5 = "INSERT INTO tbl_project_client (pro_id_fk,client_id_fk) VALUES('$pid','$cid')";
                $this->db->query($sql5);
            }
        }
    }

    function deleteFile($id) {
        $sql = "UPDATE  tbl_project_files 
                SET pro_file_name='nil'
                WHERE pro_id_fk='$id'";
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
            $sql = "SELECT * from tbl_projects p ,tbl_project_client c  WHERE pro_status=0 
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
                       and r.pro_status=1
                      and r.pro_id_pk=t.project_id_fk
                     )";
                    $res3 = $this->db->query($sql3);
                    while ($row = $res3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($type == 3) {
                    $sql4 = "SELECT * FROM tbl_projects r,tbl_tc_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk =t.trans_userid_fk
                       and t.trans_userid_fk=l.user_id_pk
                       and t.project_status=1
                         and r.pro_status=1
                      and r.pro_id_pk=t.project_id_fk
                     )";
                    $res4 = $this->db->query($sql4);
                    while ($row = $res4->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        if ($usertype == 2 || $usertype == 3) {

            $sql5 = "SELECT * FROM tbl_projects r,tbl_cl_profile p,tbl_project_translator t 
                      WHERE ( p.cl_profile_id_pk=t.cli_id_fk and r.pro_id_pk=t.project_id_fk
                     and t.project_status=1
                       and r.pro_status=1)";
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
                      and t.project_status=2
                      and r.pro_status=2 )";
                    $res3 = $this->db->query($sql3);
                    while ($row = $res3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($type == 3) {
                    $sql4 = "SELECT * FROM tbl_projects r,tbl_tc_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk=t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                      and t.project_status=2
                      and r.pro_status=2)";
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
                      and t.project_status=2
                      and r.pro_status=2";
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
                      and t.project_status=3
                      and  r.pro_status=3)";
                    $res3 = $this->db->query($sql3);
                    while ($row = $res3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($type == 3) {
                    $sql4 = "SELECT * FROM tbl_projects r,tbl_tc_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk=t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                      and t.project_status=3
                      and r.pro_status=3)";
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
                      and t.project_status=3
                      and r.pro_status=3)";
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
                      and project_status=4
                      and r.pro_status=4)";
                    $res3 = $this->db->query($sql3);
                    while ($row = $res3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($type == 3) {
                    $sql4 = "SELECT * FROM tbl_projects r,tbl_tc_profile p,tbl_project_translator t,tbl_user_list l 
                      WHERE ( p.user_id_fk=t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                       and project_status=4
                       and r.pro_status=4)";
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
                      and project_status=4
                      and r.pro_status=4)";
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

                    if ($type == 2) {
                        $sql3 = "SELECT * FROM tbl_projects r,tbl_it_profile p,tbl_project_translator t,tbl_user_list l ,tbl_biddetails b
                      WHERE ( p.user_id_fk =t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                      and b.project_id_fk=r.pro_id_pk
                      and project_status=5
                      and r.pro_status=5)";
                        $res3 = $this->db->query($sql3);
                        while ($row = $res3->_fetch_assoc()) {
                            array_push($result, $row);
                        }
                    }
                    if ($type == 3) {
                        $sql4 = "SELECT * FROM tbl_projects r,tbl_tc_profile p,tbl_project_translator t,tbl_user_list l,tbl_biddetails b 
                      WHERE ( p.user_id_fk=t.trans_userid_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk
                      and b.project_id_fk=r.pro_id_pk
                      and project_status=5
                      and r.pro_status=5)";
                        $res4 = $this->db->query($sql4);
                        while ($row = $res4->_fetch_assoc()) {
                            array_push($result, $row);
                        }
                    }
                }
            }
        }
        if ($usertype == 2 || $usertype == 3) {
            $sql5 = "SELECT * FROM tbl_projects r,tbl_cl_profile p,tbl_project_translator t,tbl_user_list l,tbl_biddetails b 
                      WHERE ( p.cl_profile_id_pk=t.cli_id_fk and r.pro_id_pk=t.project_id_fk
                      and  p.user_id_fk=l.user_id_pk 
                      and b.project_id_fk=r.pro_id_pk
                      and project_status=5
                      and r.pro_status=5)";
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
            $sql = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res = $this->db->query($sql);
            if ($res->num_rows() > 0) {
                $row = $res->row();
                $cid = $row->cl_profile_id_pk;

                $sql3 = "SELECT * FROM tbl_projects,tbl_project_client 
                          WHERE pro_id_pk=pro_id_fk 
                          AND client_id_fk='$cid'";
            }
            $res3 = $this->db->query($sql3);
            while ($row = $res3->_fetch_assoc()) {
                array_push($result, $row);
            }
        }

        if ($usertype == 2 || $usertype == 3) {
            $sql5 = "SELECT * FROM tbl_projects,tbl_project_translator
                     WHERE pro_id_pk=project_id_fk
                     AND trans_userid_fk='$userid'";

            $res5 = $this->db->query($sql5);
            while ($row = $res5->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function bookmarkedProjects($pid) {
        $uid = $this->session->userdata('login_user_id');
        $sql = "INSERT INTO tbl_bookmark(bookmark_pro_id,bookmark_trans_id)VALUES('$pid','$uid')";
        $this->db->query($sql);
    }

    function showbookmarkedProjects() {
        $uid = $this->session->userdata('login_user_id');
        $result = array();
            
            $sql1 = "SELECT * FROM tbl_projects p,tbl_project_client c,tbl_cl_profile t WHERE
                       p.pro_id_pk in (SELECT distinct bookmark_pro_id FROM tbl_bookmark WHERE bookmark_trans_id='$uid')
                       and p.pro_id_pk=c.pro_id_fk
                       and c.client_id_fk=t.cl_profile_id_pk
                     ";
            $query1 = $this->db->query($sql1);
            while ($row = $query1->_fetch_assoc()) {

                array_push($result, $row);
            }
       
        return $result;
    }

    function insertBid($pid,$price, $duration, $proposal) {
        $userid = $this->session->userdata('login_user_id');
       $sql = "INSERT INTO tbl_biddetails(project_id_fk,user_id_fk,bid_amount, bid_expcompletion_date,bid_proposal,bid_status) VALUES('$pid','$userid','$price','$duration','$proposal',0)";
        $this->db->query($sql);
        $sql1="UPDATE tbl_projects SET pro_status=6
               WHERE pro_id_pk='$pid'";
        $this->db->query($sql1);
        $sql2="UPDATE tbl_bid_request SET bid_request_status = '1' WHERE project_id_fk ='$pid'";
        $this->db->query($sql2);
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

        return $result;
    }

    function totalBids($id) {
        $result = array();
        $sql = "SELECT count(*) from tbl_projects,tbl_biddetails  WHERE project_id_fk=pro_id_pk
                AND pro_id_pk='$id'
                AND bid_status=0";
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
                    $sql3 = "SELECT it_first_name, it_country, bid_amount, bid_proposal, bid.project_id_fk, bid.user_id_fk
FROM tbl_biddetails AS bid, tbl_it_profile AS c
WHERE bid.project_id_fk ='$id'
and bid.bid_status=0
and bid.user_id_fk=c.user_id_fk";
                    $query3 = $this->db->query($sql3);
                    while ($row = $query3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        return $result;
    }

    function showBidder($pid,$uid) {

            $result = array();
            $sql2 = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$uid'";
            $res2 = $this->db->query($sql2);
            if ($res2->num_rows() > 0) {
                $row = $res2->row();
                $usertype = $row->user_type;
                if ($usertype == '2') {

                    $sql3 = "SELECT it_first_name,it_last_name,it_about,it_country,bid_amount,bid_proposal,project_id_fk,user_type,c.user_id_fk
FROM tbl_biddetails AS bid, tbl_it_profile AS c ,tbl_user_list AS t
WHERE bid.project_id_fk ='$pid'
AND bid.user_id_fk='$uid'
AND bid.user_id_fk=c.user_id_fk
AND t.user_id_pk=bid.user_id_fk
AND bid.bid_status=0
LIMIT 0 , 30";
                        $query3 = $this->db->query($sql3);
                        while ($row = $query3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if($usertype==3){
                    $sql4="SELECT * FROM  FROM tbl_biddetails AS bid, tbl_tc_profile AS c,tbl_user_list AS t
WHERE bid.project_id_fk ='$pid'
AND bid.user_id_fk='$uid'
AND bid.user_id_fk=c.user_id_fk
AND t.user_id_pk=bid.user_id_fk
AND bid.bid_status=0
LIMIT 0 , 30";
                        $query4=$this->db->query($sql4);
                        while ($row = $query4->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
       
        return $result;
    }
function viewBidder($id){
    $result = array();
            $sql2 = "SELECT user_id_fk FROM tbl_biddetails WHERE project_id_fk='$id'";
            $res2 = $this->db->query($sql2);
            if ($res2->num_rows() > 0) {
                $row = $res2->row();
                $userid = $row->user_id_fk;
                $sql="SELECT user_type FROM tbl_user_list WHERE user_id_pk='$userid'";
                 $res = $this->db->query($sql);
                  if ($res->num_rows() > 0) {
                $row = $res->row();
                $usertype = $row->user_type;
                if ($usertype == '2') {

                    $sql3 = "SELECT it_first_name,it_last_name,it_about,it_country,bid_amount,bid_proposal,project_id_fk,user_type,c.user_id_fk
FROM tbl_biddetails AS bid, tbl_it_profile AS c ,tbl_user_list AS t
WHERE bid.project_id_fk ='$id'
AND bid.user_id_fk='$userid'
AND bid.user_id_fk=c.user_id_fk
AND t.user_id_pk=bid.user_id_fk
AND bid.bid_status=0
LIMIT 0 , 30";
                        $query3 = $this->db->query($sql3);
                        while ($row = $query3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if($usertype==3){
                    $sql4="SELECT * FROM  FROM tbl_biddetails AS bid, tbl_tc_profile AS c,tbl_user_list AS t
WHERE bid.project_id_fk ='$id'
AND bid.user_id_fk='$userid'
AND bid.user_id_fk=c.user_id_fk
AND t.user_id_pk=bid.user_id_fk
AND bid.bid_status=0
LIMIT 0 , 30";
                        $query4=$this->db->query($sql4);
                        while ($row = $query4->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
            }
        return $result;  
    
}
    function getExpertise($fid,$uid) {
        $result = array();
           $sql2 = "SELECT user_type FROM tbl_user_list WHERE user_id_pk='$uid'";
            $res2 = $this->db->query($sql2);
            if ($res2->num_rows() > 0) {
                $row = $res2->row();
                $usertype = $row->user_type;
                if ($usertype == '2') {
                    $sql3 = "SELECT it_profile_id_pk FROM tbl_it_profile WHERE user_id_fk='$uid'";
                    $res3 = $this->db->query($sql3);
                    if ($res3->num_rows() > 0) {
                        $row = $res3->row();
                        $tid = $row->it_profile_id_pk;
                        $sql4 = "SELECT expertise_name FROM tbl_expertise WHERE expertise_id_pk in (select expertise_id_fk from tbl_user_expertise
                                 where user_id_fk=(select user_id_fk from tbl_it_profile where it_profile_id_pk='$tid'))";
                        $res4 = $this->db->query($sql4);
                        while ($row = $res4->_fetch_assoc()) {
                            array_push($result, $row);
                        }
                    }
                }
                if($usertype==3){
                      $sql3 = "SELECT tc_profile_id_pk FROM tbl_tc_profile WHERE user_id_fk='$uid'";
                    $res3 = $this->db->query($sql3);
                    if ($res3->num_rows() > 0) {
                        $row = $res3->row();
                        $tid = $row->tc_profile_id_pk;
                        $sql4 = "SELECT expertise_name FROM tbl_expertise WHERE expertise_id_pk in (select expertise_id_fk from tbl_user_expertise
                                 where user_id_fk=(select user_id_fk from tbl_it_profile where it_profile_id_pk='$tid'))";
                        $res4 = $this->db->query($sql4);
                        while ($row = $res4->_fetch_assoc()) {
                            array_push($result, $row);
                        }
                    } 
                    
                }
            }
        
        return $result;
    }
        
  

    function biddedProjects() {
        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');

        $sql1 = "SELECT count(pro_id_pk),p.pro_id_pk, p.pro_name, p.pro_posted_date, p.pro_bidclose, b.bid_amount
FROM tbl_biddetails b, tbl_projects p
WHERE b.project_id_fk = p.pro_id_pk
AND b.bid_status =0
AND b.user_id_fk ='$userid'";
        $query = $this->db->query($sql1);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }

        return $result;
    }
    
    
  function bidRequests() {
        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');
        $r="select *
                from `tbl_cl_profile` as cp
                inner join `tbl_bid_request` as tbr
                on cp.`user_id_fk`=tbr.`client_id_fk` and tbr.`translator_user_id`='$userid'
                inner join `tbl_projects` as tp
                on tp.`pro_id_pk`=tbr.`project_id_fk`
                where tbr.bid_request_status=0 ";
        $res = $this->db->query($r);
        $result=array();
        if ($res->num_rows() > 0) {
           while ($row = $res->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }
    
    function updateafterbid($proval)
    {
        $userid = $this->session->userdata('login_user_id');
        $query=  $this->db->query("UPDATE `tbl_bid_request` SET `bid_request_status`='1' WHERE `project_id_fk`='$proval' AND `translator_user_id`='$userid'");
        if($query){
            echo "success";
        }
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
            $sql1 = "SELECT count(pro_id_pk),p.pro_id_pk, p.pro_name, b.bid_datetime, b.bid_expcompletion_date, b.bid_amount
FROM tbl_biddetails b, tbl_projects p, tbl_project_client c
WHERE b.project_id_fk = p.pro_id_pk
AND p.pro_id_pk=c.pro_id_fk
AND b.bid_status =0
AND c.client_id_fk ='$cid'";

            $query = $this->db->query($sql1);
            while ($row = $query->_fetch_assoc()) {
                array_push($result, $row);
            }
            return $result;
        }
    }

    function viewProject($id) {
        $result = array();
        $uid=$this->session->userdata('login_user_id');
        $sql1="SELECT pro_status  FROM tbl_projects WHERE pro_id_pk='$id'";
        $query=$this->db->query($sql1);
        if($query->num_rows()>0){
         $row=$query->row();
         $status=$row->pro_status;
       if($status==0){
              $sql2="SELECT * FROM tbl_projects p ,tbl_cl_profile pro ,tbl_project_client c WHERE 
         p.pro_id_pk='$id'
         AND  p.pro_id_pk=c.pro_id_fk
         AND  pro.cl_profile_id_pk=c.client_id_fk";
         $query=$this->db->query($sql2);
       while ($row1 = $query->_fetch_assoc()) {
             array_push($result, $row1);
         }     
         }
       if($status==6){
         $sql = "SELECT * FROM tbl_projects p ,tbl_cl_profile pro ,tbl_project_client c,tbl_biddetails b 
         WHERE  p.pro_id_pk='$id'
         AND  p.pro_id_pk=c.pro_id_fk
         AND  pro.cl_profile_id_pk=c.client_id_fk 
         AND  p.pro_id_pk=b.project_id_fk ";
               
        $query = $this->db->query($sql);
      while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        } 
                } 
        }
        return $result;
    }

    function viewNewproject($id) {
        $result = array();
        $sql = "SELECT * from tbl_projects WHERE pro_id_pk='$id'";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }
function getFiles($id){
     $result = array();
        $sql = "SELECT pro_file_name FROM tbl_project_files WHERE pro_id_fk='$id'";
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

    function updateData($id, $prodesc, $lang_from, $lang_to, $my_dropdown, $proj_bidclose, $proj_complete, $time, $proj_budgetmin, $proj_budgetmax, $onweb, $fileupload) {

        $sql1 = "UPDATE tbl_projects SET 
          pro_desc='$prodesc',
          pro_langfrom='$lang_from',
          pro_langto='$lang_to',
          pro_domain='$my_dropdown',
          pro_bidclose='$proj_bidclose',
          pro_completion='$proj_complete',
          pro_event_time='$time',
          pro_budget_min='$proj_budgetmin',
          pro_budget_max='$proj_budgetmax',
          pro_onwebsite='$onweb'   
          WHERE pro_id_pk='$id'";
        $this->db->query($sql1);
        $sql2 = "SELECT pro_file_name FROM tbl_project_files WHERE  pro_id_fk='$id'";
        $this->db->query($sql2);

        if ($fileupload == ' ') {
            $fileupload = 'nil';
        }
        $sql1 = "INSERT INTO  tbl_project_files(pro_id_fk,pro_file_name) VALUES('$id','$fileupload')";
        $this->db->query($sql1);
        
        return true;
    }

    function browseProject($domain, $offset, $per_pg) {
        $result = array();
        $select = "select";
        $sql = "SELECT * from tbl_projects,tbl_biddetails WHERE
                project_id_fk=pro_id_pk
                AND( (pro_status=6) 
                OR (bid_status=0)
                OR (pro_status=0))";
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
        if ($status == 1) {
            $prostatus = "1";
        }

        if ($status == 2) {
            $prostatus = "2";
        }
        if ($status == 3) {
            $prostatus = "3";
        }
        if ($status == 4) {
            $prostatus = "4";
        }
        if ($status == 5) {
            $prostatus = "5";
        }
        $sql1 = "UPDATE tbl_project_translator SET project_status='$prostatus'
                      WHERE project_id_fk='$id'";
        $this->db->query($sql1);
        $sql2 = "UPDATE tbl_projects SET pro_status='$prostatus'
                      WHERE pro_id_pk='$id'";
        $this->db->query($sql2);
        return true;
    }

    function recommendedProjects() {
        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $sql = "SELECT * FROM tbl_expertise_detail where user_expertise_id_fk='$userid'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            $domain = $row->expertise_domain;
            $langfrom = $row->expertise_source;
            $langto = $row->expertise_target;
            $sql1 = "SELECT * FROM tbl_projects WHERE pro_domain='$domain' OR pro_langfrom='$langfrom'
                    OR pro_langto='$langto'
                    AND pro_status=0";
            $query1 = $this->db->query($sql1);
            if ($query1->num_rows() > 0) {
                $row = $query1->row();
                $pid = $row->pro_id_pk;
                $sql2 = "SELECT * FROM tbl_projects,tbl_cl_profile  WHERE (pro_domain='$domain' OR pro_langfrom='$langfrom'
                        OR pro_langto='$langto')
                        AND cl_profile_id_pk=(SELECT client_id_fk FROM tbl_project_client WHERE pro_id_fk='$pid')
                        AND pro_status=0";
                $query2 = $this->db->query($sql2);
                while ($row = $query2->_fetch_assoc()) {
                    array_push($result, $row);
                }
            }

                }
                 return $result;
    }
    function confirmTranslator($uid,$pid){
        $usid=  $this->session->userdata('login_user_id');
        $sql="SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$usid'";
        $query=$this->db->query($sql);
        if($query->num_rows()>0){
             $row = $query->row();
             $cid=$row->cl_profile_id_pk;
        }
    $sql1="UPDATE tbl_biddetails SET bid_status=1 WHERE user_id_fk='$uid'
            AND project_id_fk='$pid'";
    $this->db->query($sql1);
    $sql2="UPDATE tbl_projects SET pro_status=1
           WHERE pro_id_pk='$pid'";
    $this->db->query($sql2);
   echo $sql3="INSERT INTO tbl_project_translator(trans_userid_fk,cli_id_fk,project_id_fk,project_status,translator_status) VALUES('$uid','$cid','$pid','1','1')";
    $this->db->query($sql3);  
}
function shortlist($uid,$pid){
        $usid=$this->session->userdata('login_user_id');
        $sql="SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$usid'";
        $query=$this->db->query($sql);
        if($query->num_rows()>0){
             $row = $query->row();
             $cid=$row->cl_profile_id_pk;
        }
    $sql1="UPDATE tbl_biddetails SET bid_status=1 WHERE user_id_fk='$uid'
            AND project_id_fk='$pid'";
    $this->db->query($sql1);
    $sql2="UPDATE tbl_projects SET pro_status=1
           WHERE pro_id_pk='$pid'";
    $this->db->query($sql2);
   $sql3="INSERT INTO tbl_project_translator(trans_userid_fk,cli_id_fk,project_id_fk,project_status,translator_status) VALUES('$uid','$cid','$pid','1','2')";
    $this->db->query($sql3);  
}
function ignorelist($uid,$pid){
        $usid=$this->session->userdata('login_user_id');
        $sql="SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$usid'";
        $query=$this->db->query($sql);
        if($query->num_rows()>0){
             $row = $query->row();
             $cid=$row->cl_profile_id_pk;
        }
       $sql1="UPDATE tbl_biddetails SET bid_status=2 WHERE user_id_fk='$uid'
              AND project_id_fk='$pid'";
       $this->db->query($sql1);
       $sql2="UPDATE tbl_projects SET pro_status=6
              WHERE pro_id_pk='$pid'";
       $this->db->query($sql2);
       $sql3="INSERT INTO tbl_project_translator(trans_userid_fk,cli_id_fk,project_id_fk,project_status,translator_status) VALUES('$uid','$cid','$pid','1','3')";
       $this->db->query($sql3);  
}
}

// end of the project_model.php
//location:application/models/project_model.php
?>
