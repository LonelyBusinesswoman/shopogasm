<?php include 'components/header.php'; ?>
<main>
  <!-- main slider -->
  <div class="main_slider">

    <div class="slide" data-sec="01">
      <!-- slide img -->
      <div class="img_slide">
        <img src="img/content/slider-test-1.png" alt="slide">
      </div>
      <!-- slide info -->
      <div class="container slide_info">
        <div class="info_wrap">
          <!-- slide number -->
          <p class="slide_number">01</p>
          <!-- slide title -->
          <p class="name">Российские fashion бренды</p>
          <span class="from">From Russia With Love</span>
          <!-- video-info -->
          <div class="video">
            <!-- button for video-->
            <a href="https://www.youtube.com/watch?v=X6wHmr4b8Sk" rel="nofollow" class="open_video">
              <i class="fa fa-play" aria-hidden="true"></i>
            </a>
            <div class="video_img">
              <img src="img/content/adv_brand.png" alt="adv">
            </div>
            <div class="video_text">
              <p>Рекламируемый бренд</p>
            </div>
          </div>
          <div class="actions">
            <button class="default_button inherit_button">
              смотреть
            </button>
            <button class="default_button black_button">
              каталог
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="slide" data-sec="02">
      <!-- slide img -->
      <div class="img_slide">
        <img src="img/content/slider-test-1.png" alt="slide">
      </div>
      <!-- slide info -->
      <div class="container slide_info">
        <div class="info_wrap">
          <!-- slide number -->
          <p class="slide_number">01</p>
          <!-- slide title -->
          <p class="name">Российские fashion бренды</p>
          <span class="from">From Russia With Love</span>
          <!-- video-info -->
          <div class="video">
            <!-- button for video-->
            <a href="https://www.youtube.com/watch?v=X6wHmr4b8Sk" rel="nofollow" class="open_video">
              <i class="fa fa-play" aria-hidden="true"></i>
            </a>
            <div class="video_img">
              <img src="img/content/adv_brand.png" alt="adv">
            </div>
            <div class="video_text">
              <p>Рекламируемый бренд</p>
            </div>
          </div>
          <div class="actions">
            <button class="default_button inherit_button">
              смотреть
            </button>
            <button class="default_button black_button">
              каталог
            </button>
        </div>
      </div>
    </div>
  </div>
  <div class="slide" data-sec="03">
    <!-- slide img -->
    <div class="img_slide">
      <img src="img/content/slider-test-1.png" alt="slide">
    </div>
    <!-- slide info -->
    <div class="container slide_info">
      <div class="info_wrap">
        <!-- slide number -->
        <p class="slide_number">01</p>
        <!-- slide title -->
        <p class="name">Российские fashion бренды</p>
        <span class="from">From Russia With Love</span>
        <!-- video-info -->
        <div class="video">
          <!-- button for video-->
          <a href="https://www.youtube.com/watch?v=X6wHmr4b8Sk" rel="nofollow" class="open_video">
            <i class="fa fa-play" aria-hidden="true"></i>
          </a>
          <div class="video_img">
            <img src="img/content/adv_brand.png" alt="adv">
          </div>
          <div class="video_text">
            <p>Рекламируемый бренд</p>
          </div>
        </div>
        <div class="actions">
          <button class="default_button inherit_button">
            смотреть
          </button>
          <button class="default_button black_button">
            каталог
          </button>
        </div>
      </div>
    </div>
  </div>

</div>
  <!-- second screen-->
  <div class="second container">
    <!-- text -->
    <div class="shop_info">
      <p>Shopogasm - это</p>
      <span>Lorem Ipsum is simply dummy text of the printing and typesettingindustry.
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley</span>
      <span>Lorem Ipsum is simply dummy text of the printing and typesettingindustry.
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley/ Lorem Ipsum is simply dummy text of the printing</span>
      <span>Lorem Ipsum is simply dummy text of the printing and typesettingindustry.
         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer </span>
      </div>
    <!-- video  -->
    <div class="video">
      <!-- text -->
      <p class="shop_info_mob">Shopogasm - это</p>
      <!-- mac -->
      <img class="macbook" src="img/content/macbook-second-screen.png" alt="macbook">
      <!-- arrows -->
      <img class="arrow_1" src="img/content/arrow-second-screen.png" alt="arrow">
      <img class="arrow_2" src="img/content/arrow-second-screen.png" alt="arrow">
      <!-- logo -->
      <img class="logo" src="img/content/logo-second-screen.png" alt="logo">
      <a href="https://www.youtube.com/watch?v=X6wHmr4b8Sk" rel="nofollow" class="open_video">
        <i class="fa fa-play" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <!-- third screen-->
    <div class="third container grid_general_style">
      <div class="title">
        <p>Новинки</p>
      </div>
      <div class="products">
        <?php for($i = 0; $i < 4; $i++): ?>
			      <?php include 'components/product.php' ?>
		    <?php endfor; ?>
      </div>
      <button class="default_button black_button">
        показать больше
      </button>
    </div>
    <!-- fourth screen -->
    <div class="fourth">
      <div class="container">
        <div class="title">
          <p>Новости fashion-брендов</p>
        </div>
        <div class="trends">
          <?php for($i = 0; $i < 3; $i++): ?>
  			      <?php include 'components/fashion_news.php' ?>
  		    <?php endfor; ?>
        </div>
      </div>
    </div>
    <!-- fifth screen  -->
    <div class="container fifth grid_general_style">
      <div class="title">
        <p>Выбор Shopogasm</p>
      </div>
      <div class="products">
        <?php for($i = 0; $i < 4; $i++): ?>
			         <?php include 'components/product.php' ?>
		    <?php endfor; ?>
      </div>
      <button class="default_button black_button">
        показать больше
      </button>
    </div>
    <!-- six screen-->
    <div class="container six">
      <!-- left -->
        <a class="up_banner" href="#">
          <img src="img/content/mini-banner-1.png" alt="banner">
          <img  class="hidden" src="img/content/new_dress.png" alt="dress">
          <!-- text1 -->
          <div class="text block_up"></div>
          <p class="text text_up">Верхняя</p>
          <!-- text2 -->
          <div class="text block_down"></div>
          <p class="text text_down">одежда</p>
        </a>
        <a class="down_banner" href="#">
          <img src="img/content/mini-banner-2.png" alt="banner">
          <img  class="hidden" src="img/content/new_dress.png" alt="dress">
          <!-- text1 -->
          <div class="text block_up"></div>
          <p class="text text_up">Нижнее</p>
          <!-- text2 -->
          <div class="text block_down"></div>
          <p class="text text_down">бельё</p>
        </a>
        <!-- right -->
        <a  class="big_banner" href="#">
          <img src="img/content/big_banner.png" alt="banner">
          <!-- text1 -->
          <div class="text block_up"></div>
          <p class="text text_up">На каждый</p>
          <!-- text2 -->
          <div class="text block_down"></div>
          <p class="text text_down">день</p>
        </a>
    </div>
    <!-- seven screen-->
    <div class="container seventh grid_general_style">
      <div class="title">
        <p>Популярные товары</p>
      </div>
      <div class="products">
        <?php for($i = 0; $i < 6; $i++): ?>
               <?php include 'components/product.php' ?>
        <?php endfor; ?>
      </div>
      <button class="default_button black_button">
        показать больше
      </button>
    </div>
</main>
 <!-- footer -->
<?php include 'components/footer.php'; ?>
