<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* room/join.html.twig */
class __TwigTemplate_7f3cdda222dacda7e645953f07cf3650370d0084e5e1d70ff65b1bb171af9395 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/join.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/join.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "room/join.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container text-center\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Welcome to mercure chat</h5>
            </div>
            <div class=\"card-body\">
                <form method=\"get\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("room", ["channel" => (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 10, $this->source); })())]), "html", null, true);
        echo "\">
                    <div class=\"form-group row\">
                        <label for=\"staticUsername\" class=\"col-sm-2 col-form-label\">Username</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" id=\"staticUsername\" name=\"\" placeholder=\"The displayed name\" value=\"\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"inputAvatar\" class=\"col-sm-2 col-form-label\">Avatar</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" id=\"inputAvatar\" placeholder=\"http://www.server.ext/path/to-my-avatar.png\" value=\"\">
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" onclick=\"javascript:join()\" class=\"btn btn-primary\">Join</button>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        const channel = '";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "'
        let join = function () {
            window.location.href = encodeURI(
                '";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("room");
        echo "/' + channel + '?'
                + '&username=' + document.querySelector('#staticUsername').value
                + '&avatar_url=' + document.querySelector('#inputAvatar').value)
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/join.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  125 => 36,  119 => 34,  109 => 33,  77 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container text-center\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Welcome to mercure chat</h5>
            </div>
            <div class=\"card-body\">
                <form method=\"get\" action=\"{{ url('room', {'channel': topic}) }}\">
                    <div class=\"form-group row\">
                        <label for=\"staticUsername\" class=\"col-sm-2 col-form-label\">Username</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" id=\"staticUsername\" name=\"\" placeholder=\"The displayed name\" value=\"\">
                        </div>
                    </div>
                    <div class=\"form-group row\">
                        <label for=\"inputAvatar\" class=\"col-sm-2 col-form-label\">Avatar</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" id=\"inputAvatar\" placeholder=\"http://www.server.ext/path/to-my-avatar.png\" value=\"\">
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" onclick=\"javascript:join()\" class=\"btn btn-primary\">Join</button>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        const channel = '{{ topic }}'
        let join = function () {
            window.location.href = encodeURI(
                '{{ url('room') }}/' + channel + '?'
                + '&username=' + document.querySelector('#staticUsername').value
                + '&avatar_url=' + document.querySelector('#inputAvatar').value)
        }
    </script>
{% endblock %}
", "room/join.html.twig", "/srv/app/templates/room/join.html.twig");
    }
}
