<?php

namespace StaffCollab\FilamentHebrewPicker\Tests;

use StaffCollab\FilamentHebrewPicker\FilamentHebrewPickerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentHebrewPickerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        //
    }
}
