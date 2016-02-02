<?php

namespace App\Http\Requests;

class AclModuleRequest extends Request
{

    protected $fields = ['name', 'ident', 'desc', 'status'];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:2',
            'ident' => 'required|max:255|min:2',
            'desc' => 'max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '模块名不能为空!',
            'name.max' => '模块名最大长度为255个字符',
            'name.min' => '模块名最小长度为2个字符',
            'ident.required' => '模块表示不能为空',
            'ident.max' => '模块标识不正确',
            'ident.min' => '模块标识不正确',
        ];
    }

}
