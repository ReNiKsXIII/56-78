			}

			return $this;
		}		
		}

		public function getName() { return $this->name; }
		public function getText() { return $this->getAttrsStr($this->attrs); }
		public function getAttrs() { return var_dump($this->attrs); }
		public function getAttr($attr) { return $this->attrs[$attr]; }
	}
?>