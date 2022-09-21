<?php
if(isset($_SESSION['MEMBER']) && $_SESSION['MEMBER']['role'] != 'staff'){
?>

<?php
$ar_judul = ['No','Materi Pelatihan','Action'];
?>
<a href="index.php?hal=form_materi" type="button" 
   class="btn btn-primary">Input Data</a>
<br/>   
<h3>Data Materi Pelatihan</h3>
<table class="table table-striped">
  <thead>
    <tr>
    <?php
    foreach($ar_judul as $jdl){
    ?>
      <th scope="col"><?= $jdl ?></th>
    <?php } ?>  
    </tr>
  </thead>
  <tbody>
    <?php
    //ciptakan object
    $model = new Materi();
    $rs = $model->dataMateri();
    $no = 1;
    foreach($rs as $materi){
    ?>
        <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $materi['nama'] ?></td>
            <td>
              <a href="index.php?hal=form_materi&idedit=<?= $materi['id'] ?>" type="button" 
                 class="btn btn-warning">Edit</a>
            </td>
        </tr>
    <?php $no++; } ?>    
  </tbody>
</table>

<?php 
} 
else{ //jika belum login
  include_once 'terlarang.php';
}
?>