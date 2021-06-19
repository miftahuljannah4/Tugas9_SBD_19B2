
<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM pembeli WHERE id_pmb = '{$id}'";
    $result = mysqli_query($conn, $sql);
    //header('location: index.php');
?>