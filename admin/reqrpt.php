<?php
require_once 'config.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>AVL Homes</title>
  <meta charset="utf-8"/>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
  <link href="assets/css/dcalendar.picker.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="assets/css/style.css" media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="assets/css/header.css" media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="assets/css/footer.css" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
  <script src="https://use.fontawesome.com/4ef4ce7ce4.js"></script>
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi"/>
    <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  <script src="assets/js/dcalendar.picker.js"></script>
  <script src="assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
  <!-- HEADER BEGINS -->
  <div class="avl-header avl-container show-on-med-and-large hide-on-small-only">
	<a href="index.php">
		<img src="assets/images/logo.png">
		<h5>E-GHARKUL</h5>
	</a>
	<ul>
	  <li>
         
		 
		   		<a href="Admin_Home.php">ADMIN</a>		  
        </li>
        
        <li>
            <a href="reqrpt.php">VIEW ALL REQUESTS</a>
        </li>
        <li>
            <a href="logout.php">LOGOUT</a>
        </li>
	</ul>
  </div>
  <!--MOBILE HEADER & SIDE-NAV-->
  <nav class="theme-color-bg show-on-small hide-on-med-only hide-on-large-only">
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center">E-GHARKUL</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i id="nav_icon" class="material-icons">menu</i></a>
          </div>
  </nav>
  <div id="accomodate" class="modal tagline">
   <div class="modal-content m-container">
       <div class="avl-heading">
           <h4>Accomodate</h4>
           <div></div>
       </div>
       
    </div>
  </div>
  <br><br>
  <!-- HEADER ENDS -->

<div class="container">
    <?php
        $res= mysqli_query($link,"select id, user_id, house_id from successful");
            echo "<table class='table table-hover' border='1' align='center'>";
            echo "<tr>"; echo "<th>"; 
            echo "ID"; echo "</th>";
            echo "<th>"; echo "HOUSE'S ID";echo "</th>";
            echo "<th>"; echo "USER'S ID";echo "</th>";
            echo "</tr>";
        while($row= mysqli_fetch_array($res))
        {
            echo "<tr>"; echo "<td>"; echo $row["id"]; echo "</td>";
            echo "<td>"; echo $row["house_id"]; echo "</td>";
            echo "<td>"; echo $row["user_id"]; echo "</td>";
           

         echo "</tr>";
        }
            echo "</table>";
    ?>
</div>
	
	
	
    



</body>
</html>