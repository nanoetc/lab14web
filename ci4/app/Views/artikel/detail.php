<?= $this->include('tempalte/header'); ?>

<article class="entry">
  <h2><?= $artikel['judul']; ?></h2>
  <img src="<?=('/gambar/' . $artikel['gambar']);?>" alt="<?= $artikel['judul']; ?>">
  <p><?= $row['isi']; ?></p>
</article>

<?= $this->include('template/footer'); ?>
