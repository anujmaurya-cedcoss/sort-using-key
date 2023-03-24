<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort Using keys</title>
</head>

<body>
    <?php
        // given input array
        $arr = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        // sorting
        ksort($arr);
        foreach ($arr as $key => $value) {
            echo $key, ' -> ', $value, '<br>'; 
        }
    ?>
</body>

</html>