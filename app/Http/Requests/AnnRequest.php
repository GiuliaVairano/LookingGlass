<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class AnnRequest extends FormRequest
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
            'price' =>'required',
            'title' => 'required',
            'body' => 'required',
            'img' => 'required|image',

        ];
    }

    public function messages(){
        return [
            'price.required' => 'please,insert a price for your item',
            'title.required' => 'please,use a title for your announcement',
            'body.required' => 'please,insert a description of your item',
            'img.required' => 'please,upload an image of your item',
            'img.image' => 'the uploaded file must be image type: .jpg .jpeg .png .bmp .gif .svg .webp',
        ];
    }
}
