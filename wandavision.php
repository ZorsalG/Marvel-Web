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
                <img src="img/wandavision.webp"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i0.wp.com/hipertextual.com/wp-content/uploads/2021/01/wandavision_jac_schaeffer_5.jpg?fit=1200%2C800&ssl=1"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/wandavisionblanca.webp"
                    class="d-block w-100" alt="...">
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-3">
                <h2>WandaVision</h2>
                <img
                    src="https://m.media-amazon.com/images/I/91uThdajb1L._AC_SY741_.jpg"
                    class="img-thumbnail" />
                <dl class="p-2">
                    <dt>Direcci??n</dt>
                    <dd>Matt Shakman</dd>
                    <dt>Producci??n</dt>
                    <dd>Kevin Feige</dd>
                    <dt>Gui??n</dt>
                    <dd>Jac Schaeffer</dd>
                    <dt>M??sica</dt>
                    <dd>Christophe Beck</dd>
                    <dt>Fotograf??a</dt>
                    <dd>Jess Hall</dd>
                </dl>
            </div>

            <div class="col-md-8 p-3">
                <h2>Sinopsis</h2>
                <p>WandaVision (conocida como Bruja Escarlata y Visi??n en Espa??a)1??? es una miniserie de televisi??n estadounidense creada por Jac Schaeffer para el servicio de streaming Disney+. Est?? basada en los personajes Wanda Maximoff / Bruja Escarlata y Visi??n, propiedad de Marvel Comics, y se encuentra ambientada en el Universo cinematogr??fico de Marvel (UCM). Comparte continuidad con las pel??culas de la franquicia, y tiene lugar despu??s de los eventos de la pel??cula Avengers: Endgame (2019). WandaVision est?? producida por Marvel Studios, y cuenta con Schaeffer como escritora principal y Matt Shakman como director.</p>

                <h2>Tr??iler</h2>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/sj9J2ecsSpo" title="YouTube video" allowfullscreen></iframe>
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
                    Marvel Studios, LLC es un estudio cinematogr??fico estadounidense que tiene su sede en los
                    Walt
                    Disney Studios de Burbank, el estudio es una filial de The Walt Disney Company. Marvel
                    Studios es
                    conocido por producir el Universo cinematogr??fico de Marvel, basado en los personajes de
                    Marvel
                    Comics.
                </p>

                <a href="https://es-la.facebook.com/marvelstudios/" role="button" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                </a>
                <a href="https://twitter.com/MarvelStudios" role="button" class="btn twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-twitter" viewBox="0 0 16 16">
                        <path
                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                    </svg>
                    </path>
                    </svg>
                </a>
                <a href="https://www.youtube.com/c/marvel" role="button" class="btn youtube">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-youtube" viewBox="0 0 16 16">
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