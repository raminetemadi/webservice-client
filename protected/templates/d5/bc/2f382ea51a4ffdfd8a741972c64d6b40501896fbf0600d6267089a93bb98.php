<?php

/* s/fa/index/home.html */
class __TwigTemplate_d5bc2f382ea51a4ffdfd8a741972c64d6b40501896fbf0600d6267089a93bb98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-3 col-md-offset-4 box-center text-center\" style=\"margin-top: 20px;\">
                <div class=\"row\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "h1", array()), "html", null, true);
        echo "</h4>
                    </div>

                    <div class=\"panel-body form-horizontal\">
                        <div class=\"form-group\">
                            <div class=\"col-md-12\">
                                <input type=\"text\" id=\"input\" class=\"form-control\" disabled>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-12 pull-left\">
                                <div class=\"form-group\">
                                    ";
        // line 21
        echo "                                    ";
        $context["keys"] = array(1 => array("value" => 1, "mode" => "digit", "id" => "", "text" => "1"), 2 => array("value" => 2, "mode" => "digit", "id" => "", "text" => "2"), 3 => array("value" => 3, "mode" => "digit", "id" => "", "text" => "3"), "m" => array("value" => "*", "mode" => "op", "id" => "", "text" => "x"), 4 => array("value" => 4, "mode" => "digit", "id" => "", "text" => "4"), 5 => array("value" => 5, "mode" => "digit", "id" => "", "text" => "5"), 6 => array("value" => 6, "mode" => "digit", "id" => "", "text" => "6"), "s" => array("value" => "-", "mode" => "op", "id" => "", "text" => "-"), "c" => array("value" => "c", "mode" => "", "id" => "clear", "text" => "C"), 0 => array("value" => "0", "mode" => "digit", "id" => "", "text" => "0"), "e" => array("value" => "=", "mode" => "", "id" => "submit", "text" => "="), "p" => array("value" => "+", "mode" => "op", "id" => "", "text" => "+"));
        // line 35
        echo "                                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keys"]) ? $context["keys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                                    <div class=\"col-md-3 pull-left mb11\">
                                        <button class=\"btn btn-primary btn-lg text-center \" value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
            echo "\" mode=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mode", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
            echo "</button>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                </div>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-md-12\"><div id=\"msg\"></div></div>
                        </div>
                    </div>
                </div>
                    </div>
        </div>
    </div>
</div>
<script>
    \$(document).ready(function () {
        \$('button[mode=\"digit\"]').click(function () {
            var val = \$(this).val();

            \$('#input').val( \$('#input').val() + val);
        });

        \$('button[mode=\"op\"]').click(function () {
            var val = \$(this).val();

            var i =  \$('#input').val();

            if(i.search(/\\+/) == -1 && i.search(/\\-/) == -1 && i.search(/\\*/) == -1)
                \$('#input').val( i + val);
            else
                \$('#submit').click();
        });

        \$('#submit').click(function () {

            \$.post('/s/calculate', {input: \$('#input').val()}, function (data) {
                if( !isNaN(data) ) \$('#input').val(data); else \$('#msg').html(data);
            })
        });

        \$('#clear').click(function () {
            \$('#input').val('');
        });
    })
</script>";
    }

    public function getTemplateName()
    {
        return "s/fa/index/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 40,  54 => 37,  51 => 36,  46 => 35,  43 => 21,  27 => 7,  19 => 1,);
    }
}
