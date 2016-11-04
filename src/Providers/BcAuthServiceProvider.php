<?php
namespace Bctown\Providers;

//use Auth;
//use App\Authentication\UserProvider;
//use App;
use Illuminate\Support\ServiceProvider;
//use Config;
use Bctown\Models\Site as Site;
use Bctown\Controllers\BctownController;

class BcAuthServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    private $sitedomain;
    
    
    public function boot()
    {
         
       

    }
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        
       //echo 'try';
       
       
       $this->app->bind('Bctown', function () { return new BctownController(); });
       
       //$this->app['Bctown'];
       
    }
}