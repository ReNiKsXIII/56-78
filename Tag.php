class Tag
	{
		private $name;
		private $attrs;

		public function __construct($name)
		public function __construct($name, $attrs = [])
		{
			$this->name = $name;
			$this->attrs = $attrs;
		}

		public function Open($params = null)
		public function Open()
		{
			if($this->name == "img")
			{
				return "<$this->name src='$params'";	
			}

			if($params == "header")
			{
				return "<header><$this->name>";
			}

			if(empty($params))
			{
				return "<$this->name>";	
			}
			$attrsStr = $this->getAttrsStr($this->attrs); 
			return "<$this->name$attrsStr>";
		}
		public function Close($params = null)

		public function Close()
		{
			if($this->name == "img")
			{
				return ">";	
			}

			if($params == "header")
			{
				return "</$this->name></header>";
			}

			if(empty($params))
			{
				return "</$this->name>";	
			return "</$this->name>";
		}

		private function getAttrsStr($attrs)
		{
			if (!empty($attrs)) {
				$result = '';

				foreach ($attrs as $name => $value) {
					$result .= " $name=\"$value\"";
				}

				return $result;
			} else {
				return '';
			}
		}		
		}
	}
?>