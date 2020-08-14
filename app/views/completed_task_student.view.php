<?php require 'partials/header.php';  ?>



  <div class="container-fluid" > 
      <div class="row  p-2" style='background-color:#4f4d49';> 
          <div> 
            <span class="text-white"> predaj zadatak </span>
          </div> 

      </div>

      <?php if(isset($_SESSION['errors'])){
        foreach($_SESSION['errors'] as $er){
            ?> 
            <div class="alert alert-danger text-center" role="alert">
                 <?php echo $er;?>
            </div>
            <?php
        }
        unset($_SESSION['errors']);       
    } ?>

      <form action="completed_task_std_post?exercise_id=<?php echo $_GET['exe_id'];?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <p class="mt-3"><b>  sadrzaj  </b></p>
            <textarea name="content" class="form-control col-xl-6 col-10" placeholder="napisi zadatak" rows="7"></textarea>
          </div>

          <div class="form-group">
            <p class="mt-3"><b>izaberi fajl  </b></p>
            <input type="file" name="document" class="form-control-file" id="exampleFormControlFile1">
          </div>
         


          <button type="submit" class="btn btn-primary col-xl-2 col-4 btn-block mt-2">Predaj</button>

        </form>
      


    </div>
  

</body>
</html>