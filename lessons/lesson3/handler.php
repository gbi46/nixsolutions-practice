<?php
  if(!empty($_POST)) {
    if($_POST['submit']) {
      if($_POST['text-field']) {
        $text = strrev(htmlspecialchars($_POST['text-field']));
        echo $text;
      }
      else {
        echo 'Введите хоть 2 символа, пожалуйста';
      }
    }
  }
?>
<br />
<a href="form.php">Назад</a>
