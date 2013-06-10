<?php
class ApplicationController {
	public static $app;
	public static $mailer;

	public static function render($data = array(),$path = "") {
		$class = str_replace("Controller","",get_called_class());
		if($path == "") {
			$trace = debug_backtrace(false);
			$caller = $trace[1];
			$path = strtolower($class)."/".$caller['function'].".html";
		}
		self::$app->render($path,$data);
	}

	public static function log($message,$prefix = null) {
		if($prefix != null) {
			$filename = "./logs/".$prefix."-".date("d-m-Y").".log";
			file_put_contents($filename,$message,FILE_APPEND);
		} else {
			$log = self::$app->getLog();
			$log->debug($message);
		}
	}

	public static function debug($message) {
		$log = self::$app->getLog();
		$log->debug($message);
	}

	public static function info($message) {
		$log = self::$app->getLog();
		$log->info($message);
	}

	public static function send_mail($address,$subject,$content) {
		self::$mailer->IsSendmail();
		self::$mailer->SetFrom("test@test.com", "Test");
		self::$mailer->AddReplyTo("test@test.com","Test");
		self::$mailer->AddAddress($address, $address);
		self::$mailer->Subject = $subject;
		self::$mailer->MsgHTML($content);
		return self::$mailer->Send();
	}

	public static function render_json($data) {
		$res = self::$app->response();
		$res['Content-Type'] = 'application/json';
		$res->status(200);
		$res->body(json_encode($data));
	}

	public static function find_message($message_key,$data) {
		$found = "";
		$messages = self::$app->config($message_key);
		foreach($messages as $k => $v) {
			if(preg_match($k,$data)) {
				$found = $v;
				break;
			}
		}
		return $found;
	}

	public static function redirect($route) {
		self::$app->redirect(self::$app->config('base_url').$route);
	}

	public static function is_ajax() {
		return self::$app->request()->isAjax();
	}
}
