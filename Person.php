<?php
class Person{
    public $age;
   public function __construct($initialAge){
          // Add some more code to run some checks on initialAge
            if($initialAge<0){
                echo "Age is not valid, setting age to 0. \n";
                $initialAge =0;
            }
            $this->age = $initialAge;
    }
   public  function amIOld(){
            // Do some computations in here and print out the correct statement to the console 
            $amIOld = $this->age;
            //echo $amIOld."<-amIOld";
            if($amIOld<13){
                echo "You are young.\n";
            }elseif($amIOld>=13 && $amIOld<18){
                echo "You are a teenager. \n";
            }else{
                echo "You are old. \n";
            }
    }
   public  function yearPasses(){
          // Increment the age of the person in here
            $this->age = $this->age+1;
    }
   
      
}

$T = intval(fgets(STDIN));
for($i=0;$i<$T;$i++){
     $age=intval(fgets(STDIN));
     $p=new Person($age);
     $p->amIOld();
     for($j=0;$j<3;$j++){
         $p->yearPasses();
     }
     $p->amIOld();
     echo "\n";
         
 }
?>
