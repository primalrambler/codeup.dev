<?php

require_once 'Log.php';

class Auth
{
	//until we get into MySQL use these two
	public static $validUser = 'guest'; 
	public static $validPassword = 'password';


	public static function attempt($username, $password)
	{
		$hash = password_hash(self::$validPassword, PASSWORD_DEFAULT);
		$log = new Log();

		if ($username === self::$validUser && password_verify($password, $hash)){

			$_SESSION['LOGGED_IN_USER'] = true;
			$_SESSION['username'] = $username;
			$msg = "User $username has logged in";
			$log->logInfo($msg);
			return true;
		} else{
			$msg = "User $username failed to log in!";
			$log->logError($msg);	
			return false;
		}
	}


	public static function check()
	{
		return $_SESSION['LOGGED_IN_USER'];
	}


	public static function user ()
	{
		return (self::check())? $_SESSION['username'] : null;
	}


	public static function logout()
	{
	    // clear $_SESSION array
	    session_unset();

	    // delete session data on the server
	    session_destroy();

	    // ensure client is sent a new session cookie
	    session_regenerate_id();

	    // start a new session - session_destroy() ended our previous session so
	    // if we want to store any new data in $_SESSION we must start a new one
	    session_start();
	}
	
	private function __construct() {}
}