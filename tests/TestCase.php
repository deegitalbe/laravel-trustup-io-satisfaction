<?php
namespace Deegitalbe\LaravelTrustupIoSatisfaction\Tests;

use Deegitalbe\LaravelTrustupIoSatisfaction\Package;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Deegitalbe\LaravelTrustupIoSatisfaction\Providers\LaravelTrustupIoSatisfactionServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return Package::class;
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupIoSatisfactionServiceProvider::class
        ];
    }
}