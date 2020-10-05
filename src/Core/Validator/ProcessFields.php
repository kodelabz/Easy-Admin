<?php
namespace EasyView\EasyView\Core\Validator;


class ProcessFields
{

    public static function transform(array $data){
        $transformedData = [];
        foreach ($data as $k=>$v){
            if ($k == "password" ){
                $data[$k] = bcrypt($data[$k]);
            }
            $transformedData[$k] = $data[$k];
        }
        return $transformedData;
    }


}
