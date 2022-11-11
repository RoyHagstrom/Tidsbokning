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


    align-content: center;
  }
  #col-1{
    background-color: #e3e3e3;
    border-radius: 10px;

    padding: 20px;

  }
  #col-2{
    background-color: #e3e3e3;
    border-radius: 10px;

    padding: 20px;

  }

  .form {
    width: 60vw;
    margin: 0 auto;

  }
  </style>

<div class="form">
<div id="form">
<form method="post" action="Form.php">
<div style="float: left;" id="col-1">
<input type="radio" id="Massage 1" name="type" value="Massage 1" >
  <label for="Massage 1">Massage 1</label><br>

  <input type="radio" id="Massage 2" name="type" value="Massage 2">
  <label for="Massage 2">Massage 2</label><br>

  <input type="radio" id="Massage 3" name="type" value="Massage 3" required>
  <label for="Massage 3">Massage 3</label><br><br>

  <label for="date">Date:</label><br>
<input type="date" name="date" id="date" placeholder="John" required><br><br>

<label for="starttime">Date:</label><br>
<input type="time" name="starttime" id="starttime" placeholder="" required><br><br>
<label for="endtime">Date:</label><br>
<input type="time" name="endtime" id="endtime" placeholder="" required><br><br>
</div>


<div style="margin-left: 230px; width: 30vw;" id="col-2">
<label for="Name">Name:</label><br>
<input type="text" name="Name" id="Name" placeholder="John" style="width: 20vw;" required><br><br>

<label for="phone">Phone:</label><br>
<input type="number" name="phone" id="phone" placeholder="040 3254871" style="width: 20vw;" required><br><br>





<input type="submit" name="article-submit" value="Submit"><br><br>


</div>
</div>

<?php


?>


</form>
</div>
















</div>



