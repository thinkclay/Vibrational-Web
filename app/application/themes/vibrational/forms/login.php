<script type="text/javascript">
$(function() {
	$('#login').submit(function(e) {
		e.preventDefault();
		
		var data = $(this).serialize();
		var $target = $('#content-target');
		var $messages = $('<div class="ui-body hidden" />');

		$.ajax({
			type:		'POST',
			url:		'/site/login', 
			data:		data, 
			dataType:	'json',
			success:	function(data) { 
				if (typeof data.errors !== 'undefined' && typeof data.success === 'undefined') // No errors
				{	
					$messages.addClass('ui-error');
					$messages.append('<h3><?= __('login.errors.header'); ?></h3>');
					
					for ( var i=0; i<data.errors.length; i++ )
					{
						$messages.append('<p>'+data.errors[i]+'</p>');
					}
					
					$target.prepend($messages);
					$messages.slideDown().delay(4000).slideUp();
				}
				else if (typeof data.errors === 'undefined' && typeof data.success !== 'undefined') // Errors
				{
					window.location = '/site/profile';
				}
			},
			error:		function(data) { 
				$messages.addClass('ui-error');
				$messages.append('<h3><?= __('login.errors.header'); ?></h3><p><?= __('login.errors.generic'); ?></p>');
				$target.prepend($messages);
				$messages.slideUp(4000);
					
			}
		});
		
		return false;
	});
});
</script>

<div id="content-target" data-role="content">
	<form id="login" method="post" action="<?= Url::site('site/login'); ?>">
		<p>
			<label for="username" class="ui-input-text">Email:</label>
			<input type="text" name="username" id="username" value="<?= @$_POST['username']; ?>" />
		</p>
		<p>
			<label for="password" class="ui-input-text">Password:</label>
			<input type="password" name="password" id="password" value="<?= @$_POST['password']; ?>" />
		</p>
		
		<fieldset class="ui-grid-a">
			<div class="ui-block-a"><button type="submit" data-theme="c">Login</button></div>
<!-- 			<div class="ui-block-b"><button type="submit" data-theme="e">Forgot</button></div> -->
		</fieldset>
	</form>
	
	<hr />
	<!--

	<p>
		<a href="<?= Url::site('annex/login'); ?>" data-role="button" data-theme="b">Login with Facebook</a>
	</p>
-->
</div>