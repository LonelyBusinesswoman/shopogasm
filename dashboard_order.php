<?php include 'components/header.php'; ?>
<main>
  <div class="dashboard_page container">
  <div class="grey_line"></div>
   <!-- add goods page -->
    <div class="dashboard_order">
      <!-- sidebar -->
      <div class="dashboard_sidebar">
        <div class="name_of_web">
          <p>Дашборд</p>
        </div>
          <ul class="dashboard_links">
            <li> <a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>
                <span>Главная</span>
                </a>
            </li>
            <li> <a href="dashboard_orders.php"><i class="fa fa-shopping-basket active" aria-hidden="true"></i>
                <span class="active">Заказы</span>
               </a>
            </li>
            <li> <a href="dashboard_goods.php"><i class="fa fa-tag" aria-hidden="true"></i>
                <span>Товары</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- main -->
        <div class="dashboard_order_block">
          <div class="name_of_web">
            <p>Заказ #342</p>
            <span>21  мая, 2020 в 14:43</span>
            <div class="filter_status">
              <span class="orange"></span>
              <p>В обработке</p>
            </div>
          </div>
          <div class="orders_items">
            <?php for($i = 0; $i < 4; $i++): ?>
                   <?php include 'components/purchase.php' ?>
            <?php endfor; ?>
          </div>
          <div class="payed">
            <div class="name_of_web">
              <p>Оплачено</p>
            </div>
            <div class="total">
              <div class="row come_to ">
                <span>Итого</span>
                <span class="additional">10 товаров</span>
                <span class="all_price count">450$</span>
              </div>
              <div class="row del ">
                <span>Доставка</span>
                <span class="additional">бесплатная доставка (1,1 кг)</span>
                <span class="delivery_price count">0$</span>
              </div>
              <div class="row del ">
                <span>Налог</span>
                <span class="additional"></span>
                <span class="tax count">0$</span>
              </div>
              <div class="row in_all ">
                <p>Всего</p>
                <span class="additional"></span>
                <p class="total_price count">450$</p>
              </div>
            </div>
          </div>
          <!-- done button -->
          <button class="default_button black_button">
            Выполнен
          </button>
        </div>
        <!-- person information -->
        <div class="client_information">
          <div class="name_of_web">
            <p> Клиент</p>
          </div>
          <div class="client_main">
            <span class="name_and_surname">Имя Фамилия</span>

            <p class="subtitle">Контакты</p>
            <a href = "mailto: abc@example.com"> email.com</a>
            <a href="tel:+79959567575">+ 7 995 956 75 75</a>

            <p class="subtitle">Доставка</p>
            <span class="name_and_surname">Имя Фамилия</span>
            <span class="email">email.com</span>
            <span class="tel">+ 7 995 956 75 75</span>

            <span class="address">Адрес,</span>
            <span class="dir">Область,</span>
            <span class="city">Город, почтовый индекс</span>

            <p class="subtitle">Платёжный адрес</p>
            <span>такой же</span>
          </div>
        </div>
      </div>
    </div>
</main>
 <?php include 'components/footer.php'; ?>
