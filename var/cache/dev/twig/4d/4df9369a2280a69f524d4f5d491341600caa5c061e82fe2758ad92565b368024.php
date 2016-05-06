<?php

/* base.html.twig */
class __TwigTemplate_95f2e895a084f178b3895ec1b40b3f138017bf8aed63ec25aae6b0947c176a8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'site_branding' => array($this, 'block_site_branding'),
            'main_menu' => array($this, 'block_main_menu'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae62c631624cca3eabf8addd83a74cd7d1e774166b068f28b5f12b40972eb9f = $this->env->getExtension("native_profiler");
        $__internal_eae62c631624cca3eabf8addd83a74cd7d1e774166b068f28b5f12b40972eb9f->enter($__internal_eae62c631624cca3eabf8addd83a74cd7d1e774166b068f28b5f12b40972eb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\">

    ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
   ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 78
        echo "
    ";
        // line 79
        $this->displayBlock('site_branding', $context, $blocks);
        // line 98
        echo "    ";
        $this->displayBlock('main_menu', $context, $blocks);
        // line 126
        echo "
    ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 151
        echo "  </body>
</html>";
        
        $__internal_eae62c631624cca3eabf8addd83a74cd7d1e774166b068f28b5f12b40972eb9f->leave($__internal_eae62c631624cca3eabf8addd83a74cd7d1e774166b068f28b5f12b40972eb9f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a627906a3854ccb130a294fa649b196966f63163fe0f9b02a5741907a78688c = $this->env->getExtension("native_profiler");
        $__internal_2a627906a3854ccb130a294fa649b196966f63163fe0f9b02a5741907a78688c->enter($__internal_2a627906a3854ccb130a294fa649b196966f63163fe0f9b02a5741907a78688c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTDD!";
        
        $__internal_2a627906a3854ccb130a294fa649b196966f63163fe0f9b02a5741907a78688c->leave($__internal_2a627906a3854ccb130a294fa649b196966f63163fe0f9b02a5741907a78688c_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1dffbc2be91259118a9e4e50c19a2afc3fd98a4fc766281316a66c3572643fce = $this->env->getExtension("native_profiler");
        $__internal_1dffbc2be91259118a9e4e50c19a2afc3fd98a4fc766281316a66c3572643fce->enter($__internal_1dffbc2be91259118a9e4e50c19a2afc3fd98a4fc766281316a66c3572643fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1dffbc2be91259118a9e4e50c19a2afc3fd98a4fc766281316a66c3572643fce->leave($__internal_1dffbc2be91259118a9e4e50c19a2afc3fd98a4fc766281316a66c3572643fce_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_f590e56e430f9246be146538968d5cd06061243c34390f71bab12290d8fd9701 = $this->env->getExtension("native_profiler");
        $__internal_f590e56e430f9246be146538968d5cd06061243c34390f71bab12290d8fd9701->enter($__internal_f590e56e430f9246be146538968d5cd06061243c34390f71bab12290d8fd9701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "    <div class=\"header-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"user-menu\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-user\"></i> My Account</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-heart\"></i> Wishlist</a></li>
                            <li><a href=\"cart.html\"><i class=\"fa fa-user\"></i> My Cart</a></li>
                            <li><a href=\"checkout.html\"><i class=\"fa fa-user\"></i> Checkout</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class=\"col-md-4\">
                    <div class=\"header-right\">
                        <ul class=\"list-unstyled list-inline\">
                            <li class=\"dropdown dropdown-small\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><span class=\"key\">currency :</span><span class=\"value\">USD </span><b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">USD</a></li>
                                    <li><a href=\"#\">INR</a></li>
                                    <li><a href=\"#\">GBP</a></li>
                                </ul>
                            </li>

                            <li class=\"dropdown dropdown-small\">
                                <a data-toggle=\"dropdown\" data-hover=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><span class=\"key\">language :</span><span class=\"value\">English </span><b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">English</a></li>
                                    <li><a href=\"#\">French</a></li>
                                    <li><a href=\"#\">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    ";
        
        $__internal_f590e56e430f9246be146538968d5cd06061243c34390f71bab12290d8fd9701->leave($__internal_f590e56e430f9246be146538968d5cd06061243c34390f71bab12290d8fd9701_prof);

    }

    // line 79
    public function block_site_branding($context, array $blocks = array())
    {
        $__internal_a80b5a01e6606130454eb6319f9ae35a50ea7d9cfb0beab91369c79bd070af97 = $this->env->getExtension("native_profiler");
        $__internal_a80b5a01e6606130454eb6319f9ae35a50ea7d9cfb0beab91369c79bd070af97->enter($__internal_a80b5a01e6606130454eb6319f9ae35a50ea7d9cfb0beab91369c79bd070af97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_branding"));

        // line 80
        echo "    <div class=\"site-branding-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"logo\">
                        <h1><a href=\"./\"><img src=\"img/logo.png\"></a></h1>
                    </div>
                </div>
                
                <div class=\"col-sm-6\">
                    <div class=\"shopping-item\">
                        <a href=\"cart.html\">Cart - <span class=\"cart-amunt\">\$100</span> <i class=\"fa fa-shopping-cart\"></i> <span class=\"product-count\">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    ";
        
        $__internal_a80b5a01e6606130454eb6319f9ae35a50ea7d9cfb0beab91369c79bd070af97->leave($__internal_a80b5a01e6606130454eb6319f9ae35a50ea7d9cfb0beab91369c79bd070af97_prof);

    }

    // line 98
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_76ae84bcb0490b423776fed6f49f865dd04f0cd721d578991b2b49165cb227e7 = $this->env->getExtension("native_profiler");
        $__internal_76ae84bcb0490b423776fed6f49f865dd04f0cd721d578991b2b49165cb227e7->enter($__internal_76ae84bcb0490b423776fed6f49f865dd04f0cd721d578991b2b49165cb227e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 99
        echo "    <div class=\"mainmenu-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div> 
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"shop.html\">Shop page</a></li>
                        <li><a href=\"single-product.html\">Single product</a></li>
                        <li><a href=\"cart.html\">Cart</a></li>
                        <li><a href=\"checkout.html\">Checkout</a></li>
                        <li><a href=\"#\">Category</a></li>
                        <li><a href=\"#\">Others</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    ";
        
        $__internal_76ae84bcb0490b423776fed6f49f865dd04f0cd721d578991b2b49165cb227e7->leave($__internal_76ae84bcb0490b423776fed6f49f865dd04f0cd721d578991b2b49165cb227e7_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_40e5689f56193c4bc1dfe206bdd6992efa2db9885b17bf0975f7e78bb4b13a81 = $this->env->getExtension("native_profiler");
        $__internal_40e5689f56193c4bc1dfe206bdd6992efa2db9885b17bf0975f7e78bb4b13a81->enter($__internal_40e5689f56193c4bc1dfe206bdd6992efa2db9885b17bf0975f7e78bb4b13a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "    
    ";
        
        $__internal_40e5689f56193c4bc1dfe206bdd6992efa2db9885b17bf0975f7e78bb4b13a81->leave($__internal_40e5689f56193c4bc1dfe206bdd6992efa2db9885b17bf0975f7e78bb4b13a81_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce5a5bec850071e2fa4514f430004982ea3a85ec8e82dd91f9f6827c544dbc8c = $this->env->getExtension("native_profiler");
        $__internal_ce5a5bec850071e2fa4514f430004982ea3a85ec8e82dd91f9f6827c544dbc8c->enter($__internal_ce5a5bec850071e2fa4514f430004982ea3a85ec8e82dd91f9f6827c544dbc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "    <!-- Latest jQuery form server -->
    <script src=\"https://code.jquery.com/jquery.min.js\"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    
    <!-- jQuery sticky menu -->
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    
    <!-- jQuery easing -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Main Script -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Slider -->
    <script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bxslider.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/script.slider.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_ce5a5bec850071e2fa4514f430004982ea3a85ec8e82dd91f9f6827c544dbc8c->leave($__internal_ce5a5bec850071e2fa4514f430004982ea3a85ec8e82dd91f9f6827c544dbc8c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 149,  309 => 148,  303 => 145,  297 => 142,  291 => 139,  287 => 138,  278 => 131,  272 => 130,  264 => 128,  258 => 127,  225 => 99,  219 => 98,  195 => 80,  189 => 79,  141 => 36,  135 => 35,  124 => 25,  112 => 7,  104 => 151,  101 => 130,  99 => 127,  96 => 126,  93 => 98,  91 => 79,  88 => 78,  86 => 35,  75 => 26,  73 => 25,  68 => 23,  64 => 22,  60 => 21,  54 => 18,  48 => 15,  37 => 7,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %}DTDD!{% endblock %}</title>*/
/*     */
/*     <!-- Google Fonts -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>*/
/*     */
/*     <!-- Bootstrap -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">*/
/*     */
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">*/
/*     */
/*     <!-- Custom CSS -->*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('assets/style.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body>*/
/*    {% block header %}*/
/*     <div class="header-area">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-8">*/
/*                     <div class="user-menu">*/
/*                         <ul>*/
/*                             <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>*/
/*                             <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>*/
/*                             <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>*/
/*                             <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>*/
/*                             <li><a href="#"><i class="fa fa-user"></i> Login</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-4">*/
/*                     <div class="header-right">*/
/*                         <ul class="list-unstyled list-inline">*/
/*                             <li class="dropdown dropdown-small">*/
/*                                 <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#">USD</a></li>*/
/*                                     <li><a href="#">INR</a></li>*/
/*                                     <li><a href="#">GBP</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/*                             <li class="dropdown dropdown-small">*/
/*                                 <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#">English</a></li>*/
/*                                     <li><a href="#">French</a></li>*/
/*                                     <li><a href="#">German</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End header area -->*/
/*     {% endblock %}*/
/* */
/*     {% block site_branding %}*/
/*     <div class="site-branding-area">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="logo">*/
/*                         <h1><a href="./"><img src="img/logo.png"></a></h1>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-sm-6">*/
/*                     <div class="shopping-item">*/
/*                         <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End site branding area -->*/
/*     {% endblock %}*/
/*     {% block main_menu %}*/
/*     <div class="mainmenu-area">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                 </div> */
/*                 <div class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="index.html">Home</a></li>*/
/*                         <li><a href="shop.html">Shop page</a></li>*/
/*                         <li><a href="single-product.html">Single product</a></li>*/
/*                         <li><a href="cart.html">Cart</a></li>*/
/*                         <li><a href="checkout.html">Checkout</a></li>*/
/*                         <li><a href="#">Category</a></li>*/
/*                         <li><a href="#">Others</a></li>*/
/*                         <li><a href="#">Contact</a></li>*/
/*                     </ul>*/
/*                 </div>  */
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End mainmenu area -->*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*     */
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*     <!-- Latest jQuery form server -->*/
/*     <script src="https://code.jquery.com/jquery.min.js"></script>*/
/*     */
/*     <!-- Bootstrap JS form CDN -->*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*     */
/*     <!-- jQuery sticky menu -->*/
/*     <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>*/
/*     */
/*     <!-- jQuery easing -->*/
/*     <script src="{{ asset('assets/js/jquery.easing.1.3.min.js') }}"></script>*/
/*     */
/*     <!-- Main Script -->*/
/*     <script src="{{ asset('assets/js/main.js') }}"></script>*/
/*     */
/*     <!-- Slider -->*/
/*     <script type="text/javascript" src="{{ asset('assets/js/bxslider.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/js/script.slider.js') }}"></script>*/
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
