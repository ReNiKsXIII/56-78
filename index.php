	require_once 'Submit.php';
	require_once 'Password.php';
	require_once 'Hidden.php';
	require_once 'Textarea.php';

	$form = (new Form)->setAttrs([
		'action' => 'test.php',
@@ -16,6 +17,7 @@
		echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '666');;
		echo (new Input)->setAttr('name', 'login');
		echo (new Password)->setAttr('name', 'passw');
		echo (new Textarea)->setAttr('name', 'message')->show();
		echo new Submit;
	echo $form->close();
?> 