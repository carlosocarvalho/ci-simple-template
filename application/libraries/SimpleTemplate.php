<?php 



class SimpleTemplate{
	
	
	private $views = array();
	
	private $CI = null;
	
	protected $data = array();
	function __construct(){
	    $this->CI = get_instance();	
	}
	
	
	function add($view, $data = array()){
		  
		  if( ! is_array($view))
		  {  
	             $view = array($view); 
		  }
		  foreach($view as $v){
				 $this->views[] = $v;
		 }
	}
	function make($view = '', $data = array(), $return){
		  $this->add($view);
		  return $this->parseViews();
		 
	}
	
	protected function parseViews(){
		
		
	}
		
}


