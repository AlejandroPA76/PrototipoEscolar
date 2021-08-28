<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- no additional media querie or css is required -->
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                      <h1>Datos del Tutor</h1>
                        <form action="" autocomplete="off">
                            <div class="form-group">
                              <label>Nombre:</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                              <label>Apellidos:</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                             <div class="form-group">
                              <label>Telefono:</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div >
                               <a href="{{route('directoraAgregarAlumno')}}" class="float-right">Agregar alumno</a>
                            </div>

                              <div class="form-group">
                              <label>Usuario:</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                              <div class="form-group">
                              <label>Contrasena:</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                         <button type="button" id="sendlogin" class="btn btn-primary float-right">Registrar</button>
                            </div>
            
                             
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>