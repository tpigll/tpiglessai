<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profil</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('css/argon.css')}}" rel="stylesheet">  
  <script src="/js/app.js"></script>
   <!-- Scripts -->
<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- This makes the current user's id available in javascript -->
    @if(!auth()->guest())
        <script>
            window.Laravel.userId = <?php echo auth()->user()->id; ?>
        </script>
@endif
        </head>

  <body style ="background-color:#FDF9F1;">
  <div id="app">
  
<articles>

<!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md  " id="sidenav-main" >
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand /img/logo1.png-->
      <a >
              
      <img src="/img/logo.png"  width="210 " height="150 ">   
            
          </a>
      <!-- Divider -->
        <hr class="my-3">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Navigation -->
        <ul class="navbar-nav"  >
          <li class="nav-item " >
            <a class="nav-link" href="{{URL::to('/acceuilE')}}" id="lis">
              <i class="fas fa-home"></i>Acceuil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/showetd')}}" id="lis">
              <i class="fas fa-user-circle" ></i> Mon Profil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/showprojetetud')}}" id="lis">
              <i class="fas fa-project-diagram"></i> Mes Projets
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/deconnexion')}}"id="lis">
              <i class="fas fa-sign-out-alt  " ></i> Déconnecter
            </a>
          </li>
          
        </ul>
        <!-- Divider -->
        <hr class=" my-3" style="background-color: #f4f5f7;">   
      </div>
    </div>
  </nav>
<div class="main-content">
<nav class="navbar navbar-top navbar-expand-md " id="navbar-main">
      <div class="container-fluid">


<ul class="navbar-nav align-items-center d-none d-md-flex ml-2 ">
        <li class="dropdown-notification-all ml-2 ">
             <a   id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            
              </a>
             <ul class="dropdown-menu ml-4 dropdown-menu-arrow" aria-labelledby="notificationsMenu" id="notificationsMenu" >
                    <li class="dropdown-header"  > <a href ="#"><span>No notifications</span> </a></li>
                 </ul>
          </li>
          </ul> 
         
          <a >
             <i  class="fas fa-question-circle fa-2x" style="color:#111721;" data-toggle="modal" data-target="#modal-default"></i> 
              </a> 
           
    </nav> 
    <div class="header  pb-8 pt-5 pt-md-8"  >
</div>
          <div class="container-fluid mt--8">
          <div class="row">
        <div class="col-xl-4 order-xl-4 mb-5 mb-xl-0">
        
          <div class="card card-profile shadow" style="background-color:#FFFff4;">
            <div class="row justify-content-center">
              <div class="col-lg-6 order-lg-2">
              <div class="card-profil-image-center mt-4 ">
                  <a href="">
                  
                  <img   
                  src="/img/av.png" 
                  style="overflow:hidden;
                  -webkit-border-radius:50px;
                   -moz-border-radius:50px;
                   border-radius:80px;
                   width:160px;
                   height:160px;"> 
                  </a>
                  
                </div>
              </div>
            </div>


            <div class="card-body pt-0 pt-md-4">
                <div class="text-center">
                <h3>
                <span class="font-weight-light elegant-color"></span>
                </h3>
              </div>
            </div>
            <form   enctype="multipart/form-data"  method="post">
             {{ csrf_field() }}
             <div class="row">
           <div class="col-2"></div>
            <div class="col-2"></div></div> 
            <div class="row"><div class="col-4"></div>
            <label  class="  mb-4 display-4" style=" color:#263238;" >Nom Prenom</label>
            <div class="col-4"></div></div>
             </form>
          </div>
          

          <div class="card shadow mt-3" id="form" style="display:none ;background-color:#FFFff4;">
         
              <div class="row align-items-center" >
                <div class="col-8">
              </div>
                  <hr style="weight:50px;" />
                  </div>


      <div class="card-body">
      <form  method="post" enctype="multipart/form-data">
   </div>
          <div class=" row ">
          <div class=" col-4 "></div>
           </div>
       </form>
      </div>
      </div>




      <div class="col-xl-8 order-xl-1 mb-3">
          <div class="card shadow" style="background-color:#FFFff4;">
            <div class="card-header  border-0"  style="background-color:#111721;" >
              <div class="row align-items-center" >
                <div class="col-8">
                  <h3 class="text-nowrap text-white display-4" >Mon profil</h3>
                 
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form 
              
                method="post" enctype="multipart/form-data" >
              {{ csrf_field() }}
              <label class="  mb-4 display-4" style=" color:#263238;">Information personnel</label> 
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="text-nowrap" style="color:#777474;" for="input-first-name">Nom</label>
                        <input  name="nom" type="text" id="input-first-name" class="  form-control"style="border-radius:30px;"  value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label  class="text-nowrap" style="color:#777474;" for="input-last-name">Prenom</label>
                        <input name="prenom" type="text" id="input-last-name" class=" form-control "  style="border-radius:30px;" value="">
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="text-nowrap" style="color:#777474;" for="input-first-name">Groupe</label>
                        <input name="annee" type="text" id="input-last-name" class=" form-control "  style="border-radius:30px;" value="">
                         
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label  class="text-nowrap" style="color:#777474;" for="input-last-name">Section</label>
                        <input name="annee" type="text" id="input-last-name" class=" form-control "  style="border-radius:30px;" value="">
                      </div>
                    </div>
                  </div>
                  </div>
                
                  
                
                <hr class="my-4" />
                <!-- Address -->
                <label class="  mb-4 display-4" style=" color:#263238;">information de contact </label >
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="text-nowrap" style="color:#777474;" for="input-email">Adresse Mail</label>
                        <input name="email" type="email" id="input-email" class=" form-control "  style="border-radius:30px;" value="" disabled >
                      </div>
                    </div>
                    
                  </div>
                </div>
               
                
                </div>
                <div class="row">
                <div class="col-4 text-right">
          </div>
            <div class="col-3 text-right"></div>
                <div class="col-4 text-right">
                  
                </div></div>
              </form>
            </div>
          </div>
        </div>
      </div>
   
      <footer>
          <div class="container-fluid">
          <div class="footer-copyright  row  py-3 grey-text" style=" font-family: marmelad;"> 
      <a class="col-10"> ESI © 2019-2020 </a>
      <a class="col-2 uppercase text-muted display ">e-Scolarité</a>
    </div>
          </div>
          </footer> 








      <script>
      function show ()
      {
        var x = document.getElementById("form");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
      }

      
      
      </script>





          <div class="row mt-5"></div>
           <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" >
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document"  >
        <div class="modal-content" style="background-color:#ffb74d; opacity= 0.5;">
          
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title-default" style="color:#111721;"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
               
            </div>
          
                   
           <div class="modal-body">
            <div class="row">
          
                  <div class=" col-10 text-LEFT"><h4 style="color:#111721;" >Bienvenue cher étudiant,</h4></div>
                  <div class=" col-10 text-LEFT mb-4"><h4 style="color:#111721;">Vous pouvez :</h4></div>
                  <br/>
  
            

            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Consulter vos projets </h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-project-diagram fa-2x"style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Consulter vos réunions </h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-edit fa-2x " style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Mettre votre avancement </h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-chart-line fa-2x "style="color: #111721;" ></a>
            </div>
          
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Consulter les commentaires </h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-comment-dots fa-2x " style="color: #111721;"></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Déposer un livrable </h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-check-circle fa-2x "style="color: #111721;" ></a>
            </div>
            <div class=" col-10 text-LEFT mb-3"><h4 style="color:#111721;">- Modifier votre profil </h4></div>
   <div class="col-2 text-CENTER mb-3"><a href="#!" class="fas fa-cogs fa-2x "style="color: #111721;" ></a>
            </div>
            </div>










            </articles>        
                </div >
                 


 <!-- Scripts -->
 


  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
 
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
   <script type="text/javascript" src="js/.js"></script>
</body>

</html>
