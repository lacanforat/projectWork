<html>
    <head></head>
    <body>
        <?php
        $n = $_GET["num"];
        $n = floatval($n);
        $array= array(500,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.01);
        $type = array("e","e","e","e","e","e","e","e","c","c","c","c","c");
        for($i=0; $i<count($array);$i++){
            if($n-$array[$i]>=0){
                $n=$n-$array[$i];
                echo "<img src='img/".$array[$i].$type[$i].".gif'>";
                $i=-1;
            }

            if($n==0){
                break;
            }
        }
        ?>
    </body>
</html>