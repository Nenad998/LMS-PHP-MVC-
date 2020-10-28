<?php

namespace App\Controllers;


use App\Models\UsersWork;
use App\Models\Exercise;
use App\Models\Student_course;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\User;
use App\Validation;


class StudentController{
use Validation;

    public function currentStudent()  // view current student and his course
    {
      is_student();
      $student= curr_user();
      $student_course_model=new Student_course;
      $student_course=$student_course_model->SelectWhere(['users_id'=>$student->id]);
      $courses=[];
      $course_model=new Course;
      foreach($student_course as $sc){
         
        
        $courses[]=$course_model->find($sc->course_id);
      }


       
        return view('student', compact('courses','student'));
    }

    public function current_Courses()  // view of an individual course and lectures 
    {
        is_student();
        $courses= new Course;
        $course= $courses->find($_GET['id']);
        $lec=new Lecture;
        $lectures=$lec->SelectWhere(['course_id'=>$course->id]);
        $course->lecture=$lectures;

        return view('student_course', compact('course'));
    }

    public function student_lect()  // view of an individual lecture and view exercises
    {
        is_student();
        $lec=new Lecture;
        $lecture=$lec->find($_GET['id']);
        $course_model=new Course;
        $course=$course_model->find($lecture->course_id); 
        $exercise=new Exercise;
        $exercises=$exercise->SelectWhere(['lecture_id'=>$lecture->id]);
        $lecture->exe=$exercises;

        return view('student_lecture', compact('lecture','course'));
    }

    public function student_exe()  // view of an individual exercise
    {
        is_student();
        $exercise=new Exercise;
        $exercises=$exercise->find($_GET['exe_id']);
   
        return view('student_exercises', compact('exercises'));
    }

    public function add_student_work()  //view the exercise adding form
    {
      is_student();
      return view('completed_task_student');
    }
    

    public function add_std_work()  //adding exercise with validation
    {
      is_student();
      $validate=$this->validate([
        'student'=>$_POST['content'],
        
      ]);
      
         if(!empty($validate)){
             $json_validate=json_encode($validate);
             $_SESSION['errors']=$validate;
             redirect('completed_task_std?exe_id='.$_GET['exercise_id']);
             return;
         }

        $users_work_model= new UsersWork;
        $_POST['user_id']=curr_user()->id;
        $_POST['exercises_id']=$_GET['exercise_id'];
        $file=$users_work_model->addFile('document','files');
        $_POST['document']=$file;

        $usersWork=$users_work_model->insert($_POST);
        
        redirect('student');
    }

    public function currentTeacher(){  //view current teacher on course

      is_student();
      $course_model=new Course;
      $course=$course_model->find($_GET['id']);
      $user_model= new User;
      $users= $user_model->find($course->teacher_id);
      $course->user=$users; 

      return view('teacher_on_course',compact('course'));


    }
         
    public function buy_view(){  //view for buying offered courses
      is_student();
      $course_model=new Course;
      $courses=$course_model->selectAll();

      return view('buy_course', compact('courses'));
    }

    public function over(){  //method for execution INSERT in database while buying a course and UPDATE for confiscation of money from a student
        
        is_student();
        $course_model= new Course;
        $course= $course_model->find($_GET['id']);

        $user_id=curr_user()->id;
        
        $user_model= new User;

        if(curr_user()->money < $course->price){
            $_SESSION['error']='Nemate novca za ovaj kurs';
            redirect('buy_course');
        }

        $total= curr_user()->money - $course->price;


        $student_courses_model= new Student_course;
        $is_bought=$student_courses_model->SelectWhere(['users_id'=>$user_id,'course_id'=>$_GET['id']]);
       
        
        $_POST['course_id']=$_GET['id'];

        $_POST['users_id']=curr_user()->id;
         
        if($is_bought){
          $_SESSION['error']='vec ste kupili kurs';
          redirect('buy_course');
          return;
              
        }
       
        $user=$user_model->updates(['money'=>$total],'id',$user_id);
        $std_course= $student_courses_model->insert($_POST);

        return view('buy_completed');

        

    }

    public function desc_course(){  //course description from the course offer
       
      is_student();
      $course_model=new Course;
      $courses=$course_model->find($_GET['id']);

      return view('description_course', compact('courses'));


    }


}



