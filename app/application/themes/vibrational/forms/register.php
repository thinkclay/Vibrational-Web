<script type="text/javascript">
$(function() {
	$('#register').submit(function(e) {
		e.preventDefault();
		
		var data = $(this).serialize();
		var $target = $('#content-target');
		var $messages = $('<div class="ui-body hidden" />');

		$.ajax({
			type:		'POST',
			url:		'/site/register', 
			data:		data, 
			dataType:	'json',
			success:	function(data) { 
				if (typeof data.errors !== 'undefined' && typeof data.success === 'undefined') // No errors
				{	
					$messages.addClass('ui-error');
					$messages.append('<h3><?= __('register.errors.header'); ?></h3>');
					
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
				$messages.append('<h3><?= __('register.errors.header'); ?></h3><p><?= __('register.errors.generic'); ?></p>');
				$target.prepend($messages);
				$messages.slideUp(4000);
					
			}
		});
		
		return false;
	});
});
</script>

<div id="content-target" data-role="content">
	<form id="register" method="post" action="<?= Url::site('site/register'); ?>">
		<p>
			<label for="username" class="ui-input-text">Email:</label>
			<input type="text" name="username" value="<?= @$_POST['username']; ?>" />
		</p>
		<p>
			<label for="password" class="ui-input-text">Password:</label>
			<input type="password" name="password" value="<?= @$_POST['password']; ?>" />
		</p>
		
		<input type="submit" value="Register" />
	</form>	
</div>