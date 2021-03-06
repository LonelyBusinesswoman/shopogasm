<?php include 'components/header.php'; ?>
<main>
  <div class="dashboard_page container">
  <div class="grey_line"></div>
  <!-- add goods page -->
  <div class="dashboard_add_goods">
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
          <li> <a href="dashboard_orders.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
              <span>Заказы</span>
             </a>
          </li>
          <li> <a href="dashboard_goods.php"><i class="fa fa-tag" aria-hidden="true"></i>
              <span>Товары</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- main form -->
      <form class="add_form" action="" method="post">
        <div class="description_col col_1">

          <div class="name_of_web">
            <p>Добавить новый товар</p>
          </div>
          <!-- name and descr -->
          <div class="descr_block">
            <input class="default_input" type="text" name="name" placeholder="Название">
            <textarea name="description" placeholder="Описание"></textarea>
          </div>
          <!-- price -->
          <div class="descr_block">
            <span>Цена</span>
            <input class="default_input half" type="text" name="default_price" placeholder="Базовая">
            <input class="default_input half" type="text" name="discount" placeholder="Со скидкой">
          </div>
          <!-- stock -->
          <div class="descr_block">
            <span>Склад</span>
            <input class="default_input half" type="text" name="SKU" placeholder="SKU">
            <div class="descr_count">
              <p>Количество</p>
              <!-- quantity -->
              <div class="quantity_block">
                <input class="default_input" type="text" name="count" value="1" disabled >
                <div class="operations">
                  <div class=" operation plus">
                    +
                  </div>
                  <div class=" operation minus">
                    -
                  </div>
                </div>
              </div>
            </div>
            <!-- managment -->
            <div class="pretty p-default p-fill">
                <input type="checkbox"/>
                <div class="state">
                  <label>Управление запасами</label>
                </div>
            </div>
            <!-- sell  -->
            <div class="pretty p-default p-fill">
                <input type="checkbox"/>
                <div class="state">
                  <label>Продавать, когда товар закончился</label>
                </div>
            </div>
          </div>
          <!-- delivery -->
          <div class="descr_block">
            <span>Доставка</span>
            <div class="for_absol_pos">
              <p>kg</p>
              <input class="default_input half" type="text" name="delivery" placeholder="Доставка">
            </div>
          </div>
          <!-- delivery -->
          <div class="descr_block">
            <span>Вариации</span>
            <!-- sell  -->
            <div class="check">
              <div class="pretty p-default p-fill">
                <input type="checkbox"/>
                <div class="state">
                  <label></label>
                </div>
              </div>
              <span>Товар имеет неcколько вариаций, например: цвет, размер</span>
            </div>

            <p class="attr">Атрибуты</p>
            <!-- filter -->
            <div class="dropdown custom-select-wrapper half">
              <div class="custom-select">
                <div class="custom-select__trigger"><span>Размер</span>
                    <div class="arrow"></div>
                </div>
                <div class="custom-options">
                    <span class="custom-option selected" data-value="size">Размер</span>
                    <span class="custom-option" data-value="color">Цвет</span>
                </div>
              </div>
            </div>
            <!-- filter -->
            <div class="dropdown custom-select-wrapper half">
              <div class="custom-select">
                <div class="custom-select__trigger"><span> S</span>
                    <div class="arrow"></div>
                </div>
                <div class="custom-options">
                    <span class="custom-option selected" data-value="XS">XS</span>
                    <span class="custom-option" data-value="S">S</span>
                    <span class="custom-option" data-value="M">M</span>
                </div>
              </div>
            </div>
            <button class="default_button inherit_button">
              Добавить вариацию
            </button>
          </div>
        </div>

        <div class="description_col col_2">
          <div class="name_of_web">
            <p>Добавить</p>
          </div>
          <!-- name and descr -->
          <div class="descr_block">
            <!-- first filter -->
            <div class="filter category">
              <p>Категория</p>
              <ul>
                <li>
                  <div class="pretty p-default p-fill">
                      <input type="checkbox" />
                      <div class="state">
                          <label>Одежда</label>
                      </div>
                  </div>
                  <!-- Подкатегории -->
                  <ul class="subcategory">
                    <li>
                      <div class="pretty p-default p-fill">
                      <input type="checkbox" />
                      <div class="state">
                          <label>Подкатегория</label>
                      </div>
                  </div>
                </li>
              </ul>     <!-- конец подкатегории -->
            </li>
              <li>
                <div class="pretty p-default p-fill">
                    <input type="checkbox" />
                    <div class="state">
                        <label>Аксессуары</label>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="pretty p-default p-fill">
                      <input type="checkbox" />
                      <div class="state">
                        <label>Обувь</label>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- img of goods -->
          <div class="descr_block">
            <span>Изображение товара</span>
            <div class="upload_block">
              <button class="default_button inherit_button">
                Загрузить
              </button>
            </div>
          </div>
          <!-- gallery -->
          <div class="descr_block">
            <span>Галерея товара</span>
            <div class="upload_block">
              <button class="default_button inherit_button">
                Загрузить
              </button>
            </div>
          </div>
        </div>
        <!-- button -->
        <button class="add_button default_button black_button">
          Добавить
        </button>
      </form>

      <!-- end of grid system -->
    </div>
  <!-- end of page -->

  </div>
</main>
<?php include 'components/footer.php'; ?>
