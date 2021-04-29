<style>
    .S {
        font-size:20px;
        transition:0.5s all ease;
    }
    .S:hover{
        color:red;

    }   
</style>

<?php
    require_once 'controllers/Customer_controller.php';
    $key = $_GET["key"];
    $customers = searchCustomer($key) ;
    foreach($customers as $customer)
    {
        //echo $customer["username"]."<br/>" ;
          echo '<a class="S" style="text-decoration:none;" href="updatecustomer.php?id='.$customer["id"].'">'.$customer["username"].'</a><br/>';
    }
?>