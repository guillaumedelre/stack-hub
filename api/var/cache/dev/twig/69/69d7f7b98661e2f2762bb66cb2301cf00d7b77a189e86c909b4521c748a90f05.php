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

/* default/room.html.twig */
class __TwigTemplate_d27b37f2703e817743da3b858f9429d953cd7fee70ab8623c8e988b3471d6e83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/room.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/room.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/room.html.twig", 1);
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
        echo "    <div class=\"container-fluid my-3\" id=\"room\">
        <div class=\"media p-3\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" height=40 class=\"align-self-center mr-3 avatar-user\">
            <div class=\"media-body\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
        </div>

        <div class=\"media bg-light p-3\">
            <div class=\"media-body text-right\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
            <img src=\"https://avatars1.githubusercontent.com/u/798295?s=460&u=7dfab4c185ecdf601a4bb9ef2006fd3259e14c6d&v=4\" height=40 class=\"align-self-center ml-3 avatar-user\">
        </div>

        <div class=\"media p-3\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" height=40 class=\"align-self-center mr-3 avatar-user\">
            <div class=\"media-body\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
        </div>

        <div class=\"media bg-light p-3\">
            <div class=\"media-body text-right\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
            <img src=\"https://avatars1.githubusercontent.com/u/798295?s=460&u=7dfab4c185ecdf601a4bb9ef2006fd3259e14c6d&v=4\" height=40 class=\"align-self-center ml-3 avatar-user\">
        </div>

        <div class=\"media p-3\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" height=40 class=\"align-self-center mr-3 avatar-user\">
            <div class=\"media-body\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
        </div>
    </div>
    <nav class=\"navbar fixed-bottom navbar-light bg-light border-top\">
        <div class=\"input-group mb-3\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" height=30 class=\"align-self-center mr-3 avatar-user\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Type something here...\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                    <i class=\"fa fa-send\"></i>
                </button>
            </div>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/room.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container-fluid my-3\" id=\"room\">
        <div class=\"media p-3\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" height=40 class=\"align-self-center mr-3 avatar-user\">
            <div class=\"media-body\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
        </div>

        <div class=\"media bg-light p-3\">
            <div class=\"media-body text-right\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
            <img src=\"https://avatars1.githubusercontent.com/u/798295?s=460&u=7dfab4c185ecdf601a4bb9ef2006fd3259e14c6d&v=4\" height=40 class=\"align-self-center ml-3 avatar-user\">
        </div>

        <div class=\"media p-3\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" height=40 class=\"align-self-center mr-3 avatar-user\">
            <div class=\"media-body\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
        </div>

        <div class=\"media bg-light p-3\">
            <div class=\"media-body text-right\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
            <img src=\"https://avatars1.githubusercontent.com/u/798295?s=460&u=7dfab4c185ecdf601a4bb9ef2006fd3259e14c6d&v=4\" height=40 class=\"align-self-center ml-3 avatar-user\">
        </div>

        <div class=\"media p-3\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" height=40 class=\"align-self-center mr-3 avatar-user\">
            <div class=\"media-body\">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Integer posuere erat a ante.</p>
                <p class=\"text-muted small\">2020-10-30 14:54:23</p>
            </div>
        </div>
    </div>
    <nav class=\"navbar fixed-bottom navbar-light bg-light border-top\">
        <div class=\"input-group mb-3\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" height=30 class=\"align-self-center mr-3 avatar-user\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Type something here...\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\">
                    <i class=\"fa fa-send\"></i>
                </button>
            </div>
        </div>
    </nav>
{% endblock %}
", "default/room.html.twig", "/srv/app/templates/default/room.html.twig");
    }
}
