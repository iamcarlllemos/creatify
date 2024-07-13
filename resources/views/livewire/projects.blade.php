<div class="container">
    <div class="page-title">
        <h4>Share your latest work!</h4>
        <p>Get recognize through your projects and works.</p>
    </div>
    <div class="actions d-flex justify-content-end">
        <a wire:navigate href="/portfolio/projects?action=create" class="btn-add-item">
            <i class='bx bx-plus'></i> Add New
        </a>
    </div>
    <hr>
    @if ($selected)
        <div class="d-flex justify-content-end">
            <button class="btn btn-danger" wire:click="attemptDelete()">Remove Selected</button>
        </div>
    @endif
    <div class="item-content mt-4">
        @forelse($items as $index => $item)
            <div class="card shadow mb-4 item" data-id="{{$index}}">
                <div class="card-body p-4">
                    <div class="actions">
                        <div class="select">
                            <input type="checkbox" wire:change="updateSelected({{$item->id}})">
                        </div>
                        <div class="edit" wire:click.prevent="">
                            <i class='bx bx-edit-alt' ></i>
                        </div>
                        <div class="delete" wire:click.prevent="attemptDelete({{$item->id}})">
                            <i class='bx bx-trash'></i>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="caption">
                            <h5>{{$item->caption}}</h5>
                            <p>{{wordDate($item->created_at)}}</p>
                        </div>
                        <div class="caption-description">
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                    <div class="technologies grid">
                        @foreach ($item->technologies as $technologies)
                            <div class="oval">
                                {{$technologies['name']}}
                            </div>
                        @endforeach
                    </div>
                    
                    @if ($item->attachments && $item->attachments->count() > 0)
                        <hr>
                    @endif
                    <div class="attachments">
                        @if ($item->attachments && $item->attachments->count() > 4)
                            <div id="lightgallery" class="row">
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <a data-src="{{Storage::url('project_attachments/'.$items[$index]->attachments[0]->attachment)}}">
                                                <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[0]->attachment)}}" class="w-100" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <a data-src="{{Storage::url('project_attachments/'.$items[$index]->attachments[1]->attachment)}}">
                                                <img src="{{Storage::url('project_attachments/'.$items[$index]->attachments[1]->attachment)}}" class="w-100" alt="" srcset="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-12">
                                            <a data-src="{{Storage::url('project_attachments/'.$items[$index]->attachments[2]->attachment)}}">
                                                <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[2]->attachment)}}" class="w-100" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <div class="more-container">
                                                <div class="more">
                                                    <h4>+ {{$item->attachments->count() - 4}}</h4>
                                                </div>
                                                <a data-src="{{Storage::url('project_attachments/'.$items[$index]->attachments[3]->attachment)}}">
                                                    <img src="{{Storage::url('project_attachments/'.$items[$index]->attachments[3]->attachment)}}" class="w-100" alt="" srcset="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif ($item->attachments && $item->attachments->count() === 4)
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="lightgallery">
                                            <a href="{{Storage::url('project_attachments/'.$items[$index]->attachments[0]->attachment)}}">
                                                <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[0]->attachment)}}" class="w-100" alt="" srcset="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="lightgallery">
                                            <a href="{{Storage::url('project_attachments/'.$items[$index]->attachments[1]->attachment)}}">
                                                <img src="{{Storage::url('project_attachments/'.$items[$index]->attachments[1]->attachment)}}" class="w-100" alt="" srcset="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="lightgallery">
                                            <a href="{{Storage::url('project_attachments/'.$items[$index]->attachments[2]->attachment)}}">
                                                <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[2]->attachment)}}" class="w-100" alt="" srcset="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div id="lightgallery">
                                            <a href="{{Storage::url('project_attachments/'.$items[$index]->attachments[3]->attachment)}}">
                                                <img src="{{Storage::url('project_attachments/'.$items[$index]->attachments[3]->attachment)}}" class="w-100" alt="" srcset="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif ($item->attachments && $item->attachments->count() === 3)
                            <div class="col-12 col-md-7 main">
                                <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[0]->attachment)}}" class="w-100" alt="" srcset="">
                            </div>
                            <div class="col-12 col-md-5">
                                <div class="row">
                                    <div class="col-12">
                                        <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[1]->attachment)}}" class="w-100" alt="" srcset="">
                                    </div>
                                    <div class="col-12">
                                        <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[2]->attachment)}}" class="w-100" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        @elseif ($item->attachments && $item->attachments->count() == 2)
                            <div class="col-12 col-md-6">
                                <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[0]->attachment)}}" class="w-100" alt="" srcset="">
                            </div>
                            <div class="col-12 col-md-6">
                                <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[1]->attachment)}}" class="w-100" alt="" srcset="">
                            </div>
                        @elseif ($item->attachments && $item->attachments->count() == 1)
                            <div class="col-12 col-md-12 main">
                                <div id="lightgallery">
                                    <a href="{{Storage::url('project_attachments/'.$items[$index]->attachments[0]->attachment)}}">
                                        <img  src="{{Storage::url('project_attachments/'.$items[$index]->attachments[0]->attachment)}}" class="w-100" alt="" srcset="">
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @empty
        <div class="alert alert-warning">
            <p>No Projects Found.</p>
        </div>
        @endforelse
    </div>
</div>

@section('scripts')
<script>

    $(function() {
        
    });

    Livewire.on('confirmDelete', (event) => {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch('delete')
            }
        })
    });

    Livewire.on('swal', (data) => {
        Swal.fire({
            icon: data[0].type,
            title: data[0].title,
            text: data[0].text,
        });
        $('input[type="checkbox"]').prop('checked', false);
    });
</script>
@endsection