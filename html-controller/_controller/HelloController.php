<?php

class HelloController extends KoncertoController
{
    /**
     * @internal {"route":{"name": "/"}}
     * @return KoncertoResponse
     */
    public function index()
    {
        return (new KoncertoResponse())->setContent('<html><body>Hello 👋</body></html>');
    }
}
