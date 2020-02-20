<!-- Introduction -->
<section class="intro" id="home">
    <h1 class="section__title section__title--intro">
        Hi, I am <strong>{{ $user->name }} {{ $user->surname }}</strong>
    </h1>
    <p class="section__subtitle section__subtitle--intro txtType" data-wait='3000' data-words='[{{ $user->profesion }}]'></p>
    <img class="intro__img" src="{{ url('storage/img/' . $user->img) }}" alt="a picture of me">
</section>