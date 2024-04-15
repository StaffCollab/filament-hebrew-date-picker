<?php

namespace StaffCollab\FilamentHebrewPicker;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentHebrewPickerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-hebrew-picker';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            AlpineComponent::make('filament-hebrew-picker', __DIR__.'/../dist/js/components/hebrew-date-time-picker.js'),
        ], package: 'staffcollab/filament-hebrew-picker');
    }
}
