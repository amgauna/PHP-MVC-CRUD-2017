
public function index()
{
    $customers = Customer::paginate(12);
    return view('customers.grid', compact('customers'));
}

// Mas precisamos alterar a view grid para apresentar os botões link. 
// Faça da seguinte maneira: logo um pouco antes da última linha 
// @endsection, e também antes da div de fechamento (para não ficar feio), 
// adicione:

{{ $customers->links() }}

