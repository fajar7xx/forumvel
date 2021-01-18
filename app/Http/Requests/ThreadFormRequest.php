<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThreadFormRequest extends FormRequest
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
        $rules = [];
        $id = $this->route('thread');
        $method = $this->getMethod();

        switch ($method){
            case 'POST':
                $rules = [
                    'subject' => ['required', 'string', 'min:10'],
                    'type' => ['required', 'string', 'min:5'],
                    'thread' => ['required', 'string', 'min:20']
                ];
                break;
            case 'PUT':
            case 'PATCH':
                $rules = [
                    'subject' => ['required', 'string', 'min:10'],
                    'type' => ['required', 'string', 'min:5'],
                    'thread' => ['required', 'string', 'min:20']
                ];
                break;
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'subject' => 'Judul Thread',
            'type' => 'Type Thread',
            'thread' => 'Isi Thread'
        ];
    }
}
