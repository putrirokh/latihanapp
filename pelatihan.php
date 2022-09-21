<?php
if(isset($_SESSION['MEMBER']) && $_SESSION['MEMBER']['role'] != 'staff'){
?>

<?php
$ar_judul = ['No','Materi','Pegawai','Tanggal mulai','Tanggal akhir','Keterangan','Action'];
?>
<h3>Data Gaji Pegawai</h3>
<a href="index.php?hal=form_pelatihan" type="button" 
   class="btn btn-primary">Input Data</a>
<br/><br/>
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
    $model = new Pelatihan();
    $rs = $model->dataPelatihan();
    $no = 1;
    foreach($rs as $pel){
    ?>
        <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $pel['materi'] ?></td>
            <td><?= $pel['pegawai'] ?></td>
            <td><?= $pel['tgl_mulai'] ?></td>
            <td><?= $pel['tgl_akhir'] ?></td>
            <td><?= $pel['keterangan'] ?></td>
            <td>
              <a href="index.php?hal=form_pelatihan&idedit=<?= $pel['id'] ?>" type="button" 
                 class="btn btn-info">Edit</a>   
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