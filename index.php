<?php include 'components/header.php'; ?>
<main>
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
      <!-- mac -->
      <img class="macbook" src="/img/content/macbook-second-screen.png" alt="macbook">
      <!-- arrows -->
      <img class="arrow_1" src="/img/content/arrow-second-screen.png" alt="arrow">
      <img class="arrow_2" src="/img/content/arrow-second-screen.png" alt="arrow">
      <!-- logo -->
      <img class="logo" src="/img/content/logo-second-screen.png" alt="logo">
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
    <div class="container fourth">
      <div class="mini_banners">

      </div>
      <div class="big_banner">
        <a href="#">
          <img src="" alt="">
        </a>
      </div>
    </div>
</main>
 <!-- footer -->
<?php include 'components/footer.php'; ?>
