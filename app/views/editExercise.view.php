<?php require 'partials/header.php';  ?>

  <div class="container-fluid"> 
    <div class="row p-2" style='background-color:#4f4d49';> 
          <div> 
            <span class="text-white"> uredi zadatak </span>
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

      <form action="editExercise_post?edit_id=<?php echo $_GET['id']; ?>" method="post"  enctype="multipart/form-data">
        <div class="form-group">
        <p class="mt-3"><b>  naziv zadatka   </b></p>
          <input type="text"  value="<?php echo $exercises->name;?>" class="form-control col-xl-4 col-6" name="name" >
        </div>
        <div class="form-group">
            <p class="mt-3"><b>  napomena  </b></p>
            <textarea name="notice" class="form-control col-xl-4 col-8" rows="3"><?php echo $exercises->notice;?></textarea>
          </div>

          <div class="form-group">
            <p class="mt-3"><b>  sadrzaj  </b></p>
            <textarea name="content" class="form-control col-xl-6 col-10" rows="7"><?php echo $exercises->content;?></textarea>
          </div>

          <div class="form-group">
            <p class="mt-3"><b>izaberi fajl  </b></p>
            <input type="file" name="document" class="form-control-file" value="<?php echo $exercises->document;?>">
          </div>
          <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label"><b>Datum za izvrsenje</b></label>
            <div class="col-xl-2">
              <input class="form-control" type="date" name="dates"  value="<?php echo $exercises->dates;?>">
            </div>


          <button type="submit" class="btn btn-primary col-xl-2 col-4 btn-block mt-2">Uredi</button>

        </form>

      </div>
	</div>

</body>
</html>