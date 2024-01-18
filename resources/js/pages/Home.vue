<template>
    <!-- Start of top section-->
    <div class="backgroundfix">
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
		<div class="col">
			<img src="/img/Sign.png">
			<h2>Вход</h2>
			<p>Войдите в свою учетную запись, чтобы просмотреть свои книги.</p>
            <router-link to="/login" class="sig nav-item nav-link">Вход</router-link>
		</div>
		<div class="col">
			<img src="/img/Search.png">
			<h2>Поиск Книг</h2>
			<p>Найдите книги, которые вам нравятся прямо сейчас.</p>
			<router-link to="/search" class="btn-default" href="/search">Поиск</router-link>
		</div>
		<div class="col">
			<img src="/img/Register.png">
			<h2>Регистрация</h2>
			<p>Чтобы пользоваться этим сайтом, вы должны быть его участником, зарегистрируйтесь сейчас.</p>
			<router-link to="/register" class="reg nav-item nav-link">Зарегистрироваться</router-link>
		</div>
	</div>
	<!--End introduction-->
						
	<!--Start of footer-->
	<div class="clearfix"></div>
</div>
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

<script>
export default {
    name: "Home",
    data() {
        return {
            //
        }
    },
    created() {
    },
    methods: {}
}
</script>
