<?php

/* base.html.twig */
class __TwigTemplate_fdbcae163e05d9d713184a3fb25c54dd25996ea29fa3be775b6bd2a6ba252b8e extends Twig_Template
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
        $__internal_f96fcbcb5dde8df816cdbc62734040071bd2c1039dae1ccbe684b2cb1d27c7eb = $this->env->getExtension("native_profiler");
        $__internal_f96fcbcb5dde8df816cdbc62734040071bd2c1039dae1ccbe684b2cb1d27c7eb->enter($__internal_f96fcbcb5dde8df816cdbc62734040071bd2c1039dae1ccbe684b2cb1d27c7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f96fcbcb5dde8df816cdbc62734040071bd2c1039dae1ccbe684b2cb1d27c7eb->leave($__internal_f96fcbcb5dde8df816cdbc62734040071bd2c1039dae1ccbe684b2cb1d27c7eb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05211a3ec399ef32a35a8bdc522148fbdf06e87bad83fdafd8a2d8d7d1237d97 = $this->env->getExtension("native_profiler");
        $__internal_05211a3ec399ef32a35a8bdc522148fbdf06e87bad83fdafd8a2d8d7d1237d97->enter($__internal_05211a3ec399ef32a35a8bdc522148fbdf06e87bad83fdafd8a2d8d7d1237d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTDD!";
        
        $__internal_05211a3ec399ef32a35a8bdc522148fbdf06e87bad83fdafd8a2d8d7d1237d97->leave($__internal_05211a3ec399ef32a35a8bdc522148fbdf06e87bad83fdafd8a2d8d7d1237d97_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba2bb2748cf60bca88455aa4910086e2993985d261b2bf7e1b9c2c6eb04d21f2 = $this->env->getExtension("native_profiler");
        $__internal_ba2bb2748cf60bca88455aa4910086e2993985d261b2bf7e1b9c2c6eb04d21f2->enter($__internal_ba2bb2748cf60bca88455aa4910086e2993985d261b2bf7e1b9c2c6eb04d21f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba2bb2748cf60bca88455aa4910086e2993985d261b2bf7e1b9c2c6eb04d21f2->leave($__internal_ba2bb2748cf60bca88455aa4910086e2993985d261b2bf7e1b9c2c6eb04d21f2_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_b86a0cf99611690a8dbde6812e1799a93d3c764a659e54f3dbc5ac6a0ba189d4 = $this->env->getExtension("native_profiler");
        $__internal_b86a0cf99611690a8dbde6812e1799a93d3c764a659e54f3dbc5ac6a0ba189d4->enter($__internal_b86a0cf99611690a8dbde6812e1799a93d3c764a659e54f3dbc5ac6a0ba189d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b86a0cf99611690a8dbde6812e1799a93d3c764a659e54f3dbc5ac6a0ba189d4->leave($__internal_b86a0cf99611690a8dbde6812e1799a93d3c764a659e54f3dbc5ac6a0ba189d4_prof);

    }

    // line 79
    public function block_site_branding($context, array $blocks = array())
    {
        $__internal_f8ce28529579d91987e4435f9bf85e4fa56cdd6d1884a7785b340c8fc56b4c3b = $this->env->getExtension("native_profiler");
        $__internal_f8ce28529579d91987e4435f9bf85e4fa56cdd6d1884a7785b340c8fc56b4c3b->enter($__internal_f8ce28529579d91987e4435f9bf85e4fa56cdd6d1884a7785b340c8fc56b4c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_branding"));

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
        
        $__internal_f8ce28529579d91987e4435f9bf85e4fa56cdd6d1884a7785b340c8fc56b4c3b->leave($__internal_f8ce28529579d91987e4435f9bf85e4fa56cdd6d1884a7785b340c8fc56b4c3b_prof);

    }

    // line 98
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_1ab773a1cba3cf7c9c22f30dfb0856bfe9842efa0f16beec0db3c4dea6781999 = $this->env->getExtension("native_profiler");
        $__internal_1ab773a1cba3cf7c9c22f30dfb0856bfe9842efa0f16beec0db3c4dea6781999->enter($__internal_1ab773a1cba3cf7c9c22f30dfb0856bfe9842efa0f16beec0db3c4dea6781999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

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
        
        $__internal_1ab773a1cba3cf7c9c22f30dfb0856bfe9842efa0f16beec0db3c4dea6781999->leave($__internal_1ab773a1cba3cf7c9c22f30dfb0856bfe9842efa0f16beec0db3c4dea6781999_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_259aafb6aca58499d8c8a122d24fac239fee18581685b7ecadf688a409c3685a = $this->env->getExtension("native_profiler");
        $__internal_259aafb6aca58499d8c8a122d24fac239fee18581685b7ecadf688a409c3685a->enter($__internal_259aafb6aca58499d8c8a122d24fac239fee18581685b7ecadf688a409c3685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "    
    ";
        
        $__internal_259aafb6aca58499d8c8a122d24fac239fee18581685b7ecadf688a409c3685a->leave($__internal_259aafb6aca58499d8c8a122d24fac239fee18581685b7ecadf688a409c3685a_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e97bde80d498e57fa7d887e14963488558a27aa3429148ec049576c7e178248 = $this->env->getExtension("native_profiler");
        $__internal_3e97bde80d498e57fa7d887e14963488558a27aa3429148ec049576c7e178248->enter($__internal_3e97bde80d498e57fa7d887e14963488558a27aa3429148ec049576c7e178248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3e97bde80d498e57fa7d887e14963488558a27aa3429148ec049576c7e178248->leave($__internal_3e97bde80d498e57fa7d887e14963488558a27aa3429148ec049576c7e178248_prof);

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
