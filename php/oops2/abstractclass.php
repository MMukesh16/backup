<html>
<body>    

    <?php
        abstract class Person
        {
            abstract function display(); //declaring a function or method in abstract class 
        }                                //inside abstract class there should be abstract method

        class Child1 extends Person      //child class of person
        {
            function display(){
                echo "Mukesh";
            }
        }

        class Child2 extends Person      //CAN USE MULTIPLE CLASSES 
        {                                       
            function display(){
                echo "Manoj";           //ALL METHODS DECLARED IN PARENT CLASS SHOULD BE IN EVERY CHILD CLASS.
            }
        }
        
    $obj1 = new Child1();               //creating object to the child1 class
    $obj1->display();                   //object invokes display method AND DISPLAY METHOD DECLARES IN PARENT CLASS
   
    $obj2 = new Child2();
    $obj2 -> display();
   
   ?>                                  

</body>
</html>
