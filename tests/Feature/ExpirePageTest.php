<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExpirePageTest extends TestCase
{
    /**
     * Test the expire page route returns success.
     */
    public function test_expire_page_is_successful(): void
    {
        $response = $this->get('/expire');

        $response->assertStatus(200);
        $response->assertSee('Expiring Medicines');
        $response->assertSee('Expiry Alert');
    }

    /**
     * Test that the named route 'expire' is correct.
     */
    public function test_expire_route_name_works(): void
    {
        $url = route('expire');
        $this->assertStringContainsString('/expire', $url);
    }
}
