<?php require 'partials/header.php';  ?>


<div class="under_nav">

    <p class="under_nav_parag"><?php echo  $course->name;  ?></p>

</div>

<a href="addLecture?coursee_id=<?php echo $course->id;?>"> <button class="buy_course_button">Dodaj lekciju</button> </a>


<div class="std_lecture_teacher">
    <?php foreach($course->lecture as $lec){ ?>
        <div class="std_item"><b><?php echo $lec->name; ?></b></div>
        <div class="std_item" id="look"><a href="lectures?id=<?php echo $lec->id;?>">Pogledaj lekciju</a></div>
        <div class="std_item" id="edit"><a href="editLec?id=<?php echo $lec->id; ?>">Izmeni</a></div>
        <div class="std_item" id="delete"><a href="deleteLec?id=<?php echo $lec->id; ?>&cid=<?php echo $course->id;?>">Obrisi</a></div>

    <?php } ?>
</div>


</body>
</html>
