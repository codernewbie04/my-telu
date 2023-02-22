<?php

namespace Codernewbie04\MyTelu\Response;

class QRCodeResponse 
{
    private $success;
    private $message;

    public function __construct($data)
    {
        $this->success = $data->success == 'false' ? false : true;
        $this->message = $data->message;
    }

    /**
     * get success value
     *
     * @return boolean
     */
    public function getSuccess(){
        return $this->success;
    }

    /**
     * get message value
     *
     * @return string
     */
    public function getMessage(){
        return $this->message;
    }

}