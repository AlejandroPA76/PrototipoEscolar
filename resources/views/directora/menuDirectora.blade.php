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
                      <a href="{{route('directoraEstudiantes')}}" class="list-group-item list-group-item-action">Estudiantes</a>
                      <a href="{{route('directoraTutores')}}" class="list-group-item list-group-item-action">Tutores</a>
                      <a href="{{route('directoraCrearGrupo')}}" class="list-group-item list-group-item-action">Grupos</a>
                      <a href="{{route('directora.directoraDocentes')}}" class="list-group-item list-group-item-action disabled">Docentes</a>
                      </div>

                        </div>
                </div>
            </div>
        </div>
    </div>