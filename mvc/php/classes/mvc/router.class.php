<?php
  namespace mvc;

  class Router {

    private $route;
    private $view;
    private $controller;
    private $model;

    public function __construct() {

      require_once(LOCAL_ROOT . "php/routes.php");
      if(isset($_GET["route"])) {
        $this->route = explode("/", $_GET["route"]);
      }
      $route = isset($routes[$this->getRoute()]) ? $this->getRoute() : DEFAULT_ROUTE;
      $model = isset($routes[$route]["model"]) ? "\\models\\". $routes[$route]["model"] : null;
      $controller = isset($routes[$route]["controller"]) ? "\\controllers\\". $routes[$route]["controller"] : null;
      $view = isset($routes[$route]["view"]) ? "\\views\\". $routes[$route]["view"] : null;

      if(!$model === null) {
        $this->model = new $model;
      }
      
      $this->controller = new $controller($this->model);
      $this->view = new $view($this->controller,$this->model);

    }

    private function getRoute() {
      return count($this->route) > 0 ? $this->route[0] : DEFAULT_ROUTE;
    }

    public function getView() {
      return $this->view;
    }

  }
 ?>
