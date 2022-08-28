<!doctype html>
<html>
<head>
 

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


        <script src=" {{ URL:: asset('img-puckej/images-grid.js')}}"></script>
        <link rel="stylesheet"  href="{{ URL:: asset('img-puckej/images-grid.css')}}">

    </head>
    <body>
 
      
        <div id="gallery1"></div>

        <script>

            var images = [
                'https://unsplash.it/1300/800?image=875',
                'https://unsplash.it/1300/800?image=874',
                'https://unsplash.it/1300/800?image=872',
                'https://unsplash.it/1300/800?image=868',
                'https://unsplash.it/1300/800?image=839',
                'https://unsplash.it/1300/800?image=838'
            ];

            $(function() {

                $('#gallery1').imagesGrid({
                    images: images
                }); });

        </script>

    </body>
</html>
