<?php include 'components/header.php'; ?>
<main>
  <!-- first slider -->
  <div class="slider">

    <div class="slide">
      <!-- img -->
      <div class="img_slide">
        <img src="img/content/slider-test-1.png" alt="slide">
      </div>
      <!-- slide info -->
      <div class="container slide_info">
        <div class="info_wrap">
          <!-- slide number -->
          <p class="slide_number">01</p>
          <!-- title -->
          <p class="name">Российские fashion бренды</p>
          <span span="from">From Russia With Love</span>
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
            <button class="action_button inherit_button">
              <p>смотреть</p>
            </button>
            <button class="action_button">
              <p>каталог</p>
            </button>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- second -->
  <div class="container second">
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
  <!-- third -->
    <div class="container third">
      <div class="title">
        <p>Новинки</p>
      </div>
      <div class="new_products">
        <?php for($i = 0; $i < 4; $i++): ?>
			         <?php include 'components/product.php' ?>
		    <?php endfor; ?>
      </div>
      <button class="action_button">
        <p>показать больше</p>
      </button>
    </div>
    <!-- fourth -->
    <div class="fourth">
      <div class="container">
        <div class="title">
          <p>Новости fashion-брендов</p>
        </div>
        <div class="trends">
          <?php for($i = 0; $i < 3; $i++): ?>
  			         <?php include 'components/news.php' ?>
  		    <?php endfor; ?>
        </div>
      </div>
    </div>
    <!-- fifth -->
    <div class="container fifth">
      <div class="title">
        <p>Выбор Shopogasm</p>
      </div>
      <div class="new_products">
        <?php for($i = 0; $i < 4; $i++): ?>
			         <?php include 'components/product.php' ?>
		    <?php endfor; ?>
      </div>
      <button class="action_button">
        <p>показать больше</p>
      </button>
    </div>
    <!-- Six -->
    <div class="container six">
        <a class="up_banner" href="#">
          <img src="img/content/mini-banner-1.png" alt="banner">
          <!-- text1 -->
          <div class="text block_up"></div>
          <p class="text text_up">Верхняя</p>
          <!-- text2 -->
          <div class="text block_down"></div>
          <p class="text text_down">одежда</p>
        </a>
        <a class="down_banner" href="#">
          <img src="img/content/mini-banner-2.png" alt="banner">
          <!-- text1 -->
          <div class="text block_up"></div>
          <p class="text text_up">Нижнее</p>
          <!-- text2 -->
          <div class="text block_down"></div>
          <p class="text text_down">бельё</p>
        </a>
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
    <!-- seven -->
    <div class="container seventh">
      <div class="title">
        <p>Популярные товары</p>
      </div>
      <div class="new_products">
        <?php for($i = 0; $i < 6; $i++): ?>
               <?php include 'components/product.php' ?>
        <?php endfor; ?>
      </div>
      <button class="action_button">
        <p>показать больше</p>
      </button>
    </div>
</main>
 <!-- footer -->
<?php include 'components/footer.php'; ?>
