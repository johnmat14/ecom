  <?php
  //require_once('./config.php');
  require_once('./header.php');
  ?>
          <header class="containeer">
              <nav class="header1">
                
                <div class="logoa">
                  <a href="index.php"><img id="logo" src="imgs/logo.png" alt=""></a>

                </div>

                  <div class="opcoes">
                    <a id="opcao" href="#">Atendimento</a>
                    <a id="opcao" href="#">Meus favoritos</a> 
                    <a id="opcao" href="#">Meus pedidos</a>
                    <a id="opcao" href="#">Minha conta</a>  
              </div>
              
                    <div id="busca">
                        <input id="Search" type="text" placeholder="O que você busca?" >
                    </div>
                    <button id="head_button"><img id="Lupa" src="imgs/Lupinha.png" alt=""></button>  
                    
                    <div id="bag">
                        <a href="#">Minha Sacola</a>
                        <img src="imgs/sacola.png" alt="">

                    </div>                  
              </nav>

              <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="navbarC">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto"> 

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Donnuts comuns
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Chocolate</a>
                            <a class="dropdown-item" href="#">Chocolate Branco</a>     
                            <a class="dropdown-item" href="#">Hommer Simpson</a>                             
                          </div>
                        </li>

                      <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Donnuts Especiais
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Nutela</a>
                              <a class="dropdown-item" href="#">Raiz</a>
                              <a class="dropdown-item" href="#">Leite com toddy</a>                       
                            </div>
                      </li>

                      <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Quem somos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="#">A Loja</a>
                                  <a class="dropdown-item" href="#">Responsaveis</a>
                                  <a class="dropdown-item" href="#">Contatos e localização</a>
                                </div>
                    </li>
                      
                      <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Sair
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <div class = "logout">
                                    <button id = "logoutB">Sair</button>
                                  </div>                        
                                </div>
                      </li>        
                    
                    </ul>

                  </div>
                  
                </nav>     
            
          </header>
          <main ng-controller="Index as vm">
                <div class="slider">
                  <div><img id="preenche" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSl0KXiKUTPyhQYfFKTDmrMg_IW0-5P28EtrcURIVkmfZg2s1" alt=""></div>
                  <div><img id="preenche" src="https://minnesota-mp7static.mlsdigital.net/elfinderimages/Wallpapers/2/Wallpapers-02.png" alt=""></div>
                </div>


                <div class="destaque" >
                <h1>Destaques</h1>
                    <div class="itemCaixa" ng-repeat="total in vm.total">
                      <div class="produtCaixa">                  

                        <div id="imagemProd">
                         <img src={{total.img}}>
                        </div>
                        <h6>{{total.nome}}</h6>
                        <h5>{{total.preco}}</h5>
                        <div class="botProduto">
                          <h4>Comprar</h4>
                        </div >                        
                      </div> 
                    </div>        

                <div class="oferta">
                    <h1>Ofertas</h1>
                    <div class="itemCaixa" ng-repeat="dados in vm.dados">
                      <div class="produtCaixa">
                        <div  id="imagemProd">
                          <img src={{dados.img}} alt="">  
                        </div>
                        <h6>{{dados.nome}}</h6>
                        <h5 id="Oferta">{{dados.preco}}</h5>
                        <h5 >{{dados.precoN}}</h5>
                        <div class="botProduto">
                          <h4>Comprar</h4>
                        </div >                        
                      </div> 
                    </div> 
                </div>
          </main>

          <footer>
              <div class="container-fluid py-3 backcor">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-7">
                          <div class="row py-0">
                        <div class="col-sm-1 hidden-md-down">
                            <a class="bg-circle " href="#">
                              <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
                            </a>
                          </div>
                          <div class="col-sm-11 text-white">
                              <div><h4 class="header-font">  Contato</h4>
                                  <p>   <span class="header-font">donnut.arphy</span></p>
                              </div>
                          </div>
                          </div>
                      </div>
                      <div class="col-md-5">
                        <div class="d-inline-block">
                          <div class="bg-circle-outline d-inline-block" style="background-color:#faad61">
                            <a href="https://www.facebook.com/"><i class="fa fa-2x fa-fw fa-facebook text-white"></i>
                      </a>
                          </div>
                          <div class="bg-circle-outline d-inline-block" style="background-color:#faad61">
                            <a href="https://twitter.com/">
                              <i class="fa fa-2x fa-fw fa-twitter text-white"></i></a>
                          </div>
              
                          <div class="bg-circle-outline d-inline-block" style="background-color:#faad61">
                            <a href="https://www.linkedin.com/company/">
                              <i class="fa fa-2x fa-fw fa-linkedin text-white"></i></a>
                          </div>
                          <div class="bg-circle-outline d-inline-block" style="background-color:#faad61">
                            <a href="https://www.google.com/">
                              <i class="fa fa-2x fa-fw fa-google text-white"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </footer>
                <script src="js/index.js"></script>   
  <?php
  require_once('./footer.php');
  ?>
