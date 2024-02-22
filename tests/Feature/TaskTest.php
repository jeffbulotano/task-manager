<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * Test if the task index returns a successful response
     */
    public function test_that_tasks_index_returns_a_successful_response(): void
    {
        $response = $this->get('/api/tasks');

        $response->assertStatus(200);
    }
}
