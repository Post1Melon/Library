<template>
<div class="header">
	<div class="container">
	
<!--Creating the Navigator-->
<!-- Navigator Changing Color-->
<div id="menu">
		<ul class="nav">
			<li><a href="/">Домой</a></li>
			<li><a href="/search">Поиск</a></li>
			<li><a href="/reservation">Резерв</a></li>
			<li><a href="/editing">Редактирование книг</a></li>
		</ul>
	</div>
</div>
</div>
<!--End Navigator--><div class="backgroundfix">
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
	<!--Start of footer-->
	<div class="clearfix"></div>
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><router-link to="/" class="nav-item nav-link" style="color: #333;">Домой</router-link></li>
      <li class="nav-item"><router-link to="/search" class="nav-item nav-link" style="color:#333;">Поиск</router-link></li>
      <li class="nav-item"><router-link to="/reserve" class="nav-item nav-link" style="color:#333;">Резерв</router-link></li>
      <li class="nav-item"><router-link to="/login" class="nav-item nav-link" style="color:#333;">Мой аккаунт</router-link></li>
      <li class="nav-item"><router-link to="/register" class="nav-item nav-link" style="color:#333;">Зарегистрироваться</router-link></li>
    </ul>
    <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
  </footer>
</div>
</template>
