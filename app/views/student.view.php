<?php require 'partials/header.php';  ?>
<title>Ucenik</title>

<div class="under_nav">

<p class="under_nav_parag">Spisak kurseva koje pohadjate</p>

</div>

<a href="buy_course"> <button class="buy_course_button">Kupi kurs</button> </a>


<div class="wrapper">

    <?php  foreach ($courses as $course) { ?>

<div class="card">
    <div class="card-body">
        <h4 class="card-subject">  <?php echo $course->name; ?> </h4>
        <p class="card-name"> <a  href="teacher_on_course?id=<?php echo $course->id; ?>">Profesor na kursu</a> </p>

        <div class="btn">  <a href="student_course?id=<?php   echo $course->id; ?>" class="btn_a">Pogledaj vise</a> </div>
    </div>

</div>


    <?php }?>



</div>


</body>
</html>
