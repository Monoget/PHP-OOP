<?
    class Employee{
        public $age, $name, $salary;

        public function __construct($n,$a,$s){
            $this->name=$n;
            $this->age=$a;
            $this->salary=$s;
        }


        public function info(){
            echo "<h3>Employee Profile</h3><br>";
            echo "Your name: ".$this->name."<br>";
            echo "Your age: ".$this->age."<br>";
            echo "Your salary: ".$this->salary."<br>";
        }
    }


    class Manager extends Employee{
        public $ta=1000, $phone=300, $totalSalary;

        public function info(){
            $this->totalSalary=$this->ta+$this->phone+$this->salary;

            echo "<h3>Manager Profile</h3><br>";
            echo "Your name: ".$this->name."<br>";
            echo "Your age: ".$this->age."<br>";
            echo "Your salary: ".$this->totalSalary."<br>";
        }
    }

    
    $emp1=new Employee("Monoget Saha",23,50000);

    $emp2=new Manager("Shimul",25,60000);

    
    $emp1->info();
    $emp2->info();
    
?>