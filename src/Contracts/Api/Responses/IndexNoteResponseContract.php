<?php
namespace Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Responses;

use Illuminate\Support\Collection;
use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Models\NoteContract;

interface IndexNoteResponseContract
{
    /**
     * Setting underlying response.
     * 
     * @return static
     */
    public function setResponse(TryResponseContract $response): IndexNoteResponseContract;

    /**
     * Getting underlying response.
     */
    public function getResponse(): TryResponseContract;

    /**
     * Getting related notes.
     * 
     * @return Collection<int, NoteContract>
     */
    public function getNotes(): Collection;
}