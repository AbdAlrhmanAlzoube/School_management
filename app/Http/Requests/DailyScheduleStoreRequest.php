<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DailyScheduleStoreRequest extends FormRequest
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
            'day_name' => ['required', 'string', 'max:255'],
            'subject_id' => ['required', 'integer', 'exists:subjects,id'], // Assuming subject_id is integer and exists in subjects table
            'teacher_id' => ['required', 'integer', 'exists:teachers,id'], // Assuming teacher_id is integer and exists in teachers table
            'class_room_id' => ['required', 'integer', 'exists:class_rooms,id'], // Assuming class_room_id is integer and exists in class_rooms table
            'start_time' => ['required', 'string', 'max:255'],
            'end_time' => ['required', 'string', 'max:255'],
            'educational_level' => ['required', 'string', 'max:255'],
        ];
    }
}
