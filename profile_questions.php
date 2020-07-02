<?php include 'components/header.php'; ?>
<main>
  <div class="profile_page profile_q container">
    <!-- profile navigation -->
      <div class="sidebar_nav">
        <div class="title">
          <p>Личный кабинет</p>
        </div>
        <!-- links -->
        <ul class="profile_navigation">
          <li> <a href="profile_data.php"> Мои данные </a> </li>
          <li> <a href="profile_orders.php"> Мои заказы </a> </li>
          <li> <a href="profile_subscriptions.php"> Подписки </a> </li>
          <li> <a class="currentLink" href="profile_questions.php"> Вопросы
                <div class="number_of_questions">
                    <p>1</p>
                </div>
            </a>
          </li>
        </ul>
      </div>
      <!-- profile questions -->
      <div class=" profile_questions">
        <div class="title">
          <p>Вопросы</p>
        </div>
        <div class="questions_table">
           <?php for($i = 0; $i < 8; $i++): ?>
             <?php include 'components/profile_question.php' ?>
           <?php endfor; ?>
        </div>
    </div>
  </div>
</main>
<!-- footer -->
<?php include 'components/footer.php'; ?>
