// Vamos partir para criação das actions do controller, 
// então abra o arquivo CustomersController.php que 
// está no caminho app/Http/Controller.
// É necessário importar a classe de modelo Customer, 
// como você vê logo a seguir:

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Customer;
 
class CustomersController extends Controller
{

// Muito bem, vamos adicionar um comando bem simples para 
// exibir o que há na tabela clientes. Isso deve ser feito 
// na action index. Faça apenas dessa maneira por enquanto:

public function index()
{
    $customers = Customer::all();
    return $customers;
}
