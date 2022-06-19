		return '';
			}
		}

		public function setAttrs($attrs)
		{
			foreach ($attrs as $name => $value) {
				$this->setAttr($name, $value);
			}	
			return $this;
		}
	}
?>