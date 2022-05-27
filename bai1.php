<?php 
    class vehicle{
        public $wheels;
        public $name;
        public $date;
        public $warranty;
        public $type;

        public function __construct($wheelsparam,$nameparam,$dateparam,$warrantyparam,$typeparam){
           $this->wheels=$wheelsparam;
           $this->name=$nameparam;
           $this->date=$dateparam;
           $this->warranty=$warrantyparam;
           $this->type=$typeparam;

        }
        public function getWheel(){
            return $this->wheels;
        }
        public function setWheel($newWheel){
            $this->wheels=$newWheel;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($newName){
            $this->wheels=$newName;

        }
        public function getDate(){
            return $this->date;

        }
        public function setDate($newDate){
            $this->wheels=$newDate;

        }
        public function getWarranty(){
            return $this->warranty;

        }
        public function setWarranty($newWarranty){
            $this->wheels=$newWarranty;

        }
        public function getType(){
            return $this->type;

        }
        public function setType($newType){
            $this->wheels=$newType;

        }
    }

   $list_car=[
       new vehicle(2,'Wave',2010,2,'Motorbike'),
       new vehicle(4,'Huyndai grand i10',2015,2,'Car'),
       new vehicle(2,'Galaxy',2017,1,'Bike')
   ];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
    <style>
        table{
            width:100%;
            border: 3px solid black;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <h1>Bang 1</h1>
    <section>
        <table border = '2'>
            <thead>
                <tr>Wheels</tr>
                <tr>Name</tr>
                <tr>Date</tr>
                <tr>Warranty</tr>
                <tr>Type</tr>
            </thead>
            <tbody>
                <?php 
                foreach($list_car as $key=>$car):
                ?>
                <tr>
                    <td><?php 
                        echo $car->getWheel();
                    ?></td>
                    <td><?php 
                        echo $car->getName();
                    ?></td>
                    <td><?php 
                        echo $car->getDate();
                    ?></td>
                    <td><?php 
                        echo $car->getWarranty();
                    ?></td>
                    <td><?php 
                        echo $car->getType();
                    ?></td>
                </tr>
                <?php 
                endforeach;
                ?>
            </tbody>
        </table>
        </section>

        <br>
        <h1>Bang 2</h1>
        <section>  
             <table border='2'>
                 <thead>
                <tr>Wheels</tr>
                <tr>Name</tr>
                <tr>Date</tr>
                <tr>Warranty</tr>
                <tr>Type</tr>
                 </thead>
                 <tbody>
                 <?php 
                foreach($list_car as $car):
                    if($car->getType()=='Car'||$car->getType()=='Motorbike'){?>
                <tr>
                    <td><?php 
                        echo $car->getWheel();
                    ?></td>
                    <td><?php 
                        echo $car->getName();
                    ?></td>
                    <td><?php 
                        echo $car->getDate();
                    ?></td>
                    <td><?php 
                        echo $car->getWarranty();
                    ?></td>
                    <td><?php 
                        echo $car->getType();
                    ?></td>
                </tr>
                    
                <?php }
                endforeach;
                ?>
                 </tbody>
             </table>
        </section>
        <br>
        <h1>Bang 3</h1>
        <section>  
             <table border='2'>
                 <thead>
                <tr>Wheels</tr>
                <tr>Name</tr>
                <tr>Date</tr>
                <tr>Warranty</tr>
                <tr>Type</tr>
                 </thead>
                 <tbody>
                 <?php 
                foreach($list_car as $car):
                
                ?>
                <tr>
                    <td><?php 
                        echo $car->getWheel();
                    ?></td>
                    <td><?php 
                        echo $car->getName();
                    ?></td>
                    <td><?php 
                        echo $car->getDate();
                    ?></td>
                    <td><?php 
                        echo $car->getWarranty();
                    ?></td>
                    <td><?php 
                            switch($car->getType()){
                                case 'Car':
                                    echo $car->getName().' Car';
                                break;
                                case 'Motorbike':
                                    echo $car->getName().' Motorbike';    
                                break;
                                case 'Bike':
                                    echo $car->getName().' Bike';
                                break;
                            }
                            
                    ?></td>
                </tr>
                    
                <?php 
                endforeach;
                ?>
                 </tbody>
             </table>
        </section>
    
</body>
</html>