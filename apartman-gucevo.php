<!--
* Lightbox Gallery v1.0 (https://kawshar.github.io/lightboxgallery/)
* Copyright 2017 Kawshar Ahmed
* Licensed GPLv3 https://www.gnu.org/licenses/gpl-3.0.en.html
-->
<!doctype html>

<html>
<head>
  <link rel="stylesheet" href="layout/styles/lightboxgallery-min.css">
  <link rel="stylesheet" href="layout/styles/gallery.css">

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <?php include('head.php') ?>
</head>

<body>
<?php include('navbar.php') ?>

  <div class="container">
    <div class="apartmanGallery">
      <h1>Apartman Gučevo</h1>
        <p>Nalazi se u Zdravka Masanovica, poseduje tv, internet, klimu, dva lezaja... 2-4 osobe</p>
      </div>
      <div class="lightboxgallery-gallery clearfix">
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/anastasija1.jpg" data-title="Apartman Anastasija" data-alt="Apartman Anastasija" data-desc="Internet, tv, klima">

          <div>
            <img class="goran" src="images/anastasija1.jpg" title="Apartman Anastasija" alt="Apartman Anastasija">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Apartman Gučevo</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/anastasija2.jpg" data-title="Apartman Anastasija" data-alt="Apartman Anastasija" data-desc="Internet, tv, klima">
          <div>
            <img class="goran" src="images/anastasija2.jpg" title="Apartman Gučevo" alt="Apartman Anastasija">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Apartman Gučevo</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/anastasija3.jpg" data-title="Apartman Anastasija" data-alt="Apartman Anastasija" data-desc="Internet, tv, klima">
          <div>
            <img class="goran" src="images/anastasija3.jpg" title="Apartman Gučevo" alt="Apartman Anastasija">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Apartman Gučevo</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/anastasija4.jpg" data-title="Apartman Anastasija" data-alt="Apartman Anastasija" data-desc="Internet, tv, klima">
          <div>
            <img class="goran" src="images/anastasija4.jpg" title="Apartman Gučevo" alt="Apartman Anastasija">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Apartman Gučevo</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/anastasija5.jpg" data-title="Apartman Anastasija" data-alt="Apartman Anastasija" data-desc="Internet, tv, klima">
          <div>
            <img class="goran" src="images/anastasija5.jpg" title="Apartman Gučevo" alt="Apartman Anastasija">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Apartman Gučevo</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="images/anastasija6.jpg" data-title="Apartman Anastasija" data-alt="Apartman Anastasija" data-desc="Internet, tv, klima">
          <div>
            <img class="goran" src="images/anastasija6.jpg" title="Apartman Gučevo" alt="Apartman Anastasija">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Apartman Gučevo</span>
            </div>
          </div>
        </a>
    </div>
  </div>

  <?php include('footer.php') ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="layout/scripts/lightboxgallery-min.js"></script>
  <script type="text/javascript">
  jQuery(function($) {
    $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
      event.preventDefault();
      $(this).lightboxgallery({
        showCounter: true,
        showTitle: true,
        showDescription: true
      });
    });
  });
  </script>
</body>
</html>
