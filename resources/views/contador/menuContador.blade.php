<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h1>Menu</h1>
                      <div class="list-group">
                      <a href="{{route('menuContadorHistorialDePagos')}}" class="list-group-item list-group-item-action">Historial Pagos</a>
                      <a href="{{route('menuContadorHistorialDePagosReciente')}}" class="list-group-item list-group-item-action">Pagos recientes</a>
                     
                        </div>
                </div>
            </div>
        </div>
    </div>