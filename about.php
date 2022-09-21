<?php
include "header.php";
include "menu.php";
?>

<h2>About Me</h2>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h3 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Summary
                </button>
      </h3>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Nama saya Putri Rokhmayati. Saya adalah seorang tuna netra yang memiliki ketertarikan tinggi di bidang pemrograman. Bidang pemrograman yang saya kuasai adalah web development dan saya sudah lolos uji kompetensi dari BSNP sebagai junior programer. Saya selalu tertarik untuk mengeksplorasi secara lebih lanjut tentang bidang-bidang pemrograman yang bisa dipelajari dan dikuasai oleh seorang tuna netra seperti saya. Saya percaya bahwa programer adalah salah satu profesi yang bisa dilakukan oleh tuna netra di tengah sedikitnya pilihan profesi dan lapangan pekerjaan yang tersedia untuk tuna netra.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h3 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Pendidikan
        </button>
      </h3>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <b>Fakultas Teknik, Universitas Pamulang September 2020-sekarang</b>
        <br>Teknik Informatika
        <br>
        <b>Fakultas Teknik, Universitas Indonesia 2013</b>
<br>        Teknik Kimia
<br><br>
<b>Tech Muda IT Bootcamp Februari 2021-sekarang</b>
<br>Front End Web Development
<br>
<b>Tech Muda Batch 4 Maret 2020-Mei 2020
    <br>Web Development<br>
    <b>Indosat Digital Camp Agustus 2019-Oktober 2019
        <br>Dasar Pemrograman Web
        <br><br>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h3 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Kemampuan
        </button>
      </h3>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        PHP, Frame Work Laravel, Mysql, HTML, CSS, Javascript.
        <br><br>
      </div>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>