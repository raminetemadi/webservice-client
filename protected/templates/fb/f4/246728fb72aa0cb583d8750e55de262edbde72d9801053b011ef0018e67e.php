<?php

/* s/fa/index/home.html */
class __TwigTemplate_fbf4246728fb72aa0cb583d8750e55de262edbde72d9801053b011ef0018e67e extends Twig_Template
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
        echo "<div class=\"col-md-12 \" style=\"margin-top: 20px;\">
    <div class=\"col-md-2 \">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">";
        // line 5
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
                    <div class=\"col-md-9 pull-left\">
                        <div class=\"form-group\">
                            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                                <div class=\"col-md-4 pull-left\" style=\"margin-bottom: 10px; \">
                                    <button class=\"btn btn-primary btn-lg text-center \" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" mode=\"digit\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</button>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
                            <div class=\"col-md-12 \" style=\"margin-bottom: 10px; padding:0;\" >
                                <button class=\"btn btn-primary btn-lg text-center col-lg-offset-5\" value=\"0\" mode=\"digit\">0</button>
                            </div>

                        </div>
                    </div>
                    <div class=\"col-md-3 pull-right\">
                        <div class=\"form-group\">
                            <button class=\"btn btn-primary btn-lg text-center\" value=\"+\" id=\"clear\">C</button>
                        </div>

                        <div class=\"form-group\">
                            <button class=\"btn btn-primary btn-lg text-center\" value=\"+\" mode=\"op\">+</button>
                        </div>
                        <div class=\"form-group\">
                            <button class=\"btn btn-primary btn-lg text-center\" value=\"-\" mode=\"op\">-&nbsp;</button>
                        </div>
                        <div class=\"form-group\">
                            <button class=\"btn btn-primary btn-lg text-center\" value=\"*\" mode=\"op\">*&nbsp;</button>
                        </div>
                        <div class=\"form-group\">
                            <button class=\"btn btn-primary btn-lg text-center\" value=\"=\" id=\"submit\">=</button>
                        </div>

                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-md-12\"><div id=\"msg\"></div></div>
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
        return array (  59 => 23,  48 => 20,  45 => 19,  41 => 18,  25 => 5,  19 => 1,);
    }
}
