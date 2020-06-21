<?php include 'components/header.php'; ?>
<main>
  <div class="goods container">
    <!-- navigation block-->
    <div class="navigation">
      <div class="grey_line"></div>
      <div class="nav">
        <a href="index.php">Главная /</a>
        <a href="catalog.php"> &nbsp; Категории /</a>
        <a href="goods.php"> &nbsp; Товар</a>
      </div>
    </div>
    <div class="main_info">
      <!-- mob name of product -->
      <div class="information mob_inf">
        <p class="name_of_product">Название продукта</p>
        <span class="brand_of_product">бренд</span>
      </div>
      <div class="sliders">
        <!-- mini-slider -->
        <div class="mini_slider">
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
        </div>
        <!-- main slider -->
        <div class="goods_slider">
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
          <div class="goods_img">
            <img src="img/content/goods-test-slider.png" alt="goods">
          </div>
        </div>
      </div>
      <!-- information -->
      <div class="information inf_desk">
        <p class="name_of_product">Название продукта</p>
        <span class="brand_of_product">бренд</span>
        <p class="desc">Lorem ipsum dolor sit amet, audire adolescens duo ut. Elitr soluta dictas vim id, his omnium adolescens ea. Est discere epicurei dissentiet in, dicam affert pri cu. An cum eleifend mediocritatem concludaturque. Eu mei suscipiantur contentiones consectetuer. Eam integre equidem no.</p>

        <div class="price_and_fav">
          <span class="price_of_product">450$</span>
          <a class="add_to_fav" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
        </div>

        <!-- filter -->
        <div class="dropdown custom-select-wrapper">
          <div class="custom-select">
            <div class="custom-select__trigger"><span>Выберите размер</span>
                <div class="arrow"></div>
            </div>
            <div class="custom-options">
                <span class="custom-option selected" data-value="recomend">Выберите размер</span>
                <span class="custom-option" data-value="new">XS</span>
                <span class="custom-option" data-value="new">S</span>
                <span class="custom-option" data-value="new">M</span>
                <span class="custom-option" data-value="new">L</span>
                <span class="custom-option" data-value="new">XL</span>
            </div>
          </div>
        </div>
        <!-- size table -->
        <div class="size_table">
            <a  href="#">Таблица размеров</a>
        </div>
        <!-- show_more button -->
        <div class="to_basket">
          <button class="action_button">
            <p>добавить в корзину</p>
          </button>
          <!-- like -->
          <a class="add_to_fav" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- second screen video -->
  <div class="goods_presentation">
    <div class="video_pres container">
      <div class="title">
        <p>Заголовок для видео</p>
      </div>
      <div class="video_player">
        <img src="img/content/video-test.png" alt="video">
        <!-- video -->
        <a href="https://www.youtube.com/watch?v=X6wHmr4b8Sk" rel="nofollow" class="open_video">
          <i class="fa fa-play" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- third screen desc -->
  <div class="goods_description container">
    <div class="descr_text">
      <p class="name_of_product">Бренд / Название товара</p>
      <span>Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</span>
      <p class="subtitle">Состав</p>
      <span>Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</span>
      <p class="subtitle">Рекомендации по уходу</p>
      <span>Lorem Ipsum is simply dummy text of the printing and typesettingindustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</span>
    </div>
    <div class="descr_img">
      <img src="img/content/goods_descr_img_test.png" alt="descr">
    </div>
  </div>
  <!-- recomendations -->
  <div class="container prod_general_style">
    <div class="title">
      <p>Рекомендации</p>
    </div>
    <div class="products">
      <?php for($i = 0; $i < 4; $i++): ?>
             <?php include 'components/product.php' ?>
      <?php endfor; ?>
    </div>
  </div>
</main>
<!-- footer -->
<?php include 'components/footer.php'; ?>
