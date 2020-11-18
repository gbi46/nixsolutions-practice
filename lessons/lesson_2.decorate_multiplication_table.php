<?php
function setColor($number) {
    $color = '';
    switch($number) {
        case 1:
            $color = 'red';
            break;
        case 2:
            $color = 'green';
            break;
        case 3:
            $color = 'yellow';
            break;
        case 4:
            $color = 'blue';
            break;
        default:
            $color = 'black';
    }
    
    return $color;
}
function decorateNumber($num) {
    $decoratedNumber = '';
    $num = strval($num);
    $explodedNum = str_split($num);
    for($ni=0; $ni<count($explodedNum); $ni++) {
    $color = setColor($explodedNum[$ni]);
    $decoratedNumber .= '<span style="color: ' . $color . '">' . $explodedNum[$ni] . '</span>';
    }
    return $decoratedNumber;
}
?>
<h3 id="multiplication-table-header">Таблица умножения</h3>
<table border="1px solid black">
  <tr>
    <?php
      for($n=1; $n<=10; $n++) :
    ?>
    <td>
    <?php
    for($m=1; $m<=10; $m++) :
    ?>
    <?php
        $num = decorateNumber($n);         $multiNum = decorateNumber($m);
        echo "$num * $multiNum = " . decorateNumber($n*$m);
    ?>
    <br />
    <?php endfor; ?>
    </td>
    <?php
      if($n == 5) {
        echo '</tr><tr>';
      }
      endfor;
    ?>
  </tr>
</table>
