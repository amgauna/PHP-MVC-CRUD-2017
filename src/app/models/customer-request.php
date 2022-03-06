namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
 
   public function rules()
   {
    return [
       'first_name' => 'required|max:45',
       'last_name' => 'required|max:45',
    ];
   }
  
  public function messages()
 {
    return [
       'first_name.required' => 'O campo nome é requerido',
       'last_name.required' => 'O campo sobrenome é requerido',
       'first_name.max' => 'O tamanho do nome inserido no campo não pode utltrapassar 45 caracteres',
       'last_name.max' => 'O tamanho do nome inserido no campo não pode utltrapassar 45 caracteres',
    ];
  }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
      //
        ];
    }
}
