<?php

/**
 * Ext_Validate_NoDbRecordExists
 * 
 * Проверка отсутствия записи в таблице
 * 
 * @author Александр Махомет aka San для http://zendframework.ru
 * 
 */
class Ext_Validate_NoDbRecordExists extends Zend_Validate_Abstract 
{

    /**
     * Метка ошибки
     * @var const 
     */    
    const RECORD_EXISTS = 'dbRecordExists';
    const QUANT_DISCREP = 'quantitativeDiscrepancy';
    
    /**
     * Текст ошибки
     * @var array 
     */
    protected $_messageTemplates = array(
        self::RECORD_EXISTS => 'Record with value %value% already exists in table',
        self::QUANT_DISCREP => 'Number of fields does not match number of input values'
    );

    /**
     * Имя таблица в которой будет происходить поиск записи
     * @var string
     */    
    protected $_table = null;

    /**
     * Имя поля по которому будет происходить поиск значения 
     * @var string
     */    
    protected $_field = null;

    /**
     * Имя поля по которому будет происходить поиск значения 
     * @var array
     */    
    protected $_fields = null;

    /**
     * Используемый адаптер базы данных
     *
     * @var unknown_type
     */    
    protected $_adapter = null;    
       
    /**
     * Конструктор
     * 
     * @param string $table Имя таблицы
     * @param string $field Имя поля или массив, где ключ и значение - имя поля
     * @param Zend_Db_Adapter_Abstract $adapter Адаптер базы данных
     */
    public function __construct($table, $field, Zend_Db_Adapter_Abstract $adapter = null)
    {
        $this->_table = $table;
        if(is_array($field)){
        	$this->_fields = $field;
        }
        else{
        	$this->_field = $field;
        }
        
        if ($adapter == null) {
        	// Если адаптер не задан, пробуем подключить адаптер заданный по умолчанию для Zend_Db_Table
        	$adapter = Zend_Db_Table::getDefaultAdapter();
        	
        	// Если адаптер по умолчанию не задан выбрасываем исключение
        	if ($adapter == null) {
        	   throw new Exception('No user and no default adapter was found');
        	}
        }
        
        $this->_adapter = $adapter;
    }
    
    /**
     * Проверка
     * 
     * @param string $value значение которое поддается валидации
     * @return bool true если запись не найдена, иначе false
     */
    public function isValid($value) 
    {
        $this->_setValue($value);
        
        $adapter = $this->_adapter;
        
        $select = $adapter->select()
            ->from($this->_table)
            ->where($adapter->quoteIdentifier($this->_field) . ' = ?', $value)
            ->limit(1)
            ;
        $stmt = $adapter->query($select);
        $result = $stmt->fetch(Zend_Db::FETCH_ASSOC);
        
        if ($result !== false) {
            $this->_error(self::RECORD_EXISTS);
            return false;
        }
        
        return true;

    }
    
    /**
     * Проверка
     * 
     * @param array $value значения которые поддаются валидации. Обязательно: ключи массива - поля указаные в конструкторе.
     * @return bool true если комбинация значений не найдена в записях, иначе false
     */
    public function isMultipleFieldValid($values) 
    {
    	if(is_array($values) && count($values) == count($this->_fields)){
	    	$i = 0;
	    	$vals = '';
	    	foreach($values as $key => $value){
		        $this->_setValue($value);
	        	$vals .= $value.' ';
	        	
	    	    $adapter = $this->_adapter;
	        
		        $select = $adapter->select()
		            ->from($this->_table)
		            ->where($adapter->quoteIdentifier($this->_fields[$key]) . ' = ?', $value)
		            ->limit(1);
		        $stmt = $adapter->query($select);
		        $result = $stmt->fetch(Zend_Db::FETCH_ASSOC);
		        if($result !== false){
		        	$res = false;
		        }
		        else{
		        	$res = true;
		        }
		        if($i == 0){
		        	$out = $res;
		        }
		        else{
		        	$out = $res || $out;
		        }
		        $i++;
	    	}
	
		    if (!$out) {
		    	$this->_setValue($vals);
	            $this->_error(self::RECORD_EXISTS);
	            return false;
	        }
	        else{
		        return true;
	        }
    	}
    	else{
    		$this->_error(self::QUANT_DISCREP);
    		return false;
    	}

    }    

}

