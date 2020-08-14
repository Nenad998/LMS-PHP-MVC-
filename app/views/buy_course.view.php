<?php require 'partials/header.php';  ?>




<div class="container-fluid mt-2  h-75 d-inline-block ">
    <div class="row "> 
      <div class="col-sm-12 col-xl-12  text-center p-2" style='background-color:#4f4d49';>

          <h4 class="text-white">Svi kursevi</h4>   

              </div>
            </div>
            <?php if(isset($_SESSION['error'])){ ?>
                <div class="alert alert-danger text-center " role="alert"><h2><?php echo $_SESSION['error']; unset($_SESSION['error']);?></h2></div>

            <?php } ?>

          <div class="row mt-3">
          <?php  foreach($courses as $course) { ?>
              <div class="col-4">
               <div class="card mb-2 mt-2"> 
               <div class="card-header text-center" style='background-color:#4f4d49';> <a class="text-white" href="description_course?id=<?php echo $course->id; ?>">Pogledaj vise </a>  </div>
                <div class="card-body text-center" style='background-color:#058205';><h4 class="text-white"> <?php echo $course->name; ?> </h4> </div>
                <div class="card-footer text-center" style='background-color:#4f4d49';> <a class="text-white" href="over?id=<?php echo $course->id;?>">kupi</a>  </div>
               
               
               </div>
              
              
              </div>
            
              <?php }?>
          </div>
          
          
          

  </div> 


   

</body>
</html>