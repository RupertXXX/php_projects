<?php 
	class FirstArr {
		public $FirstArr = array(4, 8, 15, 16, 23, 42, 14, 18, 25, 26, 33);
		public $min = PHP_INT_MAX;
		public $max = -(PHP_INT_MAX);
		public $sum = 0;
		function SumArr() {
			$sum = $this->sum;
			for($i = 0; $i < count($this->FirstArr); $i++){
				if (is_int($this->FirstArr[$i]) == true) {
					$sum += $this->FirstArr[$i];
				}
				elseif (is_string($this->FirstArr[$i]) == true) {
					$sum += strlen($this->FirstArr[$i]);
				}
			}
			return $sum;
		}
				
		function Mini() {
			$min = $this->min;
			for($i = 0; $i < count($this->FirstArr); $i++){
				if (is_int($this->FirstArr[$i]) == true) {
					if (is_int($min) == true)
						if ($min > $this->FirstArr[$i]) $min = $this->FirstArr[$i];
					if (is_string($min) == true)
						if (strlen($min) > $this->FirstArr[$i]) $min = $this->FirstArr[$i];
				}
				if (is_string($this->FirstArr[$i]) == true) {
					if (is_int($min) == true)
						if ($min > strlen($this->FirstArr[$i])) $min = $this->FirstArr[$i];
					if (is_string($min) == true)
						if (strlen($min) > strlen($this->FirstArr[$i])) $min = $this->FirstArr[$i];
				}
			}
			return $min;
		}
		
		function Maxi() {
			$max = $this->max;
			for($i = 0; $i < count($this->FirstArr); $i++){
				if (is_int($this->FirstArr[$i]) == true) {
					if (is_int($max) == true)
						if ($max < $this->FirstArr[$i]) $max = $this->FirstArr[$i];
					if (is_string($max) == true)
						if (strlen($max) < $this->FirstArr[$i]) $max = $this->FirstArr[$i];
				}
				if (is_string($this->FirstArr[$i]) == true) {
					if (is_int($max) == true)
						if ($max < strlen($this->FirstArr[$i])) $max = $this->FirstArr[$i];
					if (is_string($max) == true)
						if (strlen($max) < strlen($this->FirstArr[$i])) $max = $this->FirstArr[$i];
				}
			}
			return $max;
		}
	}
//--------------------------------------------------------------------------------------------------------
	class SecondArr extends FirstArr {
	
		public $SecondArr = array( array(42, 69, 228), array(3, 7, 100), array(1, 2, 3), array(1, 2, 3), array(69, 69, 69), array(4, 2, 0),
			array(-10, 0, 10), array(10, 15, 20), array(20, 25, 30), array(77, 77, 77), array(420, 228, 69), );
		function SumArr() {
			$sum = $this->sum;
			foreach ($this->SecondArr as $unit) {
				if (is_array($unit) == true) {
					$val = new FirstArr();
					$val->FirstArr = $unit;
					$sum += $val->SumArr();
				}
				if (is_int($unit) == true)
					$sum += $unit;
				if (is_string($unit) == true) 
					$sum += strlen($unit);
			}
			return $sum;
		}
		
		function Mini() {
			$min = $this->min;
			foreach ($this->SecondArr as $unit) {
				
				if (is_array($unit) == true) {
					$val = new FirstArr();
					$val->FirstArr = $unit;
					$unit = $val->Mini();
					if (is_int($min) == true)
						if ($min > $unit) $min = $unit;
					if (is_string($min) == true)
						if (strlen($min) > $unit) $min = $unit;
				}
				if (is_int($unit) == true) {
					if (is_int($min) == true)
						if ($min > $unit) $min = $unit;
					if (is_string($min) == true)
						if (strlen($min) > $unit) $min = $unit;
				}
				if (is_string($unit) == true) {
					if (is_int($min) == true)
						if ($min > strlen($unit)) $min = $unit;
					if (is_string($min) == true)
						if (strlen($min) > strlen($unit)) $min = $unit;
				}
			}
			return $min;
		}

		
		function Maxi() {
			$max = $this->max;
			foreach ($this->SecondArr as $unit) {
				if (is_array($unit) == true) {
					$val = new FirstArr();
					$val->FirstArr = $unit;
					$unit = $val->Maxi();
					if (is_int($max) == true)
						if ($max < $unit) $max = $unit;
					if (is_string($max) == true)
						if (strlen($max) < $unit) $max = $unit;
				}
				if (is_int($unit) == true) {
					if (is_int($max) == true)
						if ($max < $unit) $max = $unit;
					if (is_string($max) == true)
						if (strlen($max) < $unit) $max = $unit;
				}
				if (is_string($unit) == true) {
					if (is_int($max) == true)
						if ($max < strlen($unit)) $max = $unit;
					if (is_string($max) == true)
						if (strlen($max) < strlen($unit)) $max = $unit;
				}
			}
			return $max;
		}	
		function SumMini() {
			$sum = $this->sum;
			$min = $this->min;
			foreach ($this->SecondArr as $unit) {
				if (is_array($unit) == true) {
					$val = new FirstArr();
					$val->FirstArr = $unit;
					$unit = $val->Mini();
					if ($min > $unit) {
						$min = $unit;
					}
					$sum += $min;
					$min = PHP_INT_MAX;
				}
			}
			return $sum;
		}
		
		function SumMaxi() {
			$sum = $this->sum;
			$max = $this->max;
			foreach ($this->SecondArr as $unit) {
				if (is_array($unit) == true) {
					$val = new FirstArr();
					$val->FirstArr = $unit;
					$unit = $val->Maxi();
					if ($max <= $unit) {
						$max = $unit;
					}
					$sum += $max;
					$max = -(PHP_INT_MAX);
				}
			}
			return $sum;
		}
	}
	
	$f = new FirstArr;
	echo "Одномерный массив: ";
	echo "</br>--Сумма элементов: " . $f->SumArr() . ";</br>--Минимальный элемент: ". $f->Mini() . ";</br>--Максимальный элемент: " . $f->Maxi() . ";</br>";
	$f = new SecondArr;
	echo "</br>Двумерный массив: ";
	echo "</br>--Сумма элементов: " . $f->SumArr() . ";</br>--Минимальный элемент: " . $f->Mini() . ";</br>--Максимальный элемент: " . $f->Maxi() . ";";
	echo "</br>--Сумма минимальных значений: " . $f->SumMini() . ";</br>--Сумма максимальных значений: " . $f->SumMaxi() . ";</br>";
?> 