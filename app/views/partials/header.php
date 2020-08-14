<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>


  <nav class="navbar justify-content-between fixed-top" style='background-color:#058205';>
 
    
          <li class="nav-item">
            <p class="nav-item skola">skola programiranja </p>
          </li>
       
          
         
          
          <li class="nav-item">
          <?php if(curr_user()) { ?>

            <a id="ime" class="navbar-brand"><?php echo curr_user()->name;  ?>  </a>  <?php } ?>
             <a id="logout" class="nabar-brand" href="logout">Logout</a>
          
          </li>
        
         
  </nav>  

  <br><br>