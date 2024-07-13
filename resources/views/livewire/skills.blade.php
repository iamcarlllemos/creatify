<div class="container">
    <div class="page-title">
        <h4>Showcase and be proud of your skills!</h4>
        <p>We're excited to learn about your skills, talents, and what you can do!</p>
    </div>
    <div class="actions d-flex justify-content-end">
        <button class="btn-add-item" data-bs-toggle="modal" data-bs-target="#addItem">
            <i class='bx bx-plus'></i> Add New
        </button>
    </div>
    <hr>
    <div class="item-content grid">
        @forelse($items as $index => $item)
            <div class="oval">
                {{$item['name']}}
            </div>
        @empty
        <div class="alert alert-warning">
            <p>No skills found.</p>
        </div>
        @endforelse
    </div>

    <div wire:ignore.self class="modal fade" id="addItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form wire:submit.prevent="create">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-uppercase">Tell us your skills!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="item mt-3">
                            <div class="col-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <select name="name" wire:model="name" class="form-select">
                                        <option value=""> - CHOOSE SKILLS - </option>
                                        @forelse($skills_list as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                        @empty
                                            <option value="">No skills available</option>
                                        @endforelse
                                    </select>
                                    <p class="error">@error('name') {{$message}} @enderror</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-group">
                                    <select name="experience" wire:model="experience" class="form-select">
                                        <option value=""> - CHOOSE EXPERIENCE - </option>
                                        <option value="1">1 Year</option>
                                        <option value="2">2 Years</option>
                                        <option value="3">3 Years</option>
                                        <option value="4">4 Years</option>
                                        <option value="5">5 Years</option>
                                        <option value="more">5+ Years</option>
                                    </select>
                                    <p class="error">@error('experience') {{$message}} @enderror</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-group">
                                    <select name="expertise" wire:model="expertise" class="form-select">
                                        <option value=""> - CHOOSE EXPERTISE - </option>
                                        <option value="entry">Entry Level</option>
                                        <option value="junior">Junior Level</option>
                                        <option value="mid">Mid Level</option>
                                        <option value="senior">Senior Level</option>
                                    </select>
                                    <p class="error">@error('experience') {{$message}} @enderror</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <textarea name="description" wire:model="description" class="form-control description"></textarea>
                                    <label for="description">Tell us what you do!</label>
                                    <p class="error">@error('description') {{$message}} @enderror</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@section('scripts')

<script>
    $(function() {
        Livewire.on('swal', (data) => {
            Swal.fire({
                icon: data[0].type,
                title: data[0].title,
                text: data[0].text,
            });
        });
    });
</script>

@endsection