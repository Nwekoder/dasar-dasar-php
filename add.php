<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
    
        include_once 'koneksi.php';
    
        $sql = "INSERT INTO data_barang (nama_barang, harga, jumlah) VALUES ('". $nama_barang ."','". $harga ."','". $jumlah ."')";
        if ($db->query($sql) === TRUE) {
            header('Location: /dasar');
        }else {
            echo 'Error <br />'.$db->error;
        }
    }
?>

<?php include 'header.php' ?>

<body class="d-flex justify-content-center align-items-center flex-column" style="height: 100vh">
    <form action="add.php" method="post">
        <input type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang" class="form-control">
        <input type="number" name="harga" id="harga" placeholder="Harga" class="form-control">
        <input type="number" name="jumlah" id="jumlah" placeholder="Jumlah" class="form-control">
        <button type="submit" class="btn btn-primary w-100">Simpan</button>
        <a href="index.php" class="btn btn-secondary w-100">Kembali</a>
    </form>
</body>