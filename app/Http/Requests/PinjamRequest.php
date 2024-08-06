<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PinjamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'judulbuku' => 'required',
            'bataspinjam' => 'required',
            'peminjam' => 'required',
            'nim' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'judulbuku.required' => 'data harus diisi',
            'bataspinjam.required' => 'data harus diiisi',
            'peminjam' => 'data harus diiisi',
            'nim' => 'data harus diisi'
        ];
    }
}
