<?php include 'components/header.php'; ?>
<main>
  <div class="catalog_page container">
  <!-- navigation block-->
  <div class="navigation">
    <div class="grey_line"></div>
    <div class="nav">
      <a href="index.php">Главная /</a>
      <a href="catalog.php"> &nbsp; Категории</a>
    </div>
  </div>
  <!-- name of category and filter -->
  <div class="name_and_filter">
    <div class="name">
      <p>Название категории</p>
    </div>
    <!-- filter -->
    <div class="dropdown custom-select-wrapper">
      <div class="custom-select">
        <div class="custom-select__trigger"><span>Рекомендации</span>
            <div class="arrow"></div>
        </div>
        <div class="custom-options">
            <span class="custom-option selected" data-value="recomend">Рекомендации</span>
            <span class="custom-option" data-value="new">Новинки</span>
            <span class="custom-option" data-value="price_up">По возрастанию цены</span>
            <span class="custom-option" data-value="price_down">По убыванию цены</span>
        </div>
      </div>
    </div>
</div>
<!-- catalog and filters-->
<div class="catalog_and_filters">
  <!-- filters -->
  <div class="filters">
    <!-- for mobile -->
    <div class="filter_actions">
      <!-- open filters -->
      <button class="action_button inherit_button filter_button">
        <p>Фильтры</p>
      </button>
      <!-- filter mob-->
      <div class="dropdown dropdown_mob custom-select-wrapper">
        <div class="custom-select">
          <div class="custom-select__trigger"><span>Рекомендации</span>
              <div class="arrow"></div>
          </div>
          <div class="custom-options">
              <span class="custom-option selected" data-value="recomend">Рекомендации</span>
              <span class="custom-option" data-value="new">Новинки</span>
              <span class="custom-option" data-value="price_up">По возрастанию цены</span>
              <span class="custom-option" data-value="price_down">По убыванию цены</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Все фильтры -->
    <div class="all_filters">
      <!-- Search -->
      <div class="search">
        <form class="search_form" action="" method="">
          <input type="text" name="search" placeholder="Поиск">
          <!-- for desktop search (icon)-->
          <button class="desktop_btn search_btn" type="button" name="button"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </div>
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
        </ul>
      </div>

      <div class="grey_line"></div>

      <!--size filter -->
      <div class="filter size">
        <p>Размер</p>
        <ul>
          <li>
            <div class="pretty p-default p-fill">
              <input type="checkbox" />
              <div class="state">
                  <label>XS</label>
              </div>
            </div>
          </li>
            <li>
              <div class="pretty p-default p-fill">
                <input type="checkbox" />
                <div class="state">
                  <label>S</label>
              </div>
            </div>
          </li>
          <li>
            <div class="pretty p-default p-fill">
              <input type="checkbox" />
              <div class="state">
                <label>M</label>
              </div>
            </div>
          </li>
          <li>
            <div class="pretty p-default p-fill">
              <input type="checkbox" />
              <div class="state">
                <label>L</label>
              </div>
            </div>
          </li>
          <li>
            <div class="pretty p-default p-fill">
              <input type="checkbox" />
              <div class="state">
                <label>XL</label>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="grey_line"></div>
      <!-- filter designer -->
      <div class="filter designer">
        <p>Дизайнеры</p>
        <!-- filter -->
        <div class="dropdown custom-select-wrapper">
          <div class="custom-select">
            <div class="custom-select__trigger"><span>Дизайнер1</span>
                <div class="arrow"></div>
            </div>
            <div class="custom-options">
                <span class="custom-option selected" data-value="des1">Дизайнер1</span>
                <span class="custom-option" data-value="des2">Дизайнер2</span>
            </div>
          </div>
        </div>
      </div>
      <div class="grey_line"></div>
      <!-- filter price -->
      <div class="filter price">
        <p>Цена</p>
        <!-- range -->
        <div class="polzunok-container">

          <span class="low">0$</span>
          <span class="high">600$</span>

          <div class="polzunok-5 ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 28.66%;"><input type="text" class="polzunok-input-5-left" disabled/></span>
            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 57.3%;">  <input type="text" class="polzunok-input-5-right " disabled/></span>
          </div>
        </div>
      </div>
    </div>
    <!-- конец блока с фильтрами -->
  </div>
  <!-- catalog -->
  <div class="catalog">
    <?php for($i = 0; $i < 10; $i++): ?>
           <?php include 'components/product.php' ?>
    <?php endfor; ?>
  </div>
</div>
<!-- show_more button -->
<div class="show_more">
  <button class="action_button">
    <p>показать больше</p>
  </button>
</div>

  <!-- recomendations block-->
  <div class="recomendations_and_viewed">
    <div class="actions">
      <button class="action_button active_button">
        <p>рекомендации</p>
      </button>
      <button class="action_button nonactive_button">
        <p>недавно просмотренное</p>
      </button>
    </div>
    <!-- products -->
    <div class="products">
      <?php for($i = 0; $i < 4; $i++): ?>
             <?php include 'components/product.php' ?>
      <?php endfor; ?>
    </div>
  </div>
</div>
</main>
 <!-- footer -->
<?php include 'components/footer.php'; ?>
