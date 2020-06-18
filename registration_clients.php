<?php include 'components/header.php'; ?>
<main>
  <div class="registration container">
    <div class="form">
      <span>Регистрация</span>
      <form class="reg_form" action="" method="">
        <!-- Name -->
        <label for="">Ваше имя</label>
        <input class="default_input" type="text" name="name" placeholder="Имя">
        <!-- Email -->
        <label for="">Email</label>
        <input class="default_input" type="text" name="email" placeholder="Email">
        <!-- Password -->
        <label for="">Пароль</label>
        <input class="default_input" type="text" name="password" placeholder="Пароль">
        <!-- Save password -->
        <div class="pretty p-default p-fill">
            <input type="checkbox"/>
            <div class="state">
              <label>Сохранить пароль</label>
          </div>
      </div>
          <!-- Reg button -->
        <button class="action_button">
            <p>Зарегистрироваться</p>
        </button>
      </form>
    </div>
  </div>
</main>
<!-- footer -->
<?php include 'components/footer.php'; ?>
