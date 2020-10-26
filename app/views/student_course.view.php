<?php require 'partials/header.php';  ?>


<div class="under_nav">

    <p class="under_nav_parag"><?php echo  $course->name;  ?></p>

</div>

<div class="std_lecture_txt">

    <div class="std_item_txt"></div>
    <div class="std_item_txt"><p><?php echo $course->description;?></p></div>
    <div class="std_item_txt"></div>



</div>

<div class="std_lecture_course">
    <?php foreach($course->lecture as $lec){ ?>
        <div class="std_item"><b><?php echo $lec->name; ?></b></div>
        <div class="std_item" id="item"><a href="student_lecture?id=<?php echo $lec->id;?>">Pogledaj lekciju </a></div>
        <div class="std_item"></div>

    <?php } ?>
</div>

</body>
</html>
