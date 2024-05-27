<div id="footerbot" class="text-white">
        <div class="container d-flex justify-content-between align-items-center ">
            <div>
                <button>
                    SIGN-UP NOW
                </button>
            </div>
            <div class="d-flex align-items-center">
                <span>
                    FOLLOW US
                </span>

                <ul id="followList">
                    @foreach ( $footerBot as $item )
                        <li id="follow">
                            <a href="">
                            <img id="followImg" src="{{ $item['img'] }}" alt="Icons">
                            </a>
                        </li>
                    @endforeach
                   
                </ul>
            </div>
        </div>
    </div>