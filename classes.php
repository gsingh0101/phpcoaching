<?php

//error_reporting(E_WARNING);
error_reporting(E_ALL);
//ini_set('display_errors', 1);

echo '<pre/>';


// class person {
// 	public $name;
// 	public $email;
// 	private $photo;
	
// 	function __construct() {
//       	print "In constructor\n";		
// $this->name = "Some name";
// }
// }
// $person1 = new person();
// print_r($person1->name);


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
$person1 = new person('name1', 'email1@example.com');
print_r($person1->name);
$person2 = new person('name2', 'email2@example.com', 'photopath');
print_r($person2->email);

echo PHP_EOL;
echo gettype($person2);

echo PHP_EOL;
echo get_class($acasttoObject);


