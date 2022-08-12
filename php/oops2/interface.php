<?php

    interface Method1
    {
        public function mk();
        public function pk($arg);
        public function ak() :string;
    }

    class Person implements Method1
    {
        public function mk(){
            echo "Hello<br>";
        }

        public function pk($arg){
            echo $arg ."<br>";
        }

        public function ak() :string{
            return "anderson<br>";
        }
    }

    $obj = new Person();
    $obj -> mk();
    $obj -> pk("jack");
    echo $obj -> ak();
?>     