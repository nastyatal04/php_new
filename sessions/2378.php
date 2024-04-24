<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Имя</label><br/>
        <input type="text" name="name"><br/>
        <label for="">Телефон</label><br/>
        <input type="text" name="phone"><br/>
        <label for="">Отзыв</label><br/>
        <input type="text" name="feedback"><br/>
        <br/>
        <input type="submit">
    </form>
</body>
</html>
<?
    session_start();
    if(!isset($_SESSION['feedbacks'])) {
        $_SESSION['feedbacks']=[];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $feedback = $_POST['feedback'];
        $feedbacks = ['name' => $name, 'phone' => $phone, 'feedback' => $feedback];
        $_SESSION['feedbacks'][] = $feedbacks;
        print_r($_SESSION['feedbacks']);
        echo "<br/>";
    }

    

    
?>