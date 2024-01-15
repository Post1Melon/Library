@extends('layout_admin')
@section('main_content')
<div class="backgroundfix6">
		<div class="container">  
			<div class="main">
				<h1>Управление пользователями</h1>
			</div>
		</div>
	</div>
<div class="book_result">
		<div class="book">
			<button type="button" class="btn-delite">Удалить</button>
			<button type="button" class="btn-block">Заблокировать </button>
			<h5 class="Username">Имя пользователя:</h5>
			<h5 class="bookname">Почта:</h5>
			<h5 class="book_author">Пароль:</h5>
			<h5 class="book_cat">Имя:</h5>
			<h5 class="book_cat">Фамилия:</h5>
			<h5 class="book_cat">Город:</h5>
			<h5 class="book_cat">Телефон:</h5>
		</div>
	</div>
@endsection