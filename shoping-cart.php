<?php
require ('Conexion.php');
// require ('Control_sesion.php');

// echo $user;
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GrillExpress</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
                       <ul>
                           <li class="active"><a href="./index.html">Catálogo</a></li>
                           <li><a href="./blog.html">Receta</a></li>
                           <li><a href="./login.html">Iniciar sesión</a></li>
                       </ul>
                   </nav>
               </div>
               <div class="col-lg-3">
                   <div class="header__cart">

                       <ul>
                           <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                           <li><a href="carrito.html"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
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

    <!-- Hero Section Begin -->
    <br>
    <br>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>CARRITO DE:</h2>
                        <div class="breadcrumb__option">
                            <h3><USUARIO></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Productos</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $carrito="Select * from detalle_carito where id_carrito=1";
                                $resultado=mysqli_query($conexion,$carrito);
                                while($row = mysqli_fetch_array($resultado)) {?>
                                    <?php $producto= "Select * from producto where codigo=". $row['codigo_producto'];
                                    $resultado_producto=mysqli_query($conexion,$producto);
                                    while($fila = mysqli_fetch_array($resultado_producto)){?>
                                    <tr id="<?php echo $fila["codigo"]?>">
                                        <td><?php echo $fila["nombre"];?> <img width="200px" height="200px" src=<?php echo $fila["Imagen"];?>></td>
                                        <td><?php echo "$".$fila["Precio"]?></td>
                                    </tr>
                                    <?php }mysqli_free_result($resultado_producto);?>
                                <?php }
                                mysqli_free_result($resultado);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>TOTAL DEL CARRITO</h5>
                        <ul>
                            <li>Total <span>$505.00</span></li>
                        </ul>
                        <a href="./orden-de-compra.html" class="primary-btn">CERRAR COMPRA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

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
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>