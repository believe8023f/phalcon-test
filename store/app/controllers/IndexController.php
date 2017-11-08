<?php

class IndexController extends ControllerBase
{
    /**
     *
     * @Cache(key="my-key",lifetime=86400)
     */
    public function indexAction()
    {
        echo 222;
//        $example = new Example();
        exit;
    }

}

