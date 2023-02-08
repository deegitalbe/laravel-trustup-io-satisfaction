<?php
namespace Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Requests;

use Carbon\Carbon;
use Deegitalbe\LaravelTrustupIoSatisfaction\Enums\NoteOriginEnum;

interface IndexNoteRequestContract
{
    /**
     * Retrieving notes matching given origin.
     *  
     * @return static
     */
    public function setOrigin(NoteOriginEnum $origin): IndexNoteRequestContract;

    /**
     * Retrieving notes written after given threshold.
     *  
     * @return static
     */
    public function setCreatedAfter(Carbon $createdAfter): IndexNoteRequestContract;

    /**
     * Retrieving notes written before given threshold.
     *  
     * @return static
     */
    public function setCreatedBefore(Carbon $createdBefore): IndexNoteRequestContract;

    /**
     * Retrieving notes matching given professional id.
     *  
     * @return static
     */
    public function setProfessionalId(int $professionalId): IndexNoteRequestContract;

    /**
     * Setting related origin.
     *  
     * @return static
     */
    public function setCreatedById(int $createdById): IndexNoteRequestContract;

    /**
     * Getting origin limiting notes.
     */
    public function getOrigin(NoteOriginEnum $origin): ?NoteOriginEnum;

    /**
     * Getting created after threshold.
     */
    public function getCreatedAfter(Carbon $createdAfter): ?Carbon;

    /**
     * Getting created before threshold.
     */
    public function getCreatedBefore(Carbon $createdBefore): ?Carbon;

    /**
     * Getting professional id.
     */
    public function getProfessionalId(int $professionalId): ?int;

    /**
     * Getting created by id.
     */
    public function getCreatedById(int $createdById): ?int;
}