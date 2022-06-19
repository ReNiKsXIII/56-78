<?php
	class Tag
	class Tag implements iTag
	{
		private $name;
		private $attrs;
		private $attrs = [];
		private $text = '';

		public function __construct($name)
		{
			$this->name = $name;
		}

		public function Open()
		public function getName()
		{
			$attrsStr = $this->getAttrsStr($this->attrs); 
			return "<$this->name$attrsStr>";
			return $this->name;
		}

		public function Close()
		public function getText()
		{
			return "</$this->name>";
			return $this->text;
		}

		public function setAttr($name, $value)
		public function getAttrs()
		{
			$this->attrs[$name] = $value;
			return $this; 
			return $this->attrs;
		}

		public function removeAttr($name)
		public function getAttr($name)
		{
			if(array_key_exists($name, $this->attrs))
			{
				unset($this->attrs[$name]);
			if (isset($this->attrs[$name])) {
				return $this->attrs[$name];
			} else {
				return null;
			}
		}

		public function show()
		{
			return $this->open() . $this->text . $this->close();
		}

		public function open()
		{
			$name = $this->name;
			$attrsStr = $this->getAttrsStr($this->attrs);

			return "<$name$attrsStr>";
		}

		public function close()
		{
			$name = $this->name;
			return "</$name>";
		}

		public function setText($text)
		{
			$this->text = $text;
			return $this;
		}

		private function getAttrsStr($attrs)
		public function setAttr($name, $value = true)
		{
			if (!empty($attrs)) {
				$result = '';

				foreach ($attrs as $name => $value) {
					// Если значение атрибута равно true:
					if ($value === true) {
						$result .= " $name"; // это атрибут без значения
					} else {
						$result .= " $name=\"$value\""; // это атрибут со значением
					}
				}

				return $result;
			} else {
				return '';
			}
			$this->attrs[$name] = $value;
			return $this;
		}

		public function setAttrs($attrs)
		{
			foreach ($attrs as $name => $value) {
				$this->setAttr($name, $value);
			}	
			}

			return $this;
		}

		public function removeAttr($name)
		{
			unset($this->attrs[$name]);
			return $this;
		}

		public function addClass($className)
		{
			if (isset($this->attrs['class'])) {
				$classNames = explode(' ', $this->attrs['class']);

				
				if (!in_array($className, $classNames)) {
					$classNames[] = $className;
					$this->attrs['class'] = implode(' ', $classNames);
				}
			} else {
				$this->attrs['class'] = $className;
			}

			
			return $this;
		}		

		private function removeElem($elem, $arr)
		{
			$key = array_search($elem, $arr); // находим ключ элемента по его тексту
			array_splice($arr, $key, 1); // удаляем элемент
			return $arr; // возвращаем измененный массив
		}

		public function removeClass($className)
@@ -100,9 +110,31 @@ public function removeClass($className)
			return $this;
		}

		public function getName() { return $this->name; }
		public function getText() { return $this->getAttrsStr($this->attrs); }
		public function getAttrs() { return var_dump($this->attrs); }
		public function getAttr($attr) { return $this->attrs[$attr]; }
		private function getAttrsStr($attrs)
		{
			if (!empty($attrs)) {
				$result = '';

				foreach ($attrs as $name => $value) {
					if ($value === true) {
						$result .= " $name";
					} else {
						$result .= " $name=\"$value\"";
					}
				}

				return $result;
			} else {
				return '';
			}
		}

		private function removeElem($elem, $arr)
		{
			$key = array_search($elem, $arr);
			array_splice($arr, $key, 1);

			return $arr;
		}
	}
?>
?> 