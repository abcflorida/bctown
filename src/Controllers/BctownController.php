<?php

namespace Bctown\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Bctown\Models\Site as Site;
use Session;

class BctownController extends Controller
{
    
    private $sitedomain;
    
    public function __construct( )
    {
        $this->setSite();
        $this->setSiteAttributesToSession();
        
        //dd ( session()->all() );
    }
    
    public function setSite() {
        
        $this->sitedomain = \Config::get('app.site');
        Session::put('site',\Config::get('app.site'));
    
    }
    
    public function getSite() {
        
        return $this->sitedomain;
    }
    
    public function setSiteAttributesToSession () {
        
       Session::put('sitedomain','bctown.com');
    }
    
    
    function index ( Request $request ) {
            
        //dd ( $request );
        echo 'where are we?';
        
    }
}
