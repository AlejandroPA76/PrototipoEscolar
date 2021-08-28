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
                  
                  <table class="table table-white">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Notas</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Fernando</td>
      <td>Cruz</td>
      <td>

         <button type="button" class="btn btn-link">Ver</button>
         

    </td>
    </tr>


     <tr>
      <th scope="row">2</th>
      <td>Fernando</td>
      <td>Cruz</td>
      <td>
         <button type="button" class="btn btn-link">Ver</button>

    </td>
    </tr>

     <tr>
      <th scope="row">3</th>
      <td>Fernando</td>
      <td>Cruz</td>
      <td>
           <button type="button" class="btn btn-link">Ver</button>

    </td>
    </tr>

  </tbody>
</table>
            
   
                </div>
            </div>
        </div>
    </div>