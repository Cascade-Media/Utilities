<?php

namespace CascadeMedia\Utilities;

class ConvertDataType {
	public $typeConversion;

    /**
     * @method toEncodedArray
     * Used to convert and encode an array into a string format.
     */
    public function toEncodedArray(array $data){        
        return serialize($data);   
    }

    /**
     * @method toEncodedArray
     * Used to Decode an array.
     */
    public function toDecodedArray(string $data){
        return unserialize($data);
    }


    /**
     * @method objectToString
     */
    public function objectToString(object $data){
        $data = (string)$data;
        return $data;
    }

    /**
     * @method stringToObject
     */
    public function stringToObject(string $data){
        $data = (object)$data;
        return $data;
    }


}
