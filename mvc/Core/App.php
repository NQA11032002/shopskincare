<?php
    class App
    {
        protected $controller = "TrangChu";
        protected $action = "show";
        protected $para = [];

        function __construct()
        {
            $arr = $this->urlProcess();

            if($arr[0] == 'Admin' || $arr[0] == 'admin')
            {
                $checkUrl = implode('/',$arr);
                $arrCheckUrl = explode("/",$checkUrl);
                
                $checkUrl = $arrCheckUrl[0]. "/". $arrCheckUrl[1];

                //xu ly controller
                if(file_exists("./mvc/controllers/".$checkUrl.".php"))
                {
                    $this->controller = $arr[1];

                    unset($arr[1]);
                }
                require_once "./mvc/controllers/".$checkUrl.".php";
                $this->controller = new $this->controller;

                //xu ly action
                if(isset($arr[2]))
                {
                    $this->action = $arr[2];

                    unset($arr[2]);
                }

                //xu ly para
                $this->para = $arr?array_values($arr):[];
                call_user_func_array([$this->controller,$this->action],$this->para);
            }
            else
            {
                //xu ly controller
                if(file_exists("./mvc/controllers/".$arr[0].".php"))
                {
                    $this->controller = $arr[0];

                    unset($arr[0]);
                }
                require_once "./mvc/controllers/".$this->controller.".php";
                $this->controller = new $this->controller;

                //xu ly action
                if(isset($arr[1]))
                {
                    $this->action = $arr[1];

                    unset($arr[1]);
                }

                //xu ly para
                $this->para = $arr?array_values($arr):[];
                call_user_func_array([$this->controller,$this->action],$this->para);
            }
        }

        function urlProcess()
        {
            if($_GET["url"])
            {
                $temp = filter_var(trim($_GET["url"],"/"));
                $result = explode("/",$temp);

                return $result;
            }
        }
    }
?>