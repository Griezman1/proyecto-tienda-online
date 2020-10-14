<div class="panel-body">
 
    <section class="example mt-4">
 
        <form method="POST" action="{{ route('admin/articulos/update',$articulos->id) }}" role="form" enctype="multipart/form-data">
 
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            
            @include('admin.articulos.frm.prt')
 
        </form>
 
    </section>
 
</div>