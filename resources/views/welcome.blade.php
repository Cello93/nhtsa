<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
        html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        }
        .full-height {
        height: 100vh;
        }
        .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        }
        .position-ref {
        position: relative;
        }
        .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
        }
        .content {
        text-align: center;
        }
        .title {
        font-size: 84px;
        }
        .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        }
        .m-b-md {
        margin-bottom: 30px;
        }
        </style>
    </head>
    <body>
        <br><br><br>
        <div class="container">
            <form action="{{url('/vehicles')}}" method="get" accept-charset="utf-8">
                <div class="row">
                    
                    
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="modeloano" placeholder="Modelo Año" value="{{$modeloano}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="manufactura" placeholder="Manufactura" value="{{$manufactura}}">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="modelo" placeholder="Modelo" value="{{$modelo}}">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="form-group">
                            <div class="input-group">
                                
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">Buscar </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        @if(isset($vehiculo))
                        <div class="body">
                            <table id="example2" class="table table-bordered table-striped table-hover dataTable js-exportable display">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Descripcion</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($vehiculo->Results as $veh)
                                    <tr>
                                        <td>{{$veh->VehicleId}}</td>
                                        <td>{{$veh->VehicleDescription}}</td>
                                        
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            
        </div>
        <script src="{{ asset('js/app2.js') }}"></script>
    </body>
</html>