<?php


try {
    $stu_address = $_POST['saddress'];
    $stu_class = $_POST['class'];
    $stu_phone = $_POST['sphone'];
    $stu_name = $_POST['sname'];

    include 'db.php';
    $sql = "insert into student(sname, address, sclass, sphone) values('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
    $result = $conn->query($sql);
    header('Location: http://localhost/crud/index.php');

    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
    die;
}
