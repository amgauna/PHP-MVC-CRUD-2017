namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Customer extends Model
{
 
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'email',
        'phone',
    ];
 
}
