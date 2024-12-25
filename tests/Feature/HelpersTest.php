<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class HelpersTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    #[Test]public function create_default_users(): void
    {
        $user = Helpers::createDefaultUser();
        $professor= Helpers:createDefaultProfessor();

    }
}
