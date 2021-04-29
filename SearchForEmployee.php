<style>
    .S {
        font-size:20px;
        transition:0.5s all ease;
    }
    .S:hover{
        color:orange;

    }   
</style>


<?php
	require_once "controllers/Employee_controller.php" ;
	$key = $_GET["key"];
    $employees = searchEmployee($key) ;
    foreach($employees as $employee)
    {
        //echo $customer["username"]."<br/>" ;
          echo '<a class="S" style="text-decoration:none;" href="updateemployee.php?id='.$employee["id"].'">'.$employee["username"].'</a><br/>';
    }
?>