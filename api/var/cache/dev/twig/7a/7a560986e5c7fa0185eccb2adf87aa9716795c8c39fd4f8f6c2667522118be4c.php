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

/* default/members.html.twig */
class __TwigTemplate_620327099058038d0bf71b913d75281ffccd3343f30fd1af71b711fd06ea567a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/members.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/members.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/members.html.twig", 1);
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
        echo "<div class=\"container-fluid my-3\">
    <div class=\"card-columns my-3\">

        <div class=\"card border-0 text-center\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" class=\"avatar-user\">
            <div class=\"card-body\">gdelre</div>
            <table class=\"table\">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <th>gdelre</th>
                    <td>commits</td>
                    <th>3.5 K</th>
                </tr>
                </tbody>
            </table>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Cras justo odio</li>
                <li class=\"list-group-item\">Dapibus ac facilisis in</li>
                <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
        </div>

        <div class=\"card border-0 text-center\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" class=\"avatar-user\">
            <div class=\"card-body\">gdelre</div>
            <table class=\"table\">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <th>gdelre</th>
                    <td>commits</td>
                    <th>3.5 K</th>
                </tr>
                </tbody>
            </table>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Cras justo odio</li>
                <li class=\"list-group-item\">Dapibus ac facilisis in</li>
                <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
        </div>

        <div class=\"card border-0 text-center\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" class=\"avatar-user\">
            <div class=\"card-body\">gdelre</div>
            <table class=\"table\">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <th>gdelre</th>
                    <td>commits</td>
                    <th>3.5 K</th>
                </tr>
                </tbody>
            </table>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Cras justo odio</li>
                <li class=\"list-group-item\">Dapibus ac facilisis in</li>
                <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
        </div>

        <div class=\"card border-0 text-center\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" class=\"avatar-user\">
            <div class=\"card-body\">gdelre</div>
            <table class=\"table\">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <th>gdelre</th>
                    <td>commits</td>
                    <th>3.5 K</th>
                </tr>
                </tbody>
            </table>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Cras justo odio</li>
                <li class=\"list-group-item\">Dapibus ac facilisis in</li>
                <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
        </div>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/members.html.twig";
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
<div class=\"container-fluid my-3\">
    <div class=\"card-columns my-3\">

        <div class=\"card border-0 text-center\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" class=\"avatar-user\">
            <div class=\"card-body\">gdelre</div>
            <table class=\"table\">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <th>gdelre</th>
                    <td>commits</td>
                    <th>3.5 K</th>
                </tr>
                </tbody>
            </table>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Cras justo odio</li>
                <li class=\"list-group-item\">Dapibus ac facilisis in</li>
                <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
        </div>

        <div class=\"card border-0 text-center\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" class=\"avatar-user\">
            <div class=\"card-body\">gdelre</div>
            <table class=\"table\">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <th>gdelre</th>
                    <td>commits</td>
                    <th>3.5 K</th>
                </tr>
                </tbody>
            </table>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Cras justo odio</li>
                <li class=\"list-group-item\">Dapibus ac facilisis in</li>
                <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
        </div>

        <div class=\"card border-0 text-center\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" class=\"avatar-user\">
            <div class=\"card-body\">gdelre</div>
            <table class=\"table\">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <th>gdelre</th>
                    <td>commits</td>
                    <th>3.5 K</th>
                </tr>
                </tbody>
            </table>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Cras justo odio</li>
                <li class=\"list-group-item\">Dapibus ac facilisis in</li>
                <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
        </div>

        <div class=\"card border-0 text-center\">
            <img src=\"https://avatars2.githubusercontent.com/u/2004182?s=460&v=4\" class=\"avatar-user\">
            <div class=\"card-body\">gdelre</div>
            <table class=\"table\">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <th>gdelre</th>
                    <td>commits</td>
                    <th>3.5 K</th>
                </tr>
                </tbody>
            </table>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">Cras justo odio</li>
                <li class=\"list-group-item\">Dapibus ac facilisis in</li>
                <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
        </div>

    </div>
</div>
{% endblock %}
", "default/members.html.twig", "/srv/app/templates/default/members.html.twig");
    }
}
