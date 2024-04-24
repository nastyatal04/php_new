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
    <form action="" method="post">
        <label for="">Имя</label><br/>
        <input type="text" name="name2"><br/>
        <label for="">Телефон</label><br/>
        <input type="text" name="phone2"><br/>
        <br/>
        <input type="submit">
    </form>
</body>
</html>
<?
    session_start();
    if(!isset($_SESSION['formData'])) {
        $_SESSION['formData']=[];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //обработка данных из 1 формы 
        if(isset($_REQUEST['name']) && isset($_REQUEST['phone']) && isset($_REQUEST['feedback'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $feedback = $_POST['feedback'];
            $feedbacks = ['name' => $name, 'phone' => $phone, 'feedback' => $feedback];
            $_SESSION['formData']['form1Data'][] = $feedbacks;
        }
        
        //обработка данных из 2 формы 
        if(isset($_REQUEST['name2']) && isset($_REQUEST['phone2'])) {
            $name2 = $_POST['name2'];
            $phone2 = $_POST['phone2'];
            $callback = ['name' => $name2, 'phone' => $phone2];
            $_SESSION['formData']['form2Data'][] = $callback;
        }
    }
    // вывод данных из 1 формы 
    if(isset($_SESSION['formData']['form1Data'])){
        echo 'данные из первой формы: ';
        print_r($_SESSION['formData']['form1Data']);
        echo '<br>';
    }
    // вывод данных из 2 формы 
    if(isset($_SESSION['formData']['form2Data'])){
        echo 'данные из второй формы: ';
        print_r($_SESSION['formData']['form2Data']);
        echo '<br>';
    } 

?>