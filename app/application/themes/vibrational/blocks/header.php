<? if ( A1::instance()->get_user() ) : ?>
<? else : ?>
<ul>

	<li><a href="/" <? if ($_SERVER['REQUEST_URI'] == '/') echo 'class="ui-btn-active"'; ?>>Welcome</a></li>
	<li><a href="/site/login" <? if (preg_match('/site\/login/i', $_SERVER['REQUEST_URI'])) echo 'class="ui-btn-active"'; ?>>Login</a></li>
	<li><a href="/site/register" <? if (preg_match('/site\/register/i', $_SERVER['REQUEST_URI'])) echo 'class="ui-btn-active"'; ?>>Register</a></li>
</ul>
<? endif; ?>