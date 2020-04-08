<?php declare(strict_types=1);
    function rikiavimas(&$indexed_arr) {
        for($i = 0; $i < count($indexed_arr); $i++){
            for($j = 0; $j < count($indexed_arr) - $i - 1; $j++){
              // to compare strings use: strcmp($first_str, $second_str)
              if(strcmp($indexed_arr[$j], $indexed_arr[$j + 1]) > 0){
                // swap  operation
                $tmp = $indexed_arr[$j];
                $indexed_arr[$j] = $indexed_arr[$j + 1];
                $indexed_arr[$j + 1] = $tmp;
              }
            }
          }
          return $indexed_arr;
    }
    function liekana(int $a, int $b) :int {
        return $a % $b;
    }
    ?>
</body>
</html>