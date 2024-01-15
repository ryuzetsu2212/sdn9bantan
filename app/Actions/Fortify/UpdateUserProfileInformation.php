<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;


class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'nip' => ['required', 'string', 'max:255'],
            'kelahiran' => ['max:255'],
            'pangkat' => ['max:255'],
            'pendidikan' => ['max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', Rule::in(['admin', 'user'])],
        ])->validate();
        

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'nip' => $input['nip'],
                'kelahiran' => $input['kelahiran'],
                'pangkat' => $input['pangkat'],
                'pendidikan' => $input['pendidikan'],
                'jabatan' => $input['jabatan'],
                'level' => $input['level'],
            ])->save();

            return back()->with('success','Profil berhasil diupdate');
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
