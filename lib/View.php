<?php

class View {

    function __construct() {
        
    }

    public function render($name,$noInclude=FALSE) {

        if(isset($noInclude) && $noInclude == TRUE){
            require 'view/' . $name . '.php';
        }else{
            require 'view/header.php';
            require 'view/' . $name . '.php';
            require 'view/footer.php';
        }
    }

}
