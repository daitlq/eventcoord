<form action="/account/register" method="post">

	<div class="field">
		Username: <input type="text" name="username">
	</div>

	<div class="field">
		Email: <input type="text" name="email">
	</div>

	<div class="field">
		Password: <input type="password" name="password">
	</div>

	<div class="field">
		Re Password: <input type="password" name="re_password">
	</div>

	<input type="submit" value="Create account">
	
	{{ Form::token() }}
</form>