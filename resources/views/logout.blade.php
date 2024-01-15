@extends('layout')

@section('title')Выход @endsection

@section('main_content')

	<div class="backgroundfix5">
		<div class="container">  
			<div class="main">
				<h1>Выход</h1>
				<p class="btn-primary">Теперь вы вышли из системы, нажмите на навигатор, чтобы снова войти в систему или вернуться на главную страницу.</p>
			</div>
		</div>
	</div>
	<br><br>
	<div class="supporting2">
		<div class = "Form2"><h1>Вы Вышли Из Системы</h1></div><br>
		<div class='Form2'><h2>Мы уже скучаем по вам! Допустили ошибку и вам нужно снова войти в систему? Нажмите ниже.</h2></div>
		<div class='Form'><h3><a href='/sign-in'>Вход</a> <br></h3></div>;
	</div>
	<br><br>


</body>
</html>
@endsection