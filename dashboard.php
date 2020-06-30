<?php include 'components/header.php'; ?>
<main>
  <div class="dashboard_page container">
  <div class="grey_line"></div>
  <!-- main page -->
  <div class="dashboard_main">
    <!-- sidebar -->
    <div class="dashboard_sidebar">
      <div class="name_of_web">
        <p>Дашборд</p>
      </div>
        <ul class="dashboard_links">
          <li> <a href="#"><img src="img/icons/home_active.png" alt="home"> <span class="active">Главная</span>  </a> </li>
          <li> <a href="#"><img src="img/icons/shopping-basket.png" alt="basket"> <span>Заказы</span>  </a> </li>
          <li> <a href="#"><img  class="tag" src="img/icons/tag.png" alt="tag" > <span>Товары</span>  </a> </li>
        </ul>
      </div>
      <!-- main column -->
      <div class="main_information">
        <div class="name_of_web">
          <p>Сегодня</p>
        </div>
        <div class="today_data">
          <div class="data_block blue">
            <p>Продажи: 450$</p>
          </div>
          <div class="data_block green">
            <p>Просмотры: 1280</p>
          </div>
          <div class="data_block pink">
            <p>Новые заказы: 1</p>
          </div>
          <div class="data_block orange">
            <p>Добавления в корзину: 5</p>
          </div>
        </div>
        <!-- most viewed -->
        <div class="inf_block">
          <div class="name_of_web">
            <p>Наиболеее просматриваемые</p>
          </div>
          <span>За последние 14 дней</span>
          <!-- up block -->
          <div class="order_description">
            <p class="goods">Товар</p>
            <p class="date">1мая-16мая</p>
          </div>
          <!-- grey line -->
          <div class="grey_line"></div>
          <!-- goods_views -->
          <div class="goods_views">
            <?php for($i = 0; $i < 3; $i++): ?>
                   <?php include 'components/purchase.php' ?>
            <?php endfor; ?>
          </div>
        </div>
        <!-- most added -->
        <div class="inf_block">
          <div class="name_of_web">
            <p>Часто добавляемые в корзину</p>
          </div>
          <span>За последние 14 дней</span>
          <!-- up block -->
          <div class="order_description">
            <p class="goods">Товар</p>
            <p class="date">1мая-16мая</p>
          </div>
          <!-- grey line -->
          <div class="grey_line"></div>
          <!-- goods_views -->
          <div class="goods_views">
            <?php for($i = 0; $i < 3; $i++): ?>
                   <?php include 'components/purchase.php' ?>
            <?php endfor; ?>
          </div>
        </div>
        <!-- leaders -->
        <div class="inf_block">
          <div class="name_of_web">
            <p>Лидеры продаж</p>
          </div>
          <span>За последние 14 дней</span>
          <!-- up block -->
          <div class="order_description">
            <p class="goods">Товар</p>
            <p class="date">1мая-16мая</p>
          </div>
          <!-- grey line -->
          <div class="grey_line"></div>
          <!-- goods_views -->
          <div class="goods_views">
            <?php for($i = 0; $i < 3; $i++): ?>
                   <?php include 'components/purchase.php' ?>
            <?php endfor; ?>
          </div>
        </div>
      </div>
      <!-- general summary -->
      <div class="general_summary">
        <div class="name_of_web">
          <p>Общая сводка</p>
        </div>
        <div class="calendar">
          <img src="img/icons/calendar_input.png" alt="calendar">
          <input type='text' class="datepicker-here default_input" />
        </div>
        <p class="general_info">Продажи: 450$</p>
        <p class="general_info">Просмотры: 1280</p>
        <p class="general_info">Новые заказы: 1</p>
      </div>
    </div>
    <!-- end of page -->
  </div>
</main>
 <?php include 'components/footer.php'; ?>
