<?php
namespace Codernewbie04\MyTelu;

class ParseResponse
{
    /**
     * store Class
     *
     * @var array
     */
    public $storeClass = [
        '/issueauth/47063032650290922569498701572047147247431100468956'   => 'Codernewbie04\MyTelu\Response\LoginResponse',
        '/issueprofile'                                                   => 'Codernewbie04\MyTelu\Response\LoginResponse',
        '/students/jadwal'                                                => 'Codernewbie04\MyTelu\Response\ScheduleResponse',
        '/students/nilaimatkul'                                           => 'Codernewbie04\MyTelu\Response\GradesResponse',
    ];

    private $response;

    /**
     * Parse response init
     *
     * @param mixed  $chResult
     * @param string $url
     */
    public function __construct($chResult, $url)
    {
        // dd($chResult, $url);
        $jsonDecodeResult = json_decode($chResult);
        //-- Check if response is error
        if (isset($jsonDecodeResult->code)) {
            throw new \Codernewbie04\MyTelu\Exception\MyTeluException($jsonDecodeResult->message . ' ' . $url);
        }
        $path = parse_url($url)['path'];

        $uriSegments = explode('/', $path);
        if($uriSegments >= 2 && $uriSegments[1] == 'qrcode' && $uriSegments[2] == 'code'){
            $this->response = new \Codernewbie04\MyTelu\Response\QRCodeResponse($jsonDecodeResult);
        } else {
            $this->response = new $this->storeClass[$path]($jsonDecodeResult);
        }        
    }

    /**
     * Get response following by class
     *
     * return any
     */
    public function getResponse()
    {
        return $this->response;
    }
}
