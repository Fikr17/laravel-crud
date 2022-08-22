<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
    .content {
        margin-top: 1rem;
    }

    h1 {
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <div class="content">
            <h1 class="h1">CRUD Laravel 8</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($datas as $data) { ?>
                        <tr>
                            <th scope="row"><?= $nomor++; ?></th>
                            <td><?= $data->nama; ?></td>
                            <td><?= $data->tanggal_lahir; ?></td>
                            <td>
                                <a href="/Detail/<?= $data->id; ?>" class="btn btn-Secondary">Detail</a>
                                <a href="/Edit/<?= $data->id; ?>" class="btn btn-warning">Edit</a>
                                <form action="/Delete" method="post">
                                    <input type="hidden" value="<?= $data->id; ?>">
                                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/da363920bf.js" crossorigin="anonymous"></script>

</html>