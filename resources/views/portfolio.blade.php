@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4 px-4">
        <div class="row">
            <div class="{{in_array(request()->query('action'), ['create']) ? 'col-12 col-md-12' : 'col-12 col-md-7' }}">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="/portfolio/about" wire:navigate class="nav-link {{$type === 'about' ? 'active' : ''}}" id="pills-about-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-about" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="/portfolio/skills" wire:navigate class="nav-link {{$type === 'skills' ? 'active' : ''}}" id="pills-skills-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-skills" aria-selected="false">Skills</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="/portfolio/projects" wire:navigate class="nav-link {{$type === 'projects' ? 'active' : ''}}" id="pills-projects-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-projects" aria-selected="false">Projects</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="/portfolio/offers" wire:navigate class="nav-link {{$type === 'offers' ? 'active' : ''}}" id="pills-projects-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-offers" aria-selected="false">Offers</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="/portfolio/template" wire:navigate class="nav-link {{$type === 'template' ? 'active' : ''}}" id="pills-projects-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="pills-template" aria-selected="false">Template</a>
                    </li>
                </ul>
                @if ($type === 'about')
                    @livewire('about')
                @elseif ($type === 'skills')
                    @livewire('skills')
                @elseif ($type === 'projects')
                    @if (request()->query('action') === 'create')
                        @livewire('add-projects')
                    @elseif(request()->query('action') === 'edit' && request()->query('id') != null)
                        @livewire('edit-projects')
                    @else
                        @livewire('projects')
                    @endif
                @elseif ($type === 'offers')
                    
                @elseif ($type === 'template')
                @endif
            </div>
            <div class="{{in_array(request()->query('action'), ['create']) ? 'd-none' : 'col-md-5' }}">
                preview here
            </div>
        </div>
    </div>
@endsection