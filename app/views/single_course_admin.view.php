<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag"><?php echo  $course->name;  ?></p>

</div>

<div class="std_exercise_txt">

    <div class="std_exe_txt"></div>
    <div class="std_exe_txt"><p class="deadline_std">Profesor na ovom kursu je: <b><?php echo $course->user->name; ?></b></p>

        <p class="content_exe_std"><b>Sadrzaj:</b></p><p><?php echo $course->description;  ?></p>



    </div>

    <div class="std_exe_txt"></div>



</div>



</body>
</html>
