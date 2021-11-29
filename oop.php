<?php
  include("./functions.php");
  is_authorized(["root", "docent"]);
?>
<h1>OOP</h1>

<?php
class Person {
  public $weight;
  public $length;
  public $firstname;
  public $infix;
  public $lastname;

  public function __construct($weight, $length, $firstname, $infix, $lastname)
  {
    $this->weight = $weight;
    $this->length = $length;
    $this->firstname = $firstname;
    $this->infix = $infix;
    $this->lastname = $lastname;
  }

  public function show_details() {
    return $this->firstname . " " . $this->infix . " " . $this->lastname . " " . $this->weight ."kg " . $this->length . "cm" ;
  }
}


$person1 = new Person(100, 205, "Bart", "de", "Ruijter");

echo "Mijn gegevens zijn: " . $person1->show_details();
?> 