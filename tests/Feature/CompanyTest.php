<?php

namespace Tests\Feature;

use Database\Factories\CompanyFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_add_10_vacancies()
    {
        (new CompanyFactory())->count(10)->create();
    }
}
