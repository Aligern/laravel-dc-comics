<div id="footerTop" class="text-white">
        <div class="container">
        @foreach ( $footerLinks as $link )
            <div id="box" class="d-flex">
                <img src="{{ $link['img'] }}" alt="Logos">
                    <a href="#">
                        {{ $link['text'] }}
                    </a>
            </div>
        @endforeach
        </div>
    </div>