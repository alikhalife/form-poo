<?php

require "../Models/form.php";
require "../Models/html.php";
require "../Models/validator.php";

$html = new Html();
$metaAuthor = $html-> meta("Author", "ALI K");
$metaContent = $html-> meta("Content", "Create a form");

require "../Views/templates/head.php";


/*$form = new Form(array(
    'username' => 'Albert'
));*/

$form =  new Form($_POST);


if (isset($_POST['submit'])){

    //validate entries
    $validation = new FormValidator($_POST);
    $errors = $validation->validateForm();
    //save data to db
}

?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

    <?php

    echo "<h2> Etape 1 - Class Form</h2>";

    echo $form-> input('username');
    echo '<div class ="errors">' .$errors ['username'] ?? '' .'</div>' ;
    echo $form-> input('email');
    echo $form-> input('password');
    echo $form-> submit();
    echo $form-> select('Countries');
    echo $form-> radioInput('Gender');
    echo $form-> checkbox('Vehicules');
    echo $form-> textarea('textarea');


    echo "<h2> Etape 2 - Class Html</h2>";

    echo $html-> link('https://www.youtube.com/watch?v=Hs5m2jLw7_A', 'Object Oriented PHP - Validation Class');
    echo $html -> image('https://www.masalaanews.com/wp-content/uploads/2017/04/61031d66e92d027886d5d916421a6178.jpg','glitch');
    echo $html ->script('text/javascript');
    echo $html ->link()

    ?>

</form>

<?php
require "../Views/templates/footer.php";
?>