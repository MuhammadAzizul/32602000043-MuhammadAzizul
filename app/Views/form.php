<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>

<body>
    <form action=<?= base_url('/form/simpan'); ?> method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama">
        <label for="nim">Nim</label>
        <input type="text" name="nim">
        <button type="submit">Submit</button>
    </form><br>
    <?php
    // dd($items);
    ?>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($items as $a) {
        ?>
            <tr>
                <td><?= $a['id'] ?></td>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['nim']; ?></td>
                <td>
                    <a href="/form/update/<?= $a['id']; ?>"><button>update</button></a><br>
                    <a href="/form/delete/<?= $a['id']; ?>"><button>delete</button></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>