<?php

namespace Bctown\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Bctown\Models\Site as Site;
use Bctown\Interfaces\SiteInterface;
use Session;

class BctownController extends Controller implements SiteInterface 
{
    
    private $siteDomain;
    
    public function __construct( )
    {
            
        $this->setSiteDomain();
        $this->setSiteAttributesToSession();
        
        //dd ( session()->all() );
    }
    
    
    public function getSiteDomain() {
        
        return $this->siteDomain;
    }
    
    public function setSiteDomain() {
        
        $this->siteDomain = \Config::get('app.site');
        Session::put('site',\Config::get('app.site'));
    
    }
    
    
    
    public static function getSiteIDFromDomain($siteDomain) {
        
       return Site::getSiteIdFromDomain($siteDomain);
        
    }
    
    public function isSiteActive() {
        
        return true;
        
    }
    
    public function setSiteAttributesToSession () {
        
       Session::put('sitedomain',$this->siteDomain);
       
    }
    
    public function getSiteAttributes () {
        
        return ["attr1"=>"value1", "attr2"=>"value2"];
        
    }
    
    public function getSiteModules () {}
    

    public function setSiteModules () {}  
    
    public function index() {
        
        echo 'index ';
    }
}
