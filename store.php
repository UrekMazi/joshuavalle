<html>
<body><h1>
    <?php
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach($selectedProduct as $price){
        $selectedProduct = $_POST['coffees'];
        $quantity= $_POST['cquan'];
        $payment= $_POST['cpay'];
        $selectedProduct =$_POST['coffee'];
        echo  $price;
        $bill=$quantity*$price;
        echo   $bill;
    }
}
?>

