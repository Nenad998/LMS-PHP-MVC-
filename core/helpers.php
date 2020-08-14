<?php


function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}


function redirect($path)
{
    header("Location: /{$path}");
}

function curr_user(){
    $user=new App\Controllers\UsersController();
    return $user->current_user();
   
}

function is_student(){
    if(curr_user()->role_id != 1){
        redirect('404');
    }
}

function is_teacher(){
    if(curr_user()->role_id != 2){
        redirect('404');
    }
}

function is_admin(){
    if(curr_user()->role_id != 3){
        redirect('404');
    }
}

function page_to_redirect(){
    if(curr_user()->role_id == 3){
        redirect('admin');
    }elseif(curr_user()->role_id == 2){
        redirect('courses');
    }elseif(curr_user()->role_id == 1){
        redirect('student');
    }
}



