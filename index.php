<?php
    include_once 'koneksi.php';

    $data_query = $db->query("SELECT * FROM data_barang");
    $data = mysqli_fetch_all($data_query);
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<body>
    
<div class="container py-3 d-flex flex-column">
    <a href="add.php" class="btn btn-primary ms-auto">Tambah Baru</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($data)) { ?>
                <?php foreach($data as $d) { ?>
                    <tr>
                        <td><?= $d[0] ?></td>
                        <td><?= $d[1] ?></td>
                        <td><?= $d[2] ?></td>
                        <td><?= $d[3] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $d[0] ?>" class="btn btn-info w-100">Edit</a>    
                        </td>
                        <td>
                            <a href="delete.php?id=<?= $d[0] ?>" class="btn btn-danger w-100">Hapus</a>    
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>