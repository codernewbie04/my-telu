<?php
namespace Codernewbie04\MyTelu\Response;

class ProfileResponse
{
    private $status = false;
    private $msg;
    private $numberid;
    private $fullname;
    private $studyprogramid;
    private $studyprogram;
    private $facultyid;
    private $faculty;
    private $schoolyear;
    private $photo;
    private $phone;
    private $emergencyphone;
    private $studentclass;
    private $lecturerguardian;
    private $address;
    private $zipcode;
    private $idcardnumber;
    private $user;
    private $email;


    public function __construct($data)
    {
        if(isset($data->status)){
            $this->status = false;
            $this->msg = $data->message; 
        } else {
            $this->status = true;
            foreach ($data as $key => $value) {
                $this->{$key} = $value;
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
     * get numberid value
     *
     * @return integer
     */
    public function getNumberid(){
        return $this->numberid;
    }

    /**
     * get fullname value
     *
     * @return string
     */
    public function getFullname(){
        return $this->fullname;
    }

    /**
     * get studyprogramid value
     *
     * @return integer
     */
    public function getStudyprogramid(){
        return $this->studyprogramid;
    }

    /**
     * get studyprogram value
     *
     * @return string
     */
    public function getStudyprogram(){
        return $this->studyprogram;
    }

    /**
     * get facultyid value
     *
     * @return integer
     */
    public function getFacultyid(){
        return $this->facultyid;
    }

    /**
     * get faculty value
     *
     * @return string
     */
    public function getFaculty(){
        return $this->faculty;
    }

    /**
     * get schoolyear value
     *
     * @return integer
     */
    public function getSchoolyear(){
        return $this->schoolyear;
    }

    /**
     * get photo value
     *
     * @return string
     */
    public function getPhoto(){
        return $this->photo;
    }

    /**
     * get phone value
     *
     * @return string
     */
    public function getPhone(){
        return $this->phone;
    }

    /**
     * get emergencyphone value
     *
     * @return string
     */
    public function getEmergencyphone(){
        return $this->emergencyphone;
    }

    /**
     * get studentclass value
     *
     * @return string
     */
    public function getStudentclass(){
        return $this->studentclass;
    }

    /**
     * get lecturerguardian value
     *
     * @return string
     */
    public function getLecturerguardian(){
        return $this->lecturerguardian;
    }

    /**
     * get address value
     *
     * @return string
     */
    public function getAddress(){
        return $this->address;
    }

    /**
     * get zipcode value
     *
     * @return string
     */
    public function getZipcode(){
        return $this->zipcode;
    }

    /**
     * get idcardnumber value
     *
     * @return string
     */
    public function getIdcardnumber(){
        return $this->idcardnumber;
    }

    /**
     * get user value
     *
     * @return string
     */
    public function getUser(){
        return $this->user;
    }

    /**
     * get email value
     *
     * @return string
     */
    public function getEmail(){
        return $this->email;
    }
}
