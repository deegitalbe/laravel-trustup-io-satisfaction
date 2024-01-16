<?php

namespace Deegitalbe\LaravelTrustupIoSatisfaction\Models;

use Carbon\Carbon;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Models\NoteContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Enums\NoteOriginEnum;
use Deegitalbe\LaravelTrustupIoSatisfaction\Enums\RelatedToTypeEnum;

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

    public function getRelatedToId(): string
    {
        return $this->attributes['related_to_id'];
    }

    public function getRelatedToType(): RelatedToTypeEnum
    {
        return $this->attributes['related_to_type'];
    }

    public function getCreatedById(): int
    {
        return $this->attributes['created_by_id'];
    }

    public function getText(): ?string
    {
        return $this->attributes['text'];
    }

    public function getDate(): Carbon
    {
        return $this->attributes['date'];
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

    public function setRelatedToId(string $relatedToId): NoteContract
    {
        $this->attributes['related_to_id'] = $relatedToId;
        return $this;
    }

    public function setRelatedToType(RelatedToTypeEnum $relatedType): NoteContract
    {
        $this->attributes['related_to_type'] = $relatedType;
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

    public function setDate(string $date): NoteContract
    {
        $this->attributes['date'] = Carbon::parse($date);
        return $this;
    }

    public function fill(array $attributes): NoteContract
    {
        $this->setId($attributes['id'])
            ->setValue($attributes['value'])
            ->setOrigin(NoteOriginEnum::from($attributes['origin']))
            ->setRelatedToId($attributes['related_to_id'])
            ->setRelatedToType(RelatedToTypeEnum::from($attributes['related_to_type']))
            ->setCreatedById($attributes['created_by_id'])
            ->setText($attributes['text'])
            ->setDate($attributes['date']);

        return $this;
    }
}
