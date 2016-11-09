<?php

namespace Bctown\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Site extends Model
{
    //
    protected $table = 'site';
    protected $primaryKey = 'site_id';
    protected $siteid;
    public $timestamps = false;
    
    public static function setSiteId($siteID) {
        
    }
    
    public static function getSiteIdFromDomain ( $sitedomain ) {
        
        if ( $site = Self::where('domainname', $sitedomain)->get(['site_id']) ) {
            
            $firstsiterow = $site->filter(function($item) {
                return $item->site_id;
            })->first();
        
            Self::setSiteId( $firstsiterow['site_id'] );
            
            return $firstsiterow['site_id'];
            
        }       
        
        return false;
        
    }
    
    public static function getSiteAttributes ( ) {
        
        $site = Self::get($this->siteid);
        
        return $site;
        
    }
    
}
