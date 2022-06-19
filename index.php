	require_once 'Password.php';
	require_once 'Hidden.php';
	require_once 'Textarea.php';

	require_once 'Checkbox.php';

	$form = (new Form)->setAttrs([
		'action' => 'test.php',
		'method' => 'GET'
@@ -18,6 +19,11 @@
		echo (new Input)->setAttr('name', 'login');
		echo (new Password)->setAttr('name', 'passw');
		echo (new Textarea)->setAttr('name', 'message')->show();
		echo nl2br("\n");
		echo " Checkbox: ".(new Checkbox)->setAttr('name', 'checkbox');
		echo nl2br("\n\n\n");


		echo new Submit;
	echo $form->close();
?> 