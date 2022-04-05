<!DOCTYPE html>
<html lang="es">

<head>
    <title>Marvel Studios</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>

<body>
    <?php
        include 'header.php'
    ?>
    <div id="controles" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Marvel Studios.webp" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/marvelreunidos.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/logomarvelnegro.jpg" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#controles" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previo</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#controles" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="card-group p-3">
        <div class="card">
            <img src="img/kevinfeige.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Kevin Feige</h5>
                <p class="card-text">Kevin Feige es el productor y presidente de Marvel Studios. Se unió a Marvel en el
                    año 2000 y desde entonces, ha participado en todas sus producciones cinematográficas.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/victoria.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Victoria Alonso</h5>
                <p class="card-text">Victoria Alonso es una productora de cine argentina. Actualmente es presidenta
                    ejecutiva de producción física en Marvel Studios.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/Louis.webp" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Louis D'Esposito</h5>
                <p class="card-text">Louis D'Esposito es el co-presidente de Marvel Studios y el productor ejecutivo de
                    innumerable productos.</p>
            </div>
        </div>
    </div>
    <h2 class="text-center">Calendario 2022</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="container-fluid p-3">
                    <h3 class="text-center">Series</h3>
                    <div class="accordion" id="acordeon">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Moon Knight
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body bg-light">
                                    Moon Knight es una próxima miniserie de televisión estadounidense creada por Jeremy
                                    Slater para
                                    el servicio de streaming Disney+, basada en el personaje de Marvel Comics del mismo
                                    nombre. Está
                                    ambientada en el Universo cinematográfico de Marvel, compartiendo continuidad con
                                    las películas
                                    de la franquicia.
                                </div>
                                <div class="container-fluid p-3">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark progreso1"
                                            role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed msmarvel text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Ms Marvel
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body msmarvel text-white">
                                    Kamala Khan es una superheroína de ficción que aparece en los cómics publicados por
                                    Marvel Comics. Creada por los editores Sana Amanat y Stephen Wacker, la escritora G.
                                    Willow Wilson y el artista Adrian Alphona, Khan es el primer personaje musulmán de
                                    Marvel que encabeza su propio cómic. Khan hizo su primera aparición en Captain
                                    Marvel # 14 (agosto de 2013), antes de hacerse cargo de la serie de cómics Ms.
                                    Marvel en febrero de 2014.
                                </div>
                                <div class="container-fluid p-3">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated msmarvel progreso2"
                                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed bg-success text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    She-Hulk
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body bg-success text-white">
                                    She-Hulk es una superheroína ficticia de cómics en las historias publicadas por la
                                    compañía
                                    Marvel Comics. Fue creada por Stan Lee y John Buscema y apareció por primera vez en
                                    la
                                    historieta Savage She Hulk #1.
                                </div>
                                <div class="container-fluid p-3">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success progreso3"
                                            role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button collapsed were text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                    Werewolf by Night
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body were text-white">
                                    El Hombre Lobo de Marvel es un personaje ficticio, un antihéroe que aparece en los
                                    cómics publicados por la editorial Marvel Comics. El personaje apareció por primera
                                    vez en Marvel Spotlight #2.
                                </div>
                                <div class="container-fluid p-3">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated were progreso3"
                                            role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid p-3">
                    <h3 class="text-center">Películas</h3>
                    <div class="accordion" id="acordeon">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOneOne">
                                <button class="accordion-button bg-primary text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOneOne"
                                    aria-expanded="true" aria-controls="panelsStayOpen-collapseOneOne">
                                    Thor Love and Thunder
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOneOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOneOne">
                                <div class="accordion-body bg-primary text-white">
                                    Thor: Love and Thunder es una próxima película de superhéroes estadounidense basada
                                    en el personaje de Marvel Comics, Thor, producida por Marvel Studios y distribuida
                                    por Walt Disney Studios Motion Pictures. Será una secuela de Thor: Ragnarok (2017),
                                    la cuarta entrega de la tetralogía y la vigésima novena del Universo cinematográfico
                                    de Marvel (UCM). Taika Waititi dirigirá la película, quien coescribió el guion con
                                    Jennifer Kaytin Robinson, está protagonizada por Chris Hemsworth como Thor, junto a
                                    Tessa Thompson, Natalie Portman, Christian Bale, Chris Pratt, Jaimie Alexander, Pom
                                    Klementieff, Dave Bautista, Karen Gillan, Sean Gunn, Jeff Goldblum, y Vin Diesel.
                                </div>
                                <div class="container-fluid p-3">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary progreso1"
                                            role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwoTwo">
                                <button class="accordion-button collapsed bg-danger text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwoTwo"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseTwoTwo">
                                    Doctor Strange in the Multiverse of Madness
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwoTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwoTwo">
                                <div class="accordion-body bg-danger text-white">
                                    Ahora que Iron Man y el Capitán América se han ido después de una feroz batalla en
                                    Avengers:
                                    Endgame, se espera que el ex genio cirujano y mago más fuerte de todos, el Doctor
                                    Strange,
                                    juegue un papel activo como figura central en los Vengadores. Sin embargo, usar su
                                    magia para
                                    manipular el tiempo y el espacio a voluntad con un hechizo prohibido que se
                                    considera el más
                                    peligroso, ha abierto la puerta a una misteriosa locura llamada 'el Multiverso'.
                                    Para restaurar
                                    un mundo en el que todo está cambiando, Strange busca la ayuda de su aliado Wong, el
                                    Hechicero
                                    Supremo, y la Bruja Escarlata más poderosa de los Vengadores, Wanda. Pero una
                                    terrible amenaza
                                    se cierne sobre la humanidad y el universo entero que ya no puede sostenerse con
                                    sólo su poder.
                                    Aún más sorprendente, la mayor amenaza en el universo luce exactamente como Doctor
                                    Strange...
                                </div>
                                <div class="container-fluid p-3">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger progreso2"
                                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThreeThree">
                                <button class="accordion-button collapsed bg-dark text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThreeThree"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThreeThree">
                                    Black Panther: Wakanda Forever
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThreeThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThreeThree">
                                <div class="accordion-body bg-dark text-white">
                                    Black Panther: Wakanda Forever es una próxima película de superhéroes basada en el
                                    personaje de Marvel Comics, Pantera Negra. Producida por Marvel Studios y
                                    distribuida por Walt Disney Studios Motion Pictures, está destinada a ser la secuela
                                    de Black Panther (2018) y la película número 30 del Universo cinematográfico de
                                    Marvel (MCU). La película está dirigida por Ryan Coogler, quien coescribió el guion
                                    con Joe Robert Cole, y estará protagonizada por Lupita Nyong'o, Danai Gurira, Martin
                                    Freeman, Letitia Wright, Winston Duke, Angela Bassett, y Dominique Thorne.
                                </div>
                                <div class="container-fluid p-3">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark progreso3"
                                            role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="text-center text-white footer">
        <div class="container p-4">
            <section class="">
                <form action="">
                    <div class="row d-flex justify-content-center">
                        <div class="col-auto">
                            <p class="pt-2">
                                <strong>Registrate en nuestro newsletter</strong>
                            </p>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="form5Example2" class="form-control" />
                            </div>
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-light mb-4">
                                Suscribirse
                            </button>
                        </div>
                    </div>
                </form>
            </section>
            <section class="md-4">
                <p>
                    Marvel Studios, LLC es un estudio cinematográfico estadounidense que tiene su sede en los
                    Walt
                    Disney Studios de Burbank, el estudio es una filial de The Walt Disney Company. Marvel
                    Studios es
                    conocido por producir el Universo cinematográfico de Marvel, basado en los personajes de
                    Marvel
                    Comics.
                </p>

                <a href="https://es-la.facebook.com/marvelstudios/" role="button" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-facebook"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <a href="https://twitter.com/MarvelStudios" role="button" class="btn twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                    </path>
                    </svg>
                </a>
                <a href="https://www.youtube.com/c/marvel" role="button" class="btn youtube">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-youtube"
                        viewBox="0 0 16 16">
                        <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                    </svg>
                </a>
            </section>
        </div>
        <div class="text-center p-3 copyright justify-content-between">
            <a target="_blank" href="img/Presentacion.webp">Marvel Studios &copy; 2022</a>
    </footer>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>