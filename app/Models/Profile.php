<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function rules() {
        return [
            'email' => 'required',
            'name' => 'required',
            'age' => 'required',
            'location' => 'required',
            'gender' => 'required',
            'description' => 'nullable',
        ];
    }
}
