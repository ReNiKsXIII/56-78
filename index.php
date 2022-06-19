	require_once 'Tag.php';
	require_once 'Form.php';
	require_once 'Input.php';
	require_once 'Submit.php';

	$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);
	$form = (new Form)->setAttrs(['action' => 'test.php', 'method' => 'GET']);

	echo $form->open();
	echo (new Input)->setAttr('name', 'n1');
	echo (new Input)->setAttr('name', 'n2');
	echo (new Input)->setAttr('name', 'n3');
	echo (new Input)->setAttr('name', 'n4');
	echo (new Input)->setAttr('name', 'n5');

	echo (new Input)->setAttr('type', 'submit');
	echo (new Input)->setAttr('name', 'year');
	echo new Submit;
	echo $form->close();

	if(isset($_GET['n1']) || isset($_GET['n2'])|| isset($_GET['n3'])|| isset($_GET['n4'])|| isset($_GET['n5'])){
		echo $_GET['n1'] + $_GET['n2']+ $_GET['n3']+ $_GET['n4']+ $_GET['n5'];
	}

?> 