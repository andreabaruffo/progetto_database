<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|min:10|max:50',
            'author'=>'required|min:10|max:50',
            'body'=>'required|min:10|max:5000',
            'img'=>'required'
        ];
        
    }

    public function messages(){
        return[
            'title.required' => 'Il titolo è richiesto',
            'author.required' => 'Il nome dell\'autore è richiesto',
            'body.required' => 'Il corpo dell\'articolo è richiesto',
            'img.required' => 'L\'immagine è richiesta',
            'title.min' => 'Il titolo deve essere piu lungo di 10'
        ];
    }
}
