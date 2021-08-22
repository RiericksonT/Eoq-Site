<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

/**
 * Undocumented class
 */
class ReportPost extends DataLayer
{
    /**
     * Undocumented function
     */
    public function __construct()
    {
        parent::__construct("report_post", ["id_user_report", "id_user_reported", "id_post"], "id", false);
    }

    /**
     * Undocumented function
     *
     * @param User $userReport
     * @param User $userReported
     * @param Post $post
     * @return ReportPost
     */
    public function add(User $userReport, User $userReported, Post $post): ReportPost
    {
        $this->id_user_report = $userReport->id;
        $this->id_user_reported = $userReported->id;
        $this->id_post = $post->id;

        return $this;
    }
}
