<?php

namespace AbdelhamidErrahmouni\Zipper;

use AbdelhamidErrahmouni\Zipper\Commands\ZipperCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ZipperServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('zipper')
            ->hasConfigFile()
            ->hasCommand(ZipperCommand::class);
    }
}
