<div class="container">
    <div class="page-title">
        <h4>Introduce yourself to us!</h4>
        <p>Fill out the information below for us to recognized you.</p>
    </div>
    <form wire:submit="create">
        <div class="row" wire:poll>
            <div class="col-12 col-md-12 mb-3">
                <div class="form-group">
                    <div class="profile-image">

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="form-group">
                    <input type="text" name="firstname" wire:model="firstname" class="form-control {{$firstname ? 'active' : ''}}">
                    <label for="firstname">First Name</label>
                    <p class="error">@error('firstname') {{$message}} @enderror</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="form-group">
                    <input type="text" name="middlename" wire:model="middlename" class="form-control {{$middlename ? 'active' : ''}}">
                    <label for="middle">Middle Name</label>
                    <p class="error">@error('middlename') {{$message}} @enderror</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <div class="form-group">
                    <input type="text" name="lastname" wire:model="lastname" class="form-control {{$lastname ? 'active' : ''}}">
                    <label for="lastname">Last Name</label>
                    <p class="error">@error('lastname') {{$message}} @enderror</p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="form-group">
                    <select name="gender" wire:model="gender" class="form-select">
                        <option value=""> - CHOOSE GENDER - </option>
                    </select>
                    <p class="error">@error('gender') {{$message}} @enderror</p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="form-group">
                    <input type="date" name="birthday" wire:model="birthday" class="form-control">
                    <p class="error">@error('birthday') {{$message}} @enderror</p>
                </div>
            </div>
            <div class="col-12 col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" name="phone_no" wire:model="phone_no" class="form-control {{$phone_no ? 'active' : ''}}">
                    <label for="phone_no">Phone No.</label>
                    <p class="error">@error('phone_no') {{$message}} @enderror</p>
                </div>
            </div>
            <div class="col-12 col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" name="address" wire:model="address" class="form-control {{$address ? 'active' : ''}}">
                    <label for="address">Address</label>
                    <p class="error">@error('address') {{$message}} @enderror</p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="form-group">
                    <select name="city" wire:model="city" class="form-select">
                        <option value=""> - CHOOSE CITY - </option>
                    </select>
                    <p class="error">@error('city') {{$message}} @enderror</p>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="form-group">
                    <select name="province" wire:model="province" class="form-select">
                        <option value=""> - CHOOSE REGION - </option>
                    </select>
                    <p class="error">@error('province') {{$message}} @enderror</p>
                </div>
            </div>
        </div>
        <button class="btn btn-primary float-end">Save</button>
    </form>
</div>
