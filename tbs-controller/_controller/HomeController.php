<?php

class HomeController extends KoncertoController
{
    /**
     * @internal {"route":{"name": "/"}}
     * @return KoncertoResponse
     */
    public function index()
    {
        return $this->render('_templates/home.tbs.html');
    }
}
