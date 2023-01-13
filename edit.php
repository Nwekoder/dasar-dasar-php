<?php
    include_once 'koneksi.php';
    $id_barang = $_GET['id'];

    $sql = "SELECT nama_barang, harga, jumlah FROM data_barang WHERE id='". $id_barang ."'";
    $data_query = $db->query($sql);
    $data = mysqli_fetch_assoc($data_query);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
    
    
        $sql = "UPDATE data_barang SET nama_barang='".$nama_barang."', harga='".$harga."', jumlah='".$jumlah."' WHERE id='".$id_barang."'";
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
        <input type="text" value="<?= $data['nama_barang'] ?>" name="nama_barang" id="nama_barang" placeholder="Nama Barang" class="form-control">
        <input type="number" value="<?= $data['harga'] ?>" name="harga" id="harga" placeholder="Harga" class="form-control">
        <input type="number" value="<?= $data['jumlah'] ?>" name="jumlah" id="jumlah" placeholder="Jumlah" class="form-control">
        <button type="submit" class="btn btn-primary w-100">Simpan</button>
        <a href="index.php" class="btn btn-secondary w-100">Kembali</a>
    </form>
</body>