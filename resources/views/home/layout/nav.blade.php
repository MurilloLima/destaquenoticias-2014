 <!-- Header
      ================================================== -->
 <header class="clearfix">

     <div class="top-line">
         <div class="container">
             <div class="row">
                 <div class="col-md-8 col-sm-9">
                     <ul class="info-list">
                         <li>
                             <span class="live-time"><i class="fa fa-calendar-o"></i>
                                 {{-- /* Mostra: vrijdag 22 december 1978 */ --}}
                                 {{ date('d/m/Y') }}
                             </span>
                         </li>
                         <li>
                             <a href="about.html">Sobre</a>
                         </li>
                         <li>
                             <a href="">Contatos</a>
                         </li>
                         <li>
                             <a href="index.html#" data-toggle="modal" data-target="#loginModal">Login</a>
                         </li>
                     </ul>
                 </div>
                 <div class="col-md-4 col-sm-3">
                     <ul class="social-icons">
                         <li><a class="facebook" href="index.html#"><i class="fa fa-facebook"></i></a></li>
                         <li><a class="twitter" href="index.html#"><i class="fa fa-twitter"></i></a></li>
                         <li><a class="google" href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                         <li><a class="linkedin" href="index.html#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a class="instagram" href="index.html#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <div class="header-banner-place">
         <div class="container">
             <a class="navbar-brand" href="index.html">
                 <img src="{{ asset('home/images/logo.png') }}" width="200" alt="">
             </a>

             <div class="advertisement">
                 <a href="index.html#"><img src="{{ asset('home/upload/addsense/620x80.jpg') }}" alt=""></a>
             </div>
         </div>
     </div>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="index.html#">Home</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link world" href="index.html#">Brasil <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <ul class="filter-list">
                                     <li><a href="index.html#">Vizualizar todas</a></li>
                                 </ul>
                                 <div class="row">
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s25.jpg') }}" alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-world">Politic</a>
                                             </div>
                                             <h2><a href="single-post.html">New alternatives are more</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s15.jpg') }}" alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-world">Economy</a>
                                             </div>
                                             <h2><a href="single-post.html">New alternatives are more</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s23.jpg') }}" alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-world">Culture</a>
                                             </div>
                                             <h2><a href="single-post.html">New alternatives are more</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s28.jpg') }}"
                                                         alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-world">Business</a>
                                             </div>
                                             <h2><a href="single-post.html">New alternatives are more</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link sport" href="index.html#">Esporte <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <ul class="filter-list">
                                     <li><a href="index.html#">All</a></li>
                                     <li><a href="index.html#">Football</a></li>
                                     <li><a href="index.html#">Basketball</a></li>
                                     <li><a href="index.html#">Teniss</a></li>
                                     <li><a href="index.html#">Winter sports</a></li>
                                 </ul>
                                 <div class="row">
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s30.jpg') }}"
                                                         alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-sport">Tennis</a>
                                             </div>
                                             <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s31.jpg') }}"
                                                         alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-sport">Football</a>
                                             </div>
                                             <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s32.jpg') }}"
                                                         alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-sport">winter
                                                     sports</a>
                                             </div>
                                             <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s29.jpg') }}"
                                                         alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-sport">Basketball</a>
                                             </div>
                                             <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link tech" href="index.html#">Tecnologia <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <div class="row">
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s37.jpg') }}"
                                                         alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-tech">Tennis</a>
                                             </div>
                                             <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s38.jpg') }}"
                                                         alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-tech">Tech</a>
                                             </div>
                                             <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s39.jpg') }}"
                                                         alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-tech">Tech</a>
                                             </div>
                                             <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="col-lg-3 col-md-6">
                                         <div class="news-post standart-post">
                                             <div class="post-image">
                                                 <a href="https://nunforest.com/minberi-mag/single-post">
                                                     <img src="{{ asset('home/upload/blog/s2.jpg') }}"
                                                         alt="">
                                                 </a>
                                                 <a href="index.html#" class="category category-tech">Tech</a>
                                             </div>
                                             <h2><a href="single-post.html">Travelling is part of our life</a></h2>
                                             <ul class="post-tags">
                                                 <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a>
                                                 </li>
                                                 <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                             comments</span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link tech" href="index.html#">Classificados <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <div class="row">
                                     @foreach ($classificados as $item)
                                         <div class="col-lg-3 col-md-6">
                                             <div class="news-post standart-post">
                                                 <div class="post-image">
                                                     <a href="https://nunforest.com/minberi-mag/single-post">
                                                         <img src="{{ asset('home/upload/blog/s37.jpg') }}"
                                                             alt="">
                                                     </a>
                                                     <a href="#" class="category category-tech">Classificado</a>
                                                 </div>
                                                 <h2><a href="single-post.html">{{ $item->title }}</a></h2>
                                                 <ul class="post-tags">
                                                     <li><i class="lnr lnr-user"></i>by <a href="index.html#">John
                                                             Doe</a>
                                                     </li>
                                                     <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                                 comments</span></a></li>
                                                 </ul>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                     </li>
                     {{-- <li class="nav-item">
                         <a class="nav-link fashion" href="index.html#">Fashion</a>
                     </li> --}}
                     <li class="nav-item dropdown">
                         <a class="nav-link travel" href="index.html#">Travel <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                     </li>
                     <li class="nav-item drop-link">
                         <a class="nav-link food" href="index.html#">Cidade <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <ul class="dropdown">
                             @foreach ($cidades as $item)
                                 <li><a href="author-list.html">{{ $item->name }}</a></li>
                             @endforeach
                         </ul>
                     </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                     <button class="btn btn-primary my-2 my-sm-0" type="submit"><i
                             class="fa fa-search"></i></button>
                 </form>
             </div>
         </div>
     </nav>
 </header>
 <!-- End Header -->
