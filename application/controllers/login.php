<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
			
	}
        
        function index() 
        {
        //start
        redirect(WEB_URL . 'home');
        //end	
        }
        
        function loginUser(){
            
            //$userstatus = $this->user_model->userstatus($unameval,$pswdval);
            $unameval = $_POST['uname'];
            $pswdval = $_POST['pwd'];
            $userstatus = $this->user_model->userstatus($unameval,$pswdval);
            echo $userstatus;
            //echo 'hello';
        }
        
        function unamecheck(){
            $unameval = $_POST['uname'];
            $userstatus = $this->user_model->uniqueUser($unameval);
            if($userstatus==TRUE)
                echo 'correct';
        }        
	
        function logout(){
             $this->user_model->logout();
        }
        
        
//end of HOME Controller	
}	
?>