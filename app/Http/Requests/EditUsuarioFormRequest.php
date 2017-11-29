<?php

namespace sisHospital\Http\Requests;

use sisHospital\Http\Requests\Request;

class EditUsuarioFormRequest extends Request
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
        
          'Nom_user'=>'required|max:45',
          'Estado_user' =>'required',         
          'Rol_idRol'=>'required',
            
        ];
    }
}
