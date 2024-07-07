@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4 px-4">
        <div class="row">
            <div class="col-12 col-md-7">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="{{route('portfolio.about')}}" wire:navigate class="nav-link {{$tab === 'about' ? 'active' : ''}}" id="pills-about-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-about" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="{{route('portfolio.skills')}}" wire:navigate class="nav-link {{$tab === 'skills' ? 'active' : ''}}" id="pills-skills-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-skills" aria-selected="false">Skills</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{$tab === '' ? 'active' : ''}}" id="pills-projects-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-projects" aria-selected="false">Projects</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{$tab === '' ? 'active' : ''}}" id="pills-projects-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-offers" aria-selected="false">Offers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{$tab === '' ? 'active' : ''}}" id="pills-projects-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-template" aria-selected="false">Template</button>
                    </li>
                </ul>
                @if ($tab === 'about')
                    @livewire('about')
                @elseif ($tab === 'skills')
                    @livewire('skills')
                @endif
            </div>
            <div class="col-12 col-md-5">
                preview here
            </div>
        </div>
    </div>
@endsection