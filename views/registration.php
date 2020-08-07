<h3>Регистрация нового пользователя</h3>
<div class="row">
    <div class="col-sm-6">
		<form action="adduser" method="post">
			<div class="form-group">
				<label for="exampleInputLogin1">Имя пользователя</label>		
				<input type="text" name="login" class="form-control" placeholder="Login" required autofocus><br>
				<label for="exampleInputPassword1">Пароль для входа</label>						
				<input type="password" name="password" class="form-control" placeholder="Password" required autofocus><br>
				<label for="exampleInputEmail1">Адрес электронной почты</label>						
				<input type="email" name="email" class="form-control" placeholder="Email" required autofocus><br>
				<label for="exampleInputFio1">ФИО</label>						
				<input type="text" name="fio" class="form-control" placeholder="FIO" required autofocus><br>			
			</div>	
			<button name="action" class="btn btn-lg btn-primary btn-block">Sign in</button>	
		</form>
   </div>
</div>
