<?php
namespace App\Controllers;

use App\Models\User;
use App\Validation;


class UsersController{
use Validation;

    public function register(){ //view the register form

         return view('register');
        }
     
    public function store()  //method for register with validation
    {
        $validate=$this->validate([
            'FirstName_LastName'=>$_POST['name'],
            'password'=>$_POST['password'],
            'email'=>$_POST['email'],
            
            
          ]);
          
             if(!empty($validate)){
                 $json_validate=json_encode($validate);
                 $_SESSION['errors']=$validate;
                 redirect('register');
                 return;
             } 

        $user=new User;
        $hashedPassword = hash('sha256', $_POST['password']);
        $_POST['password']=$hashedPassword;
        $user->insert($_POST);
        $_SESSION['email']=$_POST['email'];

        redirect('student');
    }

   

    public function login() //view the login form
    {
        return view('login');
    }
    
    public function login_post()  //method for login with validation
    {
        $validate=$this->validate([
          'email'=>$_POST['email'],
          'password'=>$_POST['password'],
        ]);
        
           if(!empty($validate)){
               $json_validate=json_encode($validate);
               $_SESSION['errors']=$validate;
               redirect('login');
           }
        $hashedPassword = hash('sha256', $_POST['password']);
        $_POST['password']=$hashedPassword;   
        $params=['email'=>$_POST['email'],'password'=>$_POST['password']];
        $user=new User();
        $users=$user->SelectWhere($params);
        
       if($users != null){
           if(count($users)){
           $_SESSION['email']=$_POST['email'];
           page_to_redirect();
           }
        }
    }

    public function current_user()  //method for return current logged user
    {
        if(isset($_SESSION['email'])){
            $email=$_SESSION['email'];
            
            $users=new User;
            $user=$users->SelectWhere(['email'=>$email]);
            return $user[0];
           
        }
        return false;
    }
/*
    this part of code won't work on local machine because I do restart password on my server

    public function forget_password(){  //view of restart password
                    
            
        return view('reset');
      
    }


    
    public function forget(){  //method for sending email and change password
        

        $email=$_POST['email'];
        $c_user=new Users;
        $user=$c_user->SelectWhere(['email'=>$email]);

        $user=$user[0];
        $msg = '<a href="https://www.nenadweb.com/new_password?id='.$user->id.'">Resetuj</a>';

        $msg = wordwrap($msg,70);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers.= "From: vukasin123@gmail.com";

        mail($email,"Reset password",$msg,$headers);
    }
    
    public function newPassword(){  //view the new password form
        
        return view('new_password');
    }
    
    public function conf_pass(){  //method for change password
        
        $user_model= new Users;
        $hashedPassword = hash('sha256', $_POST['password']);
        $_POST['password']=$hashedPassword;
        
        $user= $user_model->updates($_POST, 'id', $_GET['id']);
        
    }
*/
    
}