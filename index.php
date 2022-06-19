<?php
	require_once 'iTag.php';
	require_once 'Tag.php';
	require_once 'Link.php';
	require_once 'menu.php';

	print(nl2br($link1."\n"));	
	print(nl2br($link2."\n"));	
	print(nl2br($link3."\n"));	
	print(nl2br($link4."\n"));	
	print(nl2br($link5."\n"));	
	print(nl2br($link6."(show)\n"));	
	require_once 'ListItem.php';
	require_once 'HtmlList.php';
	require_once 'Ol.php';
	require_once 'Ul.php';

	echo (new Link)
		->setAttr('href', 'menu/5.php')
		->setAttr('class', 'link1 link2') // добавляем ссылке классы
		->setText('index')
		->show();
	$list = new HtmlList('ul');
	$ul = new Ul; 
	$ol = new Ol;	

	$list->addItem((new ListItem())->setText('item1'));
	$list->addItem((new ListItem())->setText('item2'));
	$list->addItem((new ListItem())->setText('item3'));	
	echo $list; // не вызываем open 

	echo nl2br("\n");

	$ol->addItem((new ListItem())->setText('item1'));
	$ol->addItem((new ListItem())->setText('item2'));
	$ol->addItem((new ListItem())->setText('item3'));
	echo $ol;

	echo nl2br("\n");

	$ul->addItem((new ListItem())->setText('item1'));
	$ul->addItem((new ListItem())->setText('item2'));
	$ul->addItem((new ListItem())->setText('item3'));
	echo $ul;

?> 