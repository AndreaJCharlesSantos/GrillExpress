<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Agregar Producto">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grill Express</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
.ob:before {
  content: '*';
  margin-left: 3px;
  color: red;
  font-weight: bold;
}
    </style>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logitor.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">Artículo: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i>Ingresar</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Catálogo</a></li>
                <li><a href="./blog.html">Receta</a></li>
                <li><a href="./login.html">Iniciar sesión</a></li>
                <li><a href="#">Acciones</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./PublicarBlog.html">Añadir receta</a></li>
                        <li><a href="./ProductoNuevo.html">Añadir producto</a></li>
                    </ul>
                </li>
            </ul>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
    </div>
    <!-- Humberger End -->
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logitor.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <div class="header2">
                            <ul>
                                <li class="active"><a href="./index.html">Catálogo</a></li>
                                <li><a href="./blog.html">Receta</a></li>
                                <li><a href="./login.html">Cerrar sesión</a></li>
                                <li><a href="#">Acciones</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="./PublicarBlog.html">Añadir receta</a></li>
                                        <li><a href="./ProductoNuevo.html">Añadir producto</a></li>
                                    </ul>
                                </li>
    
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="shoping-cart.html"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Artículo: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <section class="product-details1 spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Agregar un Nuevo Producto</h2>
                    </div>
                </div>
                <div class="">
                    <article>
                    <form method="POST" action="prueba.php" enctype="multipart/form-data">
                          <fieldset>
                            <ol class="lista">
                              <li>
                                <p   for="nombre">Nombre del Producto
                                <input class="ob" type="text" autofocus maxlength="20" name="nombre" placeholder="Producto" required title="Este campo es Obligatorio."> </p>
                              </li>
                              <li>
                                <p   for="codigo">Código del Producto: 
                                <input class="ob" type="text" placeholder="Código" maxlength="15" name="cod" required title="Este campo es Obligatorio."></p>
                              </li>
                              <li>
                                <p  >Categoria: </p>
                                    <select class="Select" name="cat" required title="Este campo es Obligatorio.">
                                        <option value="carne">Cortes</option>
                                        <option value="sazon">Sazonadores</option>
                                        <option value="complemento">Utencilios</option>
                                      </select>                                    
                              </li>
                              <br>
                              <li>
                                <p   for="cantidad">Cantidad en Stock: 
                                <input class="ob" type="number" value="1" name="cant" required title="Este campo es Obligatorio."></p>
                              </li>
                              <li>
                                <p   for="precio" id="precio">Precio: $
                                <input class="ob" type="text" maxlength="10" name="price" value="0.00" required title="Este campo es Obligatorio."></p>
                              </li>
                              <li>
                                  <p  >Insertar Imagen: </p>
                                  <input id="imagen" name="imagen" size="30" type="file" required>    
                              </li>
                            </ol>
                            <br>
                            <input type="submit" value="Agregar" name="aceptar" class="site-btn">
                          </fieldset>
                        </form>
                      </article>
                      <form action="cambiodatospersonales.php" enctype="multipart/form-data" method="post">
                        <label for="imagen">Imagen:</label> <input id="imagen" name="imagen" size="30" type="file"> 
                    <input type="submit" value="Cambiar datos">
                        </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/Coma.js"></script>
</body>
</html>