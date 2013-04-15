<style type="text/css">
body, .main { background: #000 !important; }

h1 { float: left; font-size: 1.3em; padding: 15px 10px 30px; }
#avatar { float: right; }

.questions .number { 
	color: #fff; 
	float: left; 
	font-size: 24px; 
	font-weight: bold; 
	text-shadow: inset 1px 1px 1px #333; 
	padding: 20px 10px; 
}
.questions p { 
	float: left; 
	margin: 0; 
	padding: 10px; 
	text-shadow: 0 1px 1px #000;
	width: 70%; 
}
	.questions p .title { display: block; font-size: 18px; font-weight: bold; padding-bottom: 10px; }
</style>

<? 
if ( 
	$user->question_1 !== NULL AND 
	$user->question_2 !== NULL AND 
	$user->question_3 !== NULL AND 
	$user->question_4 !== NULL AND 
	$user->question_5 !== NULL AND 
	$user->question_6 !== NULL AND 
	$user->question_7 !== NULL AND 
	$user->question_8 !== NULL AND 
	$user->question_9 !== NULL AND 
	$user->question_10 !== NULL
)
{
	$profile_complete = TRUE;
}
else
{
	$profile_complete = FALSE;
}

$color = round(array_sum(array(
	$user->question_1,
	$user->question_2,
	$user->question_3,
	$user->question_4,
	$user->question_5,
	$user->question_6,
	$user->question_7,
	$user->question_8,
	$user->question_9,
	$user->question_10,
)) / 10)
?>
<div id="content-target">
	<h1 class="level-<?= $color; ?>">Your Choices<br /> Your Vibes</h1>
	<div id="avatar" class="level-<?= $color; ?>"></div>
	
	<br class="clear" />
	
	<ul class="questions" data-role="listview">
		<? foreach ($questions as $k => $v) : $number = $k+1; $question = 'question_'.$number; ?>
		<li class="level-<?= $user->$question; ?>">
			<a href="<?= Url::site("site/question/{$number}"); ?>">
				<span class="number"><?= $number; ?></span>
				<p>
					<span class="title"><?= $questions[$k]['title']; ?></span>
					<?= $questions[$k]['content']; ?>
				</p>
			</a>
		</li>
		<? endforeach; ?>
	</ul>
	
	<hr />
	
	<? if ($profile_complete) : ?>
	<a href="/site/congrats" data-role="button">Congrats! Here's what's next!</a>
	<? endif; ?>
</div>