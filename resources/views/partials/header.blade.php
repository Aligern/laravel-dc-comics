<header class="pt-3 pb-3 ps-5">
    <div class="d-flex justify-content-evenly align-items-center">
        <div>
            <img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="Logo">
        </div>
        <div>
            <ul class="d-flex">
                @foreach ($links as $link)
                <li class="list-unstyled px-2">
                    <a class="text-decoration-none" href="/">
                        {{ $link }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>

