<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>

<body>
    <?php
    // dd($item);
    ?>
    <form action="<?= base_url('/pasien/updated/' . $item[0]['id']); ?>" method="post">
        <label for="#nama">Nama</label><br>
        <input type="text" name="nama" id="nama" value="<?= $item[0]['nama']; ?>"><br>
        <label for="#asal">Asal</label><br>
        <input type="text" name="asal" id="asal" value="<?= $item[0]['asal']; ?>"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>