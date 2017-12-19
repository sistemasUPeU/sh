<?php

namespace sisHospital\Http\Requests;

use sisHospital\Http\Requests\Request;

class FechaSesionesFormRequest extends Request
{
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
          'Fecha'=>'required',
        ];
    }
}
