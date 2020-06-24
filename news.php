<?php include 'components/header.php'; ?>
<main>
  <div class="news container">
    <!-- navigation block-->
    <div class="navigation">
      <div class="grey_line"></div>
      <div class="nav">
        <a href="index.php">Главная /</a>
        <a href="news.php"> &nbsp;  Новости</a>
      </div>
    </div>
      <!-- news -->
    <div class="news_grid">
      <?php for($i = 0; $i < 4; $i++): ?>
             <?php include 'components/news_item.php' ?>
      <?php endfor; ?>
    </div>
  </div>
</main>
<!-- footer -->
<?php include 'components/footer.php'; ?>
