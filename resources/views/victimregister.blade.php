@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row">
     <div class="col-md-3">
     <div class="row0">
        <a href="{{ url('/Caseregister') }}">Case register</a> 
        </div>
        <div class="row1">
        <a href="{{ url('/officerregister') }}">Register officers</a> 
        </div>
        <div class="row1">
        <a href="{{url('/victimregister')}}">Register victims</a> 
        </div>
        <div class="row1">
        <a href="{{url('/criminalregister')}}">Register  criminals</a> 
        </div>
        <div class="row1">
        <a href="{{url('/witnessregister')}}">Register witness</a> 
        </div>
        <div class="row1">
        <a href="{{ url('/caselists') }}">Case lists</a> 
        </div>
        <div class="row1">
        <a href="{{ url('/informations') }}">Informations</a> 
        </div>
     </div>
     <div class="col-md-6">
        
     <div class="panel panel-default">
                <div class="panel-heading">Register victim</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="">

                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sex" class="col-md-4 control-label">Sex:</label>
                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" class="" name="sex"  value="ME" checked> M
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" class="" name="sex"  value="KE"> F
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">
                                City:
                            </label>
                            <div class="col-md-6">
                                <select name="city" id="city" class="form-control">
                                    <option>Dar-es-Salaam</option>
                                    <option>Arusha</option>
                                    <option>Mwanza</option>
                                    <option>Dodoma</option>
                                    <option>Tanga</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="municipal" class="col-md-4 control-label">
                                Municipal:
                            </label>
                            <div class="col-md-6">
                                <select name="municipal" id="municipal" class="form-control">
                                    <option>Kinondoni</option>
                                    <option>Ilala</option>
                                    <option>Temeke</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="ward" class="col-md-4 control-label">
                                Ward:
                            </label>
                            <div class="col-md-6">
                                <select name="ward" id="ward" class="form-control">
                                    <option>Mwenge</option>
                                    <option>Ubungo</option>
                                    <option>Kijitonyama</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="street" class="col-md-4 control-label">
                                Street:
                            </label>
                            <div class="col-md-6">
                                <select name="street" id="street" class="form-control">
                                    <option>Mlalakuwa</option>
                                    <option>Mpakani</option>
                                    <option>Lufungira</option>
                                </select>
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Tel No</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}">

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </d

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
     </div>
   <div class="col-md-2">
       <img src="img/fae6Police-officers.jpg" class="imghome">
       <h2 class="widget"><a href="">QUICK LINKS</a></h2>
       <ul>
       <li class="cat-item cat-item-3"><a href="http://nida.go.tz/swahili/" >NIDA</a></li>
        <li class="cat-item cat-item-4"><a href="http://www.nec.go.tz/" >BVR</a></li>
        <li class="cat-item cat-item-5"><a href="http://www.moh.go.tz" >MOH</a></li>
        <li class="cat-item cat-item-6"><a href="http://www.policeforce.go.tz">POLICEFORCE</a></li>
        <li class="cat-item cat-item-7"><a href="http://www.jkt.go.tz" >JKT</a></li>
    </ul>
   </div>

 </div>
    </div>
</div>
@endsection
