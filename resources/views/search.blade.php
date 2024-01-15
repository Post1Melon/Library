@extends('layout')
@section('title')Поиск @endsection
@section('main_content')
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
		<p>Пожалуйста, заполняйте по одному варианту за раз.<p>
		
		<!-- Form Start. -->
		<form action="/searchresult" method="GET">
		ISBN:<br><input type="text" name="ISBN">
	  		<br><br>
        Название книги:<br><input type="text" name="TitleOfBook">
	  		<br><br>
	  		Автор книги:<br><input type="text" name="AuthorOfBook">
			<br><br>
			Категория книги:<br><input type="text" name="Catbook">
			<br><br>
		
		<!-- PHP to go here -->
		<?php
		
        // //Connecting to the database.
        // require('DatabaseConnect.php');
        
        // //Connecting to the Category Section in the Table from the Database.
        // $Query = $Connection->Query("SELECT CategoryID, CategoryDescription FROM CategoryTable");
        
        // echo "<br>";
        // echo "<select name='CategoryOfBook'>";
        
        // //Variable to comapre with the category number.
        // $CategoryIDVar = 0;
        
        // //Name of the select button, displays too.
        // $SelectOptionName = "Search";
         
        // echo '<option value="'.$CategoryIDVar.'">'.$SelectOptionName.'</option>';
        
        // //Getting the names of the category and putting them in the select.
        // while($Row = $Query->fetch_assoc()) 
        // {
        //               $CategoryIDVar = $Row['CategoryID'];
        //               $SelectOptionName = $Row['CategoryDescription']; 
        //               echo '<option value="'.$CategoryIDVar.'">'.$SelectOptionName.'</option>';
        // }

        // echo "</select><br><br>";
    ?>
			<input type="submit" value="Поиск">
		</form>
	</div>
					  
    <!--Start of footer-->
	<br><br>
	
	<div class="clearfix"></div>
	
</body>
</html>
@endsection