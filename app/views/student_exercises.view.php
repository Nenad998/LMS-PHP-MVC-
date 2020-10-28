<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag"><?php echo  $exercises->name;  ?></p>

</div>

<div class="std_exercise_txt">

    <div class="std_exe_txt"></div>
    <div class="std_exe_txt"><p class="deadline_std"><b><?php  if(strtotime($exercises->dates) < strtotime(date('y-m-d'))){ echo "ROK NIJE VAZECI";} ?></b></p>

        <p class="content_exe_std"><b>Sadrzaj:</b></p><p><?php echo $exercises->content;  ?></p><br>
        <div>
            <a class="download_parag" target="_blank" href="/<?php echo $exercises->document;?>">Preuzmi zadatak</a> </div>

        <a href="completed_task_std?exe_id=<?php echo $exercises->id;?>"> <button class="deliver_exercise_button">Predaj zadatak</button> </a>

    </div>

    <div class="std_exe_txt"></div>



</div>


</body>
</html>
