<?php

namespace Deegitalbe\LaravelTrustupIoSatisfaction\Api\Endpoints;

use Deegitalbe\LaravelTrustupIoSatisfaction\Api\Credentials\NoteCredential;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Endpoints\NoteEndpointContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Requests\IndexNoteRequestContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Responses\IndexNoteResponseContract;
use Henrotaym\LaravelApiClient\Contracts\ClientContract;
use Henrotaym\LaravelApiClient\Contracts\RequestContract;

class NoteEndpoint implements NoteEndpointContract
{
    protected ClientContract $client;

    public function __construct(ClientContract $client, NoteCredential $credential)
    {
        $this->client = $client->setCredential($credential);
    }

    public function index(IndexNoteRequestContract $request): IndexNoteResponseContract
    {

        /** @var RequestContract */
        $implement = app()->make(RequestContract::class);

        $implement->setVerb('GET')->setUrl('notes');

        if ($request->getProfessionalId()) {
            $implement->addQuery(['professional_id' => $request->getProfessionalId()]);
        }

        if ($request->getCreatedById()) {
            $implement->addQuery(['created_by_id' => $request->getCreatedById()]);
        }

        if ($request->getOrigin()) {
            $implement->addQuery(['origin' => $request->getOrigin()]);
        }

        if ($request->getCreatedAfter()) {
            $implement->addQuery(['start_date' => $request->get]);
        }

        $response = $this->client->try($implement, "Cannot get all satisfactions");

        return app()->make(IndexNoteResponseContract::class)->setResponse($response);
    }
}
