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
            <li> <a href="dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>
                <span >Главная</span>
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
        <!-- orders -->
        <div class="dashboard_orders_block">
          <div class="name_of_web">
            <p>Заказы</p>
          </div>
          <!-- filters -->
          <form action="" method="post" class="filters_and_action">

            <div class="filters">
              <!-- все -->
              <input type="radio" id="all" name="switch-one" value="all" checked/>
              <label for="all">Все</label>
              <!-- выполнен -->
              <input type="radio" id="done" name="switch-one" value="done"/>
              <label for="done"> <span class="green"></span> Выполнен</label>
              <!-- в обработке -->
              <input type="radio" id="in_processing" name="switch-one" value="in_processing"/>
              <label for="in_processing"><span class="orange"></span>В обработке</label>
              <!-- отменён -->
              <input type="radio" id="cancellation" name="switch-one" value="cancellation"/>
              <label for="cancellation"><span class="red"></span>Отменён</label>
              <!-- не удался -->
              <input type="radio" id="failed" name="switch-one" value="failed"/>
              <label for="failed"><span class="grey"></span>Не удался</label>

            </div>
            <button class="default_button black_button">
              поиск
            </button>
          </form>
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
              применить
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
