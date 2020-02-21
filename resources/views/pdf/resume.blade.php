<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/2020-1-resume.css') }}">
    <title>About me</title>
</head>
<body>
    <div class="container flex">
        <section id="left" class="col-4 bg-primary">

            <img src="{{ url('storage/img/' . $user->img) }}" alt="a picture of me">

            <h2>{{ $user->name }} {{ $user->surname }}</h2>
            <p class="text-center">Web developer</p>

            <h3>Contact</h3>
            <p>Email: {{ $user->email }}</p>
            <p>Mobile: {{ $user->phone }}</p>

            <h3>Repository</h3>
            <p>{{ $user->github }}</p>

            <h3>LinkedIn</h3>
            <p>{{ $user->linkedin }}</p>

            <h3>Porfolio</h3>
            <p>https://eduardoaguilar.dev</p>
        </section>

        <section id="right" class="col-8">
            <div>
                <h2>About me</h2>
                <p>{{ $user->bio }}</p>
            </div>

            <div>
                <h2>Profesional experience</h2>
                <div class="profesional">
                    @foreach ($jobs as $job)
                        <div class="experience">

                            <div class="year">{{ $job->year }}</div>
                            <div class="column">
                                <span class="company">{{ $job->company }}</span>
                                <span class="job">{{ $job->job }}</span>
                            </div>
                        </div>
                    
                    @endforeach
                </div>
            </div>

            <div>
                <h2>Academic training</h2>
                <div class="profesional">
                    <div class="experience">
                        <div class="year">2018</div>
                        <div class="column">
                            <span class="company">Computer Engineering</span>
                            <span class="job">Universidad Lamar, Guadalajara Jalisco</span>

                        </div>
                    </div>
                </div>
            </div>


            <div class="skills">
                <h2>English, Skills, Programing/Markup</h2>
                <div class="grid">

                    @foreach ($skills as $skill)
                        <div>
                            <h3>{{ $skill->name }}</h3>
                            <div class="progressbar">
                                <div class="progressbarFill" style="width:{{ $skill->value }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </section>


        
    </div>
</body>
</html>