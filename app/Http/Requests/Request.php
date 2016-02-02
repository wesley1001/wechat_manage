<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    protected $fields = [];

//    public function all()
//    {
//        $data = parent::all();
//        empty($this->fields) && $this->fields = array_keys($data);
//        $result = [];
//        foreach ($data as $key => $value) {
//            in_array($key, $this->fields) && $result[$key] = $value;
//        }
//        return $result;
//    }

}
