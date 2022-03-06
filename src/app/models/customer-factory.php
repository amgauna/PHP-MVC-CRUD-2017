// Agora vamos editar nossa fábrica criada com nome de arquivo 
// CustomerFactory.php no caminho database/factories.
// Ao abrir o arquivo você terá este conteúdo:

use Faker\Generator as Faker;
 
$factory->define(App\Customer::class, function (Faker $faker) {
    return [
//
    ];
});


// Altere para ficar assim (Atenção um pequeno detalhe: na frente 
// de define, no primiro argumento, adicione Models entre App e 
// Customer, para o caminho ficar correto: App\Models\Customer::class):

$factory->define(App\Models\Customer::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address
    ];
});
