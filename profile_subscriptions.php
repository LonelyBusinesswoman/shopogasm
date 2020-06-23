<?php include 'components/header.php'; ?>
<main>
  <div class="profile profile_subscriptions container">
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
      <div class="profile_content profile_sub">
        <div class="title">
          <p>Подписки</p>
        </div>
        <div class="subscriptions">
          <!-- first sub -->
          <div class="sub">
            <div class="pretty p-default p-fill">
                <input type="checkbox"/>
                <div class="state">
                  <label>Новости стиля</label>
              </div>
            </div>

            <span>Будьте в курсе новостей, трендов и специальных предложений.</span>
          </div>
          <!-- second sub -->
          <div class="sub">
            <!-- Save password -->
            <div class="pretty p-default p-fill">
                <input type="checkbox"/>
                <div class="state">
                  <label>Эксклюзивные предложения и акции</label>
              </div>
            </div>

            <span>Следите за новостями о бесплатной доставке, закрытых распродажах и специальных предложениях.</span>
          </div>
        </div>
        <button class="action_button inherit_button save_changes">
            <p>Сохранить</p>
        </button>
    </div>
  </div>
</main>
<!-- footer -->
<?php include 'components/footer.php'; ?>
