<?php

namespace Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Models;

use App\Enums\RelatedTypeEnum;
use Carbon\Carbon;
use Deegitalbe\LaravelTrustupIoSatisfaction\Enums\NoteOriginEnum;

interface NoteContract
{
    /**
     * Getting id.
     */
    public function getId(): string;

    /**
     * Getting value.
     */
    public function getValue(): int;

    /**
     * Getting origin.
     */
    public function getOrigin(): NoteOriginEnum;

    /**
     * Getting professional id.
     */
    public function getRelatedToId(): string;

    public function getRelatedToType(): RelatedTypeEnum;

    /**
     * Getting created by id.
     */
    public function getCreatedById(): int;

    /**
     * Getting text.
     */
    public function getText(): ?string;

    /**
     * Getting date.
     */
    public function getDate(): Carbon;

    /**
     * Setting id.
     * 
     * @return static
     */
    public function setId(string $id): NoteContract;

    /**
     * Setting value.
     * 
     * @return static
     */
    public function setValue(int $value): NoteContract;

    /**
     * Setting origin.
     * 
     * @return static
     */
    public function setOrigin(NoteOriginEnum $origin): NoteContract;

    /**
     * Setting professional id.
     * 
     * @return static
     */
    public function setRelatedToId(string $relatedToId): NoteContract;

    public function setRelatedToType(RelatedTypeEnum $relatedType): NoteContract;

    /**
     * Setting created by id.
     * 
     * @return static
     */
    public function setCreatedById(int $createdById): NoteContract;

    /**
     * Setting text.
     * 
     * @return static
     */
    public function setText(string $text): NoteContract;

    public function setDate(string $date): NoteContract;

    public function fill(array $attributes): NoteContract;
}
