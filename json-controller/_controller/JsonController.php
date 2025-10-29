<?php

class JsonController extends KoncertoController
{
    /**
     * @internal {"route":{"name": "/"}}
     * @return KoncertoResponse
     */
    public function index()
    {
        return $this->json(array(
            'dateTime' => date('Y-m-d H:i:s')
        ));
    }
}
