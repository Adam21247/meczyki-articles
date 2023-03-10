<?php


namespace App\Http\Services;


use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationService
{

    public function save(array $input)
    {
        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);

        return $user->save();
    }
}
