	require_once 'Input.php';
	require_once 'Submit.php';
	require_once 'Password.php';

	require_once 'Hidden.php';

	$form = (new Form)->setAttrs([
		'action' => 'test.php',
		'method' => 'GET'
	]);

	echo $form->open();
		echo (new Input)   ->setAttr('name', 'login');
		echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '666');;
		echo (new Input)->setAttr('name', 'login');
		echo (new Password)->setAttr('name', 'passw');
		echo new Submit;
	echo $form->close();
