<?php
    require_once 'PHPTemplate/Template.php';
    use PHPTemplate\Template;

    $t = new Template('hello.php');
    $t->greeting = 'Hello';
    $t->who = 'world';
    $t->array = array(
				1,2,3

			)

    echo $t->execute();

    // Alternatives:
    // echo $t->execute(array('greeting' => 'Hello', 'who' => 'world'));
    // echo $t->set(array('greeting' => 'Hello', 'who' => 'world'))->execute();


// Control Ops


    $data = array(
		'greeting' => 'Hello',
		'fart' => System::Fart('wet'),
		'who' => 'world',
		'array' =>
	);


       // Template::Render('view.php', $data);
	?>

