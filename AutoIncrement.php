<?php

$maxNo = "0000ZZ";

echo autoIncrement($maxNo);

function autoIncrement($maxNo){
    
    $arrayNo = [
            0 => "0",
            1 => "1",
            2 => "2",
            3 => "3",
            4 => "4",
            5 => "5",
            6 => "6",
            7 => "7",
            8 => "8",
            9 => "9",
            10 => "A",
            11 => "B",
            12 => "C",
            13 => "D",
            14 => "E",
            15 => "F",
            16 => "G",
            17 => "H",
            18 => "I",
            19 => "J",
            20 => "K",
            21 => "L",
            22 => "M",
            23 => "N",
            24 => "O",
            25 => "P",
            26 => "Q",
            27 => "R",
            28 => "S",
            29 => "T",
            30 => "U",
            31 => "V",
            32 => "W",
            33 => "X",
            34 => "Y",
            35 => "Z",
        ];
        $splittedMaxNo = str_split("0".$maxNo);
 
        $carryOver = 0;
        $arrayCount = count($arrayNo)-1;
        $stringCount = count($splittedMaxNo)-1;
        for($i = count($splittedMaxNo)-1; $i >= 0; $i--){
  
            $numericValue[$i] = array_search($splittedMaxNo[$i], $arrayNo);
            
            if($carryOver == 1){
                $numericValue[$i] += 1;
                $carryOver = 0;
            }
            
            if($stringCount == $i){
                $numericValue[$i] += 1;
            }
    
            if($numericValue[$i] > $arrayCount){
                $carryOver = 1;
                $numericValue[$i] = 0;
            }
            
            $numericValue[$i] = $arrayNo[$numericValue[$i]];
        }
        
        ksort($numericValue);
        return ltrim(implode("", $numericValue), "0");
}
