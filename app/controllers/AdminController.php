<?php

namespace App\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Validation;


class AdminController {
use Validation;

    public function allCourses() // view of courses
    {
        is_admin();
        $course_model=new Course;
        $courses=$course_model->selectAll();

        return view('adminPanel',compact('courses'));
    }

    public function addCourses()  // view the course addition form
    {
        is_admin();
        $user= new User;
        $users=$user->SelectWhere(['role_id'=>2]);

    

         return view('addCourse', compact('users'));
    }

    public function store() // method for adding a course
    {
      
        $validate=$this->validate([  // validation
            'admin'=>$_POST['name'],
            'admin'=>$_POST['description'],
           
            
            
          ]);
          
             if(!empty($validate)){
                 $json_validate=json_encode($validate);
                 $_SESSION['errors']=$validate;
                 redirect('addCourses');
                 return;
             } 

        $courses_model= new Course;
        
        $course=$courses_model->insert($_POST);
       
        redirect('admin');

    }

    public function single()  // view data on one course
    {
        is_admin();
        $course_model=new Course;
        $course=$course_model->find($_GET['id']);
        $user_model= new User;
        $users= $user_model->find($course->teacher_id);
        $course->user=$users;  


        return view('single_course_admin',compact('course')); 
    }

    public function editCourseView()  // view for course editing
    {
        is_admin();
        $course=new Course;
        $courses=$course->find($_GET['id']);
        $user= new User;
        $users=$user->SelectWhere(['role_id'=>2]);

        return view('editCourse', compact('courses', 'users'));
    }

    public function editCourse()  // method for editing a course
    {
        
        $validate=$this->validate([ // validation
            'admin'=>$_POST['name'],
            'admin'=>$_POST['description'],
           
            
            
          ]);
          
             if(!empty($validate)){
                 $json_validate=json_encode($validate);
                 $_SESSION['errors']=$validate;
                 redirect('edit_course?id='.$_GET['edit_id']);
                 return;
             } 
             
        $course_model= new Course;

     
        $course=$course_model->updates($_POST,'id',$_GET['edit_id']);
      
        redirect('admin');

    }

    public function deleteCourse()  // delete the course and return to the same page 
    {
        is_admin();
        $course_model=new Course;

        $course=$course_model->delete(['id'=>$_GET['id']]);

        redirect('admin?id='.$_GET['courseId']);
    }

    public function logout()
    {
        session_start();
        session_destroy();

        redirect('login');
    }


}
