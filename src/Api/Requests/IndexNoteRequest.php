<?php

namespace Deegitalbe\LaravelTrustupIoSatisfaction\Api\Requests;

use App\Enums\RelatedTypeEnum;
use Carbon\Carbon;
use Deegitalbe\LaravelTrustupIoSatisfaction\Contracts\Api\Requests\IndexNoteRequestContract;
use Deegitalbe\LaravelTrustupIoSatisfaction\Enums\NoteOriginEnum;

class IndexNoteRequest implements IndexNoteRequestContract
{
    protected ?NoteOriginEnum $origin = null;
    protected ?Carbon $createdAfter = null;
    protected ?Carbon $createdBefore = null;
    protected ?string $relatedToId = null;
    protected ?RelatedTypeEnum $relatedToType = null;
    protected ?bool $isUsing = true;
    protected ?int $createdById = null;

    protected ?bool $orderBydateDesc = true;
    protected ?bool $orderByValueDesc = true;

    public function setOrigin(NoteOriginEnum $origin): IndexNoteRequestContract
    {
        $this->origin = $origin;
        return $this;
    }

    public function setCreatedAfter(Carbon $createdAfter): IndexNoteRequestContract
    {
        $this->createdAfter = $createdAfter;
        return $this;
    }

    public function setCreatedBefore(Carbon $createdBefore): IndexNoteRequestContract
    {
        $this->createdBefore = $createdBefore;
        return $this;
    }

    public function setRelatedToId(string $relatedToId): IndexNoteRequestContract
    {
        $this->relatedToId = $relatedToId;
        return $this;
    }

    public function setRelatedToType(RelatedTypeEnum $relatedToType): IndexNoteRequestContract
    {
        $this->relatedToType = $relatedToType;
        return $this;
    }

    public function setIsUsing(bool $isUsing): IndexNoteRequestContract
    {
        $this->isUsing = $isUsing;
        return $this;
    }

    public function setCreatedById(int $createdById): IndexNoteRequestContract
    {
        $this->createdById = $createdById;
        return $this;
    }

    public function orderByLatest(): IndexNoteRequestContract
    {
        $this->orderBydateDesc = true;
        return $this;
    }

    public function orderByOldest(): IndexNoteRequestContract
    {
        $this->orderBydateDesc = false;
        return $this;
    }

    public function orderByValueDescending(): IndexNoteRequestContract
    {
        $this->orderByValueDesc = true;
        return $this;
    }

    public function orderByValueAscending(): IndexNoteRequestContract
    {
        $this->orderByValueDesc = false;
        return $this;
    }


    // GETTER

    public function getOrigin(): ?NoteOriginEnum
    {
        return $this->origin;
    }

    public function getCreatedAfter(): ?Carbon
    {
        return $this->createdAfter;
    }

    public function getCreatedBefore(): ?Carbon
    {
        return $this->createdBefore;
    }

    public function getRelatedToId(): ?string
    {
        return $this->relatedToId;
    }

    public function getRelatedToType(): ?RelatedTypeEnum
    {
        return $this->relatedToType;
    }

    public function getCreatedById(): ?int
    {
        return $this->createdById;
    }

    public function isOrderingByLatest(): bool
    {
        return $this->orderBydateDesc;
    }

    public function isOrderingByOldest(): bool
    {
        return $this->orderBydateDesc;
    }

    public function isOrderingByValueDescending(): bool
    {
        return $this->orderByValueDesc;
    }

    public function isOrderingByValueAscending(): bool
    {
        return $this->orderByValueDesc;
    }

    public function getIsUsing(): ?bool
    {
        return $this->isUsing;
    }
}
