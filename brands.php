<?php include 'components/header.php'; ?>
<main>
  <!-- arcticle -->
  <div class="brands_page container">
    <!-- navigation block-->
    <div class="navigation">
      <div class="grey_line"></div>
      <div class="nav">
        <a href="index.php">Главная /</a>
        <a href="brands.php"> &nbsp;Дизайнеры</a>
      </div>
    </div>
    <!-- title -->
    <div class="name_of_web">
      <p>Дизайнеры</p>
    </div>
    <!-- search -->
    <div class="brands_search">
      <div class="character active">
        <a href="#">А</a>
      </div>
      <div class="character">
        <a href="#">Б</a>
      </div>
      <div class="character">
        <a href="#">В</a>
      </div>
      <div class="character">
        <a href="#">Г</a>
      </div>
      <div class="character ">
        <a href="#">Д</a>
      </div>
      <div class="character">
        <a href="#">Е</a>
      </div>
      <div class="character">
        <a href="#">Ж</a>
      </div>
      <div class="character">
        <a href="#">З</a>
      </div>
      <div class="character">
        <a href="#">Е</a>
      </div>
      <div class="character">
        <a href="#">Ж</a>
      </div>
      <div class="character">
        <a href="#">З</a>
      </div>
      <div class="character">
        <a href="#">Е</a>
      </div>
      <div class="character">
        <a href="#">Ж</a>
      </div>
      <div class="character">
        <a href="#">З</a>
      </div>
      <div class="character">
        <a href="#">Е</a>
      </div>
      <div class="character">
        <a href="#">Ж</a>
      </div>
      <div class="character">
        <a href="#">З</a>
      </div>
    </div>
    <!-- search mob -->
    <!-- filter -->
    <div class="dropdown custom-select-wrapper">
      <div class="custom-select">
        <div class="custom-select__trigger"><span>А</span>
            <div class="arrow"></div>
        </div>
        <div class="custom-options">
            <span class="custom-option selected" data-value="А">А</span>
            <span class="custom-option" data-value=">">Б</span>
            <span class="custom-option" data-value="В">В </span>
            <span class="custom-option" data-value="Г">Г</span>
        </div>
      </div>
    </div>
    <!-- brands grid -->
    <div class="brands_grid">
      <?php for($i = 0; $i < 6; $i++): ?>
             <?php include 'components/brand_item.php' ?>
      <?php endfor; ?>
    </div>
  </div>
</main>
 <?php include 'components/footer.php'; ?>
