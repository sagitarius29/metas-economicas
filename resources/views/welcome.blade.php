<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
        <div>
            <canvas id="canvas" width="600" height="1200"></canvas>
        </div>
        <script src="{!! asset('js/rough.js') !!}"></script>
        <script>
            var points = [
                {
                    name: 'Primera Meta',
                    done: true,
                    actual: 0.5,
                },
                {
                    name: 'Segunda Meta',
                    done: true,
                    actual: 0.5
                },
                {
                    name: 'Tercera Meta',
                    done: false,
                    actual: 0.5
                }
            ];

            var initial_point = {
                x: 80, y:80
            };

            var diametro_normal = 50;
            var diametro_pagado = 80;

            var max_width = 500 - diametro_pagado;

            var color_norma;
            var color_pagado;

            const rc = rough.canvas(document.getElementById('canvas'));

            rc.circle(initial_point.x, initial_point.y, diametro_normal);

            var previus_position = {
                x: initial_point.x,
                y: initial_point.y
            };

            var position = false;

            for(point in points) {
                let x = (position == false)
                    ? rand(Math.floor(max_width/2) + diametro_pagado, max_width - diametro_pagado)
                    : rand(diametro_pagado, Math.floor(max_width/2) - diametro_pagado);
                let y = previus_position.y + diametro_pagado + rand(0, 300);
                rc.circle(x, y, diametro_normal);
                previus_position.x = x;
                previus_position.y = y;
                position = !position;
            };

            /*setTimeout(function() {
                document.getElementById('canvas')[0].height = previus_position.y;
            }, 1000);*/

            function rand(min, max) {
                random = Math.floor(Math.random() * (max - min)) + min;
                console.log(random);
                return random;
            }

            /*rc.circle(80, 120, 50); // centerX, centerY, diameter
            rc.ellipse(300, 100, 150, 80); // centerX, centerY, width, height
            rc.line(80, 120, 300, 100); // x1, y1, x2, y2*/
        </script>
    </body>
</html>
