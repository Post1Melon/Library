@extends('layout')
@section('title')Забронированные книги @endsection
@section('main_content')
	<div class="backgroundfixReserve">
		<div class="container">  
			<div class="main">
				<h1>Забронировать книгу</h1>
				<p class="btn-primary">Место, где можно забронировать нужную вам книгу.</p>
			</div>
		</div>
	</div>
	

<br>
<div class='Form2'><h2>Вы должны ввести код ISBN в форму.</h2></div>
<br>
<div class='Form'><h3><a href='/reservation'>Пробовать снова</a> <br></h3></div>
<div class='Form'><h3><a href='/logout'>Хотите выйти из системы?</a> <br></h3></div>
<div class=\"clearfix\"></div>
<div class=\"container\">
</div>
</div>

<br>
<div class='Form2'><h2>Вы не вошли в систему, пожалуйста, войдите в систему.</h2></div>
<br>
<div class='Form'><h3><a href='/sign-in'>Войдите в свою учетную запись</a> <br></h3></div>
<div class=\"clearfix\"></div>
<div class=\"container\">
</div>
</div>

<br>
<div class='Form2'><h2>Книга уже зарезервирована участником, попробуйте другую книгу.</h2></div>
<div class='Form2'><h2>Или введенный вами код ISBN не совпал.</h2></div>
<br>

<div class='Form'><h3><a href='/reservation'>Попробовать еще раз?</a> <br></h3></div>
<div class='Form'><h3><a href='/logout'>Хотите выйти из системы?</a> <br></h3></div>

<div class=\"clearfix\"></div>
<div class=\"container\">
</div>
</div>

<br>
<div class='Form2'><h2>Выбранная вами книга была успешно зарезервирована.</h2></div>
<br><br>

<div class='Form'><h3><a href='/sign-in'>Просмотр вашей учетной записи</a> <br></h3></div>
<div class='Form'><h3><a href='/logout'>Хотите выйти из системы?</a> <br></h3></div>

</body>
</html>
@endsection