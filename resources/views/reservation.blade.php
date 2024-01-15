@extends('layout')
@section('title')Результат@endsection
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
	
	<div class="Form2">
	<h1 class="loginheader">Забронировать книгу</h1>
		<form action="/reserve" method="POST">
        Номер книги<br>
	 	 <input type="text" name="ISBN" required><br>
	  
	 	 <input type="submit" value="Поиск">
		</form>
	</div>
	
	<br><br>
					
</body>
</html>
@endsection