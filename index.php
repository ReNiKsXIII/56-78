	require_once 'Form.php';
	require_once 'Input.php';
	require_once 'Submit.php';

	$form = (new Form)->setAttrs(['action' => 'test.php', 'method' => 'GET']);
	require_once 'Password.php';

	$form = (new Form)->setAttrs([
		'action' => 'test.php',
		'method' => 'GET'
	]);

	echo $form->open();
	echo (new Input)->setAttr('name', 'year');
	echo new Submit;
		echo (new Input)   ->setAttr('name', 'login');
		echo (new Password)->setAttr('name', 'passw');
		echo new Submit;
	echo $form->close();

?> 