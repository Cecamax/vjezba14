<?php


#Operatori

#Operatori dodjele = 
#aritmeticki operatori +, -, *, /, %
    #Modulo operator
        echo 8 % 2; #podjeljeno sa 2 i prikazuje ostatak od djeljenja
        #(parni ili neparn broj ili da li je neko polje crno ili bjelo)
        echo "<br>";

        #Operatori poredenja  <, >, <=, >=
            #operator jednako == ( tacno prikazuje 1 ako nije tacno ne prikazuje nista moze sa navodnicima)
            echo 10 == '10';
            echo "<br>";
            #operator identicno === ( tacno prikazuje 1 ako nije tacno ne prikazuje nista)
            echo 10 === 10;
            echo "<br>";
            #operator nije jednako 
            echo 10 != 5;
            echo "<br>";
            #operator nije identicno !==
            echo 10 !== 10;
            echo "<br>";
            #nadovezivanje stringova
            echo "Ovo " . "je " . "kompletan " . "string." ;
            echo "<br>";
            #unarni operatori +=, -=, *=, /=, %=
            $a = 15;
            $a += 7; //$a = $a + 7; 
            echo $a;
            echo "<br>";
            $a -= 3; //$a = $a - 7;
            echo $a;
            echo "<br>";
            #inkrement idekrement ++, -- 
            $c = 4;
            echo $c++; #prikazuje vrijednost
            echo --$c; #podize ili smanjivanaje za dva

            echo "<br>";
            $x = 4;
            $y = $x--;
            echo ($y++)+$x;
            echo "<br>";
            echo +$x; 
            echo "<br>";
            echo -$x; 
            echo "<br>";
            
            #logicki operatori && (and), || (or) i ! (negiramo nesto sto je unutar zagrada stavlja se prije)
            $f = 10;
            $g = 5;
            $h = 0;
            echo $f<12 && $g>6;
            echo "<br>";
            echo $f<12 || $g>6;
?>