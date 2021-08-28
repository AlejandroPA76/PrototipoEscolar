<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <ul class="nav">
                          <li class="nav-item">
                            <a class="nav-link active" href="{{route('menuTutor')}}">Pagos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('menuTutorObservaciones')}}">Observaciones</a>
                          </li>
                        </ul>
                    <div class="card-body">
                        <h1>Menu</h1>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Efectivo
                          </label>
                        </div>
                      
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Tarjeta
                          </label>
                        </div>

                        <div class="form-group">
                            <h5>subir comprobante</h5>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                          <button type="button" id="sendlogin" class="btn btn-primary float-right">Subir</button>
                        </div>
                </div>
            </div>
        </div>
    </div>