<?php include 'components/header.php'; ?>
<main>
  <div class="profile profile_data container">
    <!-- profile navigation -->
      <div class="sidebar_nav">
        <div class="title">
          <p>Личный кабинет</p>
        </div>
        <!-- links -->
        <ul class="profile_navigation">
          <li> <a class="currentLink" href="profile_data.php"> Мои данные </a> </li>
          <li> <a href="profile_orders.php"> Мои заказы </a> </li>
          <li> <a href="profile_subscriptions.php"> Подписки </a> </li>
          <li> <a href="profile_questions.php"> Вопросы
                <div class="number_of_questions">
                    <p>1</p>
                </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- profile content -->
      <div class="profile_content profile_orders">
        <div class="title">
          <p>Мoи заказы</p>
        </div>
        <div class="orders_table">

        </div>
    </div>
  </div>
</main>
<!-- footer -->
<?php include 'components/footer.php'; ?>
