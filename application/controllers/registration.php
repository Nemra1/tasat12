<?php
if(!defined('BASEPATH')) exit('No direct script access allowed'); //Client registration controller

class Registration extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        //start
        redirect(WEB_URL . 'registration/logindetails');
        //end	
    }

    function logindetails() {
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('uname', 'Username', 'required');
        $this->form_validation->set_rules('pswd', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('pass', 'Confirm Password', 'required|matches[pswd]|min_length[6]');
        $this->form_validation->set_rules('pemail', 'Email', 'required|valid_email');
        $this->form_validation->set_message('matches', 'Password Mismatch. Re-type Password.');
        $this->form_validation->set_rules('captcha', 'Captcha.', 'required|callback_captcha_check');
        
        
        if ($this->form_validation->run() == FALSE)
        {
            $word =$this->randLetter();
                $vals = array(  'word'       => $word,
                                'img_path'	 => './captcha/',
                                'img_url'	 => IMG_PATH.'captcha/',
                                'font_path'     => './fonts/ALGER.TTF',
                                'img_width'	 => '280',
                                'img_height' => 30,
                                'expiration' => 7200
                                );
                $cap = create_captcha($vals);
                
                               
                 $caps = array(
                    'captcha_id'    => '',
                    'captcha_time'    => $cap['time'],
                    'ip_address'    => $this->input->ip_address(),
                    'word'            => $cap['word']
                );

                $this->user_model->insert_captcha($caps);
                $data['image']=$cap['image'];

                $this->load->view('cms/cmsmeta1_view', $data);
                $this->load->view('cms/langnmenu2_view');
                $this->load->view('cms/bluestrip3_view');
                $this->load->view('client/client_regstep1_view');
                $this->load->view('cms/registeration5_view');
                $this->load->view('cms/footer6_view');
        }
        else
        {
                $patr = $_POST['patr'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $uname = $_POST['uname'];
                $pass = $_POST['pass'];
                $pemail = $_POST['pemail'];
                $usertype = $_POST['usertype'];
                $regdate = $_POST['regdate'];
                $activation = md5(uniqid(rand(), true));
                $this->user_model->registeruser($patr, $fname, $lname, $uname, $pass, $pemail, $usertype, $regdate, $activation);

                //echo WEB_URL.'activate/verify/'.$activation;
                //echo '<a href="'.WEB_URL.'activate/verify/'.$activation.'">Click Here</a> to activate your Profile.';

                /*****Activation Mail*****/

                $this->email->from('no-reply@callinterpreter.com', 'Call Interpreter');
                $this->email->to($pemail);
                $this->email->reply_to('blessy@mangium.com');
                $this->email->subject('Activate your Call Interpreter Profile.');

                $msg='<html><body><table>';         
                $msg='<table><tr><td><img src="'.IMG_PATH.'images/logo.jpg"'.'></td></tr>';
                $msg.='<tr><td> </td></tr>';
                $msg.='<tr><td><b>Hi! '.$fname." ".$lname.'</b>, (USERNAME: '.$uname.')</td></tr>';
                $msg.='<tr><td>Thank You for connecting with Call Interpreter, an Interpreters call center.</td></tr>';
                $msg.='<tr><td><a href="'.WEB_URL.'activate/verify/'.$activation.'">Click Here</a> to activate your Profile.</td></tr>';
                //$msg.='<tr><td>If you have problems, please paste the above URL into your web browser.</td></tr>';
                $msg.='<tr><td> </td></tr><tr><td> </td></tr>';
                $msg.='<tr><td>Thanks,</td></tr>';
                $msg.='<tr><td><B>Call Interpreter Support<b/></td></tr>';
                $msg.='</table></body></html>';  

                //echo $msg;
                $this->email->message($msg);

                if ($this->email->send()) {
                    //echo 'Your email was sent.';
                    redirect(WEB_URL.'registration/personalinfo');
                    //$session_id = $this->session->userdata('session_id');
                } else {
                    show_error($this->email->print_debugger());
                }
        }       
        //end
    }
        
    function randLetter()
    {
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $str = '';
            for ($i = 0; $i < 8; $i++)
            {
                $str .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
            }

            $word = $str;
            return $word;
    }
        
    function captcha_check()
    {
            // Then see if a captcha exists:
            $exp=time()-600;
            $sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
            $binds = array($this->input->post('captcha'), $this->input->ip_address(), $exp);
            $query = $this->db->query($sql, $binds);
            $row = $query->row();

            if ($row->count == 0)
            {
                $this->form_validation->set_message('captcha_check', 'Re-enter the verification code.');
                return FALSE;
            }else{
                return TRUE;
            }
   }

   function personalinfo() 
   {
        //start
        /* load js start here */
        $impcss = array();
        $data['impcss'] = $impcss;
        $impjs = array();
        $data['impjs'] = $impjs;
        /* load js end here */
        //$data['citylist'] = $this->gen_model->getallcities();

        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        $this->form_validation->set_rules('about', 'About', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('smail', 'Email', 'valid_email');
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'is_natural');
        $this->form_validation->set_rules('pcontact', 'Contact', 'required|is_natural');
        $this->form_validation->set_rules('scontact', 'Contact', 'is_natural');
        $this->form_validation->set_rules('fax', 'FAX', 'is_natural');
        $this->form_validation->set_rules('country', 'Country','callback_country_check');
                
        
        if ($this->form_validation->run() == FALSE)
        {
            $data['suid'] = $this->session->userdata('userid');
            $data['suname'] =  $this->session->userdata('username');
            $data['suemail'] =  $this->session->userdata('email');
            if($data['suid']== "")
            {
                redirect(WEB_URL.'registration/logindetails');
                //echo 'no id';
            }else{
		$data['countylist'] = $this->gen_model->getallcountries();
            $this->load->view('cms/cmsmeta1_view',$data);
            $this->load->view('cms/langnmenu2_view');
            $this->load->view('cms/bluestrip3_view');
            $this->load->view('client/client_regstep2_view');
            $this->load->view('cms/registeration5_view');
            $this->load->view('cms/footer6_view');           
            }
        }
        else
        {
            $about = $_POST['about'];
          //  echo '<br>';
            $dob = date('Y-m-d',strtotime($_POST['dob']));
          //  echo '<br>';
            
            $native = $_POST['native'];
         //   echo '<br>';
            
            $country = $_POST['country'];
          //  echo '<br>';
            
            $add = $_POST['address'];
            if(empty($add))$add = "NULL";
          //  echo '<br>';
            
            $city = $_POST['city'];
            if(empty($city))$city = "NULL";
           // echo '<br>';
            
            $zipcd = $_POST['zipcode'];
            if(empty($zipcd))$zipcd = "NULL";
          //  echo '<br>';
            
            $smail = $_POST['smail'];
            if(empty($smail))$smail = "NULL";
           // echo '<br>';
            
            $pcontact = $_POST['pcontact'];
          //  echo '<br>';
            
            $scontact = $_POST['scontact'];
            if(empty($scontact))$scontact = "NULL";
            //echo '<br>';
            
            $fax = $_POST['fax'];
            if(empty($fax))$fax = "NULL";
           // echo '<br>';
            
           $sval1 = $_POST['suid'];
            //echo '<br>';
            
           $pic = $_FILES['profilepic']['name'];
           //echo $_FILES['file']['type'];
           //echo $_FILES['file']['size'];
           if($pic != "")
           {
            $allowedExts = array("gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["profilepic"]["name"]);
            $extension = end($temp);
            if ((($_FILES["profilepic"]["type"] == "image/gif")
            || ($_FILES["profilepic"]["type"] == "image/jpeg")
            || ($_FILES["profilepic"]["type"] == "image/jpg")
            || ($_FILES["profilepic"]["type"] == "image/pjpeg")
            || ($_FILES["profilepic"]["type"] == "image/x-png")
            || ($_FILES["profilepic"]["type"] == "image/png"))
            && ($_FILES["profilepic"]["size"] < 2097152)
            && in_array($extension, $allowedExts))
              {
              if ($_FILES["profilepic"]["error"] > 0)
                {
                //echo "Return Code: " . $_FILES["profilepic"]["error"] . "<br>";
                }
              else
                {
                $folderpath = "profileuploads/$sval1/";  
                mkdir($folderpath,0777);
                 
             /*   echo "Upload: " . $_FILES["profilepic"]["name"] . "<br>";
                echo "Type: " . $_FILES["profilepic"]["type"] . "<br>";
                echo "Size: " . ($_FILES["profilepic"]["size"] / 1024) . " kB<br>";
                echo "Temp file: " . $_FILES["profilepic"]["tmp_name"] . "<br>";*/

                if (file_exists("$folderpath" . $_FILES["profilepic"]["name"]))
                  {
                //  echo $_FILES["profilepic"]["name"] . " already exists. ";
                  }
                else
                  {
                  move_uploaded_file($_FILES["profilepic"]["tmp_name"], "$folderpath" . $_FILES["profilepic"]["name"]);
                //  echo "Stored in: " . "$folderpath" . $_FILES["profilepic"]["name"];
                  $dp_path = "$folderpath" . $_FILES["profilepic"]["name"];
                  }
                }
              }
            else
              {
              //echo "Invalid IMG file";
              }
           }else{
               $dp_path = "NULL";
           }           
           
            $doc = $_FILES['profiledoc']['name'];
           if($doc != "")
           {
            $allowedExts = array("doc", "docx", "pdf", "txt", "gif", "jpeg", "jpg", "png");
            $temp = explode(".", $_FILES["profiledoc"]["name"]);
            $extension = end($temp);
            if ((($_FILES["profiledoc"]["type"] == "image/gif")
            || ($_FILES["profiledoc"]["type"] == "image/jpeg")
            || ($_FILES["profiledoc"]["type"] == "image/jpg")
            || ($_FILES["profiledoc"]["type"] == "image/pjpeg")
            || ($_FILES["profiledoc"]["type"] == "image/x-png")
            || ($_FILES["profiledoc"]["type"] == "image/png")
            || ($_FILES["profiledoc"]["type"] == "application/msword")
            || ($_FILES["profiledoc"]["type"] == "text/plain")
            || ($_FILES["profiledoc"]["type"] == "application/pdf"))
            && ($_FILES["profiledoc"]["size"] < 5242880)
            && in_array($extension, $allowedExts))
              {
              if ($_FILES["profilepic"]["error"] > 0)
                {
                //echo "Return Code: " . $_FILES["profiledoc"]["error"] . "<br>";
                }
              else
                {
                $folderpath = "profileuploads/$sval1/";  
                if (!file_exists("$folderpath"))
                {
                    mkdir($folderpath,0777);
                }
                 
               /* echo "Upload: " . $_FILES["profiledoc"]["name"] . "<br>";
                echo "Type: " . $_FILES["profiledoc"]["type"] . "<br>";
                echo "Size: " . ($_FILES["profiledoc"]["size"] / 1024) . " kB<br>";
                echo "Temp file: " . $_FILES["profiledoc"]["tmp_name"] . "<br>";*/
                if (file_exists("$folderpath" . $_FILES["profiledoc"]["name"]))
                  {
                  //echo $_FILES["profiledoc"]["name"] . " already exists. ";
                  }
                else
                  {
                  move_uploaded_file($_FILES["profiledoc"]["tmp_name"],"$folderpath" . $_FILES["profiledoc"]["name"]);
                 // echo "Stored in: " . "$folderpath" . $_FILES["profiledoc"]["name"];
                  $pdoc_path = "$folderpath" . $_FILES["profiledoc"]["name"];
                  }
                }
              }
            else
              {
              //echo "Invalid DOC file";
              }
           }else{
               $pdoc_path = "NULL";
           }
           
            $success = $this->user_model->addprofile($about,$add,$city,$country,$dob,$fax,$native,$pcontact,$scontact,$smail,$zipcd,$dp_path,$pdoc_path,$sval1);
            if($success == FALSE)
            {
                redirect(WEB_URL.'home/uploadfail');
                 //$this->upload->display_errors('<p>', '</p>');
            }
            else
            {
                //redirect(WEB_URL.'home');
                $this->user_model->registercomplete();
            }
           
        }  
   }  
              
   function country_check($str)
    {
        if ($str == "0")
        {
            $this->form_validation->set_message('country_check', 'Select your Country');
            return FALSE;
        }else{
            return TRUE;
        }

   } 
   
    //end	
    
    
//end of Client registration Controller	
}
?>