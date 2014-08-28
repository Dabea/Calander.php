class MyClass
{
  public $prop1 = "I'm a class property!";
 
  puclic function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
$obj = new MyClass;
 
echo $obj->prop1;
 
