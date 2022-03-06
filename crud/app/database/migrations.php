// Quando você abrir o arquivo da migração, encontrará uma classe com apenas 
// o início da construção. Verá dois métodos: up() e down() que seguindo a 
// lógica uma faz e o outro reverte.
// O método up é o que iremos trabalhar agora e ele talvez seja visto assim:

public function up()
{
    Schema::create('customers', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
    });
}

// Adicione as colunas a fim de que fique da seguinte forma:

public function up()
{
    Schema::create('customers', function (Blueprint $table) {
         $table->increments('id');
         $table->string('first_name', 45);
         $table->string('last_name', 45);
         $table->text('address')->nullable();
         $table->string('email')->nullable();
         $table->string('phone')->nullable();
         $table->timestamps();
    });
}
