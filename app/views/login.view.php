<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/login.css">
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
            <form class="form-container" action="login_post" method="post">
			 <h4 class="text-center font-weight-bold">Prijavi se</h4>
				 <div class="form-group">
                    <input class="form-control form-control-lg" name="email" placeholder="Unesi email" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password" placeholder="Unesi password" type="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-info btn-lg btn-block">Submit</button>
                </div>
				 <div class="mt-0">
        
		         <p class="mt-2" style="color: blue;"><a href="#"> <b>Zaboravio si nalog? </b> </a></p>
                  </div>
				   <div class="mt-0">
        
		         <p class="mt-2" style="color: blue;"><a href="register"> <b>Registruj se </b> </a></p>
                  </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>