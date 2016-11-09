<?php
namespace Bctown\Interfaces;

interface SiteInterface {


/** 
 * 
 * Get the Domain from the _SERVER array
 * 
 */    
public function getSiteDomain();

/**
* Set the domain name from the _SERVER array 
*/
public function setSiteDomain();

/**
* Get SiteID from database lookup using domainname as primary key 
*
* @param string $siteDomain    Domain from the _SERVER array

*/
public static function getSiteIDFromDomain ( $siteDomain );

/**
* Get Site attributes from database lookup using domainname as primary key 
*/
public function getSiteAttributes ();

/**
 * 
 * Set SESSION variables
 * 
 */
public function setSiteAttributesToSession ();

/** 
 * Check to see if the site is available
 */
public function isSiteActive ();

/* 
 * Go get the site modules that are available - may not be used
 */
public function getSiteModules ();

/*
 * Add site modules to session or something 
*/
public function setSiteModules ();




}