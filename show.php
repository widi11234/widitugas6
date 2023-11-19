<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            max-width: 800px; /* Atur lebar maksimum sesuai kebutuhan Anda */
            margin: 20px auto;
            border-collapse: collapse;
            overflow-x: auto; /* Biarkan tabel dapat di-scroll horizontal pada layar kecil */
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        a {
            text-decoration: none;
            padding: 6px 10px;
            margin-right: 5px;
            border: 1px solid #4caf50;
            background-color: #4caf50;
            color: white;
            border-radius: 4px;
            display: inline-block;
        }

        a:hover {
            background-color: #45a049;
        }
        thead {
            position: sticky;
            top: 0;
            background-color: #4caf50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Data Produk</h1>

    <!-- Formulir untuk menambahkan data produk -->
    <form action="./backend/add_product.php" method="post" enctype="multipart/form-data">
        <!-- ... (Formulir seperti sebelumnya) ... -->
    </form>

    <!-- Tabel untuk menampilkan data produk -->
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Gambar Produk</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require './config/db.php';

                $products = mysqli_query($db_connect, "SELECT * FROM products");
                $no = 1;

                while ($row = mysqli_fetch_assoc($products)) {
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['name'];?></td>
                    <td><?=$row['price'];?></td>
                    <td><img src="<?=$row['image'];?>" alt="Produk Image"></td>
                    <td>
                        <a href="<?=$row['image'];?>" target="_blank">Unduh</a>
                        <a href="edit.php?id=<?=$row['id'];?>">Edit</a>
                        <a href="delete.php?id=<?=$row['id'];?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
