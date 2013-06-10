<?php
function add_messages($app) {
	$app->config("home",array(
		"/greeting/" => "Hello World!"
	));
}