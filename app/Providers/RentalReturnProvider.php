use Validator;
use App\Http\Validators\RentalReturnValidator;

public function boot()
{
  $validator = $this->app['validator'];
  $validator->resolver(function($translater, $data,
  $rules, $messages) {
    return new RentalReturnValidator($translater, $data,
    $rules, $messages);
  });
}
