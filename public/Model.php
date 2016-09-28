<?php

class Model
{
	protected $attributes = [];


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
}

$model = new Model();

$model->name = 'Joe Blow';

echo 'Your name is '.$model->name.PHP_EOL;

var_dump($model);