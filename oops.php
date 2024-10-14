<?php
class Person
{
    private $fname;
    private $lname;
    //Constructor
    public
    function __construct($fname, $lname)
    {
        echo "Initialising Object";
        $this->fname=$fname;
        $this->lname=$lname;
    }
    public function showName()
    {
        echo "My name is ".$this->fname. " ".$this->lname;
    }
}
$p=new Person("Stuti","Sharma");
$p->showName();
?>
