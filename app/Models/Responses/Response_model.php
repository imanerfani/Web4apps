<?php


namespace App\Models\Responses;


class Response_model
{
    public $Success;
    public $Message;
    public $AlertType;
    public $FormType;
    public $Url;
    public $Id;
    public $Data;


    public function __construct($success = null, $message = null, $alert_type = null,$formType = null, $url = null, $id = null, $data = null)
    {
        $this->Success = $success;
        $this->Message = $message;
        $this->AlertType = $alert_type;
        $this->FormType =$formType;
        $this->Url = $url;
        $this->Id = $id;
        $this->Data =$data;
    }
//    function set_success($n)
//    {
//        $this->Success = $n;
//    }
//
//    function set_Message($n)
//    {
//        $this->Message = $n;
//    }

}

//class UploadResponse
//{
//    public $Success;
//
//    public $Message;
//    public $Files;
//}
//
//class OperationResponse
//{
//    public $Success;
//    public $Message;
//    public $Data;
//    public $Exception;
//}
