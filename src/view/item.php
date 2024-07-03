<?php

require_once '../services/category.php';
require_once '../services/item.php';
require_once '../services/stock.php';

if (!isset($_SESSION['is_login'])) {
    header('Location: ' . BASEURL . '/view/login.php');
    exit;
}

if (isset($_GET['id'])) {
    delete($_GET['id']);
    echo "
    <script>
        alert('Category berhasil dihapus')
        document.location.href = './category.php'
    </script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman dashboard</title>
</head>

<body>
    <a href="dashboard.php">Dashboard</a>
    <a href="user.php">Users</a>
    <a href="../services/logout.php">Logout</a>

    <h1>Data Items</h1>

    <a href="item_create.php">Tambah Items</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>harga</th>
            <th>jumlah stock</th>
            <th>kategori</th>
            <th>deksripsi</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach (selectAllitems() as $row) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['price'] ?></td>
                <td><?= selectStockById($row['stok_id'])['total'] ?></td>
                <td><?= selectCategoriById($row['category_id'])['name'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><a href="<?= BASEURL ?>/view/category.php?id=<?= $row['id'] ?>">Hapus</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>