<div class="container">
    <div class="page-title">
        <h4>Share your latest work!</h4>
        <p>Get recognize through your projects and works.</p>
    </div>
    <div class="actions d-flex justify-content-end mb-5">
        <button class="btn-add-item" wire:click="add_row">
            <i class='bx bx-plus'></i> Add New
        </button>
    </div>

    <form wire:submit="create">
        @forelse($items as $index => $item)
            <div class="card shadow mb-4 p-3">
                <div class="card-header d-flex align-items-center justify-content-end border-0 bg-transparent pt-4">
                        <button class="btn-remove-item" wire:click.prevent="remove_row({{$index}}, {{$item['id']}})">
                            <i class='bx bx-trash' ></i>
                            Remove
                        </button>
                    </div>
                <div class="card-body p-3">
                    <pre>
                        {{print_r($items)}}
                    </pre>
                    <div class="row">
                        <input type="text" wire:model="items.{{$index}}.id">
                        <div class="col-12 col-md-12 mb-3">
                            <div class="form-group" wire:ignore>
                                <select name="name" wire:model="items.{{ $index }}.name" class="form-select multiple-select-technologies" multiple="multiple">
                                    @forelse($technologies as $group => $technology)
                                        <optgroup label="{{$group}}" class="text-uppercase">
                                            @foreach($technology as $item)
                                                <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                                            @endforeach
                                        </optgroup>
                                    @empty
                                        <option value="">No skills available</option>
                                    @endforelse
                                </select>
                                <p class="error">@error('items.'.$index.'.name') {{$message}} @enderror</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" name="caption" wire:model="items.{{$index}}.caption" class="form-control">
                                <label for="caption">Caption</label>
                                <p class="error">@error('items.'.$index.'.caption') {{$message}} @enderror</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <div class="form-group">
                                <textarea name="description" wire:model="items.{{$index}}.description" class="form-control description"></textarea>
                                <label for="description">Tell us what you do</label>
                                <p class="error">@error('items.'.$index.'.description') {{$message}} @enderror</p>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <div class="dropzone" id="dropzone">
                                    <div>
                                        <label for="attachments" class="btn-add-media">
                                            <i class='bx bx-image-add'></i>Add Images
                                        </label>
                                        <input id="attachments" wire:model.live="items.{{$index}}.images" type="file" class="d-none" accept=".png, .jpg, .gif, .pdf, .mp4" multiple>
                                        <hr class="my-3">
                                        <h6>Drag or Drop</h6>
                                        <p>(Note: Allowed file types .png, .jpg, .gif, .pdf, .mp4)</p>
                                    </div>
                                </div>
                                <div id="error"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <div class="preview-display" wire:poll>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        <div class="alert alert-warning">
            <p>No Projects Found.</p>
        </div>
        @endforelse
        <button class="btn btn-primary float-end">Save</button>
    </form>
</div>

@script
<script>
    Livewire.on('test', () => {
        setTimeout(() => {
            $('.multiple-select-technologies').select2({
                width: '100%',
                theme: 'classic',
                placeholder: ' - CHOOSE TECHNOLOGIES - ',
                allowClear: false
            });
        }, 100);
    });
</script>
@endscript