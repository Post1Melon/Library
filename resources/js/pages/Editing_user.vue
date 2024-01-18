<template>
    <div class="backgroundfix6">
		<div class="container">  
			<div class="main">
				<h1>Редактирование пользователя</h1>
			</div>
		</div>
	</div>
<div class="book_result">
		<div class="book">
			<a href="/editing_book" type="button" class="btn-editing" aria-label="editing">Редактирование</a>
			<h5 class="Username">Имя пользователя:</h5>
			<h5 class="bookname">Почта:</h5>
			<h5 class="book_author">Пароль:</h5>
			<h5 class="book_cat">Имя:</h5>
			<h5 class="book_cat">Фамилия:</h5>
			<h5 class="book_cat">Город:</h5>
			<h5 class="book_cat">Телефон:</h5>
            <h5 class="book_cod">Имя пользователя:<input type="text" name="ISBN"></h5>
			<h5 class="bookname">Почта:<input type="text" name="TitleOfBook"></h5>
			<h5 class="book_author">Пароль:<input type="text" name="AuthorOfBook"></h5>
			<h5 class="book_cat">Фамилия:<input type="text" name="Catbook"></h5>
			<h5 class="book_cat">Город:<input type="text" name="Catbook"></h5>
			<h5 class="book_cat">Телефон:<input type="text" name="Catbook"></h5>
            <button class="save">Сохранить</button>
		</div>
	</div>	<!--Start of footer-->
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