<?php
	require_once 'iTag.php';
	require_once 'Tag.php';

	$tag = new Tag('input');

	$tag->setAttr('class', 'eee zzz kkk'); // добавим 3 класса
	$tag->removeClass('zzz'); // удалим класс 'zzz'
	$tag->addClass('test');
	echo nl2br($tag->open()."\n\n getName: "); // выведет <input class="eee kkk">
	echo nl2br($tag->getName()."\n getAttrs: ");
	echo nl2br($tag->getAttrs()."\n getAttr: ");
	echo nl2br($tag->getAttr('class')."\n getText: ");
	echo nl2br($tag->getText());


	require_once 'Image.php';
	$img = (new Image())->setAttrs(['src' => 'cat-005.png', 'width' =>'300', 'height'=>'200']);
	echo $img->open();
?> 