<?php
namespace Codernewbie04\MyTelu\Response;

use Codernewbie04\MyTelu\Response\Model\ScheduleModel;

class ScheduleResponse
{
    private $status = false;
    private $msg;
    private $data;

    public function __construct($data)
    {
        if(isset($data->message)){
            $this->status = false;
            $this->msg = $data->message;
        } else {
            $this->status = true;
            foreach($data as $d){
                $this->data[] = new ScheduleModel($d);
            }
        }
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

    /**
     * get data value
     *
     * @return array
     */
    public function getData(){
        return $this->data;
    }
}
