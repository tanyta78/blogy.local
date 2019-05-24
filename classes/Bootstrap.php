<?php
class Bootstrap{
    // blogy.local/user/register - user-controller register -action
    private $controller;
    private $action;
    private $request;

    public function __construct($request){
        $this->request = $request;
        //handle controller
        if($this->request['controller'] == ""){
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }

        //handle action
        if($this->request['action'] == ""){
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }
    }
}