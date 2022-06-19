		{
			parent::__construct('input');
		}
		public function __toString()

		public function open()
		{
			$inputName = $this->getAttr('name');

			// Если атрибут name задан у инпута:
			if ($inputName) {
				if (isset($_REQUEST[$inputName])) {
					$value = $_REQUEST[$inputName];
					$this->setAttr('value', $value);
				}
			}

			return parent::open();
		}

		public function __toString()
		{
			return $this->open();
		}
	}
?> 