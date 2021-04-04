<?php 
	class First {
		public $First = array(1, 4, 8, 10, 13, 15, 16, 61, 62, 70, 100);
		public $min = PHP_INT_MAX;
		public $max = -(PHP_INT_MAX);
		function SumArr() {
			$sum = $this->sum;
			for($i = 0; $i < count($this->First); $i++){
				if (is_int($this->First[$i]) == true) {
					$sum += $this->First[$i];
				}
				elseif (is_string($this->First[$i]) == true) {
					$sum += strlen($this->First[$i]);
				}
			}
			return $sum;
		}
		
		function Miny() {
			$min = $this->min;
			for($i = 0; $i < count($this->First); $i++){
				if (is_int($this->First[$i]) == true) {
					if (is_int($min) == true)
						if ($min > $this->First[$i]) $min = $this->First[$i];
					if (is_string($min) == true)
						if (strlen($min) > $this->First[$i]) $min = $this->First[$i];
				}
				if (is_string($this->First[$i]) == true) {
					if (is_int($min) == true)
						if ($min > strlen($this->First[$i])) $min = $this->First[$i];
					if (is_string($min) == true)
						if (strlen($min) > strlen($this->First[$i])) $min = $this->First[$i];
				}
			}
			return $min;
		}
		
		function Maxy() {
			$max = $this->max;
			for($i = 0; $i < count($this->First); $i++){
				if (is_int($this->First[$i]) == true) {
					if (is_int($max) == true)
						if ($max < $this->First[$i]) $max = $this->First[$i];
					if (is_string($max) == true)
						if (strlen($max) < $this->First[$i]) $max = $this->First[$i];
				}
				if (is_string($this->First[$i]) == true) {
					if (is_int($max) == true)
						if ($max < strlen($this->First[$i])) $max = $this->First[$i];
					if (is_string($max) == true)
						if (strlen($max) < strlen($this->First[$i])) $max = $this->First[$i];
				}
			}
			return $max;
		}
	}
	
	class Second extends First {
	
		public $Second = array( array(22, 81, 124), array(6, 12, 500), array(3, 4, 12), array(2, 6, 8), array(30, 32, 110), array(6, 1, 8),
			array(32, -7, 12), array(19, 25, 10), array(15, 17, 11), array(44, 22, 44), array(12, 82, 55) );
		function SumArr() {
			$sum = $this->sum;
			foreach ($this->Second as $unit) {
				if (is_array($unit) == true) {
					$val = new First();
					$val->First = $unit;
					$sum += $val->SumArr();
				}
				if (is_int($unit) == true)
					$sum += $unit;
				if (is_string($unit) == true) 
					$sum += strlen($unit);
			}
			return $sum;
		}
		
		function Miny() {
			$min = $this->min;
			foreach ($this->Second as $unit) {
				
				if (is_array($unit) == true) {
					$val = new First();
					$val->First = $unit;
					$unit = $val->Miny();
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

		
		function Maxy() {
			$max = $this->max;
			foreach ($this->Second as $unit) {
				if (is_array($unit) == true) {
					$val = new First();
					$val->First = $unit;
					$unit = $val->Maxy();
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
		function SumMiny() {
			$sum = $this->sum;
			$min = $this->min;
			foreach ($this->Second as $unit) {
				if (is_array($unit) == true) {
					$val = new First();
					$val->First = $unit;
					$unit = $val->Miny();
					if ($min > $unit) {
						$min = $unit;
					}
					$sum += $min;
					$min = PHP_INT_MAX;
				}
			}
			return $sum;
		}
		
		function SumMaxy() {
			$sum = $this->sum;
			$max = $this->max;
			foreach ($this->Second as $unit) {
				if (is_array($unit) == true) {
					$val = new First();
					$val->First = $unit;
					$unit = $val->Maxy();
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
	
	$f = new First;
	echo "Одномерный массив: ";
	echo "</br>--Сумма элементов: " . $f->SumArr() . ";</br>--Минимальный элемент: ". $f->Miny() . ";</br>--Максимальный элемент: " . $f->Maxy() . ";</br>";
	$f = new Second;
	echo "</br>Двумерный массив: ";
	echo "</br>--Сумма элементов: " . $f->SumArr() . ";</br>--Минимальный элемент: " . $f->Miny() . ";</br>--Максимальный элемент: " . $f->Maxy() . ";";
	echo "</br>--Сумма минимальных значений: " . $f->SumMiny() . ";</br>--Сумма максимальных значений: " . $f->SumMaxy() . ";</br>";
?> 