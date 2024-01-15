@extends('layout')

@section('title')Результат @endsection

@section('main_content')
	<div class="backgroundfix6">
		<div class="container">  
			<div class="main">
				<h1>Результаты Вашего Поиска</h1>
				<p class="btn-primary">Вот результаты вашего поиска...</p>
			</div>
		</div>
	</div>
	<div class="book_result">
		<div class="book">
			<h5 class="book_cod">ISBN:</h5>
			<h5 class="bookname">Название:</h5>
			<h5 class="book_author">Автор:</h5>
			<h5 class="book_cat">Жанр:</h5>
		</div>
	</div>
</body>
</html>
@endsection