#!/usr/bin/php
<?php
    while(1) {
        echo "Enter a number: ";
        $num = trim(fgets(STDIN));
        if (feof(STDIN))
        {
            print "\n";
            break;
        }
        if (is_numeric($num))
        {
            if ($num % 2 == 0)
            {
                echo "The number $num is even";
                print "\n";
            }
            else
            {
                echo "The number $num is odd";
                print "\n";
            }
        }
        else
        {
                echo "'$num' is not a number";
                print "\n";
        }
    }
?>