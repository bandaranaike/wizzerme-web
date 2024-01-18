<?php

namespace Tests\Feature;

use Database\Factories\VacancyFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VacancyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_insert_a_vacancy(): void
    {
        (new VacancyFactory())->count(30)->create();
    }
}
