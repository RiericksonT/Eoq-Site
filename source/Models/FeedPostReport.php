<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

/**
 * Undocumented class
 */
class FeedPostReport extends DataLayer
{
    /**
     * Undocumented function
     */
    public function __construct()
    {
        parent::__construct("view_report_post", ["id", "description"], "", false);
    }
}
