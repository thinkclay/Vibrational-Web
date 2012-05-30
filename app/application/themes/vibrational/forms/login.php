<script type="text/javascript">
$(function() {
/*
	$('#login').submit(function() {
		var data = $(this).serialize();
		
		$.post('<?= Url::site('annex/login') ?>', data, function(data) {
			console.log(data);
		});
		
		return false;
	});
*/
});
</script>

<div data-role="page" data-add-back-btn="true" class="type-home">
	<div data-role="header" data-position="inline"> 
		<h1>Login</h1>
	</div>
	
	<div data-role="content">
		<? if (isset($_POST)) var_dump($_POST); ?>
		<form id="login" method="post" action="<?= Url::site('site/login'); ?>">
			<label for="username">Username:</label>
			<input type="text" name="username" value="<?= @$_POST['username']; ?>" />
			
			<label for="password">Password:</label>
			<input type="password" name="password" value="<?= @$_POST['password']; ?>" />
			
			<input type="submit" value="Login" />
		</form>
		
		<hr />
		
		<p>
			<a href="<?= Url::site('annex/login'); ?>" data-role="button" data-theme="b">Login with Facebook</a>
			<a href="<?= Url::site('annex/register'); ?>" data-role="button" data-theme="e">I forgot my credentials</a>
		</p>
	</div>
</div>


