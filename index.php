<?php
	require_once 'Tag.php';

	echo (new Tag('input'))
		->setAttr('class', 'eee zzz kkk') // добавим 3 класса
		->removeClass('zzz') // удалим класс 'zzz'
		->addClass('test')
		->open(); // выведет <input class="eee kkk">
	$tag = new Tag('input');

	$tag->setAttr('class', 'eee zzz kkk'); // добавим 3 класса
	$tag->removeClass('zzz'); // удалим класс 'zzz'
	$tag->addClass('test');
	echo nl2br($tag->open()."\n\n getName: "); // выведет <input class="eee kkk">
	echo nl2br($tag->getName()."\n getAttrs: ");
	echo nl2br($tag->getAttrs()."\n getAttr: ");
	echo nl2br($tag->getAttr('class')."\n getText: ");
	echo nl2br($tag->getText());


?> 