<?php

namespace BinarCode\LaravelSmartChat;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BinarCode\LaravelSmartChat\Commands\LaravelSmartChatCommand;

class LaravelSmartChatServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-smart-chat')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_smart_chat_table')
            ->hasCommand(LaravelSmartChatCommand::class);
    }
}
