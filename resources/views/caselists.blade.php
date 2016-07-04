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
    <html>
       <head>
             <title> case list</title>
       </head>
       <body>
             <form action = "search.php" method = "GET" >
                    <center >
                           <h1 >search the case names</h1 >
                           <hr>
                           <input type = "text" size="50" name = "search" >
                           </br >
                           </br >
                           <input type = "submit" name = "submit" value = "Search" >
                    </center >
             </form >
       </body >
</html >
    
    
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
