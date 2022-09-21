
<?php
	if(isset($_SESSION['MEMBER'])){
?>

<?php
$ar_judul = ['No','NIP','Nama','Jabatan','Divisi','Foto','Action'];
?>
<h3>Data Pegawai</h3>
<a href="index.php?hal=form_pegawai" type="button" 
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
    $model = new Pegawai();

    // fitur searching dan filter
    $nama = $_GET['nama']; //ambil dari hidden field di menu.php
    $id = $_GET['id']; //ambil filter divisi di url dari sidebar.php
    $idj = $_GET['idj']; //ambil filter Jabatan di url dari sidebar.php
    if(!empty($nama) ){ //filtering
      $rs = $model->cariPegawai($nama);
    }
    elseif(!empty($id) ){
      $rs = $model->filterDivisi($id);
    }
    elseif(!empty($idj) ){
      $rs = $model->filterJabatan($idj);
    }
    else{ //jika user tidak searching
    $rs = $model->dataPegawai();
    }

    $no = 1;
    foreach($rs as $peg){
    ?>
        <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $peg['nip'] ?></td>
            <td><?= $peg['nama'] ?></td>
            <td><?= $peg['jab'] ?></td>
            <td><?= $peg['bagian'] ?></td>
            <td>
            <?php
            if(!empty($peg['foto'])){ //jika ada file foto di db
            ?>
              <img src="images/<?= $peg['foto'] ?>" width="20%" />
            <?php
            }
            else{ //jika kosong nama file foto di db
            ?>
              <img src="images/nophoto.png" width="20%" />
            <?php } ?>  
            </td>
            <td>
              <a href="index.php?hal=detail_pegawai&id=<?= $peg['id'] ?>" type="button" 
                 class="btn btn-primary">Detail</a>
              <a href="index.php?hal=form_pegawai&idedit=<?= $peg['id'] ?>" type="button" 
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