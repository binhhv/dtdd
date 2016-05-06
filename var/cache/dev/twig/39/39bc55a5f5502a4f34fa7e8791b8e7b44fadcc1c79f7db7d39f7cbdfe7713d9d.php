<?php

/* ::base.html.twig */
class __TwigTemplate_0d0f6c661a2870d9d04d66795322aa7d4442a6f166e8493924237780eafa23be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffbda8649882fd010c3ff320729fd0424acd991e2847de6fc608c5d8b7fa3755 = $this->env->getExtension("native_profiler");
        $__internal_ffbda8649882fd010c3ff320729fd0424acd991e2847de6fc608c5d8b7fa3755->enter($__internal_ffbda8649882fd010c3ff320729fd0424acd991e2847de6fc608c5d8b7fa3755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">

    
  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">TodoList</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"\"><a href=\"/\">Home</a></li>
            <li><a href=\"/todo/create\">Add todo</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container \">

     <div class=\"row\">
        <div class=\"col-md-12\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 50
            echo "          <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 54
            echo "          <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "        </div>
     </div>

    </div><!-- /.container -->
    ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "  </body>
</html>
";
        
        $__internal_ffbda8649882fd010c3ff320729fd0424acd991e2847de6fc608c5d8b7fa3755->leave($__internal_ffbda8649882fd010c3ff320729fd0424acd991e2847de6fc608c5d8b7fa3755_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d30aaebcb23ffb2feffc1ce256afdf80ad1c46493b234b6712e60d0e41a22c8 = $this->env->getExtension("native_profiler");
        $__internal_8d30aaebcb23ffb2feffc1ce256afdf80ad1c46493b234b6712e60d0e41a22c8->enter($__internal_8d30aaebcb23ffb2feffc1ce256afdf80ad1c46493b234b6712e60d0e41a22c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8d30aaebcb23ffb2feffc1ce256afdf80ad1c46493b234b6712e60d0e41a22c8->leave($__internal_8d30aaebcb23ffb2feffc1ce256afdf80ad1c46493b234b6712e60d0e41a22c8_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01d0c61de88de0ba5081c89481f4513a1caadca05d15c493a4dc0f382c7edd06 = $this->env->getExtension("native_profiler");
        $__internal_01d0c61de88de0ba5081c89481f4513a1caadca05d15c493a4dc0f382c7edd06->enter($__internal_01d0c61de88de0ba5081c89481f4513a1caadca05d15c493a4dc0f382c7edd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_01d0c61de88de0ba5081c89481f4513a1caadca05d15c493a4dc0f382c7edd06->leave($__internal_01d0c61de88de0ba5081c89481f4513a1caadca05d15c493a4dc0f382c7edd06_prof);

    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        $__internal_e18b52c12a8633034281cb4c6cdf7206ff9172651595e8a5afb74a7c8090ee09 = $this->env->getExtension("native_profiler");
        $__internal_e18b52c12a8633034281cb4c6cdf7206ff9172651595e8a5afb74a7c8090ee09->enter($__internal_e18b52c12a8633034281cb4c6cdf7206ff9172651595e8a5afb74a7c8090ee09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e18b52c12a8633034281cb4c6cdf7206ff9172651595e8a5afb74a7c8090ee09->leave($__internal_e18b52c12a8633034281cb4c6cdf7206ff9172651595e8a5afb74a7c8090ee09_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af5ee4a2ef350de804f2264244504523ef3369a041096b0dddc42819922b2639 = $this->env->getExtension("native_profiler");
        $__internal_af5ee4a2ef350de804f2264244504523ef3369a041096b0dddc42819922b2639->enter($__internal_af5ee4a2ef350de804f2264244504523ef3369a041096b0dddc42819922b2639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af5ee4a2ef350de804f2264244504523ef3369a041096b0dddc42819922b2639->leave($__internal_af5ee4a2ef350de804f2264244504523ef3369a041096b0dddc42819922b2639_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  156 => 57,  145 => 15,  133 => 12,  124 => 63,  122 => 62,  116 => 58,  114 => 57,  111 => 56,  102 => 54,  98 => 53,  95 => 52,  86 => 50,  82 => 49,  47 => 16,  45 => 15,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <!-- Latest compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* */
/*     */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <nav class="navbar navbar-inverse">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="#">TodoList</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li class=""><a href="/">Home</a></li>*/
/*             <li><a href="/todo/create">Add todo</a></li>*/
/*             */
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <div class="container ">*/
/* */
/*      <div class="row">*/
/*         <div class="col-md-12">*/
/*         {% for flash_message in app.session.flashbag.get('notice')%}*/
/*           <div class="alert alert-success">{{flash_message}}</div>*/
/*         {% endfor %}*/
/* */
/*         {% for flash_message in app.session.flashbag.get('error')%}*/
/*           <div class="alert alert-danger">{{flash_message}}</div>*/
/*         {% endfor %}*/
/* */
/*         {% block content %}{% endblock %}*/
/*         </div>*/
/*      </div>*/
/* */
/*     </div><!-- /.container -->*/
/*     {% block javascripts %}{% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
