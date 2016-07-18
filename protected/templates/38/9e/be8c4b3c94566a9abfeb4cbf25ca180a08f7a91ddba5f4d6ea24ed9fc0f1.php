<?php

/* sLayouts/fa/main.html */
class __TwigTemplate_389ebe8c4b3c94566a9abfeb4cbf25ca180a08f7a91ddba5f4d6ea24ed9fc0f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "lang", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<title>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "name", array()), "html", null, true);
        echo "</title>

\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "baseUrl", array()), "html", null, true);
        echo "/asset/js/jquery-1.9.1.js\"></script>

\t<!-- Latest compiled and minified CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "baseUrl", array()), "html", null, true);
        echo "/asset/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "baseUrl", array()), "html", null, true);
        echo "/asset/css/main.css\">

\t<!-- Optional theme -->
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "baseUrl", array()), "html", null, true);
        echo "/asset/css/bootstrap-theme.min.css\">

\t<!-- Latest compiled and minified JavaScript -->
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "baseUrl", array()), "html", null, true);
        echo "/asset/js/bootstrap.min.js\"></script>
</head>
    <body >
\t\t<!-- START INCLUDE PAGE -->
\t\t";
        // line 23
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "
\t\t";
        // line 26
        echo "\t\t";
        $this->displayBlock('js', $context, $blocks);
        // line 27
        echo "\t\t<!-- END INCLUDE PAGE -->
    </body>

</html>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $this->env->resolveTemplate((isset($context["content_path"]) ? $context["content_path"] : null))->display($context);
    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $this->env->resolveTemplate((isset($context["jsfiles"]) ? $context["jsfiles"] : null))->display($context);
    }

    public function getTemplateName()
    {
        return "sLayouts/fa/main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  82 => 23,  74 => 27,  71 => 26,  68 => 24,  65 => 23,  58 => 18,  52 => 15,  46 => 12,  42 => 11,  36 => 8,  31 => 6,  24 => 2,  21 => 1,);
    }
}
