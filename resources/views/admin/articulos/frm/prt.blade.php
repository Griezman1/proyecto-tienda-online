@if ( !empty ( $articulos->id) )
 
<div class="form-group">
    <label for="nombre" class="negrita">Nombre:</label>
    <div>
        <input class="form-control" placeholder="Jugo de Fresa" required="required" name="nombre" type="text" id="nombre" value="{{ $articulos->nombre }}">
    </div>
</div>
 
<div class="form-group">
    <label for="precio" class="negrita">Precio:</label>
    <div>
        <input class="form-control" placeholder="4.50" required="required" name="precio" type="text" id="precio" value="{{ $articulos->precio }}">
    </div>
</div>
 
<div class="form-group">
    <label for="cantidad" class="negrita">cantidad:</label>
    <div>
        <input class="form-control" placeholder="40" required="required" name="cantidad" type="text" id="cantidad" value="{{ $articulos->cantidad }}">
    </div>
</div>
 
<div class="form-group">
    <label for="img" class="negrita">Selecciona una imagen:</label>
    <div>
        <input name="img[]" type="file" id="img" multiple="multiple">
        <br>
        <br> 
        
        @if ( !empty ( $articulos->imagenes) )
 
          <span>Imagen(es) Actual(es): </span>
          
          <br>
 
          <!-- Mensaje: Imagen Eliminada Satisfactoriamente ! -->
          @if(Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{ Session::get('message') }}
            </div>
          @endif
 
          <!-- Mostramos todas las imágenes pertenecientesa a este registro -->
          @foreach($imagenes as $img)
 
            <img src="../../../uploads/{{ $img->nombre }}" width="200" class="img-fluid">
 
            <!-- Botón para Eliminar la Imagen individualmente -->
            <a href="{{ route('admin/articulos/eliminarimagen', [$img->id, $articulos->id]) }}" class="btn btn-danger btn-sm" onclick="return confirmarEliminar();">Eliminar</a> 
      
          @endforeach 
       
       @else 
      
       Aún no se ha cargado una imagen para este producto @endif
      
    </div>
 
</div>
 
@else
 
<! -- Acá mostramos el formulario en blanco para crear un nuevo registro -->
<div class="form-group">
      <label for="nombre" class="negrita">Nombre:</label>
      <div>
          <input class="form-control" placeholder="Articulos Giant" required="required" name="nombre" type="text" id="nombre">
      </div>
  </div>
 
  <div class="form-group">
      <label for="precio" class="negrita">Precio:</label>
      <div>
          <input class="form-control" placeholder="2500.00" required="required" name="precio" type="text" id="precio">
      </div>
  </div>
 
  <div class="form-group">
      <label for="cantidad" class="negrita">cantidad:</label>
      <div>
          <input class="form-control" placeholder="35" required="required" name="cantidad" type="text" id="cantidad">
      </div>
  </div>
 
  <div class="form-group">
      <label for="img" class="negrita">Selecciona una imagen:</label>
      <div>
          <input name="img[]" type="file" id="img" multiple="multiple">
      </div>
  </div>
 
@endif
 
  <button type="submit" class="btn btn-info">Guardar</button>
  <a href="{{ route('admin/articulos') }}" class="btn btn-warning">Cancelar</a>