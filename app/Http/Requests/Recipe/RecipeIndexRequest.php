<?php

declare(strict_types=1);

namespace App\Http\Requests\Recipe;

use Illuminate\Foundation\Http\FormRequest;

class RecipeIndexRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'recipe_name' => 'nullable|string|max:10',
            'ingredient' => 'nullable|string|max:10',
            'tag' => 'nullable|string|max:5',
        ];
    }
}
