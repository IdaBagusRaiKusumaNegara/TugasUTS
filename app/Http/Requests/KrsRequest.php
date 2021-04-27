<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KrsRequest extends FormRequest
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
            'mata_kuliah' => 'required',
            'sks' => 'required',
            'id_prodi' => 'required',
            'smtr' => 'required',
            'id_dosen' => 'required',
        ];
    }
}
