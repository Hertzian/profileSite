<!-- Work -->
<section class="my-work" id="work">
    <h2 class="section__title section__title--work">My work</h2>
    <p class="section__subtitle section__subtitle--work">A selection of my range of work.</p>

    <div class="portfolio">
        
        @if (count($works) >= 1)
            @foreach ($works as $work)
                @if ($work->show)

                    <a id="link-work-{{ $work->id }}" href="{{ url('/work/' . $work->id) }}" class="portfolio__item">
                        <img id="pic-work-{{ $work->id }}" class="portfolio__img" src="{{ url('storage/img/'. $work->img) }}" alt="An image of work {{ $work->id }}" >
                    </a>
                    
                @endif
            @endforeach
        @endif

        
    </div>
    
</section>