@section('title')Главная @endsection
@extends('layout')
@section('main_content')
<!-- Start of top section-->
<div class="backgroundfix">
	<div class="container">  
		<div class="main">
			<h1>Электронная библиотека</h1>
			<p class="btn-primary">Добро пожаловать на официальный сайт библиотеки! Войдите в систему, чтобы управлять своей учетной записью, искать книги, брать напрокат понравившиеся книги и подписаться на нашу рассылку новостей, чтобы быть в курсе событий.</p>
		</div>
	</div>
</div>
<!--End top section-->
<!--Start introduction-->
<div class="supporting">
	<div class="container">
		<div class="col">
			<img src="/img/Sign.png">
			<h2>Вход</h2>
			<p>Войдите в свою учетную запись, чтобы просмотреть свои книги.</p>
			<a class="btn-default" href="/sign-in">Вход</a>
		</div>
		<div class="col">
			<img src="/img/Search.png">
			<h2>Поиск Книг</h2>
			<p>Найдите книги, которые вам нравятся прямо сейчас.</p>
			<a class="btn-default" href="/search">Поиск</a>
		</div>
		<div class="col">
			<img src="/img/Register.png">
			<h2>Регистрация</h2>
			<p>Чтобы пользоваться этим сайтом, вы должны быть его участником, зарегистрируйтесь сейчас.</p>
			<a class="btn-default" href="/sign-up">Регистрация</a>
		</div>
	</div>
	<!--End introduction-->
						
	<!--Start of footer-->
	<div class="clearfix"></div>
</div>


</body>
</html>

@endsection