<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('admin') ?>">Admin Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <div class="navbar-nav">
          <a class"nav-link active" aria-current="page" href="/lab11_php_ci/ci4/public/home" class="active">Home</a>
          <a class="nav-link" href="<?= ('/lab11_php_ci/ci4/public/artikel');?>" class="active">artikel</a>
          <a class="nav-link" href="<?= ('/lab11_php_ci/ci4/public/about');?>" class="active">about</a>
          <a class="nav-link" href="<?= ('/lab11_php_ci/ci4/public/contact');?>" class="active">Contact</a>
          <a class="nav-link" href="<?= ('/lab11_php_ci/ci4/public/admin/artikel/add');?>" class="active">tambah artikel</a>                </li>
            </ul>
        </div>
    </div>
</nav>
