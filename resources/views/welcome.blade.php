<!DOCTYPE html>
<html lang="en">
<head>
    <title>GO-MIC - The Easiest Way to Read Comics</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GO-MIC | Cara termudah membaca komik, manhwa, dll. | The Easiest Way to Read Comics">
    <meta name="author" content="GO-MIC">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300,600,900,800,700,200,100' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
    <script defer src="{{ asset("frontend/all.css") }}") }}" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset("frontend/bootstrap.min.css") }}">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset("frontend/pe-icon-7-stroke.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/helper.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("frontend/owl.theme.default.min.css") }}">       
    <link rel="stylesheet" href="{{ asset("frontend/jquery.fullpage.css") }}">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset("frontend/theme.css") }}">
    
    {{-- <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1506230579705064');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1506230579705064&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code --> --}}

</head> 

<body class="homepage">       
    
    {{-- <nav id="myNavmenu" class="navbar navmenu text-center d-block" role="navigation">
        <a href="#" id="navmenu-close" class="navmenu-close">&times;</a>
        <ul class="list-unstyled menu-links">
            <li class="nav-item active"><a href="index.html">Home</a></li>
            <li class="nav-item"><a href="about.html">About</a></li>
            <li class="nav-item"><a href="press.html">Press</a></li>
            <li class="nav-item"><a href="pricing.html">Pricing</a></li>
            <li class="nav-item"><a href="faqs.html">FAQs</a></li>
            <li class="nav-item"><a href="jobs.html">Jobs</a></li>
            <li class="nav-item"><a href="job-single.html">Job Single</a></li>
            <li class="nav-item"><a href="blog.html">Blog</a></li>
            <li class="nav-item"><a href="blog-post.html">Blog Post</a></li>
            <li class="nav-item"><a href="contact.html">Contact</a></li>
            <li class="nav-item last"><a href="404.html">404</a></li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Options<i class="fas fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="index.html">iPhone X <span class="badge badge-success">NEW</span></a></li>
                    <li><a href="index-iphone-1.html">iPhone (Gold)</a></li>
                    <li><a href="index-iphone-2.html">iPhone (Black)</a></li>
                    <li><a href="index-android.html">Android</a></li>                   
                </ul>                            
            </li><!--//dropdown--> 
        </ul>
        <ul class="social-icons list-inline">
            <li class="list-inline-item"><a href="https://twitter.com/3rdwave_themes"><i class="fab fa-twitter"></i></a></li>                        
            <li class="list-inline-item"><a href="https://www.facebook.com/3rdwavethemes"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="https://www.facebook.com/3rdwavethemes"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>                    
        </ul> 
        
        <ul class="list-unstyled download-buttons">
            <li class="app-store"><a href="#"><img class="img-fluid d-block" src="{{ asset("frontend/images/buttons/btn-app-store.png") }}" alt="Download from App Store" /></a></li>
            <li class="google-play"><a href="#"><img class="img-fluid d-block" src="{{ asset("frontend/images/buttons/btn-google-play.png") }}" alt="Download from Google Play" /></a></li>
            <li class="windows-store"><a href="#"><img class="img-fluid d-block" src="{{ asset("frontend/images/buttons/btn-windows-store.png") }}" alt="Download from Windows Phone Store" /></a></li>
        </ul><!--//list-unstyled-->
        
    </nav>   --}}
    
    <div class="canvas-wrapper" id="canvas-wrapper">
        <!-- ******HEADER****** --> 
        <header id="header" class="header fixed-top">  
            <div class="container">
                <h1 class="logo">
                    <a href="index.html">GO-MIC</a>
                </h1><!--//logo-->
                <div class="social-container text-center">
                    <ul class="social-icons list-inline">
                        {{-- <li class="list-inline-item"><a href="https://twitter.com/3rdwave_themes"><i class="fab fa-twitter"></i></a></li>                         --}}
                        {{-- <li class="list-inline-item"><a href="https://www.facebook.com/3rdwavethemes"><i class="fab fa-facebook"></i></a></li> --}}
                        <li class="list-inline-item"><a href="https://www.instagram.com/gokep.app"><i class="fab fa-instagram"></i></a></li>
                        {{-- <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>                     --}}
                    </ul> 
                </div>            
                
                {{-- <div class="navbar-wrapper">
                  <span class="navbar-label">MENU</span>
                  <button type="button" class="navbar-toggle navmenu-hide" id="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div> --}}
                <!--//navbar -->
            </div><!--//container-->
        </header><!--//header-->   
        
        <div id="fullpage" class="sections-wrapper">
            
            <!-- ******Promo Section****** -->
            <section id="promo" class="promo section gradient-1">
                <div class="container">
                    <div class="row">                                      
                        <div class="intro-area col-lg-4 col-12">
                            <h2 class="title">GO-MIC</h2>
                            <p class="intro">CARA TERMUDAH MEMBACA MEMBACA KOMIK, MANHWA DLL.</p>
                                                        {{-- <P>PRESENTED BY GO-APLIKASI</P> --}}

                            {{-- <div class="video-container">
                                <img src="{{ asset("frontend/images/video-thumb.jpg") }}" alt="video" />
                                <a class="play-trigger" href="#modal-video" data-toggle="modal" data-target="#modal-video" data-backdrop="static" data-keyboard="false"><span class="icon-holder"><i class="fas fa-play"></i></span></a>
                            </div> --}}
                            <!--//video-container-->             
                        </div><!--//intro-area-->
                        <div class="clearfix d-none d-sm-block d-md-block"></div>
                        <div class="download-area col-lg-4 col-md-6 col-12 order-md-12">
                            <ul class="list-unstyled download-buttons">
                                {{-- <li class="app-store"><a href="#"><img class="img-fluid d-block" src="{{ asset("frontend/images/buttons/btn-app-store.png") }}" alt="Download from App Store" /></a></li> --}}
                                <li class="google-play"><a href="#"><img class="img-fluid d-block" src="{{ asset("frontend/images/buttons/btn-google-play.png") }}" alt="Download from Google Play" /></a></li>
                                <li class="windows-store"><a href="https://manga.go-aplikasi.co/go-mic-1-0.apk"><img class="img-fluid d-block" src="{{ asset("frontend/images/buttons/btn-server.png") }}" alt="Download from Windows Phone Store" /></a></li>
                            </ul><!--//list-unstyled-->
                            <ul class="list-unstyled summary">
                                <li><i class="fa fa-check"></i> <a href="#benefit1">Auto Update</a></li>
                                <li><i class="fa fa-check"></i> <a href="#benefit2">Terjemahan Bahasa</a></li>
                                <li><i class="fa fa-check"></i> <a href="#benefit3">Ringan</a></li>
                                {{-- <li><i class="fa fa-check"></i> <a href="#download">Trusted by many</a></li> --}}
                            </ul><!--//list-unstyled-->
                        </div><!--//download-area--> 
                        <div class="clearfix d-md-block d-none"></div>
                        <div class="device device-iphonex text-center col-lg-4 col-md-6 col-12 order-md-5">     
                            <div class="device-holder iphone-x-holder offset-top">                 
                                <div class="device-holder-inner">
                                    <div id="home-slideshow" class="owl-carousel owl-theme"> 
                                      <div class="item"><img class="img-fluid" src="{{ asset("frontend/images/devices/gomic0.png") }}" alt=""></div>
                                      <div class="item"><img class="img-fluid" src="{{ asset("frontend/images/devices/gomic1.png") }}" alt=""></div>
                                      <div class="item"><img class="img-fluid" src="{{ asset("frontend/images/devices/gomic0.png") }}" alt=""></div>                         
                                    </div><!--//slideshow-->
                                </div><!--//device-holder-inner-->  
                            </div><!--//device-holder-->                  
                        </div><!--//phone-holder--> 
                    </div><!--//row-->
                    {{-- <div class="arrow-holder text-center">
                        <p class="lead-text"><a href="#benefit1">Find out more</a></p>
                        <a href="#benefit1" class="animate pe-7s-bottom-arrow pe-3x"></a>
                    </div> --}}
                    <!--//arrow-holder-->
                </div><!--//container-->            
            </section><!--//promo-->
            
            <!-- ******Benefit-1 Section****** -->
            {{-- <section id="benefit-1" class="benefit-1 section gradient-2 has-pattern">
                <div class="section-inner">
                    <div class="container text-center">
                        <div class="row">
                            <div class="content col-lg-7 col-md-6 col-12">
                                <div class="content-inner">
                                    <span class="pe-icon pe-7s-coffee pe-4x"></span>
                                    <h2 class="title text-center">Work the way you live</h2>
                                    <p class="intro text-center">State one of your product benefits/features here. You can easily replace the screenshot in the phone with your own image. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                </div><!--//content-inner-->
                                <div class="testimonial text-center">                                          
                                    <div class="quote-container">
                                        <span class="icon-holder"><i class="fas fa-quote-left"></i></span>
                                        <blockquote class="quote">
                                            Back up the above benefit/feature with a relevant tweet/testimonial. It's great that Atom app gives me a chance to pulvinar orci non. Nulla suscipit dolor mauris. Morbi interdum ut ante vel lacinia.                              
                                        </blockquote>
                                        <div class="source">
                                            <img class="profile" src="{{ asset("frontend/images/profiles/profile-1.png") }}" alt="" />
                                            <p class="meta">
                                                <span class="source-name"><a href="#">Heather Alexander</a></span>
                                                <span class="source-title">San Francisco, US</span>
                                            </p>
                                        </div><!--//source-->
                                    </div><!--//quote-container-->                    
                                </div><!--//testimonial-->
                            </div><!--//content-->
                            <div class="device device-iphone col-lg-4 col-md-6 col-12">     
                                <div class="device-holder iphone-holder iphone-x-holder offset-top">                 
                                    <div class="device-holder-inner">
                                        <img class="img-fluid" src="{{ asset("frontend/images/devices/screenshots/iphonex-screen-2.png") }}" alt="">
                                    </div><!--//device-holder-inner-->  
                                </div><!--//device-holder-->                  
                            </div><!--//phone-holder-->                         
                        </div><!--//row-->
                    </div><!--//container-->
                </div><!--//section-inner-->
            </section><!--//benefit-1-->
            
            <!-- ******Benefit-2 Section****** -->
            <section id="benefit-2" class="benefit-2 section gradient-3 has-pattern">
                <div class="section-inner">
                    <div class="container text-center">
                        <div class="row">
                            <div class="content col-lg-7 col-md-6 col-12 order-md-12">
                                <div class="content-inner">
                                    <span class="pe-icon pe-7s-camera pe-4x"></span>
                                    <h2 class="title text-center">Capture the moment</h2>
                                    <p class="intro text-center">State one of your product benefits/features here. You can easily replace the screenshot in the phone with your own image. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                </div><!--//content-inner-->
                                <div class="testimonial text-center">                                          
                                    <div class="quote-container">
                                        <span class="icon-holder"><i class="fas fa-quote-left"></i></span>
                                        <blockquote class="quote">
                                            This is a great app and it's very easy to use bibendum cursus urna, quis rhoncus arcu. Curabitur vel sollicitudin leo.                                
                                        </blockquote>
                                        <div class="source">
                                            <img class="profile" src="{{ asset("frontend/images/profiles/profile-2.png") }}" alt="" />
                                            <p class="meta">
                                                <span class="source-name"><a href="#">@GeraldChavez</a></span>
                                                <span class="source-title">Bristol, UK</span>
                                            </p>
                                        </div><!--//source-->
                                    </div><!--//quote-container-->                    
                                </div><!--//testimonial-->
                            </div><!--//content-->
                            <div class="device device-iphone col-lg-4 col-md-6 col-12 order-md-1">     
                                <div class="device-holder iphone-holder iphone-x-holder offset-top">                 
                                    <div class="device-holder-inner">
                                        <img class="img-fluid" src="{{ asset("frontend/images/devices/screenshots/iphonex-screen-3.png") }}" alt="">
                                    </div><!--//device-holder-inner-->  
                                </div><!--//device-holder-->                  
                            </div><!--//phone-holder-->                         
                        </div><!--//row-->
                    </div><!--//container-->
                </div><!--//section-inner-->
            </section><!--//benefit-2-->
            
            <!-- ******Benefit-3 Section****** -->
            <section id="benefit-3" class="benefit-3 section gradient-4 has-pattern">
                <div class="section-inner">
                    <div class="container text-center">
                        <div class="row">
                            <div class="content col-lg-7 col-md-6 col-12">
                                <div class="content-inner">
                                    <span class="pe-icon pe-7s-global pe-4x"></span>
                                    <h2 class="title text-center">A new way to connect</h2>
                                    <p class="intro text-center">State one of your product benefits/features here. You can easily replace the screenshot in the phone with your own image. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                </div><!--//content-inner-->
                                <div class="testimonial text-center">                                          
                                    <div class="quote-container">
                                        <span class="icon-holder"><i class="fas fa-quote-left"></i></span>
                                        <blockquote class="quote">
                                            Fantastic app! I love the Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere viverra dignissim. Etiam tincidunt varius luctus. Quisque est ex, lacinia id tempor et!                                
                                        </blockquote>
                                        <div class="source">
                                            <img class="profile" src="{{ asset("frontend/images/profiles/profile-3.png") }}" alt="" />
                                            <p class="meta">
                                                <span class="source-name"><a href="#">Kelly Ryan</a></span>
                                                <span class="source-title">London, UK</span>
                                            </p>
                                        </div><!--//source-->
                                    </div><!--//quote-container-->                    
                                </div><!--//testimonial-->
                            </div><!--//content-->
                            <div class="device device-iphone col-lg-4 col-md-6 col-12">     
                                <div class="device-holder iphone-holder iphone-x-holder offset-top">                 
                                    <div class="device-holder-inner">
                                        <img class="img-fluid" src="{{ asset("frontend/images/devices/screenshots/iphonex-screen-4.png") }}" alt="">
                                    </div><!--//device-holder-inner-->  
                                </div><!--//device-holder-->                  
                            </div><!--//phone-holder-->                         
                        </div><!--//row-->
                    </div><!--//container-->
                </div><!--//section-inner-->
            </section><!--//benefit-3-->
                    
            <!-- ******CTA Section****** -->
            <section id="cta-section" class="cta-section section gradient-5">
                <div class="press text-center">
                    <div class="press-inner">
                        <div class="container text-center">
                            <h2 class="title">As featured on...</h2>
                            <div class="press-list row">
                                <div class="col-lg-2 col-md-4 col-6"><a href="press.html"><img class="img-fluid d-inline-block" src="{{ asset("frontend/images/press/logo-1.png") }}" alt=""></a></div>
                                <div class="col-lg-2 col-md-4 col-6"><a href="press.html"><img class="img-fluid d-inline-block" src="{{ asset("frontend/images/press/logo-2.png") }}" alt=""></a></div>
                                <div class="col-lg-2 col-md-4 col-6"><a href="press.html"><img class="img-fluid d-inline-block" src="{{ asset("frontend/images/press/logo-3.png") }}" alt=""></a></div>                         
                                <div class="col-lg-2 col-md-4 col-6"><a href="press.html"><img class="img-fluid d-inline-block" src="{{ asset("frontend/images/press/logo-4.png") }}" alt=""></a></div>
                                <div class="col-lg-2 col-md-4 col-6"><a href="press.html"><img class="img-fluid d-inline-block" src="{{ asset("frontend/images/press/logo-5.png") }}" alt=""></a></div>
                                <div class="col-lg-2 col-md-4 col-6"><a href="press.html"><img class="img-fluid d-inline-block" src="{{ asset("frontend/images/press/logo-6.png") }}" alt=""></a></div>
                            </div><!--//press-list"-->
                        </div><!--//container-->
                    </div><!--//press-inner-->
                </div><!--//press--> 
                <div class="download text-center">
                    <div class="container">
                        <h3 class="title">Download Atom now <br />and start marketing your app to your audience</h3>
                        <ul class="list-inline download-list">
                            <li class="list-inline-item"><a class="btn btn-cta btn-cta-primary" href="#"><i class="fab fa-apple"></i><span class="text">Download for iOS</span> </a></li>
                            <li class="list-inline-item"><a class="btn btn-cta btn-cta-primary" href="#"><i class="fab fa-android"></i><span class="text">Download for Android</span></a></li>
                            <li class="list-inline-item"><a class="btn btn-cta btn-cta-primary" href="#"><i class="fab fa-windows"></i><span class="text">Download for Windows</span></a></li>
                        </ul>
                        <figure class="qr-holder">
                            <img src="{{ asset("frontend/images/buttons/QR-code.png") }}" alt="" />
                            <figcaption class="caption">Scan the QR code to download</figcaption>
                        </figure>
                    </div><!--//container-->
                </div><!--//download-->
            </section><!--//cta-section-->        
        </div><!--//sections-wrapper-->
 
        <!-- ******FOOTER****** --> 
        <footer class="footer">
            <div class="container text-center">
                <nav class="links">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="about.html">About</a></li>
                        <li class="list-inline-item"><a href="press.html">Press</a></li>
                        <li class="list-inline-item"><a href="pricing.html">Pricing</a></li>
                        <li class="list-inline-item"><a href="faqs.html">FAQs</a></li>
                        <li class="list-inline-item"><a href="jobs.html">Jobs</a></li>
                        <li class="list-inline-item"><a href="blog.html">Blog</a></li>
                        <li class="list-inline-item"><a href="contact.html">Contact</a></li>
                    </ul>                    
                </nav>
                <ul class="social-icons list-inline">
                    <li class="list-inline-item"><a href="https://twitter.com/3rdwave_themes"><i class="fab fa-twitter"></i></a></li>                        
                    <li class="list-inline-item"><a href="https://www.facebook.com/3rdwavethemes"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com/3rdwavethemes"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item last"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>                    
                </ul>
                <ul class="links legal-links list-inline">
                    <li class="list-inline-item"><a href="#">Privacy</a></li>
                    <li class="last list-inline-item"><a href="#">Terms</a></li>
                </ul><!--//legal-links-->
                <small class="copyright">Template Copyright &copy; <a href="http://themes.3rdwavemedia.com/">3rd wave Media</a></small>
                
            </div><!--//container-->
        </footer><!--//footer-->
    </div><!--//canvas-wrapper-->
    
    <!-- *****Video Modal***** -->
    <div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
                </div>
                <div class="modal-body">
                    <div class="video-container text-center embed-responsive-16by9">
                        <iframe id="vimeo-video" class="embed-responsive-item" src="https://player.vimeo.com/video/75045142?" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div><!--//video-container-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
      --}}
    <!-- Main Javascript -->          
    <script type="text/javascript" src="{{ asset("frontend/jquery-3.3.1.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("frontend/popper.min.js") }}"></script> 
    <script type="text/javascript" src="{{ asset("frontend/bootstrap.min.js") }}"></script>                                                        
    <script type="text/javascript" src="{{ asset("frontend/main.js") }}"></script>
    
    <!-- Fullpage.js -->
    <script type="text/javascript" src="{{ asset("frontend/jquery.fullpage.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("frontend/fullpage-custom.js") }}"></script> 
    
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset("frontend/owl.carousel.min.js") }}"></script> 
    <script type="text/javascript" src="{{ asset("frontend/owl-custom.js") }}"></script> 

    
    <!-- Modal video -->
    <script type="text/javascript" src="{{ asset("frontend/modal-video.js") }}"></script>

    
</body>
</html> 

