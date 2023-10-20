<?php

namespace Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Requests;


use Carbon\Carbon;
use Deegitalbe\LaravelTrustupIoSatisfaction\Enums\NoteOriginEnum;
use Deegitalbe\LaravelTrustupIoSatisfaction\Enums\RelatedTypeEnum;

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
    public function setRelatedToId(string $relatedToId): IndexNoteRequestContract;

    public function setRelatedToType(RelatedTypeEnum $relatedToTypeEnum): IndexNoteRequestContract;

    /**
     * Retrieving notes where is_using attribute is matching given value.
     * 
     * @return static
     */
    public function setIsUsing(bool $isUsing): IndexNoteRequestContract;

    /**
     * Setting related origin.
     *  
     * @return static
     */
    public function setCreatedById(int $createdById): IndexNoteRequestContract;

    /**
     * Orderging by latest notes.
     * @return static
     */
    public function orderByLatest(): IndexNoteRequestContract;

    /**
     * Ordering by oldest notes.
     * 
     * @return static
     */
    public function orderByOldest(): IndexNoteRequestContract;

    /**
     * Ordering by notes values from biggest to lowest.
     * 
     * @return static
     */
    public function orderByValueDescending(): IndexNoteRequestContract;

    /**
     * Ordering by notes values from lowest to biggest.
     * 
     * @return static
     */
    public function orderByValueAscending(): IndexNoteRequestContract;

    /**
     * Getting origin limiting notes.
     */
    public function getOrigin(): ?NoteOriginEnum;

    /**
     * Getting created after threshold.
     */
    public function getCreatedAfter(): ?Carbon;

    /**
     * Getting created before threshold.
     */
    public function getCreatedBefore(): ?Carbon;

    /**
     * Getting professional id.
     */
    public function getRelatedToId(): ?string;

    public function getRelatedToType(): ?RelatedTypeEnum;

    /**
     * Getting created by id.
     */
    public function getCreatedById(): ?int;

    /**
     * Telling if orderging by latest notes.
     * 
     * @return bool
     */
    public function isOrderingByLatest(): bool;

    /**
     * Telling if ordering by oldest notes.
     * 
     * @return bool
     */
    public function isOrderingByOldest(): bool;

    /**
     * Telling if ordering by notes values from biggest to lowest.
     * 
     * @return bool
     */
    public function isOrderingByValueDescending(): bool;

    /**
     * Telling if ordering by notes values from lowest to biggest.
     * 
     * @return bool
     */
    public function isOrderingByValueAscending(): bool;

    /**
     * Getting is using attribute.
     * 
     * @return static
     */
    public function getIsUsing(): ?bool;
}
