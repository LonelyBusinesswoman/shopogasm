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
            <li> <a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>
                <span >Главная</span>
                </a>
            </li>
            <li> <a href="dashboard_orders.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <span>Заказы</span>
               </a>
            </li>
            <li> <a href="dashboard_goods.php"><i class="fa fa-tag active" aria-hidden="true"></i>
                <span class="active">Товары</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- goods -->
        <div class="dashboard_goods_block">
          <div class="name_of_web">
            <p>Товары</p>
            <button class="default_button black_button">
              Добавить товар
            </button>
          </div>
          <form action="" method="" class="filters">
            <!-- Search -->
            <div class="search">
                <input type="text" name="search" placeholder="Поиск">
                <!-- for desktop search (icon)-->
                <button class="desktop_btn search_btn" type="button" name="button"><i class="fa fa-search" aria-hidden="true"></i></button>
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
              поиск
            </button>
          </form>
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
    <!-- pages -->
    <div class="nav_pages">
      <span>120 заказов</span>
      <div class="pages">
        <div class="character left">
          <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
        <div class="character active">
          <a href="#">1</a>
        </div>
        <div class="character">
          <a href="#">2</a>
        </div>
        <div class="character">
          <a href="#">3</a>
        </div>
        <div class="character ">
          <a href="#">4</a>
        </div>
        <div class="character right">
          <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include 'components/footer.php'; ?>
