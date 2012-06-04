<ul>
	<li><a href="/" <? if ($_SERVER['REQUEST_URI'] == '/') echo 'class="ui-btn-active"'; ?>>Welcome</a></li>
	<li><a href="/site/login" <? if ($_SERVER['REQUEST_URI'] == '/site/login') echo 'class="ui-btn-active"'; ?>>Login</a></li>
	<li><a href="/site/registerform" <? if ($_SERVER['REQUEST_URI'] == '/site/registerform') echo 'class="ui-btn-active"'; ?>>Register</a></li>
</ul>