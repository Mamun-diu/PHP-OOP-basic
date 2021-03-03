<!-- Type Declaration -->

<?php
    class school{
        public function getNames(student $names){
            foreach ($names->Names() as $name) {
                echo $name."<br>";
            }
        }
    }
    class student{
        public function Names(){
            return ["Ram","Krishna","Gopal"];
        }
    }
    class library{

    }

    $stu = new student();
    $sch = new school();
    $lib = new library();
    $sch->getNames($stu);

?>