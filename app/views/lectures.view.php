<?php require 'partials/header.php';  ?>

<div class="under_nav">

    <p class="under_nav_parag"><?php echo  $lecture->name;  ?></p>

</div>

<div class="std_lecture_txt">

    <div class="std_item_txt"></div>
    <div class="std_item_txt"><p><?php echo $lecture->content;?></p></div>
    <div class="std_item_txt"></div>



</div>

<a href="addExercise?add_id=<?php echo $lecture->id;  ?>"> <button class="buy_course_button">Dodaj zadatak</button> </a>

<div class="std_lecture_teacher">
    <?php foreach($lecture->exe as $lect){ ?>
        <div class="std_item" id="name_exe"><a href="exercise?exe_id=<?php echo $lect->id; ?>"><?php echo $lect->name; ?></a></div>
        <div class="std_item" id="edit"><a href="editExercise?id=<?php echo $lect->id; ?>">Izmeni</a></div>
        <div class="std_item" id="delete"><a href="deleteExercise?id=<?php echo $lect->id; ?>&eid=<?php echo $lecture->id;?>">Obrisi</a></div>
        <div class="std_item" id="done"><a href="completed_task?id=<?php echo $lect->id;  ?>">Uradjen zadatak</a></div>

    <?php } ?>
</div>





</body>
</html>
