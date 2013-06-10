<?php
class MamonaQueryLogger extends RedBean_Plugin_QueryLogger {

    private $app;

    public function __construct($app) {
        $this->app = $app;
    }

    public function onEvent($eventName, $adapter) {
       if ($eventName=="sql_exec") {
           $log = $this->app->getLog();
           $sql = $adapter->getSQL();
           $log->debug($sql);
       }
    }
}