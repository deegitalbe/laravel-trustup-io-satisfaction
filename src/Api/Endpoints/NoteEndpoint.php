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
            $implement->addQuery(['origin' => $request->getOrigin()->value]);
        }

        if ($request->getCreatedAfter()) {
            $implement->addQuery(['created_after' => $request->getCreatedAfter()->toDateString()]);
        }

        if ($request->getCreatedBefore()) {
            $implement->addQuery(['created_before' => $request->getCreatedBefore()->toDateString()]);
        }

        if ($request->getIsUsing() === null) {
            $implement->addQuery(['is_using' => $request->getIsUsing()]);
        }

        if ($request->isOrderingByLatest()) {
            $implement->addQuery(['created_at' => 'desc']);
        }

        if ($request->isOrderingByOldest()) {
            $implement->addQuery(['created_at' => 'asc']);
        }

        if ($request->isOrderingByValueDescending()) {
            $implement->addQuery(['value' => 'desc']);
        }

        if ($request->isOrderingByValueAscending()) {
            $implement->addQuery(['value' => 'asc']);
        }

        $response = $this->client->try($implement, "Cannot get all satisfactions");

        if ($response->failed()) {
            report($response->error());
        }

        return app()->make(IndexNoteResponseContract::class)->setResponse($response);
    }
}
