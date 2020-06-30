<?php include 'components/header.php'; ?>
<main>
  <div class="dashboard_page container">
  <div class="grey_line"></div>
   <!-- add goods page -->
    <div class="dashboard_orders">
      <!-- sidebar -->
      <div class="dashboard_sidebar">
        <div class="name_of_web">
          <p>Дашборд</p>
        </div>
          <ul class="dashboard_links">
            <li> <a href="dashboard.php"><img src="img/icons/home.png" alt="home"> <span>Главная</span>  </a> </li>
            <li> <a href="dashboard_orders.php"><img src="img/icons/shopping-basket_active.png" alt="basket"> <span class="active">Заказы</span>  </a> </li>
            <li> <a href="dashboard_goods.php"><img  class="tag" src="img/icons/tag.png" alt="tag" > <span>Товары</span>  </a> </li>
          </ul>
        </div>
        <!-- orders -->
        <div class="dashboard_orders_block">
          <div class="name_of_web">
            <p>Заказы</p>
          </div>
          <!-- filters -->
          <div class="filters_and_action">

            <div class="filters">

              <div class="filter_status active">
                <p>Все</p>
              </div>
              <div class="filter_status ">
                <span class="green"></span>
                <p> Выполнен</p>
              </div>
              <div class="filter_status ">
                <span class="orange"></span>
                <p>В обработке</p>
              </div>
              <div class="filter_status ">
                <span class="red"></span>
                <p>Отменён</p>
              </div>
              <div class="filter_status ">
                <span class="grey"></span>
                <p>Не удался</p>
              </div>

            </div>
            <button class="default_button black_button">
              <p>поиск</p>
            </button>
          </div>
          <!-- actions_to_ orders -->
          <div class="actions_to_orders">
            <!-- filter -->
            <div class="dropdown custom-select-wrapper half">
              <div class="custom-select">
                <div class="custom-select__trigger"><span> Действие</span>
                    <div class="arrow"></div>
                </div>
                <div class="custom-options">
                    <span class="custom-option selected" data-value="action_1">Действие1</span>
                    <span class="custom-option" data-value="action_2">Действие2</span>
                    <span class="custom-option" data-value="action_3">Действие3</span>
                </div>
              </div>
            </div>
            <button class="default_button inherit_button">
              <p>применить</p>
            </button>
          </div>
          <!-- orders -->
          <div class="dash_orders_table">
            <!-- up block -->
            <div class="order_description">

              <div class="pretty p-default p-fill">
                  <input type="checkbox"/>
                  <div class="state">
                    <label></label>
                  </div>
              </div>

              <p class="order">Заказ</p>
              <p class="date">Дата</p>
              <p class="status">Статус</p>
              <p class="amount">Итого</p>
            </div>
            <div class="grey_line"></div>
            <?php for($i = 0; $i < 4; $i++): ?>
    			         <?php include 'components/profile_order.php' ?>
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