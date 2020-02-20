<!-- About -->
<section class="about-me" id="about">
    <h2 class="section__title section__title--about">About me</h2>
    <p class="section__subtitle section__subtitle--about txtType" data-wait='3000' data-words='[{{ $user->profesion }}]'></p>

    <div class="about-me__body">
        <p>{{ $user->bio }}</p>
    </div>

    <img class="about-me__img" src="{{ url('storage/img/' . $user->img)}}" alt="Jane leaning against a bus">

</section>