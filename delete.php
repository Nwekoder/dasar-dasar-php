<?php
    include_once 'koneksi.php';
    $id_barang = $_GET['id'];

    $sql = "DELETE FROM data_barang WHERE id=". $id_barang;
    
    if ($db->query($sql) === TRUE) {
        header('Location: /dasar');
    }else {
        echo 'Error <br />'.$db->error;
    }