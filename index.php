<?php 
// class Student{
//     public $name;
//     public $age;
//     public function __construct($name,$age){
//         $this->name=$name; //this->name= toangngo92
//         $this->name ="ABC"; //this->name = abc
//         $this->age=$age;
//     }
//     public function getName(){
//         return $this->name;
//     }
// }
// $ongtoan = new Student('Toanngo92',21);
// echo $ongtoan->getName();

// switch(8.0){
//     case 8.0:
//         $result="Oh no!";
//         break;
//     case '8.0':
//         $result="This is what I expected!";
//         break;
//     }
//     echo $result;

// $N = 345;

echo"Bai 1:"."<br/>";

$string ='345';
echo "chuoi so: ". $string."<br/>";

echo "so thu nhat: ". $string[0]."<br/>";
echo "so thu hai: ". $string[1]."<br/>";
echo "so thu ba: ". $string[2]."<br/>";

// echo"Bai 2:"."<br/>";

// class Student{
//     public $name;
//     public $age;
// }
// for($i=0;$i<count($lst_sv);$i++){
//     echo 
// }

echo"Bai 3:"."<br/>";
class Employee{
    public $name;
    public $age;
    public $interest;
    public function __construct($nameparam,$ageparam,$interestparam){
        $this->name=$nameparam;
        $this->age=$ageparam;
        $this->interest=$interestparam;
    }
    public function getName(){
        return $this->name ;
    }
    public function getAge(){
        return $this->age ;
    }
    public function getInterest(){
        return $this->interest ;
    }
    public function setName($newName){
        
        return $this->name=$newName;
    }
    public function setAge($newAge){
        $this->age=$newAge;
    }
    public function setInterest($newInterest){
        $this->interest=$newInterest;
    }
    public function goToWork(){
        echo "go to work";
    }
}
$person1 = new Employee("Huy",22,"Manga");
$person2 = new Employee("Hoang",22,"Manga");
$person3 = new Employee("Danh",22,"Manga");

echo "So tuoi la: ".$person1->getAge(). "<br/>" ;

echo "Ten cu la:". $person2->getName(). "<br/>";
echo "Ten moi duoc set: ". $person2->setName('HuyAnh')."<br/>";
echo "Ten sau khi set: ".$person2->getName();
// echo"Bai 4:"."<br/>";