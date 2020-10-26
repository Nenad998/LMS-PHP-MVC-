<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>


<ul class="navigation_ul">
    <li class="logo_name"><a class="nav_a" <p>E-ucionica</p> </a></li>
    <li class="right_data"><a class="nav_a" href="logout">Odjavi se</a></li>
    <?php if(curr_user()->role_id == 1) { ?>
    <li class="right_data"><a class="nav_a" <p><?php echo "Ucenik: " . curr_user()->name;  ?></p> </a></li>

    <?php } if(curr_user()->role_id == 2){ ?>

    <li class="right_data"><a class="nav_a" <p><?php echo "Profesor: " . curr_user()->name;  ?></p> </a></li>

    <?php } if(curr_user()->role_id == 3){ ?>

        <li class="right_data"><a class="nav_a" <p><?php echo "Admin: " . curr_user()->name;  ?></p> </a></li>

 <?php }  ?>
</ul>
