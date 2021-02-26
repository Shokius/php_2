<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
       
        // Task 1

        echo 'Task 1<br/>';

        // $a = 1;
        // $a = 3;
        // $a = -3;
        // $a = 0;
        // $a = NULL;
        // $a = true;
        $a = '"';
        // $a = '0';

        echo(isset($a) == 0 ? 'True' : 'False');
        echo '<hr/>';
    
        // Task 2 

        echo 'Task 2<br/>';

        $a = 666;
        $b = (string)$a;
        $b[1] = 0;

        echo +$b;
        echo '<hr/>';
       
        // Task 3 

        echo 'Task 3<br/>';

        $a = 1;
        $b = 6;
        // $a = 3;
        // $b = 3;
        // $a = 0;
        // $b = 5;

        echo($a <= 1 && $b >= 3 ? $a + $b : $a - $b);
        echo '<hr/>';
        
        // Task 4

        echo 'Task 4<br/>';

        $a = 'abcde';

        if($a[0] === 'a') {
            echo 'да';
        } else {
            echo 'нет';
        }

        echo '<hr/>';
        
        // Task 5

        echo 'Task 5<br/>';

        $a = '158635';

        echo($a[0] + $a[1] + $a[2] == $a[3] + $a[4] + $a[5] ? 'да' : 'нет');
        echo '<hr/>';
        
        // Task 6

        echo 'Task 6<br/>';

        $a = 283;
        $b = $a / 30;
        $hour = (int)$b;
        $min = ($b - $hour)*60;

        echo "{$hour}:{$min}";
        echo '<hr/>';

        // Task 7

        echo 'Task 7<br/>';

        $a = 0;

        for($i = 20; $i <= 45; $i++) {
            if($i % 5 == 0) $a += $i;
        }

        echo $a;
        echo '<hr/>';
        
        // Task 8

        echo 'Task 8<br/>';

        $a = 55369;
        $b = (string)$a;

        for($i = 0; $i < 5; $i++) {
            if($i % 2 !== 0) $b[$i] = '0';
        }

        echo +$b;
        echo '<hr/>';
        
        // Task 9

        echo 'Task 9<br/>';

        $a = 0;

        for ($num = 1000; $num > 50; $num /= 2) {
            
            echo $num . '<br/>';
            
            $a++;
        }

        // $i = 1000;
        // $a = 0;

        // while ($i > 50) {
        //     echo $i . '<br/>';
        //     $a++;
        //     $i /= 2;
        
        // }
        // echo $i . '<br/>';
        // echo $a;

        echo $a;
        echo '<hr/>';
        
        // Task 10

        echo 'Task 10<br/>';

        $a = 6;

        for($i = 1; $i <= $a; $i++) {
            for($j = 1; $j <=$a; $j++) {
                echo '*';
            }
            echo '<br/>';
        }

        echo '<hr/>';
        
    ?>

</body>
</html>