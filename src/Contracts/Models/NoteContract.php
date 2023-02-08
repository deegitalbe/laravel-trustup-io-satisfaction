<?php
namespace Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Models;

use Deegitalbe\LaravelTrustupIoSatisfaction\Enums\NoteOriginEnum;

interface NoteContract
{
    /**
     * Getting uuid.
     */
    public function getUuid(): string;

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
    public function getProfessionalId(): int;

    /**
     * Getting created by id.
     */
    public function getCreatedById(): int;

    /**
     * Getting text.
     */
    public function getText(): ?string;

    /**
     * Setting uuid.
     * 
     * @return static
     */
    public function setUuid(string $uuid): NoteContract;

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
    public function setProfessionalId(int $professionalId): NoteContract;

    /**
     * Setting created by id.
     * 
     * @return static
     */
    public function setCreatedById(int $createdById): NoteContract;

    /**
     * Setting uuid.
     * 
     * @return static
     */
    public function setText(string $text): NoteContract;
}