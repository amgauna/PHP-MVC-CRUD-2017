// Agora, siga até o subdiretório database/seeders e
// abra para editar o arquivo CustomersTableSeeder.php.
// Você verá algo assim:

use Illuminate\Database\Seeder;
 
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}


// Então vamos adicionar uma instrução no método run, 
// da seguinte forma:


public function run()
{
    factory(App\Models\Customer::class, 150)->create();
}
