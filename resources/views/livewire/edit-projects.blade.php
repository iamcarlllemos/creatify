<div>
    <div class="container">
        <div class="page-title">
            <h4>Share your latest work!</h4>
            <p>Get recognize through your projects and works.</p>
        </div>
        <div class="actions d-flex justify-content-end">
            <a wire:navigate href="/portfolio/projects" class="btn-add-item">
                <i class='bx bx-plus'></i> Go Back
            </a>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-12 mb-4">
                <div class="form-group" wire:ignore>
                    <select wire:model="selectedTechnologies" class="selectize" placeholder=" - CHOOSE TECHNOLOGIES - " multiple>
                        @forelse($technologies_lists as $group => $technology)
                            <optgroup label="{{$group}}" class="text-uppercase">
                                @foreach($technology as $item)
                                    <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </optgroup>
                        @empty
                            <option value="">No skills available</option>
                        @endforelse
                    </select>
                </div>
                <p class="error">@error('selectedTechnologies') {{$message}} @enderror</p>
            </div>
            <div class="col-12 col-md-12 mb-4">
                <div class="form-group" wire:ignore>
                    <input type="text" name="caption" wire:model="caption" class="form-control">
                    <label for="caption">Caption</label>
                </div>
                <p class="error">@error('caption') {{$message}} @enderror</p>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form-group" wire:ignore>
                    <input type="date" name="date_started" wire:model="date_started" class="form-control active-prevent">
                    <label for="date_started">Date Started</label>
                </div>
                <p class="error">@error('date_started') {{$message}} @enderror</p>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="form-group" wire:ignore>
                    <input type="date" name="date_finished" wire:model="date_finished" class="form-control active-prevent">
                    <label for="date_finished">Date Finished</label>
                </div>
                <p class="error">@error('date_finished') {{$message}} @enderror</p>
            </div>
            <div class="col-12 col-md-12 mb-4">
                <div class="form-group" wire:ignore>
                    <textarea name="description" wire:model="description" class="form-control description"></textarea>
                    <label for="description">Tell us what you do</label>
                </div>
                <p class="error">@error('description') {{$message}} @enderror</p>
            </div>
            <div class="col-12">
                <div class="form-group"
                    x-data="dragDrop()"
                    @dragover.prevent="dragover"
                    @dragleave.prevent="dragleave"
                    @drop.prevent="drop($event)"
                    >
                    <div class="dropzone" id="dropzone" @dragover.prevent @drop.prevent="drop($event)">
                        <div @dragover="dragover" @dragleave="dragleave">
                            <label for="attachments" class="btn-add-media">
                                <i class='bx bx-image-add'></i>Add Images
                            </label>
                            <input id="attachments" wire:model="attachments" type="file" class="d-none" multiple @change="uploadFiles($event.target.files)">
                            <hr class="my-3">
                            <h6>Drag or Drop</h6>
                            <p>(Note: Allowed file types .png, .jpg, .gif, .pdf, .mp4)</p>
                        </div>
                    </div>
                    <div x-show="uploading" class="w-100">
                        <div class="loading-container">
                            <div class="loading-progress" :style="{ width: `${progress}%` }"></div>
                        </div>
                    </div>
                    <div x-show="uploading" class="label-loading">
                        Uploading, Please Wait...<span x-text="progress + '%'"></span>
                    </div>
                    <p class="error">@error('attachments') {{$message}} @enderror</p>
                </div>
                <div>
                    @php
                        $allImages = true;
                    @endphp
                    @if($attachments)
                        @foreach ($attachments as $attachment)
                            @if (!in_array($attachment->getMimeType(), ['image/jpg', 'image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/svg+xml']))
                                @php
                                    $allImages = false;
                                @endphp
                            @endif
                        @endforeach
                    @endif
                    @if ($attachments && $allImages)
                        <small class="text-uppercase preview-label">Preview Image(s)</small>
                    @endif
                    <div class="preview-display {{$attachments && $allImages ? 'active' : ''}}">
                        @if($attachments)
                            <div class="row">
                                @if ($allImages)
                                    @foreach ($attachments as $index => $attachment)
                                        <div class="col-12 col-md-4 col-lg-3 position-relative">
                                            <div class="actions" wire:click="remove_image({{$index}})">
                                                <i class='bx bx-trash'></i>
                                            </div>
                                            <img src="{{ $attachment->temporaryUrl() }}" alt="Attachment Image" srcset="">
                                        </div>
                                    @endforeach
                                @else
                                    <p class="error">Attachment(s) uploaded is invalid!</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button wire:click="create" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>

        function dragDrop() {
            return {
                progress: 0,
                uploading: false,
                attachment: [],
                dragover() {
                   
                },
                dragleave() {

                },
                drop(e) {
                    if(event.dataTransfer.files.length > 0) {
                        const attachments = e.dataTransfer.files;
                        this.uploadFiles(attachments);
                    }
                },
                uploadFiles(attachments) {
                    this.uploading = true; 
                    @this.uploadMultiple('attachments', attachments, 
                        (success) => {
                            this.uploading = false;
                        }, (error) => {
                        }, (event) => {
                            this.progress = event.detail.progress;
                    });
                }
            }
        }

        function selectize() {
            var selectize = $('.selectize').selectize({
                plugins: ['remove_button'],
                delimiter: ',',
                persist: true,
                onChange: function(value) {
                    console.log(value);
                    @this.set('selectedTechnologies', value);
                }
            });
        }


        $(document).on('livewire:init', function () {
           selectize();
        });

      
        Livewire.on('swal', (data) => {
            Swal.fire({
                icon: data[0].type,
                title: data[0].title,
                text: data[0].text,
            });
        });

        Livewire.on('resetSelectize', (data) => {
            $('.selectize').each(function () {
                if (this.selectize) {
                    this.selectize.clear();
                }
            });
        });

    </script>
@endsection

