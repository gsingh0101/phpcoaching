<?php

echo '<pre/>';


class person {
	public $name;
	public $email;
	private $photo;
	
	function __construct($name, $email, $photo = null) {
	      	print PHP_EOL . "In constructor\n" . PHP_EOL;
		//$this->name = "Some name";
		$this->name = $name;
		$this->email = $email;
		$this->photo = $photo;
	}
}

// create objects instances for this class
$person1 = new person('name1', 'email1@example.com');
print_r($person1->name);
echo '<br>';
$person2 = new person('name2', 'email2@example.com', 'photopath');
print_r($person2->email);
echo '<br>';

echo gettype($person2);
echo '<br>';

// the below is disabled on phptester.net
// echo get_class($acasttoObject);
