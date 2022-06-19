			$this->name = $name;
		}

		public function Open()
		public function Open($params = null)
		{
			return "<$this->name>";
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
		}
		public function Close()
		public function Close($params = null)
		{
			return "</$this->name>";
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
			}
		}		
	}
?>