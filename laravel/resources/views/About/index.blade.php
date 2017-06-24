@include('./head')

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
                  <li ><a href="{{ action("WorkController@index")}}">作品集</a></li>            
                   <li class="active"><a href="{{ action("AboutController@index")}}">關於我</a></li>
                   <li ><a href="{{ action("ContactUsController@index")}}">聯繫我</a></li> 
               </ul>
               </nav>
           </div>    
       </div>
 </div>

     <!-- Menu END-->

      <!-- Content Start-->
    <div class="container">
  <div class="row">
      <div class="col-md-3">  
       
          <img class="img-responsive" src="images/IMG_2551.jpg" alt="Lights" >          
       
    </div> 
    <div class="col-md-6">  
       <p>
           select aboutme
       </p>
    </div> 
    
  </div>
  </div>
   <!-- Content END-->
 @include('./footer')
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


