<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMatakuliahRequest extends FormRequest
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
            'nama' => 'required|string|max:100',
            'kode' => 'required|string|min:6',
            'sks' => 'required|string|min:1',
            'kode_status_matkul' => 'required|string|min:1',
        ];
    }
}
