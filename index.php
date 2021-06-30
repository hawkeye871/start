<?php
	

		class Person{
			private $x;
			private $y;

			function __construct($x=0,$y=0){
				$this->x=$x;
				$this->y=$y;
			}
			function __toString (){
				return "({$this->x}, {$this->y})";
			}
		}

		$p1 = new Person(1,2);

		echo "{$p1}";


	


	   ?>

	   