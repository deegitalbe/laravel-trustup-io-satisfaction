<?php

namespace Deegitalbe\LaravelTrustupIoSatisfaction\Api\Credentials;

use Henrotaym\LaravelApiClient\Contracts\RequestContract;
use Henrotaym\LaravelApiClient\JsonCredential;


class NoteCredential extends JsonCredential
{
    public function prepare(RequestContract &$request)
    {

        parent::prepare($request);
        $request->setBaseUrl(env('TRUSTUP_IO_SATISFACTION_URL') . '/api');
    }
}
