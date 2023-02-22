<?php 
namespace Codernewbie04\MyTelu\Response\Model;

class GradesModel
{
    private $COMPONENTNAME;
    private $SCORE;
    private $PERCENTAGE;

    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * get componentname value
     *
     * @return string
     */
    public function getComponentname(){
        return $this->COMPONENTNAME;
    }

    /**
     * get score value
     *
     * @return string
     */
    public function getScore(){
        return $this->SCORE;
    }

    /**
     * get percentage value
     *
     * @return string
     */
    public function getPercentage(){
        return $this->PERCENTAGE;
    }
}