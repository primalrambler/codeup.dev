<?php

class SomethingCool
{
	protected $attributes = [
		'email'=> 'joe@example.com',

	];

	public function __get($name)
	{
		if (isset($this->attributes[$name])){
			return $this->attributes[$name];
		}
		return null;
	}

	public function __set($name,$value)
	{
		$this->attributes[$name] = $value;
	}
}

var_dump($cool_object->email);

$cool_object->phone_number = '867-5309';

var_dump($cool_object);