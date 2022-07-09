<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Data\Person;
use Tests\TestCase;

class ContohTesting extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testSingelton() 
    {
        $this->app->singleton(Person::class, function($app) {
            return new Person("Muhammad Raihan", "12345676");
        });
        
        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        $this->assertSame($person1, $person2);
    }
}
