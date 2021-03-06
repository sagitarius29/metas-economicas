<!doctype html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pagando Deudas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->

</head>
<body>
<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mt-3">
                <h3>Control de Pago de Deudas</h3>
                <p>Recuerda pagar siempre las deudas a tiempo</p>
                <p>La idea es pagar la deuda más pequeña y continuar con las otras. Cada vez que pienses que estás haciendo
                    un gasto no planificado, mira este cuadro, te ayudará a mantener el enfoque de tus metas.
                </p>
            </div>
            <div class="col-sm-12">
                @foreach($metas as $meta)
                <div class="card mt-2">
                    <div class="card-body">
                        <span class="float-right">Cuotas {!! $meta->abono_cuotas !!}/{!! $meta->total_cuotas !!}</span>
                        <h5 class="card-title">META {!! $loop->iteration !!}. {!! $meta->nombre !!}</h5>
                        <p><strong>Deuda Total: </strong>S/ {!! number_format($meta->total/100, 2) !!} <strong>Deuda Pendiente: </strong>S/ {!! number_format($meta->montoFaltante()/100, 2) !!}</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {!! $meta->porcentaje() !!}%;" aria-valuenow="{!! $meta->porcentaje() !!}" aria-valuemin="0" aria-valuemax="100">{!! $meta->porcentaje() !!}%</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
