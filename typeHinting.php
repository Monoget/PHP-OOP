<?php
    class School{
        public function getNames(Student $names){
            foreach($names->names() as $name){
                echo $name."<br>";
            }
        }
    }

    class Student{
        public function names(){
            return ["Monoget","Shuvo","Riya","Swarna"];
        }
    }

    $sch=new School();
    $stu=new Student();

    $sch->getNames($stu);
?>