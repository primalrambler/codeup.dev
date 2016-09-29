<?php

class Model
{
	protected $attributes = [];
	protected static $table = 'main';


	public function __get($name)
	{
		if(isset($this->attributes[$name])){
			return $this->attributes[$name];
		}
		return null;
	}

	public function __set($name, $value)
	{
		$this->attributes[$name] = $value;
	}

	public static function getTableName()
	{
		if(isset(static::$table)){
			return static::$table;
		}
		return null;
	}
}

require_once (__DIR__.'/Users.php');

$model = new Model();

echo 'The model table name is '.Model::getTableName().PHP_EOL;
echo 'The user table name is '.Users::getTableName().PHP_EOL;	