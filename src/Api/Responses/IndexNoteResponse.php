<?php

namespace Deegitalbe\LaravelTrustupIoSatisfaction\Api\Responses;

use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Responses\IndexNoteResponseContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Models\NoteContract;
use Henrotaym\LaravelApiClient\Contracts\TryResponseContract;
use Illuminate\Support\Collection;

class IndexNoteResponse implements IndexNoteResponseContract
{

    protected TryResponseContract $response;

    public function setResponse(TryResponseContract $response): IndexNoteResponseContract
    {
        $this->response = $response;
        return $this;
    }

    public function getResponse(): TryResponseContract
    {
        return $this->response;
    }

    public function getNotes(): Collection
    {
        if ($this->getResponse()->failed()) {
            return collect();
        }
        $array = $this->getResponse()->response()->get(true);
        return collect($array['data'])->map(
            fn (array $attributes) =>
            app()->make(NoteContract::class)->fill($attributes)
        );
    }
}
