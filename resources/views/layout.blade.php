<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
			<div class="header"
					<div class="container">
					
		     <!--Creating the Navigator-->
		     <!-- Navigator Changing Color-->
			 <div id="menu">
						<ul class="nav">
							<li><a href="/">Домой</a></li>
							<li><a href="/search">Поиск</a></li>
							<li><a href="/reservation">Резерв</a></li>
							<li><a href="/sign-up">Зарегистрироваться</a></li>
							<li><a href="/sign-in">Мой аккаунт</a></li>
						</ul>
					</div>
				</div>
             </div>
             <!--End Navigator-->


@yield('main_content')
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Домой</a></li>
      <li class="nav-item"><a href="/search" class="nav-link px-2 text-body-secondary">Поиск</a></li>
      <li class="nav-item"><a href="/sign-in" class="nav-link px-2 text-body-secondary">Мой аккаунт</a></li>
    </ul>
  </footer>
</div>

</body>
</html>