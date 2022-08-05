<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <?php 
    echo "Today Date is " . date("m/d/Y") . "<br>";//m=month(in numbers), d=date, y=year(2digit) 
    echo "Today Date is " . date("M/D/Y") . "<br>";//M=month(in letters), D=day(mon-sun), Y=year(4digit) 
    echo "Today Date is " . date("l") . "<br>";//l=day(Monday-Sunday)
    echo "The time is " . date("H:i:sa") ."<br>";// H=24 hourformat, h=12 hourformat, i=minutes 
    echo "The time is " . date("h:i:sa");// s=seconds, a=AM or PM   
    ?>
</body>
</html>