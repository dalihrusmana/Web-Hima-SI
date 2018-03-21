<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer>
  <div class="gradient">
  <div class="container wow fadeIn">
    <div class="row">
      <div class="col-md-4 col-xs-6 footer-col">
        <ul>
          <li class="head-list">Gallery</li>
          <li><a href="">Pengurus</a></li>
          <li><a href="">Angkatan Muda</a></li>
          <li><a href="">Alumni</a></li>
          <li><a href="">Kegiatan</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-xs-6 footer-col">
        <ul>
          <li class="head-list">Tentang</li>
          <li><a href="">Sejarah</a></li>
          <li><a href="">Ketua Hima</a></li>
          <li><a href="">Visi Misi</a></li>
          <li><a href="">Divisi</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-xs-12 footer-col">
        <a class="navbar-hima" href="#"><img src="assets/image/logohimasi.png" width="50">hima si</a>
        <p>Himpunan Mahasiswa Sistem <br>
        Informasi. Universitas Komputer <br>
        Indonesia. </p>
      </div>
      <div class="col-md-12 developer">
        <p>&copy; 2018. All Rights Reserved. Developed by <a href="https://www.instagram.com/dalihrusmana/">Dalih Rusmana</a></p>
      </div>
    </div>
  </div>
  </div>
</footer>



<!-- jquary -->
{js}
<script type="text/javascript" src="{url}"></script>
{/js}

<!-- script slick center -->
<script type="text/javascript">
  $('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  /* baaguetteBox js library */
  baguetteBox.run('.gallery');

  /* wow js library */
  wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
</script>
</body>
</html>
