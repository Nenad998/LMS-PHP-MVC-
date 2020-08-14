<?php
namespace App\Controllers;

use App\Models\UsersWork;
use App\Models\User;
use App\Models\Exercise;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Student_course;
use App\Validation;

class TeacherController{
use Validation;

    public function index()   //view of course that has teacher
    {
        is_teacher();
        $course_model=new Course;
        $courses=$course_model->selectAll();
   
        return view('courses',compact('courses'));
    }


    public function single()  //view and operating with lectures
    {    
        is_teacher();
        $course_model=new Course;
        $course=$course_model->find($_GET['idD']);
        $user_model= new User;
        $users= $user_model->find($course->teacher_id);
        $course->user=$users;  
        $lec=new Lecture;
        $lectures=$lec->SelectWhere(['course_id'=>$course->id]);
        $course->lecture=$lectures;


        return view('single_course',compact('course')); 
    }

    public function lectures()  //view of an individual lecture and exercise, and operations with exercises
    {   
        is_teacher();
        $lec=new Lecture;
        $lecture=$lec->find($_GET['id']);
        $course_model=new Course;
        $course=$course_model->find($lecture->course_id);
        $exercise=new Exercise;
        $exercises=$exercise->SelectWhere(['lecture_id'=>$lecture->id]);
        $lecture->exe=$exercises;
       
       
        
        return view('lectures', compact('lecture','course'));
    }

    public function addLecture()  //view the lecture adding form
    {
         is_teacher();
         return view('addLecture');
    }

    public function addLec() //method for adding lecture with validation
    {  
        is_teacher();
        $validate=$this->validate([
            'teacher'=>$_POST['name'],
            'teacher'=>$_POST['short_description'],
            'teacher'=>$_POST['content'],
           
            
            
          ]);
          
             if(!empty($validate)){
                 $json_validate=json_encode($validate);
                 $_SESSION['errors']=$validate;
                 redirect('addLecture?coursee_id='.$_GET['course_id']);
                 return;
             } 

        $lecture_model= new Lecture;
        $_POST['course_id']=$_GET['course_id'];
        $file=$lecture_model->addFile('document','files');
        $_POST['document']=$file;
    
        $lecture=$lecture_model->insert($_POST);

        redirect('courses');
    }

    public function editLecView()  //view a form with  lesson data
    {  
        is_teacher();
        $lec=new Lecture;
        $lecture=$lec->find($_GET['id']);

        return view('editLecture', compact('lecture'));
    }

    public function editLecture()  //method for editing a lecture with validation
    {
        is_teacher();
        $validate=$this->validate([
            'teacher'=>$_POST['name'],
            'teacher'=>$_POST['short_description'],
            'teacher'=>$_POST['content'],



          ]);


             if(!empty($validate)){
                 $json_validate=json_encode($validate);
                 $_SESSION['errors']=$validate;
                 redirect('editLec?id='.$_GET['edit_id']);
                 return;
             }

        $lecture_model= new Lecture;
        $file=$lecture_model->addFile('document','files');
        $_POST['document']=$file;
      
        
     
        $lecture_model->updates($_POST,'id',$_GET['edit_id']);



        redirect('courses');

    }

    public function deleteLecture()  //delete lecture and return to the same page
    {
        is_teacher();
        $lec=new Lecture;
        $lectures=$lec->delete(['id'=>$_GET['id']]);
      
        redirect('single_course?idD='.$_GET['cid']);
    }

    public function all_std()  //view of all students on the course
    { 
        is_teacher();
        $student_courses_model= new Student_course;
        $std=$student_courses_model->SelectWhere(['course_id'=>$_GET['id']]);
        
        $user_model=new User;

        $i=0;
        foreach($std as $students){
            $std[$i]->user=$user_model->find($students->users_id);

            $i++;
        }
        
        return view('all_students_on_course', compact('std'));
    }


    public function completed_tsk()  //list of students who did homework
    {
        is_teacher();
        $users_task_model= new UsersWork;
      
        $users_tasks=$users_task_model->SelectWhere(['exercises_id'=>$_GET['id']]);
        
        $user_model=new User;
        $exercises_model=new Exercise;
        $i=0;
        foreach($users_tasks as $task){
            
          $users_tasks[$i]->user=$user_model->find($task->users_id);
          
          $users_tasks[$i]->exercise=$exercises_model->find($task->exercises_id);
            $i++;
        }
       

        return view('completed_task_teacher',compact('users_tasks'));

    }

    public function exercise()  //view of an individual  exercise
    {
        is_teacher();
         $exercise=new Exercise;
         $exercises=$exercise->find($_GET['exe_id']);
   
         return view('exercises', compact('exercises'));
    }

    public function addExercise()  //view the exercise adding form
    {
        is_teacher();
        return view('addExercise');
    }

    public function addExe()  //method for adding an exercise with validation
    {
        is_teacher();
        $validate=$this->validate([
           'teacher'=>$_POST['name'],
           'teacher'=>$_POST['notice'],
           'teacher'=>$_POST['content'],
        
        
        ]);
      
         if(!empty($validate)){
             $json_validate=json_encode($validate);
             $_SESSION['errors']=$validate;
             redirect('addExercise?add_id='.$_GET['lecture_id']);
             return;
        } 

        $exercise_model=new Exercise;
        $_POST['lecture_id']=$_GET['lecture_id'];
        $file=$exercise_model->addFile('document','files');
        $_POST['document']=$file;

        $exercise=$exercise_model->insert($_POST);
  

        redirect('courses');

    }

    public function editExerciseView()  //view for exercise editing
    {
       is_teacher();
       $exercise=new Exercise;
       $exercises=$exercise->find($_GET['id']);
    
   
       return view('editExercise', compact('exercises'));
    }

    public function editExercise()  //method for editing an exercise with validation
    {
        is_teacher();
        $validate=$this->validate([
           'teacher'=>$_POST['name'],
           'teacher'=>$_POST['notice'],
           'teacher'=>$_POST['content'],
        
        
        ]);
      
         if(!empty($validate)){
             $json_validate=json_encode($validate);
             $_SESSION['errors']=$validate;
             redirect('editExercise?id='.$_GET['edit_id']);
             return;
        } 

        $exercise= new Exercise;
        $file=$exercise->addFile('document','files');
        $_POST['document']=$file;
 
        $exercises=$exercise->updates($_POST,'id',$_GET['edit_id']);

        redirect('courses');
    }

    public function deleteExercise()  //delete the exercise and return to the same page
    {
       is_teacher();
       $exercise= new Exercise;
       $exercises=$exercise->delete(['id'=>$_GET['id']]);
  

       redirect('lectures?id='.$_GET['eid']);
    }
   



}
