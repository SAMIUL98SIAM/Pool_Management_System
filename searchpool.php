
<?php
  $con=mysqli_connect('localhost','root','','adminaddpool');
  $query="SELECT pool_name from ipooladdpool WHERE pool_name LIKE '$_GET[search]%'";
  $data=mysqli_query($con,$query);
  while($result = mysqli_fetch_array($data,MYSQLI_ASSOC)){
         echo"$result[pool_name]<br>";
		 
		 } 

?>

	 
	 