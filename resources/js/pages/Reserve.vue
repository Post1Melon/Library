<template>
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
		<form class="search" action="/reserve" method="">
        Номер книги<br>
	 	 <input type="text" name="ISBN" required><br>
	  
	 	 <input type="submit" value="Поиск">
		</form>
	</div>
	
	<br><br>
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