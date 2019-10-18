@extends('layouts.app')

@section('content')
 
<body class="page-login layout-full page-dark">
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    @foreach($settingdata as $view)	
	<div class="page-content vertical-align-middle" style="background: rgba(40, 41, 41, 0.17);">
      <div class="brand">
	  <img class="navbar-brand-logo" style="height:100px" src="{{URL::to('/')}}/uploads/vip.png" title="Farazisoft"/>      
      
      </div>
    
       <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}         
		 
		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					
						<input id="email" type="text" class="form-control" placeholder="Usuario o Email " name="email" value="{{ old('email') }}" required>

						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif					
				</div>
			
		 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">			
				<input id="password" type="password" required class="form-control" name="password" placeholder="Contraseña">

				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
		</div>
		
          <div class="form-group clearfix">
		
			  @if($view->forget_password == 'ON')
				<a class="pull-right" href="{{ url('/password/reset') }}">¿No recuerdas tu contraseña?</a>
			  @endif
			
		  </div>
          <!--<button type="submit" class="btn btn-primary btn-block" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading..">{{ trans('app.sign_in')}}</button>-->
        
		<button type="submit" class="btn btn-primary ladda-button btn-block" data-plugin="ladda" data-style="expand-left">
			  Entrar
		<span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div>
		</button>
		
		</form>
		 <p>¿No tienes Cuenta? <a href="{{ url('/register') }}"> Registrate </a></p>
     
    </div>
    
@endforeach
@endsection
