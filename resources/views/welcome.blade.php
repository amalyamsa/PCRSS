@extends('layouts.app')

@section('content')



<!DOCTYPE html>
<html>
<head>
<title>Search</title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<!-- CSS styles for standard search box -->
<style type="text/css">
  #tfheader{
    background-color:white;
  }
  #tfnewsearch{
    float:right;
    padding:20px;
  }
  .tftextinput{
    margin: 0;
    padding: 5px 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size:14px;
    border:1px solid #0076a3; border-right:0px;
    border-top-left-radius: 5px 5px;
    border-bottom-left-radius: 5px 5px;
  }
  .tfbutton {
    margin: 0;
    padding: 5px 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-size:14px;
    outline: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    color: #ffffff;
    border: solid 1px #0076a3; border-right:0px;
    background: #0095cd;
    background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
    background: -moz-linear-gradient(top,  #00adee,  #0078a5);
    border-top-right-radius: 5px 5px;
    border-bottom-right-radius: 5px 5px;
  }
  .tfbutton:hover {
    text-decoration: none;
    background: #007ead;
    background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
    background: -moz-linear-gradient(top,  #0095cc,  #00678e);
  }
  /* Fixes submit button height problem in Firefox */
  .tfbutton::-moz-focus-inner {
    border: 0;
  }
  .tfclear{
    clear:both;
  }
</style>
</head>
<body>
  <!-- HTML for SEARCH BAR -->
  <div id="tfheader">
    <form id="tfnewsearch" method="get" action="http://www.google.com">
            <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
    </form>
  <div class="tfclear"></div>
  </div>
</body>
</html>


<div class="container">
    <div class="row">
        <div class="col-md-3">
          
        </div>
        <div class="col-md-6">
           <h1>PCSR</h1>
           <hr>
           <p>Police case registration system is a system that is intended to provide total computerized information system support for the work of the police. This system try to computerize the registration book that used at police offices to record the details of the cases received in the office.
In this system if crime is committed the victim or witness could go to any police station not necessary their local place and the responsible officer can register the crime direct onto the system.
The system can also provide access to information from external systems like in national identification office,hospitals,votes identification office and others that help in gathering data of criminals,victims and witnesses</p> <br>

<h1>PURPOSE</h1>
<hr>
<ul>
    <li>To improve the method of paper based process into computerized method</li>
    <li>Improve the effectiveness of police performance.</li>
    <li>To improve the efficiency of police procedures by removing redundant process in the registration of criminal cases.</li>
</ul>
<h1>SCOPE OF SYSTEM</h1>
<hr>
<ul>
    <li>Registration</li>
    <li>Case tracking</li>
    <li>Case view</li>
    <li>Print report</li>
</ul>
        </div>
        <div class="col-md-3">
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
            <h1><a href="">QUICK LINKS</a></h1>
            <hr>
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
@endsection
