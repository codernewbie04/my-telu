<?php
namespace Codernewbie04\MyTelu\Response\Model;

class ScheduleModel
{
    private $DAY;
    private $COURSEID;
    private $SUBJECT;
    private $LECTURERCODE;
    private $CLASS;
    private $ROOMNAME;
    private $STARTHOUR;
    private $ENDHOUR;
    private $SCHEDULESTATUS;
    private $RNUM;
    private $TOTALROWS;




    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * get day value
     *
     * @return string
     */
    public function getDay(){
        return $this->DAY;
    }

    /**
     * get courseid value
     *
     * @return string
     */
    public function getCourseid(){
        return $this->COURSEID;
    }

    /**
     * get subject value
     *
     * @return string
     */
    public function getSubject(){
        return $this->SUBJECT;
    }

    /**
     * get lecturercode value
     *
     * @return string
     */
    public function getLecturercode(){
        return $this->LECTURERCODE;
    }

    /**
     * get class value
     *
     * @return string
     */
    public function getClass(){
        return $this->CLASS;
    }

    /**
     * get roomname value
     *
     * @return string
     */
    public function getRoomname(){
        return $this->ROOMNAME;
    }
    
    /**
     * get starthour value
     *
     * @return string
     */
    public function getStarthour(){
        return $this->STARTHOUR;
    }

    /**
     * get endhour value
     *
     * @return string
     */
    public function getEndhour(){
        return $this->ENDHOUR;
    }

    /**
     * get schedulestatus value
     *
     * @return string
     */
    public function getSchedulestatus(){
        return $this->SCHEDULESTATUS;
    }

    /**
     * get rnum value
     *
     * @return string
     */
    public function getRnum(){
        return $this->RNUM;
    }

    /**
     * get totalrows value
     *
     * @return string
     */
    public function getTotalrows(){
        return $this->TOTALROWS;
    }

}
