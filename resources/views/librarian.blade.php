@extends('layout_librarian')
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
		<div class="col1">
			<img src="/img/Search.png">
			<h2>Поиск Книг</h2>
			<p>Найдите книги, которые вам нравятся прямо сейчас.</p>
			<a class="btn-default" href="/search">Поиск</a>
		</div>
	</div>
	<!--End introduction-->
	<!--Start of footer-->
	<div class="clearfix"></div>
</div>
</body>
</html>

@endsection