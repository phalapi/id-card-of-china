<?php

namespace PhalApi\IdentityCard\China\Region;

interface RegionInterface
{
    /**
     * Get the Region Code.
     * 
     * @return int
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function code();

    /**
     * Get Province Of The Region.
     * 
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function province();

    /**
     * Get City Of The Region.
     * 
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function city();

    /**
     * Get County Of The Region.
     * 
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function county();

    /**
     * Get The Region Tree.
     * 
     * @return array
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function tree();

    /**
     * Get The Region Tree String.
     * 
     * @param string $glue Join Array Elements With A Glue String
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function treeString(string $glue = '');
}
