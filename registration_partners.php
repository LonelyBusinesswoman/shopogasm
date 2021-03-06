<?php include 'components/header.php'; ?>
<main>
  <div class="registration_page container">
    <div class="form">
      <span>Регистрация <br>для партнёров</span>
      <form class="reg_form default_form" action="" method="">
        <!-- Name -->
        <label>Ваше имя</label>
        <input class="default_input" type="text" name="name" placeholder="Имя">
        <!-- Email -->
        <label>Email</label>
        <input class="default_input" type="text" name="email" placeholder="Email">
        <!-- Password -->
        <label>Пароль</label>
        <input class="default_input" type="text" name="password" placeholder="Пароль">
        <!-- Save password -->
        <div class="pretty p-default p-fill">
            <input type="checkbox"/>
            <div class="state">
              <label>Сохранить пароль</label>
          </div>
      </div>
          <!-- Reg button -->
        <button class="default_button black_button">
          Зарегистрироваться
        </button>
      </form>
    </div>
  </div>
</main>
<!-- footer -->
<?php include 'components/footer.php'; ?>
