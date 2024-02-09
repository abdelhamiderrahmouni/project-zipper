<?php

namespace AbdelhamidErrahmouni\Zipper;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AbdelhamidErrahmouni\Zipper\Commands\ZipperCommand;

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
            ->name('project-zipper')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_project-zipper_table')
            ->hasCommand(ZipperCommand::class);
    }
}
