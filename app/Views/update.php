<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>
</head>

<body>
    <?php
    // dd($item);
    ?>
    <form action=<?= base_url("/form/update/ " . $id); ?> method="post">
        <label for="nama">ID</label>
        <input type="text" name="id" value="<?= $id ?>" disabled>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $item[0]['nama']; ?>">
        <label for="nim">Nim</label>
        <input type="text" name="nim" value="<?= $item[0]['nim']; ?>">
        <button type="submit">Submit</button>
    </form>
</body>

</html>