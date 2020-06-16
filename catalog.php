<?php include 'components/header.php'; ?>
<main>
  <!-- navigation -->
  <div class="navigation container">
    <div class="grey_line"></div>
    <div class="nav">
      <a href="index.php">Главная /</a>
      <a href="catalog.php"> &nbsp; Категории</a>
    </div>
  </div>
  <!-- name of category and filter -->
  <div class="name_and_filter container">

  </div>
  <!-- recomendations -->
  <div class="recomendations_and_viewed container">
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
</main>
 <!-- footer -->
<?php include 'components/footer.php'; ?>
