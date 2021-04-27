<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class DosenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //public function authorize()
    //{
        //return false;
    //}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_dsn' => 'required',
            'jkl_dsn' => 'required',
            'tmpt_dsn' => 'required',
            'tgl_dsn' => 'required',
            'status_peg' => 'required',
            'id_jurusan' => 'required',
        ];
    }
}
