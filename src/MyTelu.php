<?php

namespace Codernewbie04\MyTelu;

use Codernewbie04\MyTelu\Meta\Meta;
use Codernewbie04\MyTelu\Curl;

/**
 * MyTelu Class
 *
 * @author Akmal Muhamad Firdaus <coder.newbie04@gmail.com>
 * @package library
 * @license MIT
 */

class MyTelu 
{
    const GATEWAY_URL = 'https://gateway.telkomuniversity.ac.id';
    const MOBILE_URL = 'https://mobile.telkomuniversity.ac.id';

    /**
     * @var string
     */
    private $authToken;
    private $studentID;

    private $headers = [
        'OS' => 'android',
        'OS-Version' => '9.0',
        'user-agent' => "Dart/".Meta::APP_VERSION." (dart:io)"
    ];


    /**
     * MyTelu constructor.
     *
     * @param string $authToken
     */
    public function __construct($authToken = null, $studentID = false)
    {
        $this->authToken = $authToken;
        if($studentID)
            $this->studentID = $studentID;
    }

    public function login($username, $password){
        $ch = new Curl;
        $data = [
            'username' => $username,
            'password' => $password
        ];

        return $ch->post(self::GATEWAY_URL . '/issueauth/47063032650290922569498701572047147247431100468956', $data, $this->headers);
    }

    private function _authHeader($token = false) {
        $temp = ['Authorization'=> $this->authToken];
        if ($token) {
            $temp = ['Authorization'=> 'Bearer ' . $this->authToken];
        }

        return array_merge($temp, $this->headers);
    }

    public function profile($token = false)
    {
        $ch = new Curl;
        return $ch->get(self::GATEWAY_URL . '/issueprofile', null, $this->_authHeader($token));
    }

    public function schedule($STID = false){
        if($STID)
            $this->studentID = $STID;
        if($this->studentID == null)
            throw new \Codernewbie04\MyTelu\Exception\MyTeluException("Student ID is required");
        $ch = new Curl;
        $data = [
            'studentID' => $this->studentID
        ];
        return $ch->post(self::MOBILE_URL . '/students/jadwal', $data, $this->headers);
    }
    public function grades($STID = false, $periode = false, $semester = false, $subjectid = false)
    {
        if($STID)
            $this->studentID = $STID;
        if($this->studentID == null || $periode == false || $semester == false || $subjectid == false)
            throw new \Codernewbie04\MyTelu\Exception\MyTeluException("Data is required");
        $ch = new Curl;
        $data = [
            'nim' => $this->studentID,
            'periode' => $periode,
            'semester' => $semester,
            'subjectid' => $subjectid
        ];
        return $ch->get(self::MOBILE_URL . '/students/nilaimatkul', $data, $this->headers);
    }

    public function scanQR($STID = false, $qr = false)
    {
        if($STID)
            $this->studentID = $STID;
        if($this->studentID == null || $qr == false)
            throw new \Codernewbie04\MyTelu\Exception\MyTeluException("Student ID and QR Code is required");
        $ch = new Curl;
        $data = [
            'nim' => $this->studentID,
        ];
        return $ch->post(self::MOBILE_URL . '/qrcode/code/validate/'.$qr, $data, $this->headers);
    }
}