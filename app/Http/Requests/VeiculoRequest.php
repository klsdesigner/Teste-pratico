<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoRequest extends FormRequest
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
            'placa'         => 'required|min:7|max:7',
            'renevam'       => 'required|numeric|min:9',
            'modelo'        => 'required',
            'marca'         => 'required',
            'ano'           => 'required|min:4|max:4',
            'proprietario'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'placa.required' => 'É obrigatório informar a Placa do carro!',
            'placa.min' => 'Informe um valor correto para a placa!',
            'placa.max' => 'Informe um valor correto para a placa!',
            'renevam.required' => 'É obrigatório informar o Renevam!',
            'renevam.numeric' => 'Informe somente números no Renevam!',
            'renevam.min' => 'Informe um valor correto para a Renevam!',            
            'modelo.required' => 'É obrigatório informar a Modelo do carro!',
            'marca.required' => 'É obrigatório informar a Marca do carro!',
            'ano.required' => 'É obrigatório informar o ano do carro com 4 números!',
            'ano.min' => 'Informe um valor correto para a ano do carro!',
            'ano.max' => 'Informe um valor correto para a ano do carro!',
            'proprietario.required' => 'É obrigatório informar o proprietário do carro!'
        ];
    }
}
