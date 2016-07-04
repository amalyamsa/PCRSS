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
        
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <img src="img/taifa.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/3-10.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/taifa.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/3-10.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     <h1>WELCOME</h1>
         <hr/>

         <div class="row">
    <p>The system is web based which stores information of the victims or witnesses like name,ID,nationality and others and the system provides the list and the details of crimes registered in the system. 
Also this system allow police officers to upload the picture of the crimes committed and the criminals. 
The PCRS prints RB number,lost report and hospital treatment report and Also can track all cases that can be updated automatically and read all cases from different police stations.
N.B
This system is not for public use only police officers can use to register and use it.  </p>
<br/>
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
