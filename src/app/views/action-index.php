public function index(Request $request)
{
    if ($request->has('search')) {
 
  $search = $request->get('search');
 
  $customers = Customer::where('first_name', 'like', "%{$search}%")
      ->orWhere('last_name', 'like', "%{$search}%")
      ->orWhere('email', 'like', "%{$search}%")
      ->orWhere('phone', 'like', "%{$search}%")
      ->orWhere('address', 'like', "%{$search}%")
      ->paginate(10);
 
  $customers->appends(['search' => $search]);
  return view('customers.grid', compact('customers', 'search'));
      } else {
  $customers = Customer::paginate(1);
  return view('customers.grid', compact('customers'));
      }    
}


// Mas precisamos alterar a view grid para apresentar os botões link. 
// Faça da seguinte maneira: logo um pouco antes da última linha 
// @endsection, e também antes da div de fechamento (para não ficar feio), 
// adicione:

{{ $customers->links() }}

