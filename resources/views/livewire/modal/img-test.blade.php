

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
 @foreach ($images as $key=>$url )
 <li data-target="#carousel-example-generic" data-slide-to="2"  class={{$keyimg == $key? 'active':''}}></li>
@endforeach

    </ol>
    <div class="carousel-inner" role="listbox">
        
        
        @foreach ($images as $key=>$imge )
        <div class="carousel-item  {{$keyimg == $key? 'active':''}}">
            <img src="
            {{ asset('storage/'.$imge['url']) }}" class="d-block w-100" height="200" alt="First slide">
        </div>
        @endforeach
      
       
    </div>
    <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>