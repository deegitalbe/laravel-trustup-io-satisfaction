<?php

namespace Deegitalbe\LaravelTrustupIoSatisfaction\Providers;

use Deegitalbe\LaravelTrustupIoSatisfaction\Api\Endpoints\NoteEndpoint;
use Deegitalbe\LaravelTrustupIoSatisfaction\Api\Requests\IndexNoteRequest;
use Deegitalbe\LaravelTrustupIoSatisfaction\Api\Responses\IndexNoteResponse;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Endpoints\NoteEndpointContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Requests\IndexNoteRequestContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Responses\IndexNoteResponseContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Models\NoteContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Models\Note;
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
        $this->app->bind(NoteEndpointContract::class, NoteEndpoint::class);
        $this->app->bind(IndexNoteRequestContract::class, IndexNoteRequest::class);
        $this->app->bind(NoteContract::class, Note::class);
        $this->app->bind(IndexNoteResponseContract::class, IndexNoteResponse::class);
    }

    protected function addToBoot(): void
    {
        //
    }
}
