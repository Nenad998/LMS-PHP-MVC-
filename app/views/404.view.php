<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
       body {
        background: #dedede;
       }
      .page-wrap {
         min-height: 100vh;
       }
</style>
</head>
<body>



<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
                <a href='<?php if(curr_user()->role_id == 1){echo "ucenik"; }elseif(curr_user()->role_id == 2){echo "courses"; }else{ echo 'admin'; }?>' class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>