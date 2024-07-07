<div>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="true">About</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-skills-tab" data-bs-toggle="pill" data-bs-target="#pills-skills" type="button" role="tab" aria-controls="pills-skills" aria-selected="false">Skills</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-projects-tab" data-bs-toggle="pill" data-bs-target="#pills-projects" type="button" role="tab" aria-controls="pills-projects" aria-selected="false">Projects</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-projects-tab" data-bs-toggle="pill" data-bs-target="#pills-offers" type="button" role="tab" aria-controls="pills-offers" aria-selected="false">Offers</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-projects-tab" data-bs-toggle="pill" data-bs-target="#pills-template" type="button" role="tab" aria-controls="pills-template" aria-selected="false">Template</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab" tabindex="0">
            @livewire('about')
        </div>
        <div class="tab-pane fade" id="pills-skills" role="tabpanel" aria-labelledby="pills-skills-tab" tabindex="0">
            @livewire('skills');
        </div>
        <div class="tab-pane fade" id="pills-projects" role="tabpanel" aria-labelledby="pills-projects-tab" tabindex="0">

        </div>
        <div class="tab-pane fade" id="pills-offers" role="tabpanel" aria-labelledby="pills-offers-tab" tabindex="0">

        </div>
        <div class="tab-pane fade" id="pills-template" role="tabpanel" aria-labelledby="pills-template-tab" tabindex="0">

        </div>
    </div>
</div>
