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
  z-index: 999;
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
    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

?>
<style>
  #form{
    width: 30%;
    margin: 0 auto;
    align-content: center;
  }
  </style>
<div id="form">
<form method="post" action="action_page.php">
  <label for="nyhetsrubrik">Uutisen otsikko:</label><br>
  <input type="text" id="nyhetsrubrik" name="nyhetsrubrik" value=""><br>

  <label for="nyhetstext">Uutisteksti:</label><br>
  <input type="text" id="nyhetstext" name="nyhetstext" value=""><br>

  <label for="författare">Tekijä:</label><br>
  <input type="text" id="författare" name="författare" value=""><br>

  <label for="bild">kuva:</label><br>
  <input type="text" id="bild" name="bild" value="https://images.stockx.com/images/Youtooz-Bruh-Plush-Vinyl-Figure-FOOTLONG-MOAI.jpg"><br>

  <label for="datum">Päivämäärä:</label><br>
  <input type="date" id="datum" name="datum" value="2022-11-23" min="2022-01-01"><br><br>

  <input type="submit" name="article-submit" value="Luo">
</form> <br>
































<div id="form2">
<form method="post" action="">

<label for="Name">Name:</label><br>
<input type="text" name="Name" id="Name" placeholder="John"><br><br>
<input type="submit" name="article-submit" value="Submit">

<?php

if(isset($_POST['article-submit'])){

$Name = $_POST['Name'];

echo "<br>" . $Name;

}

else{

}
?>


</form>
</div>
















</div>



