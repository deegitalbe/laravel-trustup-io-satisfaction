<?php
namespace Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Endpoints;

use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Requests\IndexNoteRequestContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Responses\IndexNoteResponseContract;

interface NoteEndpointContract
{
    /**
     * Geting notes matching given request.
     */
    public function index(IndexNoteRequestContract $request): IndexNoteResponseContract;
}