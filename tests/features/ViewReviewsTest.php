<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewReviewsTest extends TestCase
{
    // A review page exists
    // A review page has reviews

    /**
     * A basic functional test example.
     *
     * @return void
     */

    /** @test */
    public function a_review_page_exists()
    {
        $this->visit('/reviews')
             ->see('All reviews');
    }
}
