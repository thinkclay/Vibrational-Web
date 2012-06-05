<? if ( A1::instance()->get_user() ) : ?>
<ul>
	<li><a href="/site/profile" <? if ($_SERVER['REQUEST_URI'] == '/site/profile') echo 'class="ui-btn-active"'; ?>>Profile</a></li>
</ul>
<? else : ?>
<ul>
	<li><a href="/" <? if ($_SERVER['REQUEST_URI'] == '/') echo 'class="ui-btn-active"'; ?>>Welcome</a></li>
	<li><a href="/site/login" <? if ($_SERVER['REQUEST_URI'] == '/site/login') echo 'class="ui-btn-active"'; ?>>Login</a></li>
	<li><a href="/site/register" <? if ($_SERVER['REQUEST_URI'] == '/site/registerform') echo 'class="ui-btn-active"'; ?>>Register</a></li>
</ul>
<? endif; ?>