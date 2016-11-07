<?php
namespace Bctown\Interfaces;

interface SiteInterface {

/** Defined from session 

 @param string  $siteDomain Value of the current domain being processed
 *  
 * 
*/

/**
     * Adds data to cache
     *
     * @param string $objectId    Name of object to store in cache
     * @param mixed  $objectValue Data to store in cache
     * @param mixed  $lifetime    Lifetime of cache file
     * @param string $group       Name of cache group.
     * @param array  $params      Parameters that distinct cache files.
     * @param array  $files       Name of files that are checked if cache is valid.
     * @return bool               True if cache was created, false if cache was not created
     */

public static function getSiteIDFromDomain ( $siteDomain );

}