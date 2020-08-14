<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
    <link rel="stylesheet" type="text/css" href="public/css/register.css">
</head>
<body>

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

<div class="container-fluid h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <form action="register_post" class="form-container" method="post">
			 <h4 class="text-center font-weight-bold">Registruj se</h4>
                <div class="form-group">
                    <input class="form-control form-control-lg"  name="name" placeholder="Unesi ime i prezime" type="text">
                </div>
				 <div class="form-group">
                    <input class="form-control form-control-lg" name="email" placeholder="Unesi email" type="email">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" placeholder="Unesi password" type="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-info btn-lg btn-block">Submit</button>
                </div>
				 <div class="mt-0">
        
		         <p class="mt-2" style="color: blue;"><a href="login"> <b>Prijavi se </b> </a></p>
                  </div>
            </form>
        </div>
    </div>
</div>



</body>
</html>