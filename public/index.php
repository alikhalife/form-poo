<?php

require "../form.php";

/*$form = new Form(array(
    'username' => 'Albert'
));*/

$form =  new Form($_POST);


?>
<form action="" method="post">

    <?php
    echo $form-> input('Username');
    echo $form-> input('Password');
    echo $form-> select('Countries');
    echo $form->radioInput('Gender');
    echo $form-> textarea('textarea');

    echo $form-> submit();



    echo ($form);
    ?>

</form>