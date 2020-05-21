<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class RentalReturnValidator extends Validator
{
  public function validateRentalReturn($attribute, $value, $parameters)
  {
    return $value == required;
  }
}
