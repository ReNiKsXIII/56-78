
	$tag = new Tag('input');

	echo $tag
		->setAttr('id', 'test')
		->setAttr('disabled', true)
		->open();

		// выведет <input id="test" disabled>
	echo (new Tag('input'))->setAttr('name', 'name1')->open();
	echo (new Tag('input'))->setAttr('name', 'name2')->open();

	//вывод <input name="name1"><input name="name2">

?> 