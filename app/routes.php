 <?php

$router->get('', 'UsersController@login');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
$router->get('register', 'UsersController@register');
$router->post('register_post', 'UsersController@store');
$router->get('login','UsersController@login');
$router->post('login_post','UsersController@login_post');
$router->get('addWork', 'StudentController@addWork');
$router->get('student', 'StudentController@currentStudent');
$router->get('student_course', 'StudentController@current_courses');
$router->get('student_lecture', 'StudentController@student_lect');
$router->get('student_exercises', 'StudentController@student_exe');
$router->get('completed_task_std', 'StudentController@add_student_work');
$router->post('completed_task_std_post', 'StudentController@add_std_work');
$router->get('buy_course', 'StudentController@buy_view');
$router->get('over', 'StudentController@over');
$router->get('description_course', 'StudentController@desc_course');
$router->get('teacher_on_course', 'StudentController@currentTeacher');
$router->get('courses','TeacherController@index');
$router->get('single_course', 'TeacherController@single');
$router->get('lectures','TeacherController@lectures');
$router->get('addLecture', 'TeacherController@addLecture');
$router->post('addLecture_post', 'TeacherController@addLec');
$router->get('editLec', 'TeacherController@editLecView');
$router->post('editLec_post', 'TeacherController@editLecture');
$router->get('deleteLec', 'TeacherController@deleteLecture');
$router->get('all_students', 'TeacherController@all_std');
$router->get('completed_task', 'TeacherController@completed_tsk');
$router->get('deleteLec', 'TeacherController@deleteLecture');
$router->get('exercise', 'TeacherController@exercise');
$router->get('addExercise', 'TeacherController@addExercise');
$router->post('addExercise_post', 'TeacherController@addExe');
$router->get('editExercise', 'TeacherController@editExerciseView');
$router->post('editExercise_post', 'TeacherController@editExercise');
$router->get('deleteExercise', 'TeacherController@deleteExercise');
$router->get('teacher_content', 'TeacherController@content');
$router->get('admin', 'AdminController@allCourses');
$router->get('addCourses','AdminController@addCourses');
$router->post('addCourses_post','AdminController@store');
$router->get('single_course_admin', 'AdminController@single');
$router->get('edit_course', 'AdminController@editCourseView');
$router->post('editCourse_post', 'AdminController@editCourse');
$router->get('delete_course', 'AdminController@deleteCourse');
$router->get('add_course_teacher', 'AdminController@addCourseTeacher');
$router->get('logout', 'AdminController@logout');
$router->get('404', 'PagesController@error');



/*
$router->get('forget', 'UsersController@forget_password');
$router->post('forget_post', 'UsersController@forget');
$router->get('new_password', 'UsersController@newPassword');
$router->post('confrim_password', 'UsersController@conf_pass');
*/
