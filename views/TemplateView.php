<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Test</title>
		<link href="public/js/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">		
	</head>
	<body>	
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index">Сайт</a></li>
					<?php if(libs\Session::get('auth_id')):?>
					<li><a href="logout">Выход</a></li>
					<?php else: ?>
					<li><a href="login">Вход</a></li>
					<?php endif; ?>			
					<?php if(libs\Session::get('auth_id')):?>			
					<li><a href="lk">Личный кабинет</a></li>					
					<?php else: ?>					
					<li><a href="registration">Регистрация</a></li>
					<?php endif; ?>											
				</ul>
			</div>
		</div>
		<div class="container" style="padding-top: 50px;">
			<?php echo $content; ?>
		</div>
	</body>
</html>