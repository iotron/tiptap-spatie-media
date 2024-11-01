<?php

namespace Iotronlab\TiptapSpatieMedia;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Iotronlab\TiptapSpatieMedia\Commands\TiptapSpatieMediaCommand;

class TiptapSpatieMediaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tiptap-spatie-media')
            ->hasConfigFile()
            //->hasViews()
            //->hasCommand(TiptapSpatieMediaCommand::class)
        ;
    }
}
