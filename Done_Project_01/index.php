<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="index.js" ></script>
  <link href="style/style.css" rel="stylesheet">
  <title>Home</title>
</head>
<body>

  <div class="nav">
    <div class="flexrow-container_left">
        <div ><a href="login.php" ><img src="kepek/icon _User Circle_.png" class="user" alt=""></a></div>
        <div ><a href="http://localhost/phpmyadmin/" ><img src="kepek/icon _home_.png" class="home" alt=""></a></div>
        
        
    </div>


    

    <div class="flexrow-container">
        <input type="checkbox" class="theme-checkbox" id="themeSwitch" onclick="toggleColor()">
    </div>

    <div class="flexrow-container_center"><h2><span id="time"></span></h2></div>

  </div>

  <?php 
              
      $id = $_SESSION['id'];
      $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

      while($result = mysqli_fetch_assoc($query)){
      $res_Uname = $result['Username'];
      $res_Email = $result['Email'];
      $res_Age = $result['Age'];
      $res_id = $result['Id'];
      $res_Option = $result['Option1'];
      }
              
  
  ?>

  <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

  <div class="main-box top">
    <div class="top">
      <div class="box_data">
          <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
      </div>
      <div class="box_data">
          <p>Your email is <b><?php echo $res_Email ?></b>.</p>
      </div>
    </div>
    <div class="bottom">
      <div class="box_data">
          <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
      </div>
    </div>
  </div>

  <div class="description">
    <h1>Projektről</h1>
  </div>

  <div class="kepzes">
    <h1>Képzésről</h1>
  </div>
  

  <div class="footer">

    
  </div>
  
</body>
</html>