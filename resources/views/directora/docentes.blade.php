<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- no additional media querie or css is required -->
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-7">
                <div class="card">
                    <div class="card-body">   
                    <a href="{{route('directora.registrarDocentes')}}" type="button" class="btn btn-primary">Agregar Docentes</a>
                    <div>.</div>

<table class="table table-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Fernando</td>
      <td>Cruz</td>
      <td>

         <button type="button" class="btn btn-primary">ver</button>
         <button type="button" class="btn btn-warning">editar</button>
         <button type="button" class="btn btn-danger">eliminar</button>

    </td>
    </tr>


     <tr>
      <th scope="row">2</th>
      <td>Fernando</td>
      <td>Cruz</td>
      <td>
         <button type="button" class="btn btn-primary">ver</button>
         <button type="button" class="btn btn-warning">editar</button>
         <button type="button" class="btn btn-danger">eliminar</button>

    </td>
    </tr>

     <tr>
      <th scope="row">3</th>
      <td>Fernando</td>
      <td>Cruz</td>
      <td>
         <button type="button" class="btn btn-primary">ver</button>
         <button type="button" class="btn btn-warning">editar</button>
         <button type="button" class="btn btn-danger">eliminar</button>

    </td>
    </tr>

  </tbody>
</table>


                    </div>
                </div>
            </div>
        </div>
    </div>