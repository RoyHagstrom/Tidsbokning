<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');


if(isset($_POST['article-submit'])){
	include "config.php";


//$con = mysqli_connect('localhost', 'root', '','news');


// get the post content
$nyhetsrubrik = $_POST['nyhetsrubrik'];
$nyhetstext = $_POST['nyhetstext'];
$bild = $_POST['bild'];
$författare = $_POST['författare'];
$datum = $_POST['datum'];

/*
echo $nyhetsrubrik . "<br>";
echo $nyhetstext . "<br>";
echo $bild . "<br>";
echo $författare . "<br>";
echo $datum . "<br>";
*/







if($conn->query("INSERT INTO `articles` (`nyhetsrubrik`, `nyhetstext`, `bild`, `författare`, `datum`, `nyhetsid`) VALUES ('$nyhetsrubrik', '$nyhetstext', '$bild', '$författare', '$datum', '')")){
echo "Artikkeli luotu onnistuneesti <br>";
echo "<a href='index.php'>Palaa etusivulle</a>";

}
else{
	echo "ERROR";
	echo "<a href='Form.php'>Palaa lomakkeeseen</a>";
}















/*
// database insert SQL code
$sql = "INSERT INTO `articles` (`nyhetsrubrik`, `nyhetstext`, `bild`, `författare`, `datum`, `nyhetsid`) VALUES ('$nyhetsrubrik', '$nyhetstext', '$bild', '$författare', '$datum', '')";

// insert into database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Inserted";

}*/





}
else{
echo "No article info has been sent <a href='Form.php'>Return</a>";
}
?>