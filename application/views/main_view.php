	<!-- Основной контент сайта -->
		<div class="jumbotron">
           <!-- Карусель(слайдер) -->
            <div id="carousel" class="carousel slide">
           	  	<!-- Индикаторы слайдов -->
           	  	<ol class="carousel-indicators">
           	  		<li class="active" data-target="#carousel" data-slide-to="0"></li>
           	  		<li data-target="#carousel" data-slide-to="1"></li>
           	  		<li data-target="#carousel" data-slide-to="2"></li>
           	  	</ol>
           	  	<!-- Слайды -->
           	  	<div class="carousel-inner">
           	  		<div class="item active">
           	  			<img src="/adm/images/1.jpg" alt="">
           	  			<div class="carousel-caption">
           	  				<h3>WELCOME!</h3>
           	  				<p>Мы рады приветствовать Вас на нашем сайте!</p>
           	  			</div>
           	  		</div>
           	  		<div class="item">
           	  			<img src="/adm/images/2.jpg" alt="">
           	  			<div class="carousel-caption">
           	  				
           	  			</div>
           	  		</div>
           	  		<div class="item">
           	  			<img src="/adm/images/3.jpg" alt="">
           	  			<div class="carousel-caption">
           	  				<h3></h3>
           	  				<p> Работать на людей и для людей, не будучи деталью бюрократической машины. </p>
           	  			</div>
           	  		</div>
           	  	</div>	
           	  	<!-- Стрелки переключения слайдов -->
           	  		<a href="#carousel" class="left carousel-control" data-slide="prev">
           	  			<span class="glyphicon glyphicon-chevron-left"></span>
           	  		</a>
           	  		<a href="#carousel" class="right carousel-control" data-slide="next">
           	  			<span class="glyphicon glyphicon-chevron-right"></span>
           	  		</a>
           		</div>
         </div>

         
          <br />
         
		<!-- Скрипт автоматической прокрутки слайдера-to -->
		<script type='text/javascript'>
    	$(document).ready(function() {
         $('.carousel').carousel({
             interval: 3000
         })
    		});    
    	</script>﻿
