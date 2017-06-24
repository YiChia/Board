<!DOCTYPE html>
<html lang="en">
<head>
  <title>YiChia Photo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/main.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

<link  href="css/jquery.fancybox.min.css" rel="stylesheet">
<script src="js/jquery.fancybox.min.js"></script>
  
 
</head>
<body>


    <!-- TOP Start-->
 
  
    <!-- TOP END-->
    <!-- Menu Start-->
 <div class="container">
     <div class="navbar " role="navigation">
      
           <div class="navbar-header">
              <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                  <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" name="YiChia" href="#">YiChia Photo</a>
           </div>
           <div class="collpase navbar-collpase">
               <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
               <ul class="nav navbar-nav">
                   <li  class="active" ><a href="{{ action("WorkController@index")}}">作品集</a></li>            
                   <li ><a href="{{ action("AboutController@index")}}">關於我</a></li>
                   <li ><a href="{{ action("ContactUsController@index")}}">聯繫我</a></li>
               </ul>
               </nav>
           </div>    
       </div>
 </div>

     <!-- Menu END-->

      <!-- Content Start-->
    <div class="container">
       <p>
      @if (isset($data))
        <h1>{{ $data}}</h1>
      
    @endif

    
  
    
    @foreach($query as $var)
      @if($var->id%4==1)
       <div class="row">
       @endif     
    <div class="col-md-3">  
        <a href="{{ Storage::url($var->filename) }}" data-fancybox="gallery" target="_blank">
          <img class="img-responsive" src="{{ Storage::url($var->filename) }}" alt="Lights" >
          {{$var->id%4}}          
        </a>
    </div> 
   
     @if($var->id%4==0)
       </div >
       @endif 
    @endforeach
    
    
  </div>

  </div>
   <!-- Content END-->
   <!-- Content END-->
    <div class="container">
        <div class="row">
            <div  class="col-md-4 ">
            
            </div>
            <div  class="col-md-4 ">
            <p>Copyright © 2017 YiChia Lee.</p>
            </div>
            
        </div>
       <!-- Content END--> 

         <!-- Top Link -->
		 <div class="local-scroll">
			 <!--<a href="#" id="goTop" class="link-to-top"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true" ></span><img id="top" src="images/top.png"></a>-->
			 <a href="#" id="goTop" class="link-to-top"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true" >TOP</span></a>
		 </div>
		 <!-- End Top Link -->
 

</body>
<script type="text/javascript">
//回到最上層
$(function(){
$("goTop").click(function(){

   $("html,body").animate({scrollTop:0},900);

    return false;
}

});


   

</script>
</html>


