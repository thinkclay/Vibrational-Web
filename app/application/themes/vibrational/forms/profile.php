<script type="text/javascript">
$(function() {
	$('#profile').submit(function() {
		var data = $(this).serialize();
		
		$.post('/site/register', data, function(data) {
			console.log(data);
		});
		
		return false;
	});
});
</script>

<div data-role="header" data-position="inline"> 
	<h1>Fill out your Profile</h1>
</div>

<div data-role="content">
	<form id="profile" method="post" action="site/saveprofile">
		<label for="username">Thing 1:</label>
		<input type="text" name="username" value="<?= @$_POST['username']; ?>" />
		
		<label for="password">Thing 2:</label>
		<input type="password" name="password" value="<?= @$_POST['password']; ?>" />
		
		<label for="password">Thing 3:</label>
		<input type="password" name="password" value="<?= @$_POST['password']; ?>" />
		
		<label for="password">Thing 4:</label>
		<input type="password" name="password" value="<?= @$_POST['password']; ?>" />
		
		<label for="password">Thing 5:</label>
		<input type="password" name="password" value="<?= @$_POST['password']; ?>" />
		
		<input type="submit" value="save" />
	</form>
	
	<hr />
</div>