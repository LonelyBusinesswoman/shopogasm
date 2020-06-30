<?php include 'components/header.php'; ?>
<main>
  <div class="profile_page profile_ord container">
    <!-- profile navigation -->
      <div class="sidebar_nav">
        <div class="title">
          <p>Личный кабинет</p>
        </div>
        <!-- links -->
        <ul class="profile_navigation">
          <li> <a href="profile_data.php"> Мои данные </a> </li>
          <li> <a class="currentLink" href="profile_orders.php"> Мои заказы </a> </li>
          <li> <a href="profile_subscriptions.php"> Подписки </a> </li>
          <li> <a href="profile_questions.php"> Вопросы
                <div class="number_of_questions">
                    <p>1</p>
                </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- profile content -->
      <div class="profile_content profile_orders">
        <div class="title">
          <p>Мoи заказы</p>
        </div>
        <div class="orders_table open-modal" data-modal="#modal1">
          <!-- up block -->
          <div class="order_description">
            <p class="order">Заказ</p>
            <p class="date">Дата</p>
            <p class="quantity">Количество товаров</p>
            <p class="status">Статус</p>
            <p class="amount">Сумма</p>
          </div>
          <div class="grey_line line_viewed"></div>
          <?php for($i = 0; $i < 4; $i++): ?>
  			         <?php include 'components/profile_order.php' ?>
  		    <?php endfor; ?>
        </div>
    </div>
  </div>
</main>
<!-- modal -->
<div class='modal' id='modal1'>
    <div class=" content">
      <div class="orders_information">
        <?php for($i = 0; $i < 4; $i++): ?>
               <?php include 'components/profile_order_popup.php' ?>
        <?php endfor; ?>
      </div>
      <div class="close-modal js-close-campaign" data-modal="#modal1">  <i class="fa fa-times" aria-hidden="true"></i></div>
  </div>
</div>
<!-- footer -->
<?php include 'components/footer.php'; ?>
