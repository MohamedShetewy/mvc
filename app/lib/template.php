<?php
namespace PHPMVC\LIB;

class Template
{
	private $_templateParts;
	private $_action_view;
	private $_data;

	public function __construct(array $parts)
	{
		$this->_templateParts = $parts;

	}

	public function setActionViewFile($actionVeiwPath){
		$this->_action_view = $actionVeiwPath;

	}

	public function setAppData($data){
		$this->_data = $data;
	}

	private function renderTemplateHeaderStart(){
        extract($this->_data );
	    require_once TEMPLATE_PATH . 'templateheaderstart.php';	
	}

	private function renderTemplateHeaderEnd(){
	    require_once TEMPLATE_PATH . 'templateheaderend.php';	
	}

	private function renderTemplateFooter(){
	    require_once TEMPLATE_PATH . 'templatefooter.php';	
	}

	private function renderTemplateBlocks(){
		if (!array_key_exists('template', $this->_templateParts)) {
			
			trigger_error('sorry you have to define the template blocks',E_USER_WARNING);
		}else{
                extract($this->_data );
				$parts = $this->_templateParts['template'];
				if (!empty($parts)) {


					foreach ($parts as $partkey => $file){

						if ($partkey === ':view') {
							require_once $this->_action_view;
						}else{
							require_once $file;
						}

					} 	
				
			    }
			
		    }
	    
	}


	private function renderHeaderResources(){

		$output ='';

		if (!array_key_exists('header_resources', $this->_templateParts)) {
			
			trigger_error('sorry you have to define the headerresources ',E_USER_WARNING);
		}else{
				$resources = $this->_templateParts['header_resources'];

				//Generate CSS links

				$css = $resources['css'];
				if (!empty($css)) {
					foreach ($css as $csskey => $path){

						$output .='<link type = "text/css" rel="stylesheet" href="' . $path . '"/>';

					} 	
				
			    }


			
		   }


		 echo $output;
	    
	}
	private function renderFooterResources(){

		$output ='';
		
		if (!array_key_exists('footer_resources', $this->_templateParts)) {
			
			trigger_error('sorry you have to define the headerresources ',E_USER_WARNING);
		}else{
				$resources = $this->_templateParts['footer_resources'];
				
				
				if (!empty($resources)) {
					foreach ($resources as $resourceskey => $path){

						$output .='<script src="' . $path . '"></script>';

					} 	
				
			    }


			
		   }


		 echo $output;
	    
	}


	public function renderApp(){


		$this->renderTemplateHeaderStart();
		$this->renderHeaderResources();
		$this->renderTemplateHeaderEnd();
		$this->renderTemplateBlocks();
		$this->renderFooterResources();
		$this->renderTemplateFooter();

			    
			    
	}
}