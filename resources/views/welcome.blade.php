<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fontend/css/style.css') }}">
  </head>
  <body>
    <section>
        <header>
            <nav class="navbar">
                <div class="container">
                    <div class="menu">
                        <ul class="d-flex">
                            <h1 class="text-white">start 3:20pm end 4:30pm</h1>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>
    <section>
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="container">
                        <p class="lead text-white  p-3">
                            In line with my interest and performance in Computer Engineering I have decided to
                            build up my career in the professional field. <br> So, I have excellent experience in Website Design and
                            Development. <br> I believe my abilities would be perfect for your venture. I can finish this job within the
                            necessary time frame. <br> I will be serving you with all my hard work skills.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container">
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    {{ $post->title }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ $post->description }}</p>
                                    <p class="card-text">Author: {{ $post->user->name }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="footer mt-3 p-3">
                        <h1 class="text-center text-white">Git link : https://github.com/oasifsadik/interview-test </h1>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
