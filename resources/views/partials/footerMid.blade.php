<div id="footerMid" >
       <div class="container d-flex justify-content-center"> 
            <div id="left" class="text-white d-flex">
                @foreach($footerMidLink as $key => $value)
                <ul>
                    <li>
                        <a href="#">{{$key}}</a>
                    </li>
                    @foreach($value as $link)
                    <li>
                        <a href="#">{{$link}}</a>
                    </li>
                    @endforeach
                </ul>
                @endforeach
            </div>
        <div id="right">
        </div>
        </div>
    </div>