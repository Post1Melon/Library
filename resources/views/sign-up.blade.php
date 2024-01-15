@section('title')Регистрация @endsection
@extends('layout')
@section('main_content')
	<div class="backgroundfix3">
		<div class="container">  
			<div class="main">
				<h1>Регистрация</h1>
				<p class="btn-primary">Зарегистрируйтесь на сайте этой библиотеки, чтобы зарезервировать книги, всегда полезно иметь учетную запись.</p>
			</div>
		</div>
	</div>
		<div class="Form">
		<h1>Заполните форму ниже</h1>
    <div role="document">
    <div class="modal-content rounded-4 shadow">

      <div class="modal-body p-5 pt-0">
        <form class="">
          <div class="form-floating mb-3">
          <div class="form-floating mb-3">
            <input style="width:100%;" type="text" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label style="width:100%" for="floatingPassword">Имя пользователя</label>
          </div>
          <div class="form-floating mb-3">
            <input style="width:100%;" type="text" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label style="width:100%" for="floatingPassword">Почта</label>
          </div>
          <div class="form-floating mb-3">
            <input style="width:100%;" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label style="width:100%" for="floatingPassword">Пароль</label>
          </div>
          <div class="form-floating mb-3">
            <input style="width:100%;" type="text" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label style="width:100%" for="floatingPassword">Подтвердите свой пароль</label>
          </div>
          <div class="form-floating mb-3">
            <input style="width:100%;" type="text" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label style="width:100%" for="floatingPassword">Имя</label>
          </div>
          <div class="form-floating mb-3">
            <input style="width:100%;" type="text" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label style="width:100%" for="floatingPassword">Фамилия</label>
          </div>
          <div class="form-floating mb-3">
            <input style="width:100%;" type="text" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label style="width:100%" for="floatingPassword">Город</label>
          </div>
          <div class="form-floating mb-3">
            <input style="width:100%;" type="text" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label style="width:100%" for="floatingPassword">Телефон</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Зарегистрироваться</button>
          <h3><a class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" style="font-size: 15px" href=/logout>Хотите выйти из системы?</a> <br></h3>;		
        </form>
      </div>
    </div>
  </div>
</body>
</html>
@endsection