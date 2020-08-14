<?php
namespace App;
trait Validation{

    public $errors;


    public function validate($array){

        foreach ($array as $key=>$value){
            if($key=='email'){
                if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                    $this->errors[]='Neispravno unet email';
                }
              
            }

            if($key=='password'){

                $re= '/^[a-zA-Z0-9]{1,}$/m';
                  
                if(!preg_match_all($re, $value)){
                    $this->errors[]='Neispravno uneta lozinka';
                }

            }

            if($key=='FirstName_LastName'){
                  

                $re= '/^[a-z A-Z]{1,}$/m';
                  
                if(!preg_match_all($re, $value)){
                    $this->errors[]='Neispravno uneto ime i prezime';
                }

            }
            

            if($key=='admin'){

                $re= '/^[a-zA-Z0-9\\\\\/\.\,\-\@\$\%\&\?\!]{1,}$/m';
                  
                if(!preg_match_all($re, $value)){
                    $this->errors[]='Polje nije validno';
                }
                
            }

            if($key=='teacher'){

                $re= '/^[a-z A-Z 0-9\\\\\/\.\,\-\@\$\%\&\?\!]{1,}$/m';
                  
                if(!preg_match_all($re, $value)){
                    $this->errors[]='Polje nije validno';
                }
            }

            if($key=='student'){

                $re= '/^[a-zA-Z0-9\\\\\/\.\,\-\@\$\%\&\?\!]{1,}$/m';
                  
                if(!preg_match_all($re, $value)){
                    $this->errors[]='Polje nije validno';
                }
            }

            

        }

        if(!empty($this->errors)){
            return $this->errors;
        }
    }
}