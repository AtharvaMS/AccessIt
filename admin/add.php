<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
          section
          {
              margin-top: -20px;
              margin-right: 0px;
          }
          a
          {
              font-family: sans-serif;
          }
         .navbar-inverse {
         background-color: #222;
         border-color:#222222;
         }

         .navbar 
         {
         border-radius: 0px;
         }
         .navbar
         {
         position: relative;
         min-height: 50px;
         margin-bottom: 20px;
         border: 0px solid transparent;
         }
         
        tr:nth-child(even){background-color: #f2f2f2}

        th 
        {
        background-color: #04AA6D;
        color: white;
        }

        .srch
        {
          padding-left: 950px;
          margin-top: -40px;
        }


        body 
        {
          font-family: "Lato", sans-serif;
          transition: background-color .5s;
        }

        .sidenav 
        {
          height: 100%;
          margin-top:100px;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #222;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidenav a 
        {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 17px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

        .sidenav a:hover 
        {
          color: #f1f1f1;
        }

        .sidenav .closebtn 
        {
          position: absolute;
          top: 0;
          right: 20px;
          font-size: 36px;
          margin-left: 50px;
        }

        #main 
        {
          transition: margin-left .5s;
          padding: 16px;
        }

        @media screen and (max-height: 450px) 
        {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 16px;}
        }
        
        .m:hover
        {
          color: white;
          width:300px;
          height: 50px;
          background-color:#04aa6d8a;
        }

      </style>
  </head>
  <body>

  <div id="mySidenav" class="sidenav">
  <li><a href="profile.php">
  <div style="color:white; margin-top: -18px; margin-left:40px;">
    <?php
    if(isset($_SESSION['login_user']))
    {echo "<img class='img-circle profile_img' height=90 width=90 src='images/".$_SESSION['pic']."'>";} 
    ?></div>
  <div style="color:white; margin-top: -20px; text-align:center;">
    <?php  
    if(isset($_SESSION['login_user']))
    {echo "</br></br>Welcome  ".$_SESSION['login_user'];}
    ?>
    </div></a></li>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br>
  <div class="m"> <a href="add.php">Add Books</a> </div>
  <div class="m"><a href="delete.php">Delete Books</a></div>
  <div class="m"><a href="#">Issue Information</a></div>
  <div class="m"><a href="#">Help</a></div>
  <div class="m"><a href="#">About Us</a></div>

</div>

<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>  
  <script>
    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>


 
</body>
</html>