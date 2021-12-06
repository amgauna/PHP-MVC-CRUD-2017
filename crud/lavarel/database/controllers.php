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

public function create()
{
    return view('customers.form');
}

// Agora você deve estar ansioso para ver como ficou  
// o formulário quando clicar em novo! Mas sugiro já 
// adicionar o método store para fazer todo o ciclo. 
// Adicione só assim por enquanto:

public function store(Request $request)
{
    $customer = Customer::create($request->all());
       
    if($customer) {
        return redirect()->route('customers.index');
    }
}

