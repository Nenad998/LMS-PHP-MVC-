<?php require 'partials/header.php';  ?>


<div class="under_nav">

    <p class="under_nav_parag">Admin panel</p>

</div>


<a href="addCourses"> <button class="buy_course_button">Dodaj kurs</button> </a>


<div class="std_lecture_teacher">
    <?php  foreach ($courses as $course) { ?>
    <div class="std_item"><b><?php echo $course->name; ?></b></div>
    <div class="std_item" id="look"><a href="single_course_admin?id=<?php echo $course->id;?>">Pogledaj kurs</a></div>
    <div class="std_item" id="edit"><a href="edit_course?id=<?php echo $course->id; ?>">Izmeni</a></div>
    <div class="std_item" id="delete"><a href="delete_course?id=<?php echo $course->id;  ?>&courseId=<?php echo $course->id;  ?>">Obrisi</a></div>

    <?php } ?>
</div>



</body>
</html>
