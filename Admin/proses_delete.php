<?php 
    require("koneksi.php");
    $id1 = $_REQUEST['id_del'];
    $query1 = "DELETE FROM terminal WHERE id=".$id1;
    $sql2 = mysqli_query($koneksi, $query1);
    header('Location: http://localhost/Terminal2/Admin/admin.php');
    die();
?>