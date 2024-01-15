@extends('layout_librarian')
@section('title')Редактирование@endsection
@section('main_content')
<div class="backgroundfix6">
		<div class="container">  
			<div class="main">
				<h1>Редактирование книг</h1>
			</div>
		</div>
	</div>
<div class="book_result">
		<div class="book">
			<a href="/editing_book" type="button" class="btn-editing" aria-label="editing">Редактирование</a>
			<h5 class="book_cod">ISBN:</h5>
			<h5 class="bookname">Название:</h5>
			<h5 class="book_author">Автор:</h5>
			<h5 class="book_cat">Жанр:</h5>
            <h5 class="book_cod">ISBN:<input type="text" name="ISBN"></h5>
			<h5 class="bookname">Название:<input type="text" name="TitleOfBook"></h5>
			<h5 class="book_author">Автор:<input type="text" name="AuthorOfBook"></h5>
			<h5 class="book_cat">Жанр:<input type="text" name="Catbook"></h5>
            <button class="save">Сохранить</button>
		</div>
	</div>
@endsection