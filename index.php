<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    
    <title>Ideas - Emmanuel Contreras</title>
    

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <link type="text/css" rel="stylesheet" href="bower_components/normalize-css/normalize.css"  media="screen"/>
    <link type="text/css" rel="stylesheet" href="bower_components/Materialize/dist/css/materialize.min.css"  media="screen"/>
    <link type="text/css" rel="stylesheet" href="css/style.idea.css"  media="screen,projection"/>    
    
  </head>
  <body>  
    <header>
      <nav>
        <div class="nav-wrapper">
          <a href="#" class="brand-logo"> <img src="./img/logo-nuevo.png" alt="CreativeOS"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </nav>
    </header>
    <section class="content">


      <section class="search">
        <h4 class="page-tit">Ideas</h4>
        <div class="row">
          <div class="create col col-w l3">
            <a href="#modal_create" id="btn-create" class="waves-effect waves-light btn-large modal-trigger" >Aportar Idea</a>
          </div>
          <div class="filter col l9">
            <div class="input-field col col-wt s4">
              <select id="order">
                <option value="" disabled selected>Ordenar Por</option>
                <option value="1">Mas Leida</option>
                <option value="2">Mas Comentada</option>
                <option value="3">Mas Votada</option>
              </select>              
            </div>
            <div class="input-field col col-wt s4">
              <select id="focid">
                <option value="" disabled selected>Selecciona un enfoque</option>
                <option value="1">Como mejorar transporte</option>
                <option value="2">Como mejorar la comunicacion</option>
                <option value="3">Como mejorar los viaje en avion</option>
              </select>              
            </div>
            <div class="input-field col col-wt s3">
              <input value="" id="search" type="text" class="validate" placeholder="Buscar Idea"> 
            </div>
            <div class="input-field col s1">  
               <a id="btn-search" class="btn-floating waves-effect waves-light"><i class="material-icons">search</i></a>             
            </div>
          </div>
        </div>
      </section>

      <section class="grid">       
        <!-- Load from mongo -->
      </section>

    </section>    
    
    <footer></footer>
    
    <!-- Modal Structure -->
    <div id="modal_create" class="modal">
      <div class="modal-header">
        <h3>Aportar Idea</h3>
        <a id="btn-close" href="#!" class="modal-action modal-close btn-floating waves-effect waves-light"><i class="material-icons">close</i></a> 
      </div>
      <div class="modal-content">
        <div class="row">
          <div class="input-field col  l10">
            <select id="focus2">
              <option value="" disabled selected>Selecciona un enfoque</option>
                <option value="1">Como mejorar transporte</option>
                <option value="2">Como mejorar la comunicacion</option>
                <option value="3">Como mejorar los viaje en avion</option>
            </select>              
          </div>
          <div class="input-field col l2">
            <a id="btn-add" class="waves-effect waves-light btn"><i class="material-icons left">add</i></a>
          </div>
        </div> 
        <div class="row">
          <div class="input-field col l12">
            <textarea id="observacion" class="materialize-textarea" placeholder="Escribre tu idea"></textarea>          
          </div>
        </div> 
      </div>
      <div class="modal-footer">
        <a href="#!" id="btn-save" class="modal-action modal-close waves-effect btn-flat">GUARDAR IDEA</a>
      </div>
    </div>


    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bower_components/Materialize/dist/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/ideas.fn.js"></script>
    <script>
      $(document).ready(function() {
        $('select').material_select();
        $('.modal-trigger').leanModal();
        get_ideas()
      });
    </script>
  </body>
</html>
