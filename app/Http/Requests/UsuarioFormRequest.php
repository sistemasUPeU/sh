<?php

namespace sisHospital\Http\Requests;

use sisHospital\Http\Requests\Request;

class UsuarioFormRequest extends Request
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
         
          'Apel_pater'=>'required|max:45',
          'Apel_mat'=>'required|max:45',
          'Nom_per'=>'required|max:45',
          'DNI'=>'required|max:11',
          'Fecha_nac'=>'required',
          'Sexo'=>'required',
          'Distrito_idDistrito'=>'required',
          'Direccion'=>'required',
          'Telefono'=>'required|max:11',
          
          'Nom_user'=>'required|max:45',
          'password'=>'required',          
          'Rol_idRol'=>'required',
         
        ];

    }
}
