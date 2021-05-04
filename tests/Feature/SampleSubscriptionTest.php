<?php

namespace Tests\Feature;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SampleSubscriptionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSampleForm()
    {
        $response = $this->get('/samples/form');

        $response->assertStatus(200);
    }
    public function testNewSubscriptionCanBeAdded(){
        $this->withoutExceptionHandling();
        $experience = array("beginner","intermediate","expert");
        $experience = $experience[array_rand($experience)];
        $response = $this->post('/subscribe',[
            'name' => 'Test User',
            'email' => 'tester@tester.com',
            'password' => '123456789',
            'level' => rand(1,3),
            'experience' => $experience
        ]);
        $this->assertCount(1,Subscription::all());
    }
}
