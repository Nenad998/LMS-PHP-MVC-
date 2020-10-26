<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag"><?php echo  $exercises->name;  ?></p>

</div>


<div class="std_exercise_txt">

    <div class="std_exe_txt"></div>
    <div class="std_exe_txt">

        <p class="content_exe_std"><b>Sadrzaj:</b></p><p><?php echo $exercises->content;  ?></p>

        <p class="deadline_teacher"><b>Rok za zavrsetak ovog zadatka je: </b><?php echo $exercises->dates; ?></p>

    </div>


    <div class="std_exe_txt"></div>



</div>

</body>
</html>
