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

    public function createController(){
        //check Class
        if(class_exists($this->controller)){
            $parents = class_parents($this->controller);
            //check extend
            if(in_array("Controller",$parents)){
                if(method_exists($this->controller,$this->action)){
                    return new $this->controller($this->action, $this->request);
                } else{
                    //method does not exists
                    echo '<h1>Method does not exists</h1>';
                    return;
                }
            } else{
                //base controller does not exists
                echo '<h1>Base Controller not found</h1>';
                return;
            }
        }else{
            //controller class does not exists
            echo '<h1>Controller class does not exists</h1>';
            return;
        }
    }
}