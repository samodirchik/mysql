<?php


$server = "localhost";
$username = "root";
$password = "";


$mysqli = new mysqli('localhost', 'root', '') or die(mysqli_error($mysqli));
$selected = mysqli_select_db ($mysqli,'newdb');


if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $file = $_FILES['file']['name'];
    $mysqli->query("INSERT INTO users (name, email, comment, file) VALUES('$name', '$email', '$comment', '$file') ") or die($mysqli->error);
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id=$id") or die($mysqli->error());
    
}


if (isset($_GET['id'])){
    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM users WHERE id=$id") or die($mysqli->error());
    
        $row = $result->fetch_array();
        $name = $row['name'];
        $email = $row['email'];
        $comment = $row['comment'];
        $file = $row['file'];
        
    
}

if (isset($_GET['update'])){
    $id = $_GET['edit'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $file = $_FILES['file']['name'];
    echo "UPDATE users SET name='$name', email='$email', comment='$comment', filename='$filename' WHERE id=$id";
 $mysqli->query("UPDATE users SET name='$name', email='$email', comment='$comment', filename='$filename' WHERE id=$id") or die($mysqli->error);
}
 
if (isset($_GET['update'])) { //Проверяем, передана ли переменная на редактирования
    if (isset($_POST['id'])) { //Если новое имя предано, то обновляем 
        $mysqli = mysqli_query('UPDATE `users` SET '
                .'`name` = "'.$_POST['name'].'",'
                .'`email` = '.$_POST['email'].' '
                .'`comment` = '.$_POST['comment'].' '
                .'`file` = '.$_POST['file'].' '
                .'WHERE `id` = '.$_GET['update']);
    }
     if (isset($_GET['update'])) { //Если передана переменная на    редактирование
    //Достаем запсись из БД
    $mysqli = mysqli_query("SELECT * FROM `users` WHERE `id`=".$_GET['update'], $link); //запрос к БД
    $result = mysqli_fetch_array($mysqli); //получение самой запис
}
}



