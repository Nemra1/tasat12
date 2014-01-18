<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Feedback_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    function insertFeedback($projectname, $name, $email, $message) {
        $sql = "INSERT INTO tbl_feedback(fdbk_project,fdbk_from,fdbk_email,fdbk_mesg,fdbk_showstatus)
          VALUES('$projectname','$name','$email','$message','2')";
        $this->db->query($sql);
    }

    function viewfeedback($user) {
        $var1 = "";
        $result = array();
        if ($user == "Translators") {
            $var1 = "2";
        }
        if ($user == "TASAT") {
            $var1 = "5";
        }
        $sql = "SELECT * FROM tbl_feedback WHERE fdbk_showstatus='$var1'";
        $query = $this->db->query($sql);
        while ($row = $query->_fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    function GetAutocomplete($options = array()) {
        $this->db->select('pro_name');
        $this->db->like('pro_name', $options['keyword'], 'after');
        $query = $this->db->get('tbl_projects');
        return $query->result();
    }

    /* -----------------------------------Messages-------------------------------------- */

    function message_totranslator($message, $pjtfile) {
        //  $type = $this->session->userdata('login_user_type');
        $userid = $this->session->userdata('login_user_id');
//        $sql = "SELECT it_profile_id_pk FROM tbl_it_profile WHERE tbl_it_profile.user_id_fk IN
//				(SELECT user_id_fk FROM tbl_biddetails WHERE project_id_fk=
//				(SELECT pro_id_fk FROM tbl_project_client WHERE client_id_fk=
//				(SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid')))";
//        $res = $this->db->query($sql);
//        if ($res->num_rows() > 0) {
//            $row = $res->row();
//            $transid = $row->it_profile_id_pk;

        $sql1 = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
        $res1 = $this->db->query($sql1);
        if ($res1->num_rows() > 0) {
            $row = $res1->row();
            $cliid = $row->cl_profile_id_pk;

            $sql2 = "SELECT  pro_id_pk from tbl_projects p,tbl_biddetails b,tbl_it_profile f 
                         WHERE f.it_profile_id_pk ='$transid'
                         AND b.project_id_fk = p.pro_id_pk
                         AND  b.user_id_fk = f.user_id_fk ";
            $res2 = $this->db->query($sql2);
            if ($res2->num_rows() > 0) {
                $row = $res2->row();
                $proid = $row->pro_id_pk;

                $sql3 = "INSERT INTO tbl_message(msg_project_id,msg_client_id,msg_translator_id,msg_status)
                        VALUES('$proid','$cliid','$transid',1)";
                $this->db->query($sql3);
            }
        }

        $sql4 = "SELECT msg_id FROM tbl_message WHERE msg_project_id='$proid' 
                        AND msg_client_id='$cliid' 
                        AND msg_translator_id='$transid'
                        ORDER BY msg_id DESC LIMIT 1";
        $res3 = $this->db->query($sql4);
        if ($res3->num_rows() > 0) {
            $row = $res3->row();
            $msgid_fk = $row->msg_id;

            $sql5 = "INSERT INTO tbl_message_text(msg_id_fk,msg_text,msg_file)
                    VALUES('$msgid_fk','$message','$pjtfile')";
            $this->db->query($sql5);
        }
        return true;
    }

    function message_totasat($message, $pdoc_path) {
        $userid = $this->session->userdata('login_user_id');
        $usertype = $this->session->userdata('login_user_type');
        if ($usertype == 1) {
            echo $sql1 = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$userid'";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $id = $row->cl_profile_id_pk;
            }
        }
        if ($usertype == 2) {
            echo $sql1 = "SELECT it_profile_id_pk FROM tbl_it_profile WHERE user_id_fk='$userid'";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $id = $row->it_profile_id_pk;
            }
        }
        if ($usertype == 3) {
            echo $sql1 = "SELECT  tc_profile_id_pk FROM tbl_tc_profile WHERE user_id_fk='$userid'";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $id = $row->tc_profile_id_pk;
            }
        }
    }

    function messageList($msgid, $pid) {
        $usertype = $this->session->userdata('login_user_type');
        $userid = $this->session->userdata('login_user_id');
        $result = array();
        if ($usertype == 1) {
            $sql1 = "SELECT user_type FROM tbl_user_list WHERE user_id_pk=(SELECT msg_translator_id FROM tbl_message WHERE msg_id='$msgid')";
            $query = $this->db->query($sql1);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $type = $row->user_type;
                if ($type == 2) {
                    $sql2 = "SELECT * FROM tbl_message,tbl_message_text,tbl_projects,tbl_it_profile WHERE 
                    msg_client_id='$userid'
                    AND pro_id_pk='$pid'
                    AND msg_id='$msgid'
                    AND msg_translator_id=user_id_fk
                    ORDER BY msg_id DESC LIMIT 1";
                    $query = $this->db->query($sql2);
                    while ($row = $query->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($type == 3) {
                    $sql2 = "SELECT * FROM tbl_message,tbl_message_text,tbl_projects,tbl_tc_profile WHERE 
                    msg_client_id='$userid'
                    AND pro_id_pk='$pid'
                    AND msg_id='$msgid'
                    AND msg_translator_id=user_id_fk
                    ORDER BY msg_id DESC LIMIT 1";
                    $query = $this->db->query($sql2);
                    while ($row = $query->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        if ($usertype == 2 || $usertype == 3) {
            $sql3 = "SELECT * FROM tbl_message,tbl_message_text,tbl_projects,tbl_cl_profile WHERE 
                    msg_client_id='$userid'
                    AND pro_id_pk='$pid'
                    AND msg_id='$msgid'  
                      AND msg_client_id=user_id_fk   
                    ORDER BY msg_id DESC LIMIT 1";
            $query = $this->db->query($sql3);
            while ($row = $query->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function previousList($pid) {
        $result = array();
        $userid = $this->session->userdata('login_user_id');
        $usertype=$this->session->userdata('login_user_type');
if($usertype==1){
        $sql = "SELECT count(*)-1 a  FROM tbl_message,tbl_message_text WHERE 
                    msg_client_id='$userid'
                    AND msg_project_id='$pid'
                    AND msg_id=msg_id_fk";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
             $count = $row->a;
            $sql1 = "SELECT * FROM tbl_message,tbl_message_text,tbl_projects,tbl_cl_profile WHERE 
                    msg_client_id='$userid'
                    AND pro_id_pk='$pid'
                    AND msg_id=msg_id_fk
                      AND msg_client_id=user_id_fk 
                    ORDER BY msg_id LIMIT 0,$count";
            
            $query1 = $this->db->query($sql1);
            while ($row = $query1->_fetch_assoc()) {
                array_push($result, $row);
           }
     }
}
        return $result;
    }

    
    
    function sentMessage() {
        $result = array();
        $usertype = $this->session->userdata('login_user_type');
        $userid = $this->session->userdata('login_user_id');
        if ($usertype == 1) {
            $sql1 = "SELECT msg_translator_id FROM tbl_message_text,tbl_message 
                          WHERE msg_id_fk=msg_id
                          AND ( msg_status=1 OR msg_status=2)
                          AND  (msg_client_id='$userid')";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $transid = $row->msg_translator_id;

                $sql2 = "SELECT user_type FROM tbl_user_list 
                         WHERE user_id_pk='$transid'";
                $res2 = $this->db->query($sql2);
                if ($res2->num_rows() > 0) {
                    $row = $res2->row();
                    $usertype = $row->user_type;
                }
                if ($usertype == 2) {
                    $sql3 = "SELECT * FROM tbl_message_text t ,tbl_message m,tbl_it_profile  p,tbl_user_list l
                            WHERE msg_id_fk=msg_id
                            AND ( m.msg_status=1 OR m.msg_status=2)
                            AND  (m.msg_client_id='$userid')
                            AND (m.msg_translator_id=p.user_id_fk)
                            AND (l.user_id_pk=p.user_id_fk)";
                    $query = $this->db->query($sql3);
                    while ($row = $query->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($usertype == 3) {
                    $sql4 = "SELECT * FROM tbl_message_text t ,tbl_message m,tbl_tc_profile  p,tbl_user_list l
                        WHERE msg_id_fk=msg_id
                        AND (m.msg_status=1 OR m.msg_status=2)
                        AND  (m.msg_client_id='$userid')
                        AND (m.msg_translator_id=p.user_id_fk)
                        AND (l.user_id_pk=p.user_id_fk)";

                    $query = $this->db->query($sql4);
                    while ($row = $query->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        if (($usertype == 2) || ($usertype == 3)) {

            $sql = "SELECT * FROM tbl_message_text t ,tbl_message m,tbl_cl_profile  p,tbl_user_list l
                        WHERE msg_id_fk=msg_id
                        AND (m.msg_status=3 OR m.msg_status=4)
                        AND  (m.msg_translator_id='$userid')
                        AND (m.msg_client_id=p.user_id_fk)
                        AND (l.user_id_pk=p.user_id_fk)";
            $res1 = $this->db->query($sql);

            while ($row = $res1->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function inboxMessage() {
        $usertype = $this->session->userdata('login_user_type');
        $userid = $this->session->userdata('login_user_id');
        $result = array();
        if ($usertype == 1) {
            $sql1 = "SELECT msg_translator_id FROM tbl_message_text,tbl_message 
                          WHERE msg_id_fk=msg_id
                          AND ( msg_status=3 OR msg_status=5)
                          AND  (msg_client_id='$userid')";
            $res1 = $this->db->query($sql1);
            if ($res1->num_rows() > 0) {
                $row = $res1->row();
                $transid = $row->msg_translator_id;

                $sql2 = "SELECT user_type FROM tbl_user_list 
                         WHERE user_id_pk='$transid'";
                $res2 = $this->db->query($sql2);
                if ($res2->num_rows() > 0) {
                    $row = $res2->row();
                    $usertype = $row->user_type;
                }
                if ($usertype == 2) {
                    $sql3 = "SELECT * FROM tbl_message_text t ,tbl_message m,tbl_it_profile  p,tbl_user_list l
                            WHERE msg_id_fk=msg_id
                            AND ( m.msg_status=3 OR m.msg_status=5)
                            AND  (m.msg_client_id='$userid')
                            AND (m.msg_translator_id=p.user_id_fk)
                            AND (l.user_id_pk=p.user_id_fk)";
                    $query = $this->db->query($sql3);
                    while ($row = $query->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if ($usertype == 3) {
                    $sql4 = "SELECT * FROM tbl_message_text t ,tbl_message m,tbl_tc_profile  p,tbl_user_list l
                        WHERE msg_id_fk=msg_id
                        AND (m.msg_status=3 OR m.msg_status=5)
                        AND  (m.msg_client_id='$userid')
                        AND (m.msg_translator_id=p.user_id_fk)
                        AND (l.user_id_pk=p.user_id_fk)";

                    $query = $this->db->query($sql4);
                    while ($row = $query->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
            }
        }
        if ($usertype == 2 || $usertype == 3) {
            $sql5 = "SELECT * FROM tbl_message_text t ,tbl_message m,tbl_cl_profile  p,tbl_user_list l
                        WHERE msg_id_fk=msg_id
                        AND (m.msg_status=1 OR m.msg_status=6)
                        AND  (m.msg_translator_id='$userid')
                        AND (m.msg_client_id=p.user_id_fk)
                        AND (l.user_id_pk=p.user_id_fk)";
            $query = $this->db->query($sql5);
            while ($row = $query->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function archiveMessage($msgid) {
        $result = array();
         $usertype = $this->session->userdata('login_user_type');
        $sql = "UPDATE tbl_message SET msg_status=5 WHERE msg_id='$msgid'";
        $query = $this->db->query($sql);
        $sql1="SELECT * from tbl_message where msg_status=5";
        $res1=$this->db->query($sql1);
        if ($res1->num_rows() > 0) {
       $row = $res1->row();
        $transid = $row->msg_translator_id;
        $clientid=$row->msg_client_id;
        $sql3="SELECT * FROM tbl_message m,tbl_cl_profile c,tbl_it_profile t,tbl_projects p
                        WHERE m.msg_id='$msgid'
                        AND (msg_status=5)
                        AND  (m.msg_translator_id=t.user_id_fk)
                        AND (m.msg_client_id=c.user_id_fk)
                        AND (p.pro_id_pk=28)";
         $res3=$this->db->query($sql3);
        
        
          while ($row = $res3->_fetch_assoc()) {
                array_push($result, $row);
            }
        }
        return $result;
    }

    function replyMessage($reply, $msgid,$pid,$tid,$cid) {
       $usertype = $this->session->userdata('login_user_type');
       $userid = $this->session->userdata('login_user_id');
       if($usertype==1){
      echo  $sql="INSERT INTO tbl_message_text(msg_id_fk,msg_text)VALUES('$msgid','$reply')";
      $this->db->query($sql);
      echo $sql1="INSERT INTO tbl_message(msg_project_id,msg_client_id,msg_translator_id,msg_admin_id,msg_status) VALUES('$pid','$cid','$tid',0,1)";
        $this->db->query($sql1);
       }
      
    }

    function Autocompletemessage($options = array()) {
        $this->db->select('cl_first_name');
        $this->db->like('cl_first_name', $options['keyword'], 'after');
        $query = $this->db->get('tbl_cl_profile');
        return $query->result();
    }
    function prosuggestions(){
        $res=array();
        $uid= $this->session->userdata('login_user_id');
        $sql1="SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$uid'";
         $query1=$this->db->query($sql1);
         if ($query1->num_rows() > 0) {
        $row = $query1->row();
       $cid = $row->cl_profile_id_pk;
        $sql="SELECT pro_name,pro_id_pk FROM  tbl_projects WHERE pro_id_pk IN (SELECT project_id_fk FROM tbl_project_translator WHERE cli_id_fk='$cid')";
        $result=$this->db->query($sql);
        while ($row = $result->_fetch_assoc()) {
                array_push($res, $row);
            }
         }
        return $res;
    }
    function Autocompletetrans($pid) {
       $company=array();
       $ind=array();
       $result = array();
       $uid= $this->session->userdata('login_user_id');
     echo  $sql1="SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$uid'";
       $query1=$this->db->query($sql1);
       if ($query1->num_rows() > 0) {
       $row = $query1->row();
       $cid = $row->cl_profile_id_pk;
       
     echo  $sql2="SELECT trans_userid_fk  FROM tbl_project_translator WHERE project_id_fk='$pid'
               AND cli_id_fk='$cid'";  
        $query2 = $this->db->query($sql2);
        if ($query2->num_rows() > 0) {
        $row = $query2->row();
        $tuid = $row->trans_userid_fk;
       echo $sql3="SELECT user_type FROM tbl_user_list WHERE user_id_pk='$tuid'";
        $query3 = $this->db->query($sql3);
        if ($query3->num_rows() > 0) {
        $row = $query3->row();
        $type = $row->user_type;
        if($type==2){
       echo $sql4="SELECT it_first_name,it_last_name,user_id_fk,user_type FROM tbl_it_profile,tbl_user_list WHERE user_id_fk='$tuid'
               AND user_id_fk=user_id_pk"; exit;
        $result1=$this->db->query($sql4);
        //$row=$result1->_fetch_assoc();
       //print_r($row);exit;
        while ($row = $result1->_fetch_assoc()) {
                array_push($ind, $row);
           }
          
//        if ($result1->num_rows() > 0) {
//        $row = $result1->row();
//           $itname = $row->it_first_name;
//           $itlast= $row->it_last_name;
//          $result[0]=  $itname.' '.$itlast;
//          $result[1]=$row->user_id_fk;
        //return $result;
                    }
              
       if($type==3){
         $sql5="SELECT tc_first_name,user_id_fk FROM tbl_tc_profile  WHERE user_id_fk='$tuid'";  
         $result=$this->db->query($sql5);
        while ($row = $result->_fetch_assoc()) {
                array_push($company, $row);
            }
       }
     
       
       $result[0]=$ind[0]['user_id_fk'].''.$company[0]['user_id_fk'];
       $result[1]=$ind[0]['it_first_name'].''.$company[0]['tc_first_name'];
            
               }
               
               //print_r($result);
          }
         }
          print_r($ind);
     return $result;
   
    }

//    function Autocompletetrans($options = array(), $id) {
//       echo  $sql1 = "SELECT cl_profile_id_pk FROM tbl_cl_profile WHERE user_id_fk='$id'";
//        $query1 = $this->db->query($sql1);
//        if ($query1->num_rows() > 0) {
//            $cid = $query1->cl_profile_id_pk;
//        
//      echo  $sql2 = "SELECT trans_userid_fk  FROM tbl_project_translator  WHERE cli_id_fk='$cid'";
//        $query2 = $this->db->query($sql2);
//        if ($query2->num_rows() > 0) {
//            $tuid = $query2->trans_userid_fk;
//        echo    $sql3 = "SELECT user_type  from tbl_user_list WHERE user_id_pk='$tuid'";
//            $query3 = $this->db->query($sql3);
//            if ($query3->num_rows() > 0) {
//                $type = $query3->user_type;
//                if ($type == 2) {
//            echo   $sql4 = "SELECT it_first_name,it_last_name FROM tbl_it_profile where user_id_fk='$tuid'";
//                    $query4 = $this->db->query($sql4);
//                    return $query4->result();
//                }
//                if ($type == 3) {
//               echo     $sql5 = "SELECT tc_first_name FROM tbl_tc_profile where user_id_fk='$tuid'";
//                    $query5 = $this->db->query($sql4);
//                  return $query5->result();
//                } 
//                
//            }
//        } 
//        }
    // return $profiledata ;
    // }

    function Autoprojectclient($options = array(), $username) {
        $sql = "SELECT DISTINCT pro_name
FROM tbl_projects, tbl_cl_profile, tbl_project_client
WHERE pro_name LIKE '$options[keyword]%'
AND tbl_projects.pro_id_pk = tbl_project_client.pro_id_fk
AND client_id_fk = (
SELECT cl_profile_id_pk
FROM tbl_cl_profile
WHERE cl_first_name ='$username')";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function Autoprojecttrans($options = array(), $username) {

        $sql = "SELECT  pro_name from tbl_projects p,tbl_biddetails b,tbl_it_profile f 
                WHERE  CONCAT(it_first_name, ' ',it_last_name)='$username'
                AND b.project_id_fk = p.pro_id_pk
                AND  b.user_id_fk = f.user_id_fk ";
        $query = $this->db->query($sql);
        return $query->result();
    }

}

//end of feedback_model.php
//location:application/models/feedback_model.php
?>
