<style type="text/css">
body { 
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
h3, p { margin: 10px 2%; }
#color-scale {
	background: #000;
	height: 220px;
	overflow: hidden;
	padding: 20px 2%;
	position: relative;
	width: 96%;
}
	#color-scale .container { 
		background: url('/public/images/gradient.png') no-repeat 0 0; 
		height: 100%; 
		position: relative; 
	}
	#color-scale #picker { 
		background: url('/public/images/picker.png') no-repeat left center; 
		cursor: move;
		height: 42px; 
		left: 0;
		padding: 10px 0;
		position: absolute; 
		top: 0px;
		width: 100%; 
	}
		#color-scale #picker #text { 
			font-size: 17px;
			margin: 8px 0 0 100px;
			pointer-events: none;
			text-shadow: 0 1px 1px #000;
		}
</style>

<script type="text/javascript">
$(function() {
	$(document).bind('touchmove', function(e) { e.preventDefault(); });
	
	var $target = $('#target');
	var $messages = $('<div class="ui-body hidden" />');
	var $scale = $('#color-scale');
	var $picker = $('#picker');
	var $text = $('#text');
	var $submit = $('#submit');
	
	var position = { start: 162, final: 0 };
	
	$submit.hide();
	
	$picker.bind({
		'vmousedown' :	function(e) {
			e.preventDefault();
			
			position.start = e.clientY;
			position.final = e.clientY;
			$picker.css('top', 0);
			$text.html('<span style="color: #ddd;">Drag this slider</span>');

			$picker.bind('vmousemove', function(e) {
				var current_position = parseInt(e.clientY-position.start);
								
				if ( current_position >= -25 && current_position <= 188 )
				{
					if (current_position > -50 && current_position <= 0)
						$text.html('<span class="level-20" rel="20">Yes, high vibes!</span>');
					
					else if (current_position > 0 && current_position <= 10)
						$text.html('<span class="level-19" rel="19">Yes, definitely!</span>');
					
					else if (current_position > 10 && current_position <= 20)
						$text.html('<span class="level-18" rel="18">Yes, definitely</span>');
					
					else if (current_position > 20 && current_position <= 30)
						$text.html('<span class="level-17" rel="17">Totally!</span>');
					
					else if (current_position > 30 && current_position <= 40)
						$text.html('<span class="level-16" rel="16">Totally</span>');
					
					else if (current_position > 40 && current_position <= 50)
						$text.html('<span class="level-15" rel="15">Mostly</span>');
					
					else if (current_position > 50 && current_position <= 60)
						$text.html('<span class="level-14" rel="14">Leaning towards yes</span>');
						
					else if (current_position > 60 && current_position <= 70)
						$text.html('<span class="level-13" rel="13">Leaning towards yes</span>');
					
					else if (current_position > 70 && current_position <= 80)
						$text.html('<span class="level-12" rel="12">Leaning towards yes</span>');
						
					else if (current_position > 80 && current_position <= 90)
						$text.html('<span class="level-11" rel="11">Hmm, not sure</span>');
					
					else if (current_position > 90 && current_position <= 100)
						$text.html('<span class="level-10" rel="10">Hmm, not sure</span>');
						
					else if (current_position > 100 && current_position <= 110)
						$text.html('<span class="level-9" rel="9">Meh</span>');
					
					else if (current_position > 110 && current_position <= 120)
						$text.html('<span class="level-8" rel="8">Leaning towards no</span>');
						
					else if (current_position > 120 && current_position <= 130)
						$text.html('<span class="level-7" rel="7">Leaning towards no</span>');
						
					else if (current_position > 130 && current_position <= 140)
						$text.html('<span class="level-6" rel="6">Leaning towards no</span>');
					
					else if (current_position > 140 && current_position <= 150)
						$text.html('<span class="level-5" rel="5">No way</span>');
					
					else if (current_position > 150 && current_position <= 160)
						$text.html('<span class="level-4" rel="4">No way!</span>');
						
					else if (current_position > 160 && current_position <= 170)
						$text.html('<span class="level-3" rel="3">Absolutely Not</span>');
					
					else if (current_position > 170 && current_position <= 180)
						$text.html('<span class="level-2" rel="2">Absolutely Not!</span>');
					
					else if (current_position > 180 && current_position <= 190)
						$text.html('<span class="level-1" rel="1">No, low vibes</span>');
					
					else
						$text.html('<span style="color: #ddd;">Drag this slider</span>');

					$picker.css('top', current_position);
				}
			});
		},
		
		'vmouseup' :	function(e) {
			position.start = 162;			
			$picker.unbind('vmousemove');
			
			var $level = $('#level');
			var data = {};
			
			$level.val($text.find('span').attr('rel'));
			data[$level.attr('name')] = $level.val();

			$submit.fadeIn();
						
			$submit.click(function() {
				$.ajax({
					type:		'POST',
					url:		window.location.href, 
					data:		data,
					dataType:	'json',
					success:	function(data) { 
						if (typeof data.errors !== 'undefined' && typeof data.success === 'undefined') // errors
						{	
							$messages.empty();
							$messages.addClass('ui-error');
							$messages.append('<h3><?= __('question.errors.header'); ?></h3>');
							
							for ( var i=0; i<data.errors.length; i++ )
							{
								$messages.append('<p>'+data.errors[i]+'</p>');
							}
							
							$target.prepend($messages);
							$messages.slideDown().delay(4000).slideUp();
						}
						else if (typeof data.errors === 'undefined' && typeof data.success !== 'undefined') // No Errors
						{
							window.location = '/site/profile';
						}
					},
					error:		function(data) { 
						$messages.addClass('ui-error');
						$messages.append('<h3><?= __('errors.header'); ?></h3><p><?= __('errors.body'); ?></p>');
						$target.prepend($messages);
						$messages.slideUp(4000);
					}
				});
			});
		}
	});
});
</script>

<? $n = $id + 1; ?>
<form id="target" action="<?= Url::site("site/question/{$n}"); ?>" method="post">
	<h3><?= $n.': '.$questions[$id]['title']; ?></h3>
	<p><?= $questions[$id]['content']; ?></p>

	<div id="color-scale">
	<div class="container">
		<div id="picker">
			<div id="text"><span style="color: #ddd;">Drag this slider</span></div>
		</div>
	</div>
	</div>
	
	<input type="hidden" name="question_<?= $n; ?>" id="level" value="" />
	
	<a href="#" id="submit" data-role="button" data-icon="check">Submit</a>
</form>