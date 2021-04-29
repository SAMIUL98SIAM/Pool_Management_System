<style>
    .S {
        font-size:20px;
        transition:0.5s all ease;
    }
    .S:hover{
        color:green;

    }   
</style>

<?php
	require_once "controllers/Manager_controller.php" ;
	$key = $_GET["key"];
    $managers = searchManager($key) ;
    foreach($managers as $manager)
    {
        //echo $customer["username"]."<br/>" ;
          echo '<a class="S" style="text-decoration:none;" href="updatemanager.php?id='.$manager["id"].'">'.$manager["username"].'</a><br/>';
    }
?>  