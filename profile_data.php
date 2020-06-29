<?php include 'components/header.php'; ?>
<main>
  <div class="profile_page profile_data container">
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
      <div class="profile_content data">
        <div class="title">
          <p>Мoи данные</p>
        </div>
        <form class="profile_form default_form" action="" method="">
          <div class="input_block">
            <!-- Name -->
            <label>Имя</label>
            <input class="default_input" type="text" name="name" placeholder="Имя">
          </div>
          <div class="input_block">
            <!-- Surname -->
            <label >Фамилия</label>
            <input class="default_input" type="text" name="name" placeholder="Фамилия">
          </div>
          <div class="input_block">
            <!-- Tel -->
            <label >Телефон</label>
            <input class="default_input" type="text" name="name" placeholder="Телефон">
          </div>
        </form>
        <!-- socials -->
        <!-- through socials -->
        <div class="socials">
          <div class="title">
            <p>Профили в социальных сетях</p>
          </div>
          <div class="go_through_soc">
            <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
          </div>
        </div>
        <!-- additional data -->
        <div class="additional_inf">
          <!-- sex -->
          <div class="additional_inf_block">
            <span>Ваш пол</span>
            <div class="sex">
              <a class="male active" href="#">Мужской</a>
              <a class="female"href="#">Женский</a>
            </div>
          </div>
          <!-- birth -->
          <div class="additional_inf_block">
            <span>Дата рождения</span>
            <div>
              <input type='text' class="datepicker-here default_input" />
            </div>
          </div>
          <!-- email -->
          <div class="additional_inf_block">
            <span>Ваш email</span>
            <div>
              <span>info@shopogasm.ru</span>
            </div>
          </div>
          <!-- password -->
          <div class="additional_inf_block">
            <span>Пароль</span>
            <div class="change_password">
              <button class="default_button black_button">
                  <p>Изменить</p>
              </button>
            </div>
          </div>
        </div>
        <!-- save changes -->
        <button class="default_button inherit_button save_changes">
            <p>Сохранить</p>
        </button>
      </div>
  </div>
</main>
<!-- footer -->
<?php include 'components/footer.php'; ?>
