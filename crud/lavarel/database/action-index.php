public function index()
{
    $customers = Customer::all();
    return view('customers.grid', compact('customers'));
}
