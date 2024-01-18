<template>
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