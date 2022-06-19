private $name;
		private $attrs;

		public function __construct($name, $attrs = [])
		public function __construct($name)
		{
			$this->name = $name;
			$this->attrs = $attrs;
		}

		public function Open()
@@ -21,6 +20,21 @@ public function Close()
			return "</$this->name>";
		}

		public function setAttr($name, $value)
		{
			$this->attrs[$name] = $value;
			return $this; 
		}

		public function removeAttr($name)
		{
			if(array_key_exists($name, $this->attrs))
			{
				unset($this->attrs[$name]);
			}
			return $this;
		}

		private function getAttrsStr($attrs)
		{
			if (!empty($attrs)) {