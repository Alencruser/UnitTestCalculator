<?php 

 Class Calculator
 {
 	public function calculate($i="0")
 	{
 		if(!$i){
 			return "0";
 		}
 		return strlen($i)>1?$i[0]+$i[2]:$i;
 	}
 }