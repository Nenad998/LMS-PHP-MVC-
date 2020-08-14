<?php require 'partials/header.php';  ?>
<title>Ucenik</title>

  <div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row "> 
      <div class="col-sm-12 col-xl-12  text-center p-2" style='background-color:#4f4d49';>

          <h4 class="text-white">Spisak kurseva koje pohadjate</h4> 
          
              </div>
             
            </div>
            <a href="buy_course" class="btn btn-primary mt-2" role="button" aria-pressed="true">kupi kurs</a>
         

          <div class="row mt-3">
            <?php  foreach ($courses as $course) { ?>
              <div class="col-4">
               <div class="card mb-2 mt-2"> 
               <div class="card-header text-center" style='background-color:#4f4d49';> <a class="text-white" href="teacher_on_course?id=<?php echo $course->id; ?>">profesor na kursu </a>  </div>
                <div class="card-body text-center" style='background-color:#058205';><h4 class="text-white"> <?php echo $course->name; ?> </h4> </div>
                <div class="card-footer text-center" style='background-color:#4f4d49';> <a class="text-white" href="student_course?id=<?php   echo $course->id; ?>"> pogledaj vise</a>  </div>
               
               
               </div>
              
              
              </div>
            
              <?php }?>
          </div>
          
  </div>

</body>
</html>