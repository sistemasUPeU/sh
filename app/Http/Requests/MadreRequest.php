<?php

namespace sisHospital\Http\Requests;

use sisHospital\Http\Requests\Request;

class MadreRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return boolx
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
           'Fecha_CPN'=>'required',
           'Responsable_CPN'=>'required',
         
            //
        ];
    }
}
