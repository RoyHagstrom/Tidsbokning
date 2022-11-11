<style>

#type {

}

#name{
    margin-left: 5vw;
}

</style>

<?php

echo "<div class='row'>";
echo "<div class='col'>";
           
           echo "</div>";
           echo "<h2 id='type'>";
           echo $row['type'] . "<br>";
           echo "</h2>";
           echo "<h4 id='name'>";
           echo '"' . $row['name'] . '"' . "<br> ";
           echo "</h3>";
           echo "<br>";
     
          // echo "<br>";
          // echo "<br>";
     
            echo "Date: ";
           echo $row['date'] . "<br> ";
          // echo "</p>";
           echo "Start: ";
           echo $row['starttime'] . "<br> ";
           //echo "</p>";
           echo "End: ";
           echo $row['endtime'] . "<br> ";
          // echo "</p>";
           echo "Phone: ";
           echo $row['phone'] . "<br> ";
        //   echo "</p>";
           echo "</div>";
           echo "</div>";





           

/*
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


*/




           ?>