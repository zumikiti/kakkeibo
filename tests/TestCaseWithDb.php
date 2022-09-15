<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class TestCaseWithDb extends TestCase
{
    use RefreshDatabase;
}
