<?php
/**
 * class for extend some functions
 * @author Kage^no^Neko
 */

class Ext_Unificated
{
	/**
	 * function extended standart var_dump function
	 * @param mixed $expression [, mixed $... ] - variables you want to dump
	 * @return void
	 */
	static function ext_var_dump(){
		$r = 0;
		$g = 0;
		$b = 0;
		$args = func_get_args();
		echo '<pre>';
		foreach ($args as $key => $arg){
			echo '<font style="color: rgb('.$r.','.$g.','.$b.');">';
			var_dump($arg);
			echo '</font>';
			do{
				$r = rand(0, 255);
				$g = rand(0, 255);
				$b = rand(0, 255);
			}
			while(($r >= 255) || ($g >= 255) || ($b >= 255));
		}
		echo '</pre>';
		die;
	}
}