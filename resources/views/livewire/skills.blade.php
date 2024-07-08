<div class="container">
    <div class="page-title">
        <h4>Showcase and be proud of your skills!</h4>
        <p>We're excited to learn about your skills, talents, and what you can do!</p>
    </div>
    <div class="actions d-flex justify-content-end mb-5">
        <button class="btn-add-item" wire:click="add_row">
            <i class='bx bx-plus'></i> Add New
        </button>
    </div>

    <form wire:submit="create">
        @forelse($rows as $index => $row)
            <div class="card shadow mb-4 p-3" wire:poll>
                <div class="card-header d-flex align-items-center justify-content-end border-0 bg-transparent pt-4">
                        <button class="btn-remove-item" wire:click.prevent="remove_row({{$index}}, {{$row['id']}})">
                            <i class='bx bx-trash' ></i>
                            Remove
                        </button>
                    </div>
                <div class="card-body p-3">
                    <div class="row">
                        <input type="text" wire:model="rows.{{$index}}.id">
                        <div class="col-12 col-md-12 mb-3">
                            <div class="form-group">
                                <select name="name" wire:model="rows.{{ $index }}.name" class="form-select">
                                    <option value=""> - CHOOSE SKILLS - </option>
                                    @forelse($skills_list as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @empty
                                        <option value="">No skills available</option>
                                    @endforelse
                                </select>
                                <p class="error">@error('rows.'.$index.'.name') {{$message}} @enderror</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="form-group">
                                <select name="experience" wire:model="rows.{{$index}}.experience" class="form-select">
                                    <option value=""> - CHOOSE EXPERIENCE - </option>
                                    <option value="1">1 Year</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="5">5 Years</option>
                                    <option value="more">5+ Years</option>
                                </select>
                                <p class="error">@error('rows.'.$index.'.experience') {{$message}} @enderror</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="form-group">
                                <select name="expertise" wire:model="rows.{{$index}}.expertise" class="form-select">
                                    <option value=""> - CHOOSE EXPERTISE - </option>
                                    <option value="entry">Entry Level</option>
                                    <option value="junior">Junior Level</option>
                                    <option value="mid">Mid Level</option>
                                    <option value="senior">Senior Level</option>
                                </select>
                                <p class="error">@error('rows.'.$index.'.experience') {{$message}} @enderror</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 mb-3">
                            <div class="form-group">
                                <textarea name="description" wire:model="rows.{{$index}}.description" class="form-control description"></textarea>
                                <label for="description">Tell us what you do!</label>
                                <p class="error">@error('rows.'.$index.'.description') {{$message}} @enderror</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        <div class="alert alert-warning">
            <p>No skills found.</p>
        </div>
        @endforelse
        <button class="btn btn-primary float-end">Save</button>
    </form>
</div>
