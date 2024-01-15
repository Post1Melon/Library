@section('title')Вход @endsection
@extends('layout')
@section('main_content')
	<div class="backgroundfix3">
		<div class="container">  
			<div class="main">
				<h1>Вход</h1>
				<p class="btn-primary">Войдите в систему, чтобы получить доступ к своей учетной записи, просматривать книги и выполнять поиск книг.</p>
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
            <input style="width:100%;" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
            <label style="width:100%" for="floatingPassword">Пароль</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Войти</button>
          <p>Еще не зарегистрировались?<a href='/sign-up'>Зарегистрируйтесь здесь</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
@endsection