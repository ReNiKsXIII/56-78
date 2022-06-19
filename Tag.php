				$result = '';

				foreach ($attrs as $name => $value) {
					$result .= " $name=\"$value\"";
					// Если значение атрибута равно true:
					if ($value === true) {
						$result .= " $name"; // это атрибут без значения
					} else {
						$result .= " $name=\"$value\""; // это атрибут со значением
					}
				}

				return $result;
@@ -57,5 +62,7 @@ public function setAttrs($attrs)
			}	
			return $this;
		}


	}
?>