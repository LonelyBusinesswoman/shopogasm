<?php include 'components/header.php'; ?>
<main>
  <div class="shopping_basket_page container">
    <!-- navigation block-->
    <div class="navigation">
      <div class="grey_line"></div>
      <div class="nav">
        <a href="index.php">Главная /</a>
        <a href="shopping_basket.php"> &nbsp;  Корзина</a>
      </div>
    </div>
    <!-- name of the page -->
    <div class="name_of_web">
      <p>Корзина</p>
    </div>
    <!-- form  -->
    <form class="" action="" method="post">
      <!-- purchases -->
      <div class="all_shoppings">
        <!-- up block -->
        <div class="order_description">
          <p class="goods">Товар</p>
          <p class="price">Цена</p>
          <p class="quantity">Количество</p>
          <p class="amount">Сумма</p>
        </div>
        <!-- grey_line -->
        <div class="grey_line mob_line_none"></div>
        <!-- purchases -->
        <div class="purchases">
          <?php for($i = 0; $i < 3; $i++): ?>
                 <?php include 'components/purchase.php' ?>
          <?php endfor; ?>
        </div>
      </div>
      <!-- total -->
      <div class="total">
        <div class="row come_to ">
          <span>Итого</span>
          <span class="all_price">450$</span>
        </div>
        <div class="row del ">
          <span>Доставка</span>
          <span class="delivery_price">0$</span>
        </div>
        <div class="row in_all ">
          <p>Всего</p>
          <p class="total_price">450$</p>
        </div>
        <div class="actions">
          <button class="default_button inherit_button favorites" type="submit">
            переместить в избранное
          </button>
          <button class="default_button black_button order" type="submit">
            оформить заказ
          </button>
        </div>
      </div>
    </form>
  </div>
  <!-- recomendations -->
  <div class="container grid_general_style shopping_basket_rec">
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
