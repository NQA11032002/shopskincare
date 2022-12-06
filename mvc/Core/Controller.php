<?php
    Class controller{
        function model($model)
        {
            require_once "./mvc/Models/".$model.".php";

            return new $model;
        }

        function modelAdmin($model)
        {
            require_once "./mvc/Models/Admin/".$model.".php";

            return new $model;
        }

        function view($view, $data=[])
        {
            require_once "./mvc/Views/User/layouts/".$view.".php";
        }

        function viewAdmin($view, $data = [])
        {
            require_once "./mvc/Views/Admin/layouts/".$view.".php";
        }
    }
?>