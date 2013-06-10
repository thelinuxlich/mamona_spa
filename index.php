<?php
// don't edit this file unless you really know what you're doing!
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
require 'vendor/autoload.php';
require 'routes.php';
require 'config/server.php';
require 'config/messages.php';

\Patchwork\Utf8\Bootup::initAll();

$app = new \Slim\Slim(array(
    'log.enabled' => true,
    'templates.path' => './server/views'
));

add_server_config($app);

date_default_timezone_set($app->config("timezone"));

$loghandlers = array(new \Monolog\Handler\StreamHandler('./logs/'.date('d_m_Y').'.log'));
if($app->config('env') == 'development') {
    $loghandlers[] = new \Monolog\Handler\FirePHPHandler();
    $loghandlers[] = new \Monolog\Handler\ChromePHPHandler();
}
$logger = new \Flynsarmy\SlimMonolog\Log\MonologWriter(array(
    'handlers' => $loghandlers
));

$app->config('debug', ($app->config('env') == 'development'));
$app->config('log.level', ($app->config('env') == 'development' ? \Slim\Log::DEBUG : \Slim\Log::INFO));
$app->getLog()->setWriter($logger);
ini_set('display_errors',($app->config('env') == 'development' ? 1 : 0));
ini_set('display_startup_errors',($app->config('env') == 'development' ? 1 : 0));

add_messages($app);
add_routes($app);

$formatter = new MamonaModelFormatter;
RedBean_ModelHelper::setModelFormatter($formatter);
R::setup($app->config("db_host"),$app->config("db_user"),$app->config("db_pass"));
//R::setup("sqlite:/tmp/dbfile.txt");
R::$writer->setUseCache(true);

if($app->config("env") != "development") {
    R::freeze(true);
} else {
    R::getDatabaseAdapter()->addEventListener('sql_exec',new MamonaQueryLogger($app));
}

ApplicationController::$mailer = new PHPMailer;
ApplicationController::$app = $app;
Model::$app = $app;

$app->add(new \Slim\Middleware\SessionCookie);
$app->run();