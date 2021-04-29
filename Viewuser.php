<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Added Pool</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <h2>View Added Pool</h2>

  <input type="text" id="search"  class="form-control" placeholder="Search">
  <div id="result"></div>
  
  <script>
  $("#search").on("input",function(){
	  $search=$("#search").val();
	  if($search.length>0){
		 $.get("searchpool.php",{"search":$search},function($data){
	  $("#result").html($data);})
  }
  }
	  );
  
  
  
  </script>
  
  
  <?php
  include '../Model/db_con.php';
  $conn=mysqli_connect('localhost','root','','adminaddpool');
  if (isset($_GET['del'])){
	  $del_id=$_GET['del'];
	  $delete="DELETE FROM ipooladdpool where id='$del_id'";
	  $run_delete=mysqli_query($conn,$delete);
	    
  }
 
  
  ?>
            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pool Name</th>
        <th>Owner's Email</th>
		<th>Price</th>
		<th>Remove Pool</th>
		<th>Edit Pool </th>
      </tr>
    </thead>
    <tbody>
	<?php
	$conn=mysqli_connect('localhost','root','','adminaddpool');
	$select=" SELECT * FROM ipooladdpool";
	$run=mysqli_query($conn,$select);
	while($row_user=mysqli_fetch_array($run,MYSQLI_ASSOC)){
	 $user_id=$row_user['id'];
	 $user_name=$row_user['pool_name'];
	 $user_email=$row_user['owner_email'];
	 
	 $user_price=$row_user['price'];
	
	?>

      <tr>
        <td><?php echo $user_id ;?></td>
        <td><?php echo $user_name ;?></td>
        <td><?php echo $user_email ;?></td>
		<td><?php echo $user_price ;?></td>
		<td><a class="btn btn-danger" href ="Viewuser.php?del=<?php echo $user_id;?>" >Delete</a></td>
		<td><a class="btn btn-success" href ="editpoool.php?edit=<?php echo $user_id;?>" >Edit</a></td>
      </tr>
	<?php }?>
      
    </tbody>
  </table>
</div>



</script>












</body>
</html>
