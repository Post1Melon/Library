<template>
<div class="backgroundfix6">
		<div class="container">  
			<div class="main">
				<h1>Управление пользователями</h1>
			</div>
		</div>
	</div>
<div class="book_result">
		<div class="book">
			<button type="button" class="btn-delite">Удалить</button>
			<button type="button" class="btn-block">Заблокировать </button>
            <router-link to="editing_user" class="btn-block red">Редактирование </router-link>
			<h5 class="Username">Имя пользователя:</h5>
			<h5 class="bookname">Почта:</h5>
			<h5 class="book_author">Пароль:</h5>
			<h5 class="book_cat">Имя:</h5>
			<h5 class="book_cat">Фамилия:</h5>
			<h5 class="book_cat">Город:</h5>
			<h5 class="book_cat">Телефон:</h5>
            
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