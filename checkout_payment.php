<?php include 'components/header.php'; ?>
<main>
  <div class="checkout_page payment container">
    <!-- navigation block-->
    <div class="navigation">
      <div class="grey_line"></div>
      <div class="nav">
        <a href="index.php">Главная /</a>
        <a href="shopping_basket.php"> &nbsp; Корзина /</a>
        <a href="checkout_payment.php"> &nbsp; Оформление заказа</a>
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
        <div class="cards">
          <a class="card bank" href="#">
            <img src="img/icons/credit-card.png" alt="card">
            <p>Дебетовая карта</p>
          </a>
          <a class="card yandex" href="#">
            <img src="img/icons/yandex.png" alt="card">
            <p>Яндекс.Деньги</p>
          </a>
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
            <button class="default_button black_button order">
               оплатить заказ
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
  <div class="container grid_general_style">
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
