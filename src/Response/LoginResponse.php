<?php
namespace Codernewbie04\MyTelu\Response;

class LoginResponse
{
    private $token;
    private $status = false;
    private $msg;
    private $expired;

    public function __construct($data)
    {
        if(isset($data->status)){
            $this->status = false;
            $this->msg = $data->message;
        } else {
            $this->status = true;
            $this->token = $data->token;
            $this->expired = $data->expired;
        }
    }

    /**
     * get token value
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * get expired value
     * satuan waktu dalam MS
     * @return string
     * 
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * get status value
     *
     * @return boolean
     */
    public function getStatus(){
        return $this->status;
    }

    /**
     * get msg value
     *
     * @return string
     */
    public function getMsg(){
        return $this->msg;
    }

}
