<?php require 'partials/header.php';  ?>

    <div class="container-fluid"> 
        <div class="row p-2" style='background-color:#4f4d49';> 
            <div> 
               <span class="text-white"> dodaj zadatak </span>
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
            
         <form action="addExercise_post?lecture_id=<?php echo $_GET['add_id'];?>" method="post"  enctype="multipart/form-data">
            <div class="form-group">
              <p class="mt-3"><b>  naziv zadatka   </b></p>
              <input type="text" name="name" class="form-control col-xl-4 col-6" id="exampleFormControlInput1">
             </div>
             <div class="form-group">
               <p class="mt-3"><b>  napomena  </b></p>
               <textarea class="form-control col-xl-4 col-8"  name="notice" rows="3"></textarea>
             </div>

           <div class="form-group">
              <p class="mt-3"><b>  sadrzaj  </b></p>
              <textarea class="form-control col-xl-6 col-10" name="content" rows="7"></textarea>
            </div>

          <div class="form-group">
            <p class="mt-3"><b>izaberi fajl  </b></p>
            <input type="file" class="form-control-file"  name="document" id="exampleFormControlFile1">
          </div>
          <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label"><b>Datum za izvrsenje</b></label>
            <div class="col-xl-2">
              <input class="form-control" type="date"  name="dates" id="example-date-input">
            </div>


          <button type="submit" class="btn btn-primary col-xl-2 col-4 btn-block mt-2">Dodaj</button>

         </form>
      


         </div>
	
	 </div>


</body>
</html>