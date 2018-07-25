<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content=""><!-- ... -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flowers</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<!-- Подключение CSS-файла offcanvas -->
	<link rel="stylesheet" href="путь/до/bootstrap.offcanvas.min.css">

	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="css/right_menu.css">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


</head>
<body>
	<!-- menu -->
	<!-- <header class="menu"> -->
<script>
	$( document ).ready(function(){
	    $(".burger-btn").click(function(){ 
	    setTimeout(function(){
		  	$('.nav-toggle1').trigger('click');
			}, 10);
	  });
	});
</script>

<nav class="navbar navbar-expand-sm navbar-dark menu">
   <a class="navbar-brand" href="#"><img src="img/logo_new_min.png" alt="logo" width="50px"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarsExample03" style="    font-style: italic;">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item">
            <a class="nav-link" href="#">цветы</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">торты</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">вазы</a>
         </li>
         
         <li class="nav-item">
            <a class="nav-link">шарики</a>
         </li>
      </ul>

      <ul class="navbar-nav work_data" >
         <li class="nav-item work_time" style=""><p>Часы работы:</p><p style="    font-weight: 600;"> 9:00 - 20:00</p></li>
         <li class="nav-item phones"><p>(093) 010 38 88 </p><p>(048) 788 31 88</p></li>
		 <li class="nav-item"></li>
		
      </ul>
      <ul class="navbar-nav socials">
         	<li class="nav-item socials_item"><a href=""><i class="fab fa-instagram"></i></a><br><a href=""><i class="fab fa-facebook"></i></a></li>
         	<!-- <li class="nav-item socials_item"><a href=""><i class="fab fa-facebook"></i></a></li> -->
         </ul>
      
<!--       <p>(093) 010 38 88</p>
		<p>(048) 788 31 88</p> -->
      <form class="form-inline my-2 my-md-0">
         <input class="form-control" type="text" placeholder="Поиск" style="font-style: italic;">
      </form>
      
	  <ul class="navbar-nav">
	  	<li class="nav_item cart"><i class="fas fa-shopping-cart"></i></li>
    	<li class="nav_item user"><i class="fas fa-user"></i></li>
	  </ul>
	  <button class="navbar-toggler collapsed burger-btn" type="button" data-toggle="collapse" style="display:block" >
		<span class="navbar-toggler-icon" style=" height:1.45em;"></span>
	  </button>
   </div>
</nav>

<!-- </header> -->
<!-- menu_end -->

<!--right menu-->
<?php include('inc/right_menu.php'); ?>
<!--right menu end-->





<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: 40px 0px;margin-top: 50px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://www.florist.com.ua/catalog/bouquet103_5_800.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://news-important.ru/wp-content/uploads/2018/02/5465865896348956.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://www.florist.com.ua/catalog/bouquet103_5_800.jpg" alt="Third slide">
    </div>
  </div>
<!--   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>




	<div class="container">
		
		
	


<!-- преймущества -->
<div class="title" style="text-align: center;margin-bottom: 80px"><h1 class="display-4">о нас</h1></div>

<div class="row" style="text-align: center;margin-bottom: 120px">
   <div class="col">
      <img  src="https://static.tildacdn.com/tild3639-6533-4634-a332-313438373863/icons8-flowers-100.png" alt="Generic placeholder image" width="100" height="100">
      <h2>Большой выбор</h2>
      <p>Наш основной фокус - флористика, но у нас вы можете целиком подготовиться к предстоящему празднику.</p>
      
   </div>
   <!-- /.col-lg-4 -->
   <div class="col">
      <img src="https://static.tildacdn.com/tild3036-6632-4365-a334-333363316136/icons8-delivered-100.png" alt="Generic placeholder image" width="100" height="100">
      <h2>Быстрая доставка</h2>
      <p>После заказа мы оперативно связываемся с вами и осуществляем доставку. Бесплатная доставка в пределах Одессы.</p>
      
   </div>
   <!-- /.col-lg-4 -->
   <div class="col">
      <img  src="https://static.tildacdn.com/tild3133-3630-4431-b634-663161633038/icons8-card-payment-.png" alt="Generic placeholder image" width="100" height="100">
      <h2>Удобная оплата</h2>
      <p>Оплата курьеру при получении или оплата на банковскую карту.</p>
      
   </div>
   <!-- /.col-lg-4 -->
</div>
<!-- преймущества end -->

<div class="title" style="text-align: center;margin-bottom: 120px"><h1 class="display-4">хит продаж</h1></div>
		<!-- hits -->
		<div class="row w-100 hits hits_row_first">
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://news-important.ru/wp-content/uploads/2018/02/5465865896348956.jpg" data-holder-rendered="true">
			</div>
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://www.florist.com.ua/catalog/bouquet103_5_800.jpg" data-holder-rendered="true">
			</div>
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://news-important.ru/wp-content/uploads/2018/02/5465865896348956.jpg" data-holder-rendered="true">
			</div>
		</div>
		<div class="row w-100 hists hits_row_second">
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://www.florist.com.ua/catalog/bouquet103_5_800.jpg" data-holder-rendered="true">
			</div>
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://news-important.ru/wp-content/uploads/2018/02/5465865896348956.jpg" data-holder-rendered="true">
			</div>
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="http://www.florist.com.ua/catalog/bouquet103_5_800.jpg" data-holder-rendered="true">
			</div>
		</div>
		<!-- hits_end -->

		<!-- каталог -->
		<div class="title" style="text-align: center;margin: 80px;"><h1 class="display-4">каталог</h1></div>
		<div class="row catalog "style="margin-bottom: 120px;">
		<div class="row w-100 hists">
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164d12d5f71%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164d12d5f71%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22114%22%20y%3D%22120.6%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
			</div>
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164d12d5f71%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164d12d5f71%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22114%22%20y%3D%22120.6%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
			</div>
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164d12d5f71%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164d12d5f71%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22114%22%20y%3D%22120.6%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
			</div>
			<div class="col hits_item">
				<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_164d12d5f71%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_164d12d5f71%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22114%22%20y%3D%22120.6%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
			</div>
		</div>

		</div>
		<!-- каталог_end -->

		<!-- доставка -->
		<div class="title" style="text-align: center;margin: 80px;margin-bottom: 40px;"><h1 class="display-4">доставка</h1></div>
		<div class="row" style="text-align: center;margin: 120px 0px;margin-top:80px">
		   <div class="col-lg-4">
		      <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
		      <h2>Инкогнито</h2>
		      <p>Наш курьер подарит букет/подарок анонимно</p>
		   </div>
		   <!-- /.col-lg-4 -->
		   <div class="col-lg-4">
		      <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
		      <h2>Доставка</h2>
		      <p>Мы привезем букет в указанное время, по указанному адресу и вы сможете на месте рассчитаться с курьером</p>
		   </div>
		   <!-- /.col-lg-4 -->
		   <div class="col-lg-4">
		      <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
		      <h2>Подарок</h2>
		      <p>Мы привезем букет в указанное время и место в качестве подарка от вас</p>
		   </div>
		   <!-- /.col-lg-4 -->
		</div>
		<!-- доставкаend -->

		<div class="title" style="text-align: center;margin: 80px;"><h1 class="display-4">отзывы</h1></div>
		<!-- отзывы -->
		<ul class="list-unstyled comments">
		  <li class="media my-4 comment">
		    <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
		    <div class="media-body">
		      <h5 class="mt-0 mb-1">Ирина Кровчук</h5>
		      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		    </div>
		  </li>
		  <li class="media my-4 comment">
		    <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
		    <div class="media-body">
		      <h5 class="mt-0 mb-1">Игорь Михаиленко</h5>
		      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		    </div>
		  </li>
		  <li class="media my-4 comment">
		    <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
		    <div class="media-body">
		      <h5 class="mt-0 mb-1">Олег Береза</h5>
		      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		    </div>
		  </li>
		  <li class="media my-4 comment">
		    <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
		    <div class="media-body">
		      <h5 class="mt-0 mb-1">Диана Лушкова</h5>
		      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
		    </div>
		  </li>
		</ul>

		<div class="title" style="margin: 80px 0px;margin-bottom:40px"><h1 class="display-5">добавить отзыв</h1></div>
		<form>
		  <div class="form-group">
		    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя">
		    <br>
			<input class="form-control" type="text" placeholder="Повод">
		  </div>

		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Комментарий</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Отправить</button>
		</form>
		<!-- отзывы -->


		<!-- контакты -->
		<div class="title" style="text-align: center;margin: 80px"><h1 class="display-4">контакты</h1></div>
		<div class="row justify-content-center">
			<div class="col-8">
				
				<div class="phones" style="">
					<h3>Телефоны:</h3>
					<!-- <p> -->
						<h1 style="font-size:20px">(093) 010 38 88</h1>
						<h1 style="font-size:20px">(093) 010 38 88</h1>
					<!-- </p> -->
				</div>

				<h3>flowers@gmail.com</h3>

				<div class="socials">
					
				</div>
				
				
			
				
				


			</div>
			<div class="col-4">
					<h3>Заказать обратный звонок:</h3>
				<form>
				  <div class="form-group">
				    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя">
				    <br>
					<input class="form-control" type="text" placeholder="номер телефона">
				  </div>
				  <button type="submit" class="btn btn-primary">Отправить</button>
				</form>
			</div>
		</div>
		

		<!-- номера телефонов (кликабельные) 
Заказать обратный звонок (человек вводит имя и номер, форма отправляется на почту) 
Почта (не кликабельна) 
Соц.сети (Инста, ФБ) 
Отправить нам письмо (вводные: имя, номер, комментарий) -->

		<!-- контакты -->

	</div><!-- container -->

	<div class="row footer">
		Дублируем кликабельное лого для возврата наверх, 
		часы работы, 
		переход в каталог, 
		регистрация/вход. 
		Ссылки на соц.сети - кликабельные иконки.
	</div>

	<!-- scripts -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

	<!-- Подключение JavaScript-файла offcanvas -->
	<script src="путь/до/bootstrap.offcanvas.min.js"></script> 
</body>
</html>