<?php
namespace App\Controllers;



class PagesController
{
  
    public function error(){ // view the wrong page and return to the appropriate page
     
         return view('404');
   }


}