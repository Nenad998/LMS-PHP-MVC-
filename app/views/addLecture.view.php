<?php require 'partials/header.php';  ?>

    <div class="container-fluid"> 
        <div class="row p-2" style='background-color:#4f4d49';> 
            <div> 
               <span class="text-white"> dodavanje lekcije </span>
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

         <form action="addLecture_post?course_id=<?php echo $_GET['coursee_id'];?>" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <p class="mt-3"><b>naslov lekcije</b></p>
                <input type="text" name="name" class="form-control col-xl-4 col-6" id="exampleFormControlInput1">
             </div>
            <div class="form-group">
                <p class="mt-3"><b>  kratak opis  </b></p>
                <textarea class="form-control col-xl-4 col-8" name="short_description" rows="3"></textarea>
            </div>

            <div class="form-group">
                 <p class="mt-3"><b>  sadrzaj  </b></p>
                 <textarea class="form-control col-xl-6 col-10" name="content"   rows="7"></textarea>
            </div>

             <div class="form-group">
                 <p class="mt-3"><b>izaberi fajl  </b></p>
                  <input type="file" class="form-control-file" name="document" id="exampleFormControlFile1">
            </div>

            <button type="submit" class="btn btn-primary col-xl-2 col-4 btn-block">Dodaj</button>



         </form>

     </div>


</body>
</html>