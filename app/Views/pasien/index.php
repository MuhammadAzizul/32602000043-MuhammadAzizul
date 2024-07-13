<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien Page</title>
</head>

<body>
    <form action="<?= base_url('/pasien/simpan'); ?>" method="post">
        <label for="#nama">Nama</label><br>
        <input type="text" name="nama" id="nama"><br>
        <label for="#asal">Asal</label><br>
        <input type="text" name="asal" id="asal"><br>
        <button type="submit">Submit</button>
    </form>
    <br>

    <table border="1" cellspacing=0>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>asal</th>
            <th>action</th>
        </tr>
        <?php
        foreach ($items as $a) {
        ?>
            <tr>
                <td><?= $a['id']; ?></td>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['asal']; ?></td>
                <td>
                    <a href="<?= base_url('/pasien/update/' . $a['id']); ?>"><button>Update</button></a>
                    <a href="<?= base_url('/pasien/delete/' . $a['id']); ?>"><button>Delete </button></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>