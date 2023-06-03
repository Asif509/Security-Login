<?php include 'include/header.php' ?>
<?php

if (!isset($_SESSION['id']))
{
    header('Location: route.php?page=login');
}

?>

<h1 class="text-center fw-bolder py-3">This is Home Page</h1>



<?php

////  session_start();
////  $_SESSION['name'] = 'Asif Ahmed';
//
////echo rand(10000,99999).time(). uniqid();
//
//session_start();
//echo session_id();
//
//
//
//?>

<?php include 'include/footer.php' ?>