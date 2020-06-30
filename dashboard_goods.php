<?php include 'components/header.php'; ?>
<main>
  <div class="dashboard_page container">
  <div class="grey_line"></div>
   <!-- add goods page -->
    <div class="dashboard_goods">
      <!-- sidebar -->
      <div class="dashboard_sidebar">
        <div class="name_of_web">
          <p>Дашборд</p>
        </div>
          <ul class="dashboard_links">
            <li> <a href="#"><img src="img/icons/home.png" alt="home"> <span>Главная</span>  </a> </li>
            <li> <a href="#"><img src="img/icons/shopping-basket.png" alt="basket"> <span>Заказы</span>  </a> </li>
            <li> <a href="#"><img  class="tag" src="img/icons/tag_active.png" alt="tag" > <span class="active">Товары</span>  </a> </li>
          </ul>
        </div>
        <!-- goods -->
        <div class="dashboard_goods_block">
          <div class="name_of_web">
            <p>Товары</p>
            <button class="default_button black_button">
              <a href="dashboard_add_goods.php">Добавить товар</a>
            </button>
          </div>
          <div class="filters">
            <!-- Search -->
            <div class="search">
              <form class="search_form" action="" method="">
                <input type="text" name="search" placeholder="Поиск">
                <!-- for desktop search (icon)-->
                <button class="desktop_btn search_btn" type="button" name="button"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
            <!-- filter -->
            <div class="dropdown custom-select-wrapper">
              <div class="custom-select">
                <div class="custom-select__trigger"><span>Категория</span>
                    <div class="arrow"></div>
                </div>
                <div class="custom-options">
                    <span class="custom-option selected" data-value="cat">Категория</span>
                    <span class="custom-option" data-value="cat2">Категория2</span>
                </div>
              </div>
            </div>
            <!-- filter -->
            <div class="dropdown custom-select-wrapper">
              <div class="custom-select">
                <div class="custom-select__trigger"><span>Сортировка</span>
                    <div class="arrow"></div>
                </div>
                <div class="custom-options">
                    <span class="custom-option selected" data-value="sort">Сортировка</span>
                    <span class="custom-option" data-value="sort2">Сортировка2</span>
                </div>
              </div>
            </div>
            <button class="default_button inherit_button">
              <p>поиск</p>
            </button>
          </div>
          <!-- up block -->
          <div class="order_description">

            <div class="pretty p-default p-fill">
                <input type="checkbox"/>
                <div class="state">
                  <label></label>
                </div>
            </div>

            <p class="goods">Товар</p>
            <p class="category"> Категория</p>
            <p class="stocks"> Запасы</p>
            <p class="price"> Цена</p>

          </div>
          <!-- grey line -->
          <div class="grey_line"></div>
          <!-- goods -->
          <div class="main_goods">
            <?php for($i = 0; $i < 5; $i++): ?>
                   <?php include 'components/purchase.php' ?>
            <?php endfor; ?>
          </div>
      </div>
    </div>
  </div>
</main>
<?php include 'components/footer.php'; ?>
