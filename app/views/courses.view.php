  <?php require 'partials/header.php';  ?>

  <div class="under_nav">

      <p class="under_nav_parag">Spisak Vasih kurseva</p>

  </div>



  <div class="wrapper">

      <?php  foreach ($courses as $course) { ?>

          <div class="card">
              <div class="card-body">
                  <h4 class="card-subject">  <?php echo $course->name; ?> </h4>
                  <p class="card-name"> <a  href="all_students?id=<?php echo $course->id; ?>">Ucenici na kursu</a> </p>

                  <div class="btn">  <a href="single_course?idD=<?php echo $course->id;?>" class="btn_a">Pogledaj vise</a> </div>
              </div>

          </div>


      <?php }?>



  </div>



</body>
</html>
