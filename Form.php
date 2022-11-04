<?php
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
echo '<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;900&display=swap" rel="stylesheet">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

echo '<style>';
echo 'body { background-color: white;';
echo 'color: black;';
echo 'font-family: poppins; }';


echo '';
echo '.container {';
echo 'background-color: black;';
echo 'position: relative;';
echo 'text-align: center;';
echo 'color: white;';
echo 'border-radius: 5px;';
echo 'width: 400px;';
echo '}';

echo '.bottom-left {';
  echo 'position: absolute;';
  echo 'bottom: 8px;';
  echo 'left: 16px;';
  echo '}';
echo '</style>';









echo '<style>';
echo 'body {';
echo 'margin: 0;';
echo '}';
echo '';
echo '.top-container {';
echo 'background-color: #f1f1f1;';
echo 'padding: 30px;';
echo 'text-align: center;';
echo '}';
echo '';
echo '.header {';
echo 'padding: 10px;';
echo 'margin: 0 0 20px 0;';
echo 'background: #262a2e;';
echo 'color: #f1f1f1;';
echo 'position: sticky;';
echo 'top: 0;';
echo 'z-index: 99999;';
echo '}';
echo '';
echo '.content {';
echo 'padding: 16px;';
echo '}';
echo '';
echo '.sticky {';
echo 'position: fixed;';
echo 'top: 0;';
echo 'width: 100%;';
echo '}';
echo '';
echo '.sticky + .content {';
echo 'padding-top: 102px;';
echo '}';
echo '</style>';

?>

<style>
.site{
  padding: 20px;
  border-radius: 5px;
  margin-bottom: 40px!important;
  background-color: #fafafa;
  box-shadow: 5px 10px 8px 10px #e3e3e3;
  
}
.site:hover{

}
.header {
padding: 10px;
height: 4vw;
}
a {
  z-index: 9999999999;
}

#Makebtn{
float: right;
}

h3{

}
h2{
  float: left;
}

  </style>

<?php

//--------------------------------------------------------------------------------------------------------------------------------------

include 'Header.php';
echo '</div>';






    include 'config.php';
    include 'styles.php';
    
    
    
   // $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
   // $acceptLang = ['en', 'fi', 'sv']; 
  //  $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    //require_once "index_{$lang}.php"; 
    





 $queryResult = $conn->query("SELECT * FROM tidsbokning ORDER BY date DESC ");
 foreach ($queryResult as $row){
  ?>
  <div class="Site" style="max-width: 40vw; margin: 0 auto; ">

  <div class="container">

  <?php $image_url=$row['bild']; ?>
  <img src="<?php echo $image_url;?>" style="border-radius: 5px; align-content: bottom-left; max-width: 40vw;">
  
    <div class="bottom-left">
    <?php
   {
      echo "<p>";
      echo 'Tidbokning';
      echo "</p>";
  }
  ?>
    </div>
  </div>
  
  
  
   <?php
   {
      echo "<div>";
      
      
      echo "</div>";
      echo "<h1>";
      echo $row['type'] . "<br>";
      echo "</h1>";
      echo "<p>";
      echo $row['date'] . "<br>";
      echo "</p>";
      echo "<p>";
      echo $row['starttime'] . "<br>";
      echo "</p>";
      echo "<p>";
      echo $row['endtime'] . "<br>";
      echo "</p>";
      echo "<p>";
      echo $row['phone'] . "<br>";
      echo "</p>";
  }
  ?>
  </div>
<?php
 }


 ?>



