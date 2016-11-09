<?php

namespace Bctown\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Bctown\Models\Site as Site;
use Bctown\Interfaces\SiteInterface;
use Session;
use Route;

class BctownRouteController extends Controller 
{
    
    function __construct() {
        
        $this->middleware('sitevalidator');       
        
        echo 'Get the routes from the database';
        
    }
    
    /* Create resource routes for the package */
    public static function setup() {
        
        /* array of directories and subdirectories*/
        $directories = ['test','styles','designs','/'];
        
        $directory = 'thistest';
        
        
        
        /* Loop through a directory and create route resources for the allowed URLs */
       
       foreach ($directories as $directory)
        {
          if ( $directory == '/' ) { $directory = ''; }
          
          $routeControllerMethod = '\Bctown\Controllers\\Bctown' . ucwords($directory) . 'Controller@index';
          
          //Route::group(['prefix' => 'subfolder'], function ( $directory ) {
              Route::resource('/subdir/' . $directory, '\Bctown\Controllers\\Bctown' . ucwords($directory) . 'Controller@index'); 
              //Route::resource('/test','\Bctown\Controllers\\BctownController@index'); 
              //Route::resource('/' . $directory,'\Bctown\Controllers\\Bctown' . ucwords($directory) . 'Controller@index'); 
          //});
          
          /*
          Route::group(['prefix' => 'subfolder'], function ( $directory ) {
              Route::get('/'.$directory, ['as' => $directory, 'uses' => $routeControllerMethod]);
              //Route::resource('/' . $directory,'\Bctown\Controllers\\Bctown' . ucwords($directory) . 'Controller@index'); 
          });*/
          
          //Route::get('/'.$directory, ['as' => $directory, 'uses' => $routeControllerMethod]);
        }
        
        //Route::resource('/', '\Bctown\Controllers\BctownRouteController@indextest');
        
    }
    
    
    
    
    
}
