/*
 * Application Service Providers...
 */

App\Providers\AppServiceProvider::class,
App\Providers\AuthServiceProvider::class,
// App\Providers\BroadcastServiceProvider::class,
App\Providers\EventServiceProvider::class,
App\Providers\RouteServiceProvider::class,

// Ao final adicione:

Collective\Html\HtmlServiceProvider::class,

// Depois role o Código mais abaixo até encontrar logo
// abaixo a seção “Class Aliases”. Da mesma forma que
// você acabou de fazer, logo abaixo de:

'View' => Illuminate\Support\Facades\View::class,

// Adicione as linhas no final:

'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,
