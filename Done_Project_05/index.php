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
        <div><a href="php/logout.php" ><img src="kepek/logout_ikon.png" class="user" alt=""></a></div>
        <div><a href="index.php" ><img src="kepek/icon _home_.png" class="home" alt=""></a></div>
        <div ><a href="idojaras/idojaras.html" ><img src="kepek/icon _cloud_.png" class="home" alt=""></a></div>
        <div ><a href="naptar/naptar.html" ><img src="kepek/icon _calendar_.png" class="home" alt=""></a></div>
        <div ><a href="to-do/to-do.html" ><img src="kepek/icon _list_.png" class="home" alt=""></a></div>

    </div>

    <div class="flexrow-container">
        <input type="checkbox" class="theme-checkbox" id="themeSwitch" onclick="toggleColor()">
    </div>

    <h2><span id="time"></span></h2>
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


  <div class="main-box top">
    <div class="top">
      <div class="box_data" id="box_data_01">
          <p id="szoveg_d">Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
      </div>
      <div class="box_data" id="box_data_02">
          <p id="szoveg_d">Your email is <b><?php echo $res_Email ?></b>.</p>
      </div>
    </div>
    <div class="bottom">
      <div class="box_data" id="box_data_03">
          <p id="szoveg_d">And you are <b><?php echo $res_Age ?> years old</b>.</p> 
      </div>
    </div>
  </div>

  <div class="description" id="description">
    <h1>Projektről</h1>
    <p class="szoveg" id="szoveg">
      Projektünk az egészségről, életmódról szól. Azért választottuk ezt a témát,
      mert a mai rohanó világban ez is a mindennapok részét képezi, és nem 
      fordítunk rá elég időt, és figyelmet. HTML, JavaScript, CSS, és PHP 
      használatával szeretnénk megvalósítani. Több oldalt készítünk külön-külön, 
      mégis egymás keze alá dolgozva.
    </p>
  </div>

  <div class="kepzes" id="kepzes">
    <h1>Képzésről</h1>
    <p class="szoveg" id="szoveg1">
      Két szakirány (Rendszerüzemeltetés, Szoftverfejlesztés) közül mindeki 
      kivélaszthatja azt ami a szívéhez közelebb áll. 5 éven keresztül tanulhatjuk
      azt ami igazán érdekel, építhetjük a jövőnket. Mi akik a szoftverfejlesztést
      választottuk igyekszünk minél inkább elsajátítani a programozás illetve 
      webfejlesztés alapjait. Legjobb szituációs gyakorlás az IKT Projektmunka 
      tantárgy, mivel szimulálni tudjuk az éles, valóéletbeli szituációkat, 
      ráadásul megtanulhatjuk azt is, hogy milyen csapatban együttműködni.
    </p>
  </div>
  

  <div class="footer" id="footer">

    
  </div>
  
</body>
</html>