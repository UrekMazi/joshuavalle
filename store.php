<html>
<body><h1>
<?php
$values = $_POST['coffees'];

foreach ($values as $price){
    $quantity = $_POST['cquan'];
    $bill = $price * $quantity;
    $payment = $_POST['cpay'];
    $change= $payment - $bill;
    echo $change . "<br>";
    if($change>500){
        echo "Good Sale";
    }else{
        echo "Bad Sale ". $change;
    }
}
?>