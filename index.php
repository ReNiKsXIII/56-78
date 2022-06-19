	require_once 'iTag.php';
	require_once 'Tag.php';
	require_once 'Form.php';
	require_once 'Input.php';

	$form = (new Form)->setAttrs([
		'action' => 'test.php',
		'method' => 'POST'
	]);
	$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

	echo $form->open();
		// здесь потом будут элементы формы
	echo (new Input)->setAttr('name', 'year')->open();
	echo (new Input)->setAttr('type', 'submit')->open();
	echo $form->close();

	//выводит <form action="test.php" method="POST"></form>

?> 