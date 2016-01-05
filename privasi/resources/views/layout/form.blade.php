{!! Form::open(array('route' => 'artisan_controller@route')) !!}
    <div class="container">
        <div class="row">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            
    <!-- Title form input -->
    <div class="form-group">
        {!! Form::label('npm', 'NPM:') !!}
        {!! Form::text('npm', null, ['class' => 'form-control']) !!}
    </div>

     <div class="form-group">
        {!! Form::label('nama', 'Nama:') !!}
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('kelas', 'Kelas:') !!}
        {!! Form::text('kelas', null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
        {!! Form::radio('jk', 'Perempuan') !!}
        {!! Form::radio('jk', 'laki laki') !!}
    </div>
    <!-- Content form input -->
    <div class="form-group">
        {!! Form::label('alamat', 'Alamat:') !!}
        {!! Form::textarea('alamat', null, ['class' => 'form-control','placeholder' => 'isikan alamat anda']) !!}
    </div>

      <div class="form-group">
        
        {!! Form::submit('simpan', ['class' => 'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>

    </div>
    <a href="{!! route('urlroute') !!}">test</a>

    

    </div>
    </div>



