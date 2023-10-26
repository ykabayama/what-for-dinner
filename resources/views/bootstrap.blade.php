{{-- テストページ --}}
<!doctype html>
<html>

<head>
    <meta charset='utf-8' />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bootstrapテスト</a>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col">col</div>
                <div class="col">col</div>
                <div class="col">col</div>
                <div class="col">col</div>
                <div class="col">col</div>
                <div class="col">col</div>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Columns with icons</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#collection" />
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                    and probably just keep going until we run out of words.</p>
                <a href="#" class="icon-link">
                    Call to action
                    <svg class="bi">
                        <use xlink:href="#chevron-right" />
                    </svg>
                </a>
            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#people-circle" />
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                    and probably just keep going until we run out of words.</p>
                <a href="#" class="icon-link">
                    Call to action
                    <svg class="bi">
                        <use xlink:href="#chevron-right" />
                    </svg>
                </a>
            </div>
            <div class="feature col">
                <div
                    class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#toggles2" />
                    </svg>
                </div>
                <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                    and probably just keep going until we run out of words.</p>
                <a href="#" class="icon-link">
                    Call to action
                    <svg class="bi">
                        <use xlink:href="#chevron-right" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
