use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CustomerRequest;


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

public function store(CustomerRequest $request)
{ 
    $customer = Customer::create($request->all());
 
    if ($customer) {
 
  Session::flash('success', "Registro #{$customer->id}  salvo com êxito");
 
  return redirect()->route('customers.index');
    }
    return redirect()->back()->withErrors(['error', "Registo não foi salvo."]);
}


// Se você fez tudo certo até aí, quando preencher o formulário, após salvar 
// a página será redirecionada para a grade que lista os registros, então você
// verá um registro criado!
// Mas se você clicar no botão editar ou excluir, imediatamente é direcionado
// a uma página em branco.
// Isso porque os métodos não foram implementados, então não estão retornando nada.
// Mas vamos começar por alterar o controller, permitindo a atualização de registros.
// Vamos implementar os dois métodos edit e update.
// Primeiro o edit, precisa deste código:

public function edit($id)
{
    $customer = Customer::findOrFail($id);
 
    if ($customer) {
        return view('customers.form', compact('customer'));
    } else {
        return redirect()->back();
    }
}

// Mas falta salvar a atualização. O método update, fará isso utilizando apenas esse código:

public function update(CustomerRequest $request, $id)
{
    $customer = Customer::where('id', $id)->update($request->except('_token', '_method'));
 
    if ($customer) {
   
  Session::flash('success', "Registro #{$id} atualizado com êxito");
   
  return redirect()->route('customers.index');
    }
    return redirect()->back()->withErrors(['error', "Registo #{$id} não foi encontrado"]);
}

// Veja só! Nosso CRUD já está listando, criando e atualizando.
// Falta só excluir! Então precisamos alterar agora apenas uma 
// action no controller: destroy.
// O código ficará assim:

public function destroy($id)
{
    $customer = Customer::where('id', $id)->delete();
 
    if ($customer) {
   
         Session::flash('success', "Registro #{$id} excluído com êxito");
   
         return redirect()->route('customers.index');
    } 
    return redirect()->back()->withErrors(['error', "Registo #{$id} não pode ser excluído"]);
}


