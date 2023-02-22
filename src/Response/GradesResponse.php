<?php

namespace Codernewbie04\MyTelu\Response;

use Codernewbie04\MyTelu\Response\Model\GradesModel;

class GradesResponse
{
    private $COMPONENT;
    private $AVG;
    public function __construct($data)
    {
        $this->AVG = $data->AVG;
        foreach($data->COMPONENT as $comp){
            $this->COMPONENT[] = new GradesModel($comp);
        }
    }

    /**
     * get component value
     *
     * @return array
     */
    public function getComponent(){
        return $this->COMPONENT;
    }

    /**
     * get avg value
     *
     * @return string
     */
    public function getAvg(){
        return $this->AVG;
    }
}