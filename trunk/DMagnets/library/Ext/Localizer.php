<?php
/**
 * class for localization and translation content
 * work only with *csv
 * 
 * @author Kage^no^Neko
 */

class Ext_Localizer
{
	 /**
     * Marks of error
     * @var const 
     */
    const WRONG_PARAM_TYPE			= 'paramTypeWrong';
    const UNKNOWN_LOCALE_NAME		= 'localeNameUnknown';
    const UNKNOWN_LOCALE_PATH		= 'localePathUnknown';
    const DICTIONARY_READ_UNABLE	= 'unableDictionaryReading';
    const DICTIONARY_NOT_SET		= 'dictionaryNotSet';
    const UNKNOWN_DICTIONARY_TYPE	= 'dictionaryTypeUnknown';
    
    /**
     * error messages
     * @var array 
     */
    protected $_messageTemplates = array(
        self::WRONG_PARAM_TYPE			=> 'Type of passed parameter is wrong',
        self::UNKNOWN_LOCALE_NAME		=> 'Unknown (default)locale name',
        self::UNKNOWN_LOCALE_PATH		=> 'Unknown path to locale dictionaries',
        self::DICTIONARY_READ_UNABLE	=> 'Unable to read the dictionary',
        self::DICTIONARY_NOT_SET		=> 'Dictionary wasn\`t set',
        self::UNKNOWN_DICTIONARY_TYPE	=> 'Unknown dictionary type detected'
    );
	
	/**
	 * path to dictionaries
	 */
	private $_locale_path = null;
	
	/**
	 * type of dictionary, may by only:
	 * 		*.csv file, - 
	 * 		php array   - where array - $dictionary, key - native string and value - it translate
	 */
	private $_dictionary_type = 'csv';
	
	/**
	 * 
	 */
	private $_types_array = array(
								'csv'	=> '.csv',
								'php'	=> '.php'
							);
							
	/**
	 * name of default locale
	 */
	private $_default_locale_name = null;
	
	/**
	 * name of using locale
	 */
	private $_locale_name	= null;
	
	/**
	 * dictionary source of set locale
	 */
	private $_dictionary_source = null;
	
	/**
	 * dictionary of set locale
	 */
	private $_dictionary = null;
	
	/**
	 * @param array $options - array of options, list of pisible options:
	 * 			'default_locale_name'	- name, take if locale name not set;
	 *  		'locale_name'			- name of locale;
	 * 			'locale_path'			- path to dictionaries;
	 * 			'dictionary_type'		- type of dictionaries(csv(by default),php);
	 * 		
	 */
	public function __construct(array $options)
	{
		if(is_array($options)){
			if(isset($options['locale_path'])){
				$this->_locale_path = $options['locale_path'];
			}
			if(isset($options['default_locale_name'])){
				$this->_default_locale_name = $options['default_locale_name'];
			}
			if(isset($options['locale_name'])){
				$this->_locale_name = $options['locale_name'];
			}
			if(isset($options['dictionary_type'])){
				$this->_dictionary_type = $options['dictionary_type'];
			}
		}
	}

	/**
	 * @param mark of error
	 * @return message of error
	 */
	private function returnError($errorMark){
		return $this->_messageTemplates[$errorMark];
	}
	
	/**
	 * set path to locales dictionaries
	 * 
	 * @param string $path_to_locales
	 * @return only error message if error exist
	 */
	public function setLocalePath($path_to_locales)
	{
		if(is_string($path_to_locales)){
			$this->_locale_path = $path_to_locales;
		}
		else{
			return $this->returnError(self::WRONG_PARAM_TYPE);
		}
	}
	
	/**
	 * set locale name
	 * 
	 * @param string $locale_name
	 * @return only error message if error exist
	 */
	public function setLocaleName($locale_name)
	{
		if(is_string($locale_name)){
			$this->_locale_name = $locale_name;
		}
		else{
			return $this->returnError(self::WRONG_PARAM_TYPE);
		}
	}
	
	/**
	 * set default locale name
	 * 
	 * @param string $locale_name
	 * @return only error message if error exist
	 */
	public function setDefaultLocaleName($locale_name)
	{
		if(is_string($locale_name)){
			$this->_default_locale_name = $locale_name;
		}
		else{
			return $this->returnError(self::WRONG_PARAM_TYPE);
		}
	}
	
	/**
	 * read dictionary source
	 * 
	 * @param string $locale_name
	 */
	private function readDictionary($locale_name)
	{
		$error = null;
		$source = $this->_locale_path.
				  DIRECTORY_SEPARATOR.
				  $locale_name.
				  DIRECTORY_SEPARATOR.
				  $locale_name.
				  $this->_types_array[$this->_dictionary_type];
				  
		switch($this->_dictionary_type){
			case 'csv':
				$this->_dictionary_source = file($source);
				if($this->_dictionary_source != false){
					foreach ($this->_dictionary_source as $key => $value){
						$this->_dictionary_source[$key] = str_getcsv($value,';','"','\\');
						$this->_dictionary[$this->_dictionary_source[$key][0]] = $this->_dictionary_source[$key][$key][1];
					}
				}
				else{
					$error = $this->returnError(self::DICTIONARY_READ_UNABLE);
				}
				break;
			case 'php':
				require_once $source;
				if(isset($dictionary)){
					$this->_dictionary = $dictionary;
				}
				else{
					$error = $this->returnError(self::DICTIONARY_READ_UNABLE);
				}
				break;
			default:
				$error = $this->returnError(self::UNKNOWN_DICTIONARY_TYPE);
				break;
		}
		return $error;
	}
	/**
	 * try to create dictionary
	 * 
	 * @return error message if error exist or null
	 */
	public function setDictionary()
	{
		$error = null;
		if($this->_locale_path != null){
			if($this->_locale_name != null){
					$error = $this->readDictionary($this->_locale_name);
			}
			else{
				if($this->_default_locale_name != null){
					$error = $this->readDictionary($this->_default_locale_name);
				}
				else{
					$error = $this->returnError(self::UNKNOWN_LOCALE_NAME);
				}
			}
		}
		else{
			$error = $this->returnError(self::UNKNOWN_LOCALE_PATH);
		}
		return $error;
	}
	
	/**
	 * get locale path
	 * 
	 * @return path to locales dictionaries or NULL if not set
	 */
	public function getLocalePath()
	{
		return $this->_locale_path;
	}
	
	/**
	 * get locale name
	 * 
	 * @return name of set locale or NULL if not set
	 */
	public function getLocaleName()
	{
		return $this->_locale_name;
	}
	
	/**
	 * get name of default locale
	 * 
	 * @return name of default locale or NULL if not set
	 */
	public function getDefaultLocaleName()
	{
		return $this->_default_locale_name;
	}
	
	/**
	 * get locale dictionary
	 * 
	 * @return array - dictionary of locale or NULL if not set
	 */
	public function getDictionary()
	{
		return $this->_dictionary;
	}
	
	/**
	 * translate srting using locale dictionary
	 * 
	 * @param string $string - string to translate
	 * @return string - translate of passed string if it exist in dictionary,
	 * 		   string - passed string if it not exist in dictionary,
	 * 		   string - error message if error exist
	 */
	public function translate($param)
	{
		if($this->_dictionary != null){
			if(is_string($string)){
				if(array_key_exists($string,$this->_dictionary)){
					$string = $this->_dictionary[$string];
				}
				return $string;
			}
			else{
				return $this->returnError(self::WRONG_PARAM_TYPE);
			}
		}
		else{
			return $this->returnError(self::DICTIONARY_NOT_SET);
		}
	}
}