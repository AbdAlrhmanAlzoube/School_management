<?php



namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
            'first_name' => [ 'string', 'max:255'],
            'last_name' => [ 'string', 'max:255'],
            'address' => [ 'string', 'max:255'],
            'phone' => [ 'string', 'max:255'],
            'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            'password' => [ 'string', 'min:8', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'gender' => ['nullable', 'string', 'max:255'],
            'educational_level' => [ 'string'], // Add this line to include educational_level field
            'guardian_id' => [ 'integer', 'exists:guardians,id'], // Assuming guardian_id is integer and exists in guardians table
            'birth_date' => ['date'],
        ];
    }
}
