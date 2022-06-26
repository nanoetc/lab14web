<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Berita Codeigniter</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css" />
</head>

<body>

    <?= $this->include('template/admin/navbar'); ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>

    <!-- Custom scripts for all pages-->

</body>

</html>
