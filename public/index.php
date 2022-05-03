<?php

require "../form.php";

/*$form = new Form(array(
    'username' => 'Albert'
));*/

$form =  new Form($_POST);

echo var_dump($form);


?>
<form action="" method="post">

    <?php
    echo $form-> input('username');
    echo $form-> input('password');
    echo $form-> select('gender');
    echo $form->radioInput('radio');
    echo $form-> textarea('textarea');

    echo $form-> submit();



    echo ($form);
    ?>

</form>