<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Member extends Model implements HasMedia
{
    use HasFactory;
    use HasAdvancedFilter;
    use Tenantable;
    use InteractsWithMedia;

    public const DOCUMENT_PROOF_SELECT = [
        '0' => 'ஆதார் அட்டை',
        '1' => 'வாக்காளர் அட்டை',
        '2' => 'ஓட்டுநர் உரிமம்',
    ];

    public $table = 'members';

    public $orderable = [
        'id',
        'name',
        'father_name',
        'mobile_no',
        'address',
        'document_proof',
        'post_name',
    ];

    public $filterable = [
        'id',
        'name',
        'father_name',
        'mobile_no',
        'address',
        'document_proof',
        'post_name',
    ];

    protected $appends = [
        'document_photo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'father_name',
        'mobile_no',
        'address',
        'document_proof',
        'post_name',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $thumbnailWidth  = 50;
        $thumbnailHeight = 50;

        $thumbnailPreviewWidth  = 120;
        $thumbnailPreviewHeight = 120;

        $this->addMediaConversion('thumbnail')
            ->width($thumbnailWidth)
            ->height($thumbnailHeight)
            ->fit('crop', $thumbnailWidth, $thumbnailHeight);
        $this->addMediaConversion('preview_thumbnail')
            ->width($thumbnailPreviewWidth)
            ->height($thumbnailPreviewHeight)
            ->fit('crop', $thumbnailPreviewWidth, $thumbnailPreviewHeight);
    }

    public function getDocumentProofLabelAttribute($value)
    {
        return static::DOCUMENT_PROOF_SELECT[$this->document_proof] ?? null;
    }

    public function getDocumentPhotoAttribute()
    {
        return $this->getMedia('member_document_photo')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
