<?php
/**
 * class for extend some functions
 * @author Kage^no^Neko
 */

class Ext_Unificated
{
	/**
	 * function extended standart var_dump function
	 * @param array $expression_array - simple or assoc array with mixed variables you want to dump
	 * @return void
	 */
	static function ext_var_dump(array $expression_array){
		echo '<pre>';
		echo var_dump($expression_array);
		echo '</pre>';
		die;
	}
}