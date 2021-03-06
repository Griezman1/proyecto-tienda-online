<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="shortcut icon" href="https://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />

    <title>Inventario</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">      

  </head>

  <body> 

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="https://nubecolectiva.com"><img src="https://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="https://nubecolectiva.com">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://blog.nubecolectiva.com" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li> 
          </ul>
          <!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>



          <form name="bencc" method="get" action="https://www.google.com/search" id="bencc" class="form-inline mt-2 mt-md-0" target="_blank">
            <input type="hidden" name="domains" value="blog.nubecolectiva.com">
            <input type="hidden" name="sitesearch" value="blog.nubecolectiva.com">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Buscar...">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="document.getElementById('bencc').submit()">Buscar</button>
          </form>
          
          

        
        </div>
      </div>
    </nav>
    </header>

    <div class="pccp mt-5 mb-3" align="center">
              <!-- P -->
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-2390065838671224"
                   data-ad-slot="1441100372"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
              <!-- End P -->
    </div>


      <div class="container mb-5">

          <div class="row">

            <div class="col-md-12">

              

              <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                    
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group form">
                           <!--
                           <input type="text" class="form-control" placeholder="Buscar...">
                           <span class="input-group-btn">
                             <button class="btn btn-primary" type="button">Buscar</button>
                           </span>
                           -->
                      </div>
                    </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                         
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="page-content">
        <div class="row">
          
          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">

              
            </div>
          </div>
        
            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            
            <li class="breadcrumb-item active" aria-current="page">Articulos</li>
          </ol>
        </nav>
        
        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                <div class="panel-title"><center><h2>LISTA DE ARTICULOS DISPONIBLES</h2><center></div>             
                    
              </div>
                
                <div class="panel-body">

                
<div class="panel-body">
 
 @if(Session::has('message'))
 <div class="alert alert-primary" role="alert">
     {{ Session::get('message') }}
 </div>
 @endif


 <section class="example mt-4">

     <div class="table-responsive">

         <table class="table table-striped table-bordered table-hover">
             <thead>
                 <tr>
                     <th>Nombre</th>
                     <th>Precio</th>
                     <th>cantidad</th>
                     <th>Imagen</th>
                     <th>Acciones</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach($articulos as $bic)
                 <tr>
                     <td class="v-align-middle">{{$bic->nombre}}</td>
                     <td class="v-align-middle">{{$bic->precio}}</td>
                     <td class="v-align-middle">{{$bic->cantidad}}</td>
                     <td class="v-align-middle">
                         <img src="../uploads/{{$bic->imagenesarticulos()->first()->nombre}}" width="30" class="img-responsive">
                     </td>
                     <td class="v-align-middle">

                         <form action="{{ route('admin/articulos/eliminar',$bic->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">

                             <input type="hidden" name="_method" value="PUT">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             <button onclick="location.href='{{ url('admin/articulos/detallesproducto', [$bic->id]) }}'" href="" type="button" class="btn btn-dark">Ver</button>

                             <a href="{{ route('admin/articulos/actualizar',$bic->id) }}" class="btn btn-primary">Editar</a>

                             <button type="submit" class="btn btn-danger">Eliminar</button>

                         </form>

                     </td>
                 </tr>
                 @endforeach
             </tbody>
         </table>

     </div>
 </section>

</div>


<script type="text/javascript">
 
    function confirmarEliminar() {
        var x = confirm("Estas seguro de Eliminar?");
        if (x)
            return true;
        else
            return false;
    }
 
</script>

                  
    
  </body>
</html>
