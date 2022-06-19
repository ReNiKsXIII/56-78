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
		{
			if (isset($this->attrs['class'])) {
				$classNames = explode(' ', $this->attrs['class']);

				if (in_array($className, $classNames)) {
					$classNames = $this->removeElem($className, $classNames);
					$this->attrs['class'] = implode(' ', $classNames);
				}
			}

			return $this;
		}		
	}
?>