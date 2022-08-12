<?php                               //used to declare methods that can be used in multiple classes
    trait Messege1                  //the trait keyword
    {
        function msg1(){
            echo "Hello !<br>";
        }
    }

    class Welcome1
    {
        use messege1;               //To use a trait in a class, use the "use" keyword
    }

    class Welcome2
    {
        use messege1;               //To use a trait in a class, use the "use" keyword
    }
    
    $obj = new Welcome1();
    $obj -> msg1();

    $obj2 = new Welcome2();
    $obj -> msg1();
?>