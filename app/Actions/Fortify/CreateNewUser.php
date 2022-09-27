<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Profile;
use App\Models\RegisterEmail;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:100', 'unique:users'],
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users', 'exists:register_emails'],
            'password' => $this->passwordRules(),
            'gender' => ['required'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ],

        [
            'email.exists' => 'please Use the cmdi email ',
            'gender.required' => 'gender is required',
            
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
        ]);

        Profile::create([
            'user_id' => $user->id,
            'slug' => Str::of($user->name)->slug('-'),
            'gender' => $input['gender'],
        ]);

        return $user;
    }
}
