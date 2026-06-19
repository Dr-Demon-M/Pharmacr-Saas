<?php

namespace Tests\Feature;

use Tests\TestCase;

class ActivityPageTest extends TestCase
{
    /**
     * Test the activity log page route returns success.
     */
    public function test_activity_page_is_successful(): void
    {
        $response = $this->get('/activity');

        $response->assertStatus(200);
        $response->assertSee('Activity Logs');
    }

    /**
     * Test that the named route 'activity' is correct.
     */
    public function test_activity_route_name_works(): void
    {
        $url = route('activity');
        $this->assertStringContainsString('/activity', $url);
    }
}
