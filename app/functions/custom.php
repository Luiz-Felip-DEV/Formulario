<?php 

    function dd($dump){
        print_r($dump);
        die();
    }

    function request(){

        $request = $_SERVER['REQUEST_METHOD'];

        if ($request == 'POST'){
            return $_POST;
        }

        return $_GET;
    }

    function redirect($target){
        return header("location:/?page={$target}");
    }

    function redirectHome(){
        return header("location:/");
    }

?>