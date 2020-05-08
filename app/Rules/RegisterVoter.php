<?php

namespace App\Rules;

use App\Voter;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class RegisterVoter implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        
        $voter = Voter::where('nisn', $value)->first();
        if ($voter->registerinfo == 0){
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You have been registered.';
    }
}
