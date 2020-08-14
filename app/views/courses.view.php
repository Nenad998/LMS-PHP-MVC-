  <?php require 'partials/header.php';  ?>

  <div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row "> 
      <div class="col-sm-12 col-xl-12  text-center p-2" style='background-color:#4f4d49';>

          <h4 class="text-white">Spisak Vasih kurseva</h4>   

              </div>
            </div>
         

          <div class="row mt-3">
            <?php  foreach ($courses as $course) { ?>
              <div class="col-xl-4 col-12">
               <div class="card mb-2 mt-2"> 
               <div class="card-header text-center" style='background-color:#4f4d49';> <a class="text-white" href="single_course?idD=<?php echo $course->id;?>">Pogledaj vise </a>  </div>
                <div class="card-body text-center" style='background-color:#058205';><h4 class="text-white"> <?php echo $course->name; ?> </h4> </div>
                <div class="card-footer text-center" style='background-color:#4f4d49';> <a class="text-white" href="all_students?id=<?php echo $course->id; ?>"> ucenici na kursu</a>  </div>
               
               
               </div>
              
              
              </div>
            
              <?php }?>
          </div>
          
          
          

  </div> <!-- kraj container-fluid-->
     


 
</body>
</html>




</body>
</html>