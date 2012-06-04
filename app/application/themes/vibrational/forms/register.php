<script type="text/javascript">
$(function() {
	$('#register').submit(function() {
		var data = $(this).serialize();
		$.post('/site/register', data, function(data) {
			window.location = '/site/profile';
		});
		return false;
	});
});
</script>

<div data-role="header" data-position="inline"> 
	<h1>Register</h1>
</div>

<div data-role="content">
	<form id="register" method="post" action="<?= Url::site('site/register'); ?>">
		<label for="username">Email:</label>
		<input type="text" name="username" value="<?= @$_POST['username']; ?>" />
		
		<label for="password">Password:</label>
		<input type="password" name="password" value="<?= @$_POST['password']; ?>" />
		
		<input type="submit" value="register" />
	</form>
	
	<hr />
</div>