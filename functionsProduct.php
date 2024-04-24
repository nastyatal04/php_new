<?
require_once "connect.php";
function filler ($conn){
    $sql = "SELECT * FROM `products`";
    if($result = $conn->query($sql)){
        while($row = $result->fetch_array()){
            $title = $row['title'];
            $price = $row['price'];
            $image = $row['image'];
            $descriptions = $row['descriptions'];
            require 'card.php';
        }
    }
}
?>
