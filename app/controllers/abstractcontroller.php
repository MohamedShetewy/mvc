<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\FrontController;

class AbstractController{



    protected $_controller ;
    protected $_action  ;
    protected $_params ;
    protected $_template;
    protected $_language;

    protected $_data = [];

	public function notFoundAction(){
		$this->_view();
		
	}

	public function setController($controllerName){
		$this->_controller = $controllerName;

	}

	public function setAction($actionName){
		$this->_action = $actionName;

	}

	public function setParams($params){
		$this->_params = $params;

	}
	public function setTemplate($template){
		$this->_template = $template;


	}
    public function setLanguage($language){
        $this->_language = $language;


    }



	protected function _view(){


		if ($this->_action == FrontController::NOT_FOUND_ACTION) {
			require_once VIEW_PATH . 'notfound\notfound.view.php';
		}else{

			$view = VIEW_PATH . $this->_controller . '\\' . $this->_action . '.view.php';
			if (file_exists($view)) {


                $this->_data = array_merge($this->_data,$this->_language->getDictionary());

			    $this->_template->setActionViewFile($view);

			    $this->_template->setAppData($this->_data);
			    $this->_template->renderApp();

			}else{
				require_once VIEW_PATH . 'notfound\noview.view.php';
			}
		}
		
	}
}