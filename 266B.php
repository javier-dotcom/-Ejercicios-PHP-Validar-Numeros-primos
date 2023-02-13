
<style>
        body{
            background-color:black;
            color:white;
            text-align:center;
        }
    </style>
<?php
    $numeros=$_GET["num"];

    function sincoma($numeros){
    $cont=0;  
    $caden="";
    for ($i=0; $i <strlen($numeros) ; $i++) 
    { 
        if(substr($numeros,$i,1)!=",")
        {
            $caden=$caden.substr($numeros,$i,1); 
        }
        else
        {
            $estearray[$cont]=$caden;
            $cont++;
            $caden="";
        }
    }
    if($caden!=",")
    {
        $estearray[$cont]=$caden; 
    }
    return $estearray;
    }


function Primos($estearray)
{
    for ($a = 0; $a <= count($estearray) - 1; $a++) {
        $cont = 0;
        for ($b = 1; $b <= $estearray[$a]; $b++) {
           
            if ($estearray[$a] % $b == 0) {
                $cont++;
               if($cont>2){break;}
            } 
        }
        if ($cont == 2) {
            $estearray1[$a] = " El " . $estearray[$a] . "  SI es primo ";
        }
    }
    if (empty($estearray1)) {
        $estearray1[count($estearray)] = "NO se Ingresaron numeros primos";
    }
    return $estearray1;
}

echo "<h2> Resultado </h2>";
$array=Primos(sincoma($numeros));

foreach($array as $primo){
echo $primo . "<br>";

}