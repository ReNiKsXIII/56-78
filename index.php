<?php
	require_once 'Tag.php';

	$tag = new Tag('div');
	$tag->setAttr('id', 'test'); // откроем тег
	$tag->removeAttr('id'); // удалим тег
	echo $tag->Open();
	echo 'sadas';
	echo $tag->Close(); // закроем тег

	$tag = new Tag('input', ['id' => 'test', 'class' => 'eee bbb']);
	echo $tag->Open(); // выведет <input id="test" class="eee bbb">
	// выводит <div>sadas</div>
		

?> 