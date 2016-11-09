<?php

namespace Bctown\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Symfony\Component\HttpKernel\Exception\HttpException;
//use Bctown\Models\Site;
use Bctown\Controllers\BctownController;

class SiteMiddleware
{
    /**
     * The application implementation.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        
        
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function handle($request, Closure $next)
    {
       
       if ( $this->isNotValidSite() ) {
            //$data = json_decode(file_get_contents($this->app->storagePath().'/framework/down'), true);
            
            //http_response_code(404);
            throw new HttpException(404,'This is an error'); 
        }

        return $next($request);
    }
    
    private function isNotValidSite() {
        
        //echo $this->app['Bctown']->getSite();
       
        $siteid = BctownController::getSiteIdFromDomain( $this->app['Bctown']->getSiteDomain() );
        
        
       if ( !$siteid  ) {
           
            return true;
           
       }
        
        return false;
            
        
    }
}
