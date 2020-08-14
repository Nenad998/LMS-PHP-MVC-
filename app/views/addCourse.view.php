<?php require 'partials/header.php';  ?>

  <div class="container-fluid"> 
      <div class="row  p-2" style='background-color:#4f4d49';> 
          <div> 
            <span class="text-white"> dodaj kurs </span>
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

      <form action="addCourses_post" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <p class="mt-3"><b>  naziv kursa   </b></p>
          <input type="text" name="name" class="form-control col-xl-4 col-6">
        </div>

          <div class="form-group">
            <p class="mt-3"><b>  sadrzaj  </b></p>
            <textarea name="description" class="form-control col-xl-6 col-10"  rows="7"></textarea>
          </div>

          <div class="form-group col-xl-2">
            <p class="mt-3"><b>izaberi fajl  </b></p>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
          </div>

          <div class="form-group col-xl-2">
            
            <select class="form-control"  name="teacher_id">
              <option>Izaberi profesora</option>
              <?php foreach($users as $user) {    ?> 
                <option value="<?php echo $user->id;?>"> <?php echo $user->name;  ?>  </option>
                <?php } ?>

            </select>
          </div>
          <button type="submit" class="btn btn-primary col-xl-2 col-4 btn-block mt-2">Dodaj</button>

      </form>

     </div>


</body>
</html>