<h3>Изменение параметров пользователя</h3>
<div class="row">
    <div class="col-sm-6">
		<form action="updatelk" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">Адрес электронной почты</label>						
				<input type="email" name="email" class="form-control" placeholder="<?php echo $email; ?>" required autofocus><br>
				<label for="exampleInputFio1">ФИО</label>									
				<input type="text" name="fio" class="form-control" placeholder="<?php echo $fio; ?>" required autofocus><br>			
			</div>	
			<button name="action" class="btn btn-lg btn-primary btn-block">Sign in</button>	
		</form>
   </div>
</div>