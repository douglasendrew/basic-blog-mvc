<?php

    namespace Core;

    class ConfigController
    {

        private string $url;
        private array $urlConjunto;
        private string $urlController;
        private string $urlMetodo;

        public function __construct()
        {
            if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT)))
            {
                $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
                $this->urlConjunto = explode("/", $this->url);

                if((isset($this->urlConjunto[0])) AND (isset($this->urlConjunto[1])))
                {
                    $this->urlController = $this->urlConjunto[0];
                    $this->urlMetodo = $this->urlConjunto[1];

                }else{
                    $this->urlController = "erro";
                    $this->urlMetodo = "index";
                }
            }else{
                $this->urlController = "home";
                $this->urlMetodo = "index";
            }

            // echo "Controller: {$this->urlController} - Metodo: {$this->urlMetodo}";
        }

        public function carregar()
        {
            $urlController = ucwords($this->urlController);
            $classe = "\\App\\Controllers\\". $urlController;
            $classeCarregar = new $classe;
            $classeCarregar->index();
        }

    }

?>