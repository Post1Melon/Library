<template>

	<div class="backgroundfix6">
		<div class="container">  
			<div class="main">
				<h1>Поиск</h1>
				<p class="btn-primary">Найдите книгу в библиотеке, можно зарезервировать ее, если таковая имеется.</p>
			</div>
		</div>
	</div>
				
	<!-- Search Form Start -->
	<br>
	<!-- CSS to style the form. -->
	<div class="Form2">
		<!-- CSS to style the header. -->
		<h1 class="loginheader">Поиск Книги</h1>
		<p>Пожалуйста, заполняйте по одному варианту за раз.</p>
		
		<!-- Form Start. -->
		<form class="search" action="/searchresult" method="GET">
		ISBN:<br><input type="text" name="ISBN">
	  		<br><br>
        Название книги:<br><input type="text" name="TitleOfBook">
	  		<br><br>
	  		Автор книги:<br><input type="text" name="AuthorOfBook">
			<br><br>
			Категория книги:<br><input type="text" name="Catbook">
			<br><br>

			<input type="submit" value="Поиск">
		</form>
	</div>
					  
    <!--Start of footer-->
	<br><br>
	
	<div class="clearfix"></div>
	
	<!--Start of footer-->
	<div class="clearfix"></div>
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><router-link to="/" class="nav-item nav-link" style="color: #333;">Домой</router-link></li>
      <li class="nav-item"><router-link to="/" class="nav-item nav-link" style="color:#333;">Поиск</router-link></li>
      <li class="nav-item"><router-link to="/" class="nav-item nav-link" style="color:#333;">Резерв</router-link></li>
      <li class="nav-item"><router-link to="/login" class="nav-item nav-link" style="color:#333;">Мой аккаунт</router-link></li>
      <li class="nav-item"><router-link to="/register" class="nav-item nav-link" style="color:#333;">Зарегистрироваться</router-link></li>
    </ul>
  </footer>
</div>
</template>