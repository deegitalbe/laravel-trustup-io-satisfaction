<?php

namespace Deegitalbe\LaravelTrustupIoSatisfaction\Models;

use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Models\NoteContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Enums\NoteOriginEnum;

class Note implements NoteContract
{
    protected array $attributes;

    public function getId(): string
    {
        return $this->attributes['id'];
    }

    public function getValue(): int
    {
        return $this->attributes['value'];
    }

    public function getOrigin(): NoteOriginEnum
    {
        return $this->attributes['origin'];
    }

    public function getProfessionalId(): int
    {
        return $this->attributes['professional_id'];
    }

    public function getCreatedById(): int
    {
        return $this->attributes['created_by_id'];
    }

    public function getText(): ?string
    {
        return $this->attributes['text'];
    }

    public function setId(string $id): NoteContract
    {
        $this->attributes['id'] = $id;
        return $this;
    }

    public function setValue(int $value): NoteContract
    {
        $this->attributes['value'] = $value;
        return $this;
    }

    public function setOrigin(NoteOriginEnum $origin): NoteContract
    {
        $this->attributes['origin'] = $origin;
        return $this;
    }

    public function setProfessionalId(int $professionalId): NoteContract
    {
        $this->attributes['professional_id'] = $professionalId;
        return $this;
    }

    public function setCreatedById(int $createdById): NoteContract
    {
        $this->attributes['created_by_id'] = $createdById;
        return $this;
    }

    public function setText(string $text): NoteContract
    {
        $this->attributes['text'] = $text;
        return $this;
    }

    public function fill(array $attributes): NoteContract
    {
        $this->setId($attributes['id'])
            ->setValue($attributes['value'])
            ->setOrigin(NoteOriginEnum::from($attributes['origin']))
            ->setProfessionalId($attributes['professional_id'])
            ->setCreatedById($attributes['created_by_id'])
            ->setText($attributes['text']);

        return $this;
    }
}
