<?php

/* base.html.twig */
class __TwigTemplate_55d94d96c7c075a1a0d392468c8e02e9c23ae821c699024355f95fe8aeeefed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
    ";
        // line 12
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 13
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>

    
    <nav class=\"navbar navbar-default\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">TecnoAp Group</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            ";
        // line 33
        echo $this->env->getExtension('knp_menu')->render("about", array("style" => "navbar"));
        echo "
            ";
        // line 34
        echo $this->env->getExtension('knp_menu')->render("automation", array("style" => "navbar"));
        echo "
            ";
        // line 35
        echo $this->env->getExtension('knp_menu')->render("it", array("style" => "navbar"));
        echo "
            ";
        // line 36
        echo $this->env->getExtension('knp_menu')->render("contact", array("style" => "navbar"));
        echo "
            
            <!--<form class=\"navbar-form navbar-right\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>-->
            
        </div><!-- /.navbar-collapse -->
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"content\">
                    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bootstrap 101 Template";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "                    
                    ";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  147 => 64,  142 => 53,  139 => 52,  134 => 13,  128 => 5,  123 => 65,  121 => 64,  117 => 63,  112 => 61,  104 => 55,  102 => 52,  83 => 36,  79 => 35,  75 => 34,  71 => 33,  50 => 14,  47 => 13,  45 => 12,  39 => 9,  35 => 8,  29 => 5,  23 => 1,);
    }
}
