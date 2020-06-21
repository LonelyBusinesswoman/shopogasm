<?php include 'components/header.php'; ?>
<main>
  <div class="checkout container">
    <!-- navigation block-->
    <div class="navigation">
      <div class="grey_line"></div>
      <div class="nav">
        <a href="index.php">Главная /</a>
        <a href="shopping_basket.php"> &nbsp; Корзина /</a>
        <a href="catalog.php"> &nbsp; Оформление заказа</a>
      </div>
    </div>
    <!-- order_registration -->
    <div class="order_registration">
      <!-- left information -->
      <div class="left_reg">
        <!-- name of the page -->
        <div class="name_of_web">
          <p>Оформление заказа</p>
        </div>
        <!-- steps -->
        <div class="steps">
          <!-- delivery -->
          <div class="step delivery_step">
            <div class="grey_line">
              <div class="round"></div>
            </div>
            <p>Доставка</p>
          </div>
          <!-- payment -->
          <div class="step payment_step">
            <div class="grey_line">
              <div class="round"></div>
            </div>
            <p>Оплата</p>
          </div>
          <!-- the confirmation -->
          <div class="step confirmation_step">
            <div class="grey_line">
              <div class="round"></div>
            </div>
            <p>Подтверждение</p>
          </div>
        </div>
        <!-- checkout_form -->
        <form class="checkout_form" action="" method="">
          <div class="form_block">
            <input class="default_input half" type="text" name="name" placeholder="Имя">
            <input class="default_input half" type="text" name="Surname" placeholder="Фамилия">
            <input class="default_input" type="text" name="email" placeholder="E-mail">
          </div>

          <div class="form_block">
            <input class="default_input" type="text" name="address" placeholder="Адрес">
            <input class="default_input half" type="text" name="Сity" placeholder="Город">
            <input class="default_input half" type="text" name="dir" placeholder="Область">
            <input class="default_input half" type="text" name="index" placeholder="Почтовый индекс">
            <input class="default_input half" type="text" name="tel" placeholder="Телефон">
          </div>

          <!-- Save password -->
          <div class="pretty p-default p-fill">
              <input type="checkbox"/>
              <div class="state">
                <label>Использовать в качестве платежного адреса</label>
            </div>
        </div>
        </form>
      </div>
      <!-- right shopping basket -->
      <div class="right_reg">
        <!-- name of the page -->
        <div class="name_of_web">
          <p>Ваш заказ</p>
        </div>
        <!-- up block -->
        <div class="order_description">
          <p class="goods"> <span>1 &nbsp;</span>Товар</p>
          <p class="price">Цена</p>
          <p class="quantity">Количество</p>
        </div>
        <!-- grey line -->
        <div class="grey_line"></div>
        <!-- orders -->
        <div class="orders">
          <?php for($i = 0; $i < 3; $i++): ?>
                 <?php include 'components/purchase.php' ?>
          <?php endfor; ?>
        </div>
        <!-- total -->
        <div class="total">
          <div class="row del ">
            <span>Доставка</span>
            <span class="delivery_price">0$</span>
          </div>
          <div class="row in_all ">
            <p>Всего</p>
            <p class="total_price">450$</p>
          </div>
          <div class="actions">
            <button class="action_button order">
              <p>перейти к оплате</p>
              </button>
          </div>
        </div>
        <!-- offer -->
        <p class="offer">При оплате вы соглашаетесь с
            <a href="#">нашей публичной офертой, политикой конфиденциальности и обработки данных</a>
        </p>
      </div>
    </div>
  </div>
  <!-- recomendations -->
  <div class="container prod_general_style shopping_basket_rec">
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
