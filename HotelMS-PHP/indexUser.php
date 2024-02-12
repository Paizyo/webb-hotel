<?php
include_once "db.php";
session_start();
if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $userQuery = "SELECT * FROM user WHERE id = '$user_id'";
    $result = mysqli_query($connection, $userQuery);
    $user = mysqli_fetch_assoc($result);
}else{
    header('Location:login.php');
}
include_once "header.php";
include_once "sidebarUser.php";


if (isset($_GET['room_mangUser'])){
    include_once "room_mangUser.php";
}
elseif (isset($_GET['dashboardUser'])){
    include_once "dashboardUser.php";
}
elseif (isset($_GET['reservationUser'])){
    include_once "reservationUser.php";
}
elseif (isset($_GET['staff_mang'])){
    include_once "staff_mang.php";
}
elseif (isset($_GET['add_emp'])){
    include_once "add_emp.php";
}
elseif (isset($_GET['complain'])){
    include_once "complainUser.php";
}
elseif (isset($_GET['statistics'])){
    include_once "statistics.php";
}
elseif (isset($_GET['emp_history'])){
    include_once "emp_history.php";
}
else{
    include_once "room_mangUser.php";
}

include_once "footer.php";