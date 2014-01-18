<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gen_model extends CI_model {

    function __construct() {
        parent::__construct();
    }

    function getallcountries() {
        //start
        $countylist = array();
        $status = 0;
        $qry = "select * from tbl_countries where status = ? ";
        $query = $this->db->query($qry, array($status));
        if ($query->num_rows() > 0) {
            $countylist = $query->result();
        }
        return $countylist;
        //end
    }

    function getlanguage() {
        //start
        $language = array();
        $stmt = "select * from tbl_language";
        $qury = $this->db->query($stmt);
        if ($qury->num_rows() > 0) {
            $language = $qury->result();
        }
        return $language;
        //end
    }
    
    function newlanguage($l){
        $stat = "1";
        $qur = "insert into tbl_language (language_name, language_status) values ('$l','$stat')";
        $res = $this->db->query($qur);
        if ($res) {
           $qry = "SELECT * FROM  `tbl_language` ORDER BY  `tbl_language`.`language_id_pk` DESC LIMIT 1";
           $query = $this->db->query($qry);
           $lanarr = array();
           while($row=$query->_fetch_assoc())
           {
               array_push($lanarr, $row);
           }
            return $lanarr;
        } else {
            return false;
        }
    }
    
    function chnglangstatus($a){
        $qur1 = "select language_status from tbl_language where language_id_pk= '$a'";
        $res1 = $this->db->query($qur1);
        $row = $res1->row(); 
        //$st = $row->language_status;
        
        if($row->language_status == 0)
        {
         $cst = "1";   
        }else{
         $cst = "0";            
        }
        
        $qur = "update tbl_language set language_status = '$cst' where language_id_pk= '$a'";
        $qury = $this->db->query($qur);
        if($qury)
            return "changed";
        else
            return "error";
        // return $qur;
    }
    
    function rmvlang($a){
        $qur = "DELETE FROM tbl_language WHERE language_id_pk= '$a'";
        $qury = $this->db->query($qur);
        if($qury)
            return "removed";
        else
            return "error";
    }
            
            
    function getdomain() {
        //start
        $domain = array();
        $stmt = "select * from tbl_domain where domain_status = 1 ";
        $qury = $this->db->query($stmt);
        if ($qury->num_rows() > 0) {
            $domain = $qury->result();
        }
        return $domain;
        //end
    }
    
    function getcurrency() {
        //start
        $currency = array();
        $stmt = "select * from tbl_currency where currency_status = 1 ";
        $qury = $this->db->query($stmt);
        if ($qury->num_rows() > 0) {
            $currency = $qury->result();
        }
        return $currency;
        //end
    }

    function viewShortlisted() {
        $result=array();
        $sql1 = "select * from tbl_project_translator where translator_status=2 ";
        $query1 = $this->db->query($sql1);
        if ($query1->num_rows() > 0) {
            $row = $query1->row();
            $tans_uid = $row->trans_userid_fk;
            $cid = $row->cli_id_fk;
            $pid = $row->project_id_fk;

            $sql2 = "select user_type from tbl_user_list where user_id_pk='$tans_uid'";
            $query2 = $this->db->query($sql2);
            if ($query2->num_rows() > 0) {
                $row = $query2->row();
                $usertype = $row->user_type;
                if($usertype==2){
                  $sql3="SELECT *
FROM tbl_biddetails AS bid, tbl_it_profile AS c,tbl_project_translator AS t,tbl_user_list AS u,tbl_user_expertise AS e,tbl_projects AS p
WHERE bid.project_id_fk ='$pid'
and bid.bid_status=1
and bid.user_id_fk=c.user_id_fk 
and t.translator_status=2
and t.trans_userid_fk=bid.user_id_fk
and e.user_id_fk=u.user_id_pk
and p.pro_id_pk='$pid'
and u.user_id_pk=bid.user_id_fk";  
                   $query3 = $this->db->query($sql3);
                    while ($row = $query3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if($usertype==3){
                    $sql4="SELECT *
FROM tbl_biddetails AS bid, tbl_tc_profile AS c,tbl_project_translator AS t,tbl_user_list AS u,tbl_user_expertise AS e,tbl_projects AS p
WHERE bid.project_id_fk ='$pid'
and bid.bid_status=1
and bid.user_id_fk=c.user_id_fk 
and t.translator_status=2
and t.trans_userid_fk=bid.user_id_fk
and e.user_id_fk=u.user_id_pk
and p.pro_id_pk='$pid'
and u.user_id_pk=bid.user_id_fk";
                
                 $query4 = $this->db->query($sql4);
                    while ($row = $query4->_fetch_assoc()) {
                        array_push($result, $row);
                    }
            }
        }
    }
return $result;

}
 function viewIgnorelist() {
        $result=array();
        $sql1 = "select * from tbl_project_translator where translator_status=3";
        $query1 = $this->db->query($sql1);
        if ($query1->num_rows() > 0) {
            $row = $query1->row();
            $tans_uid = $row->trans_userid_fk;
            $cid = $row->cli_id_fk;
            $pid = $row->project_id_fk;

            $sql2 = "select user_type from tbl_user_list where user_id_pk='$tans_uid'";
            $query2 = $this->db->query($sql2);
            if ($query2->num_rows() > 0) {
                $row = $query2->row();
                $usertype = $row->user_type;
                if($usertype==2){
                  $sql3="SELECT *
FROM tbl_biddetails AS bid, tbl_it_profile AS c,tbl_project_translator AS t,tbl_user_list AS u,tbl_user_expertise AS e,tbl_projects AS p
WHERE bid.project_id_fk ='$pid'
and bid.bid_status=1
and bid.user_id_fk=c.user_id_fk 
and t.translator_status=3
and t.trans_userid_fk=bid.user_id_fk
and e.user_id_fk=u.user_id_pk
and p.pro_id_pk='$pid'
and u.user_id_pk=bid.user_id_fk";  
                   $query3 = $this->db->query($sql3);
                    while ($row = $query3->_fetch_assoc()) {
                        array_push($result, $row);
                    }
                }
                if($usertype==3){
                    $sql4="SELECT *
FROM tbl_biddetails AS bid, tbl_tc_profile AS c,tbl_project_translator AS t,tbl_user_list AS u,tbl_user_expertise AS e,tbl_projects AS p
WHERE bid.project_id_fk ='$pid'
and bid.bid_status=1
and bid.user_id_fk=c.user_id_fk 
and t.translator_status=3
and t.trans_userid_fk=bid.user_id_fk
and e.user_id_fk=u.user_id_pk
and p.pro_id_pk='$pid'
and u.user_id_pk=bid.user_id_fk";
                
                 $query4 = $this->db->query($sql4);
                    while ($row = $query4->_fetch_assoc()) {
                        array_push($result, $row);
                    }
            }
        }
    }
return $result;

}
///////////////////////safi code starts/////////////////////
function translatorlist($list=array())
    {
        $val1=$list['tval'];
        $eval=$list['eval'];
        $slang=$list['slang'];
        $tlang=$list['tlang'];
        $loc=$list['loc'];
        $where = array();
        $where1 = array();
        $result=array();
        if (!(empty($val1))) {
           $where[] = " ted.`expertise_domain` = '{$val1}' ";
           $where1[] = " ted.`expertise_domain` = '{$val1}' ";
        }
        if (!(empty($eval))) {
           $where[] = " te.`expertise_name` = '{$eval}' ";
           $where1[] = " te.`expertise_name` = '{$eval}' ";
        }
        if (!(empty($slang))) {
           $where[] = " ted.`expertise_source` = '{$slang}' ";
           $where1[] = " ted.`expertise_source` = '{$slang}' ";
        }
        if (!(empty($tlang))) {
           $where[] = " ted.`expertise_target` = '{$tlang}' ";
           $where1[] = " ted.`expertise_target` = '{$tlang}' ";
        }
        if (!(empty($loc))) {
           $where[] = " tip.`it_country` = '{$loc}'";
           $where1[] = " tcp.`tc_country` = '{$loc}'";
        }
        if(!(empty($where))&&!(empty($where1))){
            $query['where'] = ' WHERE '. implode(' AND ', $where);
            $query1['where1'] = ' WHERE '. implode(' AND ', $where1);
        }
        $sql1="select distinct tip.`user_id_fk`, tip.`it_first_name`, tip.`it_last_name`, tip.`it_about`,tcnt.`country_name`, tpl.`pref_status`,
                tue.expertise_id_fk,tue.user_expertise_id_pk, te.expertise_name,ted.expertise_domain,ted.expertise_source,ted.expertise_target,
                tul.user_type , tip.it_patronymic               
                from tbl_it_profile as tip
                left join tbl_preferred_list as tpl
                on tpl.translator_id=tip.user_id_fk
                left join tbl_user_expertise as tue
                on tip.user_id_fk=tue.user_id_fk
                left join tbl_expertise as te
                on te.expertise_id_pk=tue.expertise_id_fk
                INNER JOIN tbl_user_list as tul
                ON tul.user_type=2
                left join tbl_expertise_detail as ted
                on ted.user_expertise_id_fk=tue.user_expertise_id_pk
                inner join tbl_countries as tcnt
                on tip.it_country=tcnt.ctrycode".$query['where']."ORDER BY tip.user_id_fk DESC";
         
       $res1=$this->db->query($sql1);
        while($row1=$res1->_fetch_assoc())
        {
            array_push($result, $row1);
        }
        $sql2="select distinct tcp.`user_id_fk`, tcp.`tc_first_name`, tcp.`tc_about`,tcnt.`country_name`, tpl.`pref_status`,
                tue.expertise_id_fk,tue.user_expertise_id_pk, te.expertise_name,ted.expertise_domain,ted.expertise_source,ted.expertise_target,
                tul.user_type
                from tbl_tc_profile as tcp
                left join tbl_preferred_list as tpl
                on tpl.translator_id=tcp.user_id_fk
                left join tbl_user_expertise as tue
                on tcp.user_id_fk=tue.user_id_fk
                left join tbl_expertise as te
                on te.expertise_id_pk=tue.expertise_id_fk
                left join tbl_expertise_detail as ted
                on ted.user_expertise_id_fk=tue.user_expertise_id_pk
                INNER JOIN tbl_user_list as tul
                ON tul.user_type=3
                inner join tbl_countries as tcnt
                on tcp.tc_country=tcnt.ctrycode".$query1['where1']."ORDER BY tcp.user_id_fk DESC";
        $res2=  $this->db->query($sql2);
        while($row2=$res2->_fetch_assoc()){
         array_push($result, $row2);
        }
        return $result;
        //print_r($result);
    }
    
    function translatorlist1($list1 = array()) {
        //echo $list1['tval'];
        $query1 =  "SELECT it.`user_id_fk`, it.it_patronymic  , it.`it_first_name`,it.`it_last_name`, it.`it_about`, tpl.`pref_status`
                    FROM tbl_it_profile as it
                    LEFT JOIN tbl_preferred_list as tpl
                    ON it.user_id_fk=tpl.translator_id
                    ORDER BY it.user_id_fk;";
        //$query1 = "SELECT it.`user_id_fk`, it.`it_first_name`,it.`it_last_name`, it.`it_about` 
         //   FROM `tbl_it_profile` as it
         //       ORDER BY `user_id_fk` DESC";
        $res1 = $this->db->query($query1);
        if ($res1->num_rows() > 0) {
            $result1 = array();
            while ($row1 = $res1->_fetch_assoc()) {
                array_push($result1, $row1);
            }
        }
        return $result1;
    }
    

    function translatorlist2($list2 = array()) {
        $query2 =  "SELECT tc.`user_id_fk`, tc.`tc_first_name`, tc.`tc_about`, tpl.pref_status
                    FROM tbl_tc_profile as tc
                    LEFT JOIN tbl_preferred_list as tpl
                    ON tc.user_id_fk=tpl.translator_id
                    ORDER BY tc.user_id_fk";
        //$query2 = "SELECT `user_id_fk`, `tc_first_name`, `tc_about` FROM `tbl_tc_profile`
         //       ORDER BY `user_id_fk` DESC";
        $res2 = $this->db->query($query2);
        if ($res2->num_rows() > 0) {
            $result2 = array();
            while ($row2 = $res2->_fetch_assoc()) {
                array_push($result2, $row2);
            }
        }
        return $result2;
    }
    
    function preftranslator()
    {
        $r1=array();
       $query1 =  "SELECT it.`user_id_fk`, it.it_patronymic  , it.`it_first_name`,it.`it_last_name`, it.`it_about`, tpl.`pref_status`, tul.user_type
                    FROM tbl_it_profile as it
                    INNER JOIN tbl_preferred_list as tpl
                    ON it.user_id_fk=tpl.translator_id and tpl.pref_status=1
                    INNER JOIN tbl_user_list as tul
                    ON tul.user_id_pk=it.user_id_fk
                    ORDER BY it.user_id_fk";
       $res1 = $this->db->query($query1);
        if ($res1->num_rows() > 0) {
            $result1 = array();
            while ($row1 = $res1->_fetch_assoc()) {
                array_push($r1, $row1);
            }
        }
        $query2 =  "SELECT tc.`user_id_fk`, tc.`tc_first_name`, tc.`tc_about`, tpl.pref_status, tul.user_type
                    FROM tbl_tc_profile as tc
                    INNER JOIN tbl_preferred_list as tpl
                    ON tc.user_id_fk=tpl.translator_id and tpl.pref_status=1
                    INNER JOIN tbl_user_list as tul
                    ON tul.user_id_pk=tc.user_id_fk
                    ORDER BY tc.user_id_fk";
        $res2 = $this->db->query($query2);
        if ($res2->num_rows() > 0) {
            $result2 = array();
            while ($row2 = $res2->_fetch_assoc()) {
                array_push($r1, $row2);
            }
        }
        return $r1;
    }
    
    function preftransfilter($list=array())
    {
        $val1=$list['tval'];
        $eval=$list['eval'];
        $slang=$list['slang'];
        $tlang=$list['tlang'];
        $loc=$list['loc'];
        $where = array();
        $where1 = array();
        $result=array();
        if (!(empty($val1))) {
           $where[] = " ted.`expertise_domain` = '{$val1}' ";
           $where1[] = " ted.`expertise_domain` = '{$val1}' ";
        }
        if (!(empty($eval))) {
           $where[] = " te.`expertise_name` = '{$eval}' ";
           $where1[] = " te.`expertise_name` = '{$eval}' ";
        }
        if (!(empty($slang))) {
           $where[] = " ted.`expertise_source` = '{$slang}' ";
           $where1[] = " ted.`expertise_source` = '{$slang}' ";
        }
        if (!(empty($tlang))) {
           $where[] = " ted.`expertise_target` = '{$tlang}' ";
           $where1[] = " ted.`expertise_target` = '{$tlang}' ";
        }
        if (!(empty($loc))) {
           $where[] = " tip.`it_country` = '{$loc}'";
           $where1[] = " tcp.`tc_country` = '{$loc}'";
        }
        if(!(empty($where))&&!(empty($where1))){
            $query['where'] = ' WHERE '. implode(' AND ', $where);
            $query1['where1'] = ' WHERE '. implode(' AND ', $where1);
        }
        $sql1="select distinct tip.`user_id_fk`, tip.`it_first_name`, tip.`it_last_name`, tip.`it_about`,tcnt.`country_name`, tpl.`pref_status`,
                tue.expertise_id_fk,tue.user_expertise_id_pk, te.expertise_name,ted.expertise_domain,ted.expertise_source,ted.expertise_target,
                tul.user_type , tip.it_patronymic                 
                from tbl_it_profile as tip
                inner join tbl_preferred_list as tpl
                on tpl.translator_id=tip.user_id_fk and tpl.pref_status=1
                left join tbl_user_expertise as tue
                on tip.user_id_fk=tue.user_id_fk
                left join tbl_expertise as te
                on te.expertise_id_pk=tue.expertise_id_fk
                INNER JOIN tbl_user_list as tul
                ON tul.user_type=2
                left join tbl_expertise_detail as ted
                on ted.user_expertise_id_fk=tue.user_expertise_id_pk
                inner join tbl_countries as tcnt
                on tip.it_country=tcnt.ctrycode".$query['where']."ORDER BY tip.user_id_fk DESC";
         
       $res1=$this->db->query($sql1);
        while($row1=$res1->_fetch_assoc())
        {
            array_push($result, $row1);
        }
        $sql2="select distinct tcp.`user_id_fk`, tcp.`tc_first_name`, tcp.`tc_about`,tcnt.`country_name`, tpl.`pref_status`,
                tue.expertise_id_fk,tue.user_expertise_id_pk, te.expertise_name,ted.expertise_domain,ted.expertise_source,ted.expertise_target,
                tul.user_type
                from tbl_tc_profile as tcp
                inner join tbl_preferred_list as tpl
                on tpl.translator_id=tcp.user_id_fk and tpl.pref_status=1
                left join tbl_user_expertise as tue
                on tcp.user_id_fk=tue.user_id_fk
                left join tbl_expertise as te
                on te.expertise_id_pk=tue.expertise_id_fk
                left join tbl_expertise_detail as ted
                on ted.user_expertise_id_fk=tue.user_expertise_id_pk
                INNER JOIN tbl_user_list as tul
                ON tul.user_type=3
                inner join tbl_countries as tcnt
                on tcp.tc_country=tcnt.ctrycode".$query1['where1']."ORDER BY tcp.user_id_fk DESC";
        $res2=  $this->db->query($sql2);
        while($row2=$res2->_fetch_assoc()){
         array_push($result, $row2);
        }
        return $result;
        //print_r($result);
    }
    
    function itandtcprofiledata($ittcval)
    {
        echo $ittcval;
        $res=  $this->db->query("SELECT `user_type` FROM `tbl_user_list` WHERE `user_id_pk`='$ittcval'");
        if($res->num_rows()==1){//this will check the number rows of it or tc
            foreach ($res->result() as $row)
            {
               $type= $row->user_type;//this will returns the type 
            }
            if($type==2)
            {   //it
                $r="SELECT * FROM `tbl_it_profile` as it, `tbl_user_list` as ul WHERE it.`user_id_fk`='$ittcval' AND ul.`user_id_pk`='$ittcval'";
                $result4=  $this->db->query($r);
                //$result4=  $this->db->query("SELECT * FROM `tbl_it_profile` WHERE `user_id_fk`='$ittcval'");
                $res4 = array();
                while ($row2 = $result4->_fetch_assoc()) {
                    array_push($res4, $row2);
                }
               // print_r($res4);
                return $res4;
            }else{                //tc
                $result5=  $this->db->query("SELECT * FROM `tbl_tc_profile` WHERE `user_id_fk`='$ittcval'");
                $res5 = array();
                while ($row2 = $result5->_fetch_assoc()) {
                    array_push($res5, $row2);
                }
               //print_r($res5);
                return $res5;
            }
        }else{
            echo "sorry for inconvenience";
        }
    }
    
    function expertisedomainitandtc($exval) {
        $q3 = "select `expertise_name`, `user_id_fk` from`tbl_expertise` as `te`
                join `tbl_user_expertise` as `tue`
                on
                `expertise_id_pk`=`expertise_id_fk`
                and `user_id_fk`='$exval'";
        $res3 = $this->db->query($q3);
        if ($res3->num_rows() > 0) {
            $result3 = array();
            while ($row3 = $res3->_fetch_assoc()) {
                array_push($result3, $row3);
            }
            return $result3;
        } else {
            echo "No expertise found...!!!";
        }
    }
    
    function getallprojectlist($u)
    {
        $query=  $this->db->query("SELECT `cl_profile_id_pk` FROM `tbl_cl_profile` WHERE `user_id_fk`='$u'");
        $res=  $query->row()->cl_profile_id_pk;
        $query1=  $this->db->query("SELECT tp.pro_name, tp.pro_id_pk
                 FROM tbl_projects as tp
                 JOIN tbl_project_client as tpc
                 ON tpc.client_id_fk='$res' AND tpc.pro_id_fk=tp.pro_id_pk;");
        if($query1->num_rows()>0)
        {
            $plist=array();
            while ($row=$query1->_fetch_assoc())
            {
                array_push($plist, $row);
            }
            return $plist;
        }else{
            echo "no rows found";
        }
    }
    
    function prolistdet($tid, $cid, $pid)
    {
        $q=  $this->db->query("SELECT `translator_user_id`, `project_id_fk` FROM `tbl_bid_request`
            WHERE `translator_user_id`='$tid' and `project_id_fk`='$pid'");
        if($q->num_rows()==1){
            echo "you already bidded this project successfully...!!!";
        }else{
            $res=$this->db->query("INSERT INTO `tbl_bid_request`(`client_id_fk`, `translator_user_id`,
                     `project_id_fk`, `bid_request_status`) VALUES ('$cid','$tid','$pid','0')");
        if($res){ echo "You bidded this project successfully";}else{echo "Failed to bid";}
        }
    }
    
    function trackbidprojit($uid)
    {
        echo "select tip.`it_first_name`, tip.`it_last_name`, tp.`pro_name`,
                                    tp.`pro_type`, tp.`pro_bidclose`, tc.`country_name`, tbr.`bid_request_status`
                                    from `tbl_bid_request` as tbr
                                    inner join `tbl_user_list` as tul
                                    on tul.`user_id_pk`=tbr.`translator_user_id` and tbr.`client_id_fk`='$uid'
                                    inner join `tbl_projects` as tp
                                    on tp.`pro_id_pk`=tbr.`project_id_fk`
                                    inner join `tbl_it_profile` as tip
                                    on tip.`user_id_fk`=tbr.`translator_user_id` and tul.`user_type`='2'
                                    inner join `tbl_countries` as tc
                                    on tc.`ctrycode`=tip.`it_country`";
       $query=  $this->db->query("select tip.`it_first_name`, tip.`it_last_name`, tp.`pro_name`,
                                    tp.`pro_type`, tp.`pro_bidclose`, tc.`country_name`, tbr.`bid_request_status`
                                    from `tbl_bid_request` as tbr
                                    inner join `tbl_user_list` as tul
                                    on tul.`user_id_pk`=tbr.`translator_user_id` and tbr.`client_id_fk`='$uid'
                                    inner join `tbl_projects` as tp
                                    on tp.`pro_id_pk`=tbr.`project_id_fk`
                                    inner join `tbl_it_profile` as tip
                                    on tip.`user_id_fk`=tbr.`translator_user_id` and tul.`user_type`='2'
                                    inner join `tbl_countries` as tc
                                    on tc.`ctrycode`=tip.`it_country`");
        if($query->num_rows()>0){
            $pblistit=array();
            while ($row=$query->_fetch_assoc())
            {
                array_push($pblistit, $row);
            }
            return $pblistit;
        }
    }
    function trackbidprojtc($uid)
    {
        //echo "SELECT `translator_user_id` FROM `tbl_bid_request` WHERE `client_id_fk`='$uid'";
        //$res=  $this->db->query("SELECT `translator_user_id` FROM `tbl_bid_request` WHERE `client_id_fk`='$uid'");
        $r="select tcp.`tc_first_name`, tp.`pro_name`, tp.`pro_type`, tp.`pro_bidclose`, tc.`country_name`, tbr.`bid_request_status`
                                    from `tbl_bid_request` as tbr
                                    inner join `tbl_user_list` as tul
                                    on tul.`user_id_pk`=tbr.`translator_user_id` and tbr.`client_id_fk`='$uid'
                                    inner join `tbl_projects` as tp
                                    on tp.`pro_id_pk`=tbr.`project_id_fk`
                                    inner join `tbl_tc_profile` as tcp
                                    on tcp.`user_id_fk`=tbr.`translator_user_id` and tul.`user_type`='3'
                                    inner join `tbl_countries` as tc
                                    on tc.`ctrycode`=tcp.`tc_country`";
        $query=  $this->db->query($r);
        if($query->num_rows()>0){
            $pblisttc=array();
            while ($row=$query->_fetch_assoc())
            {
                array_push($pblisttc, $row);
            }
            return $pblisttc;
        }
    }
    function addpreferred($cid,$uid)
    {
        //echo "SELECT * FROM `tbl_preferred_list` where `client_id`='$cid' and `translator_id`='$uid' and `pref_status`='1'";
        $q=  $this->db->query("SELECT * FROM `tbl_preferred_list` where `client_id`='$cid' and `translator_id`='$uid' and `pref_status`='1'");
        if($q->num_rows()==0){
            $query="INSERT INTO `tbl_preferred_list`(`client_id`, `translator_id`, `pref_status`) VALUES ('$cid','$uid','1')";
            $res=$this->db->query($query);
            if($res){
                echo "0";//successfully preferred
            }else{
                echo "1";//sorry not referred... try once again!!!
             }
        }else{    
            echo "2";//You already preferred to this translator.
        }
    }
///////////////////////safi code ends/////////////////////

}
?>