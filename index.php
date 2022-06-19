<?php
	require_once 'Tag.php';

	$tag = new Tag('div');
	$tag->setAttr('id', 'test'); // откроем тег
	$tag->removeAttr('id'); // удалим тег
	echo $tag->Open();
	echo 'sadas';
	echo $tag->Close(); // закроем тег
	$tag = new Tag('input');

	// выводит <div>sadas</div>
	echo $tag
		->setAttrs(['id' => 'test', 'class' => 'eee'])
		->setAttr('type', 'text')
		->open(); 

		// выведет <input id="test" class="eee" type="text">

?> 