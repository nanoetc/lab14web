<?= $this->include('template/admin/admin_layout'); ?>

 <h2><?= $title; ?></h2>
 <fieldset>
   <div>
 <form action="" method="post" enctype="multipart/form-data">
   <p>
     <input type="text" name="title">
   </p>
   <p>
     <textarea name="isi" cols="50" rows="10"></textarea>
   </p>
   <p> <input type="file" name="gambar"> </p>
   <p><input type="submit" value="Kirim" class="btn btn-large"></p>
 </form>
</div>
</fieldset>
 <?= $this->include('template/footer'); ?>
