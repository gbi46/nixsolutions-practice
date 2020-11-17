<h3 id="multiplication-table-header">Таблица умножения</h3>
<table border="1px solid black">
  <tr>
    <?php
      for($n=1; $n<=10; $n++) :
    ?>
    <td>
    <?php
    for($m=1; $m<=10; $m++) :
      echo "$n * $m = " . $n*$m; 
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
