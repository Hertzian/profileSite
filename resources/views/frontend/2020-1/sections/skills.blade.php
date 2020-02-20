<!-- skills -->
<section class="skills" id="skills">
    <h2 class="section__title section__title--skills">Skills</h2>

    @foreach ($skills as $skill)
        @if ($skill->show)
            <h3>{{ $skill->name }}</h3>
            <div class="progressbar">
                <div class="progressbar-infill" style="width:{{ $skill->value }}%;"></div>
            </div>
            
        @endif    
    @endforeach

    {{-- <h3>PHP</h3>
    <div class="progressbar">
        <div class="progressbar-infill" style="width:90%;"></div>
    </div>

    <h3>Laravel</h3>
    <div class="progressbar">
        <div class="progressbar-infill" style="width:90%;"></div>
    </div> --}}
    
</section>