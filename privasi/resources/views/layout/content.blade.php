        <div class="container">
           <nav class="navbar navbar-inverse">
           	<a class="navbar-brand" href="#">Title</a>
           	<ul class="nav navbar-nav">
           		<li class="active">
           			<a href="#">Home</a>
           		</li>
           		<li>
           			<a href="#">Link</a>
           		</li>
           	</ul>
           </nav>

           <div class="row">
           	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
           		
           		<form action="#" method="POST" class="form-horizontal" role="form">
           				<div class="form-group">
           					<legend>Form title</legend>
           				</div>
           		

           				<div class="form-group">
           					<div class="col-sm-10 col-sm-offset-2">
           						<label for="username" class="col-sm-2">Username</label>
           						<input type="text" class="form-control" id="username">
           					</div>
           				</div>

           					<div class="form-group">
           					<div class="col-sm-10 col-sm-offset-2">
           						<label for="password" class="col-sm-2">Password</label>
           						<input type="text" class="form-control" id="password">
           					</div>
           				</div>
           				
           		
           				<div class="form-group">
           					<div class="col-sm-10 col-sm-offset-2">
           						<button type="submit" class="btn btn-primary btn btn-block">Submit</button>
           					</div>
           				</div>
           		</form>


           	</div>


           </div>
		


           <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            {!! Form::open(array('url'=>''))  !!}
            {!! Form::label('nama', 'Nama') !!}
            {!! Form::text('username', null, array('placeholder' => 'form-control', 'class' => 'form-control')) !!}

            {!! Form::close() !!}


            </div>
          </div>


          <?=
          $c = "test";
          $t = 10;

          if($c == 'test'){

             $t = 10;
             $h = 30;
          }else{
             $t = 100;
             $h = 80;
          }

          ?>
            <div class="progress">
        <div class="progress progress-striped">
          <div class="bar" style="width: 60%;">60%</div>
        </div>
        </div>

        

          <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $t; ?>%;">
              <span class="sr-only"> <?php echo $t; ?>%</span>
              <?php echo $t; ?>%
            </div>

             <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: <?php echo $h; ?>%">
            <span class="sr-only"><?php echo $h; ?>%</span>
            <?php echo $h; ?>%
          </div>

          </div>

         



        </div>