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
                   <li ><a href="work.html">作品集</a></li>            
                   <li ><a href="about.html">關於我</a></li>
                   <li class="active" ><a href="contact.html">聯繫我</a></li>
               </ul>
               </nav>
           </div>    
       </div>
 </div>

     <!-- Menu END-->

      <!-- Content Start-->

  <div class="container">
      <div class="col-md-6">
          Test
      </div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
       <div class="col-md-6">
      {{var_dump(session()->all())}}
  <form action="submitContact"  method="POST" >
  {{ csrf_field() }}
      <div class="form-group row">
    <label class="col-sm-2 col-form-label">姓名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputtext" name="name" placeholder="姓名" value="{{ old ('name') }}">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="{{ old ('email') }}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">聯絡事項</label>
    <div class="col-sm-10">
    
      <textarea class="form-control" id="message" name="message"  rows="5" value="{{ old ('message') }}" ></textarea>
    </div>
  </div>
     <button type="submit" class="btn btn-primary">Submit</button>
</form>
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
			 <a href="#" id="goTop" class="link-to-top"><img id="top" src="images/top.png"></a>
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


