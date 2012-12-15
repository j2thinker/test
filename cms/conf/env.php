<?php
/**
 * Environment class settings 
 * 
 * @author zaifeng
 */
class Env {
	
	const DEVELOPMENT	= 10 ;
	const SIMULATION	= 20 ;
	const PRODUCTION	= 30 ;
	
	private $mode ;
	private $config ;
	
	/**
	 * Constructor of EnvironMent configure
	 * 
	 * @param int $mode
	 */
	public function __construct($mode = ''){
		if(isset($mode)){
			$this->setMode($mode) ;
		}
		$this->setConfig() ;
	}
	
	/**
	 * Config setter
	 */
	public function setConfig(){
		
	}
	
	/**
	 * Config getter
	 */
	public function getConfig(){
		$current_conf = array () ;
		$basic = $this->baseConf() ;
		
		switch ($this->mode) {
			case self::DEVELOPMENT:
				$devconf = $this->developConf() ;
				break;
			case self::SIMULATION :
				$simconf = $this->simulateConf() ;
				break ;
			case self::PRODUCTION :
				$prodconf= $this->productConf() ;
				break ;
			default:
				;
			break;
		}
		return $current_conf ;
	}
	
	/**
	 * Mode setter
	 * @param int $mode
	 */
	public function setMode($mode){
		$this->mode = $mode ;
	}
	
	/**
	 * Mode getter
	 * 
	 * @desc decide which configure array to be use
	 */
	public function getMode(){
		return $this->mode ;
	}
	//================Below is the private functions =================
	
	private function baseConf(){
		
	}
	
	private function developConf(){
		
	}
	
	private function simulateConf(){
		
	}
	
	private function productConf(){
		
	}
}