<?php
namespace Deegitalbe\LaravelTrustupIoSatisfaction\Providers;

use Deegitalbe\LaravelTrustupIoSatisfaction\Package;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;

class LaravelTrustupIoSatisfactionServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }

    protected function addToRegister(): void
    {
        //
    }

    protected function addToBoot(): void
    {
        //
    }
}