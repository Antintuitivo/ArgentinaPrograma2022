<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../ArgentinaPrograma2022/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../ArgentinaPrograma2022/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../../ArgentinaPrograma2022/Frontend/css/index.css">
    <script src="../../ArgentinaPrograma2022/bootstrap/js/bootstrap.js"></script>
    <script src="../../ArgentinaPrograma2022/Frontend/ts/modal.ts"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 2;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><img class="rounded img-fluid" src="" alt="LinkedIn"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><img class="rounded img-fluid" src="" alt="Github"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><img class="rounded img-fluid" src="" alt="Instagram"></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" id="login">
            Login
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" data-target="#myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
            </div>
            </div>
        </div>
    </nav>
    <!-- carrusel -->
    <div class="container cuerpo">
        <div class=""><div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div> <!-- fin de carrusel -->
        <div class="introduccion m">
            <div>
                <img src="" alt="foto-admin">
                <h3>nombre y apellido</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea recusandae cupiditate impedit atque aliquam dolorem illo magnam ex? A sint et nisi consequuntur blanditiis nostrum placeat.</p>
        </div>
        <div class="Exp-laboral m">
            <div class="inst">
                <img src="" alt="imagen de empresa">
                <div class="contenido">
                    <h2>Puesto ocupado</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste veniam excepturi aut voluptates itaque dicta adipisci dolorem error, dolores explicabo sint, odit nihil iusto! Repellendus quis suscipit numquam facilis!</p>
                </div>
            </div>
            <div class="inst">
                <img src="" alt="imagen de empresa">
                <div class="contenido">
                <h2>Puesto ocupado</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste veniam excepturi aut voluptates itaque dicta adipisci dolorem error, dolores explicabo sint, odit nihil iusto! Repellendus quis suscipit numquam facilis!</p>
                </div>
            </div>
        </div>
        <div class="estudios m">
            <div class="inst">
                <img src="" alt="imagen de escuela">
                <div class="contenido">
                <h2>estudio reciente</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste veniam excepturi aut voluptates itaque dicta adipisci dolorem error, dolores explicabo sint, odit nihil iusto! Repellendus quis suscipit numquam facilis!</p>
                </div>
            </div>
            <div class="inst">
                <img src="" alt="imagen de curso">
                <div class="contenido"> 
                    <h2>curso reciente</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste veniam excepturi aut voluptates itaque dicta adipisci dolorem error, dolores explicabo sint, odit nihil iusto! Repellendus quis suscipit numquam facilis!</p>
                </div>
            </div>
        </div>
        <div class="habilidades m">
            <div class="inst centro">blandas</div>
            <div class="inst centro">duras</div>
        </div>
        <div class="proyectos m">
            <div class="inst">
                <img src="" alt="imagen de referencia">
                <div class="contenido">
                    <h2>Título de proyecto</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste veniam excepturi aut voluptates itaque dicta adipisci dolorem error, dolores explicabo sint, odit nihil iusto! Repellendus quis suscipit numquam facilis!</p>
                </div>
            </div>
            <div class="inst">
                <img src="" alt="imagen de referencia">
                <div class="contenido">
                    <h2>Título de proyecto</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus iste veniam excepturi aut voluptates itaque dicta adipisci dolorem error, dolores explicabo sint, odit nihil iusto! Repellendus quis suscipit numquam facilis!</p>
                </div>
            </div>
        </div>
        <!--<div id="formulario">
            <form action="" class="">
                <h2>Login</h2>
                <label for="email">Correo</label>
                <input type="email" placeholder="Ingrese su correo" name="email" required>
                
                <label for="pasw"></label>
                <input type="password" name="pasw" required>
                
                <button type="submit">Ingresar</button>
            </form>
        </div>--> 
    </div>
    <footer>redes sociales y contactos</footer>
</body>
</html>