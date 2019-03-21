<?php
include_once("header.php");
include_once("dbCon.php");


   $sql ="SELECT * from about";
   $result = mysqli_query($conn, $sql);

   $records = [];

   if(mysqli_num_rows($result) > 0){

      while($row = mysqli_fetch_assoc($result)){

      	array_push($records, $row);
      }

     
   } else {

   	 echo "<div style='color:red; text-align:center;'> No record found in the database!";
   }




//print_r($records);

?>

<div class="about container" style="text-align:justify; width:50%;">

<?php
  if(!empty($records)){

  	  foreach($records as $record){

  	  	echo "<h2>".$record['title']. "</h2>";
  	  	echo $record['message'];


  	  }

  } else {
  	   	 echo "<div style='color:red; text-align:center;'> No record found in the database!";
  }


 ?>

</div>


<?php
include_once("footer.php");
?>