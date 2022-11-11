<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


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

global $conn; 



include 'Header.php';
echo '</div>';






    include 'config.php';
    include 'styles.php';
    
    
    
   // $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
   // $acceptLang = ['en', 'fi', 'sv']; 
  //  $lang = in_array($lang, $acceptLang) ? $lang : 'en';
    //require_once "index_{$lang}.php"; 
    





    

    if(isset($_POST['article-submit'])){


      function cleaninput($data){

        $data = trim($data);
    
        $data = stripslashes($data);
    
        $data = htmlspecialchars($data);
    
    
    
        return $data;
    
    }


      $date = cleaninput($_POST['date']);
      $starttime = cleaninput($_POST['starttime']);
      $endtime = cleaninput($_POST['endtime']);
      $type = cleaninput($_POST['type']);
      $Name = cleaninput($_POST['Name']);
      $phone = cleaninput($_POST['phone']);



      if($conn->query("INSERT INTO `tidsbokning` (`date`, `starttime`, `endtime`, `type`, `name`, `phone`) VALUES ('$date', '$starttime', '$endtime', '$type', '$Name', '$phone')"))





        if($stmt_insertPerson = $conn->prepare("INSERT INTO tidsbokning (`date`, `starttime`, `endtime`, `type`, `name`, `phone`) VALUES (:`date`,:`starttime`,:`endtime`,:`type`,:`Name`,:`phone`)")){

        $stmt_insertPerson->bindparam(':date',$date, PDO::PARAM_STR);
    
        $stmt_insertPerson->bindparam(':starttime',$starttime, PDO::PARAM_STR);
    
        $stmt_insertPerson->bindparam(':endtime',$endtime, PDO::PARAM_STR);
    
        $stmt_insertPerson->bindparam(':type',$type, PDO::PARAM_STR);
    
        $stmt_insertPerson->bindparam(':name',$Name, PDO::PARAM_STR);
    
        $stmt_insertPerson->bindparam(':phone',$phone, PDO::PARAM_STR);






      

        $queryResult = $conn->query("SELECT * FROM tidsbokning WHERE DATE(date)=CURDATE() ORDER BY starttime ASC");
  ?>
  <div>
    <h2 style="text-align: center; width: 100%;">Today</h2>
  </div>
  
  
  <?php 
      foreach ($queryResult as $row){
     ?>
       
       <div class="Site" style="max-width: 80vw; margin: 0 auto; ">
     
      
       
       
       
        <?php
         
           include 'booking.php';
      }}
      echo "</div>";

      echo '<div id="Tomorrow">';

      $queryResult = $conn->query("SELECT * FROM tidsbokning WHERE DATE(date)=CURDATE() +1 ORDER BY starttime ASC");
      ?>
      <div>
        <h2 style="text-align: center; width: 100%;">Tomorrow</h2>
      </div>
      
      
      <?php
      foreach ($queryResult as $row){
     ?>
       
       <div class="Site" style="max-width: 80vw; margin: 0 auto; ">
     
      
       
       
       
        <?php
         
         include 'booking.php';
      }
      echo "</div>";
    }
    /*else{


     
      $queryResult = $conn->query("SELECT * FROM tidsbokning ORDER BY date ASC ");
      foreach ($queryResult as $row){
     ?>
       
       <div class="Site" style="max-width: 80vw; margin: 0 auto; ">
     
      
       
       
       
        <?php
         
           echo "<div>";
           
           
           echo "</div>";
           echo "<h1>";
           echo $row['type'] . "<br>";
           echo "</h1>";
           echo "<h2>";
           echo $row['name'] . "<br> ";
           echo "</h2>";
           echo "<br>";
     
           echo "<br>";
           echo "<br>";
     
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
           echo "</p>" . "  </div>";
      }
    
    
    
    
     }*/



else {




  echo '<div id="Today"';

  $queryResult = $conn->query("SELECT * FROM tidsbokning WHERE DATE(date)=CURDATE() ORDER BY starttime ASC");
  ?>
  <div>
    <h2 style="text-align: center; width: 100%;">Today</h2>
  </div>
  
  
  <?php
  foreach ($queryResult as $row){
 ?>
   
   <div class="Site" style="max-width: 80vw; margin: 0 auto; ">
 
  
   
   
   
    <?php
     
     include 'booking.php';
  }}
  echo "</div>";
  
echo '<div id="Tomorrow">';
  $queryResult = $conn->query("SELECT * FROM tidsbokning WHERE DATE(date)=CURDATE() +1 ORDER BY date ASC");
  ?>
<div>
  <h2 style="text-align: center; width: 100%;">Tomorrow</h2>
</div>


<?php
  foreach ($queryResult as $row){       
 ?>
   
   <div class="Site" style="max-width: 80vw; margin: 0 auto; ">
 
  
   
   
   
    <?php
     
     include 'booking.php';
  

}
echo "</div>";
echo "</div>";
 
  ?>
 
<?php
 


 ?>



