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
        $__internal_5c8ee2b5520649d1e9acb6943231aa6634dbe14091d756c4b9400ca90029fd6a = $this->env->getExtension("native_profiler");
        $__internal_5c8ee2b5520649d1e9acb6943231aa6634dbe14091d756c4b9400ca90029fd6a->enter($__internal_5c8ee2b5520649d1e9acb6943231aa6634dbe14091d756c4b9400ca90029fd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5c8ee2b5520649d1e9acb6943231aa6634dbe14091d756c4b9400ca90029fd6a->leave($__internal_5c8ee2b5520649d1e9acb6943231aa6634dbe14091d756c4b9400ca90029fd6a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_23c7e6803450df218c7a8f7191a1f93643e7a889be132231397f20686bdc8838 = $this->env->getExtension("native_profiler");
        $__internal_23c7e6803450df218c7a8f7191a1f93643e7a889be132231397f20686bdc8838->enter($__internal_23c7e6803450df218c7a8f7191a1f93643e7a889be132231397f20686bdc8838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DTDD!";
        
        $__internal_23c7e6803450df218c7a8f7191a1f93643e7a889be132231397f20686bdc8838->leave($__internal_23c7e6803450df218c7a8f7191a1f93643e7a889be132231397f20686bdc8838_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b06840810f0a08de8994c73fb7ff67fd526895adda04ca13fed3efcfde327f0b = $this->env->getExtension("native_profiler");
        $__internal_b06840810f0a08de8994c73fb7ff67fd526895adda04ca13fed3efcfde327f0b->enter($__internal_b06840810f0a08de8994c73fb7ff67fd526895adda04ca13fed3efcfde327f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b06840810f0a08de8994c73fb7ff67fd526895adda04ca13fed3efcfde327f0b->leave($__internal_b06840810f0a08de8994c73fb7ff67fd526895adda04ca13fed3efcfde327f0b_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_ca9f8b1740d28995249132a8c526d782eb0234f2de36690fde437e6c2845933f = $this->env->getExtension("native_profiler");
        $__internal_ca9f8b1740d28995249132a8c526d782eb0234f2de36690fde437e6c2845933f->enter($__internal_ca9f8b1740d28995249132a8c526d782eb0234f2de36690fde437e6c2845933f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_ca9f8b1740d28995249132a8c526d782eb0234f2de36690fde437e6c2845933f->leave($__internal_ca9f8b1740d28995249132a8c526d782eb0234f2de36690fde437e6c2845933f_prof);

    }

    // line 79
    public function block_site_branding($context, array $blocks = array())
    {
        $__internal_b2e348bfa69c554a126ab985b34a9b513aeb5679eed842b4d75ca786f5886eb6 = $this->env->getExtension("native_profiler");
        $__internal_b2e348bfa69c554a126ab985b34a9b513aeb5679eed842b4d75ca786f5886eb6->enter($__internal_b2e348bfa69c554a126ab985b34a9b513aeb5679eed842b4d75ca786f5886eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_branding"));

        // line 80
        echo "    <div class=\"site-branding-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"logo\">
                        <h1><a href=\"./\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\"></a></h1>
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
        
        $__internal_b2e348bfa69c554a126ab985b34a9b513aeb5679eed842b4d75ca786f5886eb6->leave($__internal_b2e348bfa69c554a126ab985b34a9b513aeb5679eed842b4d75ca786f5886eb6_prof);

    }

    // line 98
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_6bd0a05d7228e7f3e412301b26f4599fc4e1d75a52262fbb4a3a75cc87480a4e = $this->env->getExtension("native_profiler");
        $__internal_6bd0a05d7228e7f3e412301b26f4599fc4e1d75a52262fbb4a3a75cc87480a4e->enter($__internal_6bd0a05d7228e7f3e412301b26f4599fc4e1d75a52262fbb4a3a75cc87480a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

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
        
        $__internal_6bd0a05d7228e7f3e412301b26f4599fc4e1d75a52262fbb4a3a75cc87480a4e->leave($__internal_6bd0a05d7228e7f3e412301b26f4599fc4e1d75a52262fbb4a3a75cc87480a4e_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_a3b4036c2f9a9c5788e85e41e2eb2acc05896a5afc6223d0e98b8bf95fe7749d = $this->env->getExtension("native_profiler");
        $__internal_a3b4036c2f9a9c5788e85e41e2eb2acc05896a5afc6223d0e98b8bf95fe7749d->enter($__internal_a3b4036c2f9a9c5788e85e41e2eb2acc05896a5afc6223d0e98b8bf95fe7749d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "    
    ";
        
        $__internal_a3b4036c2f9a9c5788e85e41e2eb2acc05896a5afc6223d0e98b8bf95fe7749d->leave($__internal_a3b4036c2f9a9c5788e85e41e2eb2acc05896a5afc6223d0e98b8bf95fe7749d_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33dff15ea2832538228d54550e90f45b693265fff790bcbed1fe38665282cc2c = $this->env->getExtension("native_profiler");
        $__internal_33dff15ea2832538228d54550e90f45b693265fff790bcbed1fe38665282cc2c->enter($__internal_33dff15ea2832538228d54550e90f45b693265fff790bcbed1fe38665282cc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_33dff15ea2832538228d54550e90f45b693265fff790bcbed1fe38665282cc2c->leave($__internal_33dff15ea2832538228d54550e90f45b693265fff790bcbed1fe38665282cc2c_prof);

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
        return array (  316 => 149,  312 => 148,  306 => 145,  300 => 142,  294 => 139,  290 => 138,  281 => 131,  275 => 130,  267 => 128,  261 => 127,  228 => 99,  222 => 98,  202 => 85,  195 => 80,  189 => 79,  141 => 36,  135 => 35,  124 => 25,  112 => 7,  104 => 151,  101 => 130,  99 => 127,  96 => 126,  93 => 98,  91 => 79,  88 => 78,  86 => 35,  75 => 26,  73 => 25,  68 => 23,  64 => 22,  60 => 21,  54 => 18,  48 => 15,  37 => 7,  29 => 1,);
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
/*                         <h1><a href="./"><img src="{{ asset('assets/img/logo.png') }}"></a></h1>*/
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
