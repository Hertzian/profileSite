<section class="my-services" id="services" style="background: url({{ url('storage/img/' . $user->background) }})">
    <h2 class="section__title section__title--services">My professional experience</h2>
    <div class="services">

        @if (count($jobs) >= 1)
            @foreach ($jobs as $job)
                @if ($job->show)
                    
                    <div id="job-{{ $job->id }}" class="service">
                        <h3>{{ $job->company }}</h3>
                        <p>{{ $job->job }}</p>
                        <p>{{ $job->assignment }}</p>
                    </div>


                @endif
            @endforeach            
        @endif

        
    </div>
    <a href="#work" class="btn">My work</a>
</section>