<?php
class Shares extends Controller {
    protected function Index()
    {
        $viewmodel= new ShareModel();
        $this->ReturnView($viewmodel->Index(),true);
    }

    protected function Add()
    {
        $viewmodel= new ShareModel();
        $this->ReturnView($viewmodel->Add(),true);
    }
}