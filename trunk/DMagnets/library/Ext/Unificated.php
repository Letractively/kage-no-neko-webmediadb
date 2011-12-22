<?php
/**
 * class for extend some functions
 * @author Kage^no^Neko
 */

class Ext_Unificated
{
	/**
	 * function extended standart var_dump function
	 * @param mixed $expression [, mixed $... ] - list of variables you want to dump
	 * @return void
	 */
	static function ext_var_dump(){
		$args = func_get_args();
		echo '<pre>';
		foreach ($args as $key => $arg){
			echo '<p style="color: red;">-------- '.$key.'</p>';
			var_dump($arg);
		}
		echo '</pre>';
		die;
	}
}