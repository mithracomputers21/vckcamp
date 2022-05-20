<?php

namespace App\Http\Livewire\Member;

use App\Models\Member;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Member $member;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    public function mount(Member $member)
    {
        $this->member = $member;
        $this->initListsForFields();
        $this->mediaCollections = [
            'member_document_photo' => $member->document_photo,
        ];
    }

    public function render()
    {
        return view('livewire.member.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->member->save();
        $this->syncMedia();

        return redirect()->route('admin.members.index');
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->member->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }

    protected function rules(): array
    {
        return [
            'member.name' => [
                'string',
                'required',
            ],
            'member.father_name' => [
                'string',
                'required',
            ],
            'member.mobile_no' => [
                'string',
                'required',
            ],
            'member.address' => [
                'string',
                'required',
            ],
            'member.document_proof' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['document_proof'])),
            ],
            'mediaCollections.member_document_photo' => [
                'array',
                'required',
            ],
            'mediaCollections.member_document_photo.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'member.post_name' => [
                'string',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['document_proof'] = $this->member::DOCUMENT_PROOF_SELECT;
    }
}
