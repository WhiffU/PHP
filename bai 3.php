<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php

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
$person2 = new Employee("Hoang",23,"Anime");
$person3 = new Employee("Danh",24,"Hentai");



echo "So tuoi la: ".$person1->getAge(). "<br/>" ;

echo "Ten cu la:". $person2->getName(). "<br/>";
echo "Ten se duoc set: ". $person2->setName('HuyAnh')."<br/>";
echo "Ten sau khi set: ".$person2->getName();

?></p>
<table border="1">
    <tr>
        <td>Tên</td>
        <td>Tuổi</td>
        <td>Sở thích</td>

    </tr>
    <tr>
        <td><?php echo $person1->getName()
        ?></td>
        <td><?php echo $person1->getAge()
        ?></td>
        <td><?php echo $person1->getInterest()
        ?></td>
    </tr>
    <tr>
        <td><?php echo $person2->getName()
        ?></td>
        <td><?php echo $person2->getAge()
        ?></td>
        <td><?php echo $person2->getInterest()
        ?></td>
    </tr>
    <tr>
        <td><?php echo $person3->getName()
        ?></td>
        <td><?php echo $person3->getAge()
        ?></td>
        <td><?php echo $person3->getInterest()
        ?></td>
    </tr>
</table>
</body>
</html>

