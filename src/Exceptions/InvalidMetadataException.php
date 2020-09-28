<?php


namespace EasyView\EasyView\Exceptions;



use Throwable;

class InvalidMetadataException extends \Exception
{

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }


}
