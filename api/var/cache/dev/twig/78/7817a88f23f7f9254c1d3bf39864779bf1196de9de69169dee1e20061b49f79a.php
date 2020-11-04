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

/* room/index.html.twig */
class __TwigTemplate_1bdeec2956e42be0cd3ae5e764a0f8fed6ee47870d12730b539e5996201933f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "room/index.html.twig", 1);
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
        echo "    <template id=\"message-odd\">
        <div class=\"media p-3\">
            <img src=\"\" height=40 class=\"align-self-center mr-3 avatar-user\">
            <div class=\"media-body\">
                <p></p>
                <p class=\"text-muted small\"></p>
            </div>
        </div>
    </template>

    <template id=\"message-even\">
        <div class=\"media p-3\">
            <div class=\"media-body text-right\">
                <p></p>
                <p class=\"text-muted small\"></p>
            </div>
            <img src=\"\" height=40 class=\"align-self-center ml-3 avatar-user\">
        </div>
    </template>

    <div id=\"channels\" class=\"container-fluid my-3\">
        <div class=\"row\">
            <div class=\"col-3\">
                <div class=\"list-group\" role=\"tablist\">
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('general')\" data-channel=\"general\" href=\"#general\" class=\"list-group-item list-group-item-action\" role=\"tab\">General</a>
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('mezzo')\" data-channel=\"mezzo\" href=\"#mezzo\" class=\"list-group-item list-group-item-action\" role=\"tab\">Mezzo</a>
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('fov')\" data-channel=\"fov\" href=\"#fov\" class=\"list-group-item list-group-item-action\" role=\"tab\">Fov</a>
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('bach')\" data-channel=\"bach\" href=\"#bach\" class=\"list-group-item list-group-item-action\" role=\"tab\">Bach</a>
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('inno')\" data-channel=\"inno\" href=\"#inno\" class=\"list-group-item list-group-item-action\" role=\"tab\">Inno</a>
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `general`</h3>
                    </div>
                    <div class=\"tab-pane\" id=\"mezzo\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `mezzo`</h3>
                    </div>
                    <div class=\"tab-pane\" id=\"fov\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `fov`</h3>
                    </div>
                    <div class=\"tab-pane\" id=\"bach\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `bach`</h3>
                    </div>
                    <div class=\"tab-pane\" id=\"inno\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `inno`</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class=\"navbar fixed-bottom navbar-light bg-light border-top\">
        <div class=\"input-group mb-3\">
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">
                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publisher"]) || array_key_exists("publisher", $context) ? $context["publisher"] : (function () { throw new RuntimeError('Variable "publisher" does not exist.', 60, $this->source); })()), "avatarUrl", [], "any", false, false, false, 60), "html", null, true);
        echo "\" height=30 class=\"align-self-center mr-3 avatar-user\">
            </a>
            <input id=\"message_text\" type=\"text\" class=\"form-control\" onkeypress=\"javascript:enterKeyPress(event)\" placeholder=\"Type something here...\" value=\"\">
            <div class=\"input-group-append\">
                <button onclick=\"javascript:sendMessage()\" class=\"btn btn-primary\" type=\"button\">
                    <i class=\"fa fa-send\"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class=\"modal fade\" id=\"staticBackdrop\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Welcome to mercure chat</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">

                    <form method=\"get\" action=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("room", ["channel" => (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 82, $this->source); })())]), "html", null, true);
        echo "\">
                        <div class=\"form-group row\">
                            <label for=\"staticUsername\" class=\"col-sm-2 col-form-label\">Username</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"staticUsername\" name=\"\" placeholder=\"The displayed name\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publisher"]) || array_key_exists("publisher", $context) ? $context["publisher"] : (function () { throw new RuntimeError('Variable "publisher" does not exist.', 86, $this->source); })()), "username", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputAvatar\" class=\"col-sm-2 col-form-label\">Avatar</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"inputAvatar\" placeholder=\"http://www.server.ext/path/to-my-avatar.png\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publisher"]) || array_key_exists("publisher", $context) ? $context["publisher"] : (function () { throw new RuntimeError('Variable "publisher" does not exist.', 92, $this->source); })()), "avatarUrl", [], "any", false, false, false, 92), "html", null, true);
        echo "\">
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
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        const odd = '";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publisher"]) || array_key_exists("publisher", $context) ? $context["publisher"] : (function () { throw new RuntimeError('Variable "publisher" does not exist.', 110, $this->source); })()), "username", [], "any", false, false, false, 110), "html", null, true);
        echo "'
        let channel = '";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "'
        let subscriptions = []

        document.querySelectorAll('div.list-group [data-channel]').forEach(item => {
            item. classList.remove('active')
        });
        document.querySelector('div.list-group [data-channel=' + channel + ']').classList.add('active');

        let join = function () {
            window.location.href = encodeURI(
                '";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("room");
        echo "/' + channel + '?'
                + '&username=' + document.querySelector('#staticUsername').value
                + '&avatar_url=' + document.querySelector('#inputAvatar').value)
        }

        let subscribe = function (topic) {
            if (subscriptions.indexOf(topic) === -1) {
                subscriptions.push(topic)
                const url = new URL('http://127.0.0.1:1337/.well-known/mercure');
                url.searchParams.append('topic', 'https://localhost/room/' + topic);

                const eventSource = new EventSource(url);
                eventSource.onmessage = function (e) {
                    let data = JSON.parse(e.data)
                    renderMessage(data, topic)
                }
            }
        }

        let setChannel = function (_channel) {
            subscribe(_channel)
            channel = _channel
        }

        let enterKeyPress = function (event) {
            if (event.keyCode === 13) {
                sendMessage();
            }
        }

        let sendMessage = function () {
            fetch('https://localhost/room/publish?message='
                + encodeURI(
                    document.querySelector('#message_text').value
                    + '&channel=' + channel
                    + '&username=";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publisher"]) || array_key_exists("publisher", $context) ? $context["publisher"] : (function () { throw new RuntimeError('Variable "publisher" does not exist.', 156, $this->source); })()), "username", [], "any", false, false, false, 156), "html", null, true);
        echo "'
                    + '&avatar_url=";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["publisher"]) || array_key_exists("publisher", $context) ? $context["publisher"] : (function () { throw new RuntimeError('Variable "publisher" does not exist.', 157, $this->source); })()), "avatarUrl", [], "any", false, false, false, 157), "html", null, true);
        echo "'
                )
            )
                .then(response => console.log(response))
            document.querySelector('#message_text').value = ''
        }

        let renderMessage = function (data, topic) {
            if (\"content\" in document.createElement(\"template\")) {
                var template = document.querySelector(\"#message-\" + (data.username === odd ? 'odd' : 'even'));
                var clone = document.importNode(template.content, true);
                clone.querySelector(\"img\").setAttribute('src', data.avatar_url);
                clone.querySelector(\"p:first-child\").innerHTML = data.message;
                clone.querySelector(\"p:last-child\").innerHTML = data.username + ' | ' + data.sent_at;
                document.querySelector('#' + topic).appendChild(clone);
            } else {
                console.error('template is not handled by your browser')
            }
        }

        subscribe(channel);
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 157,  263 => 156,  225 => 121,  212 => 111,  208 => 110,  202 => 108,  192 => 107,  168 => 92,  159 => 86,  152 => 82,  127 => 60,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <template id=\"message-odd\">
        <div class=\"media p-3\">
            <img src=\"\" height=40 class=\"align-self-center mr-3 avatar-user\">
            <div class=\"media-body\">
                <p></p>
                <p class=\"text-muted small\"></p>
            </div>
        </div>
    </template>

    <template id=\"message-even\">
        <div class=\"media p-3\">
            <div class=\"media-body text-right\">
                <p></p>
                <p class=\"text-muted small\"></p>
            </div>
            <img src=\"\" height=40 class=\"align-self-center ml-3 avatar-user\">
        </div>
    </template>

    <div id=\"channels\" class=\"container-fluid my-3\">
        <div class=\"row\">
            <div class=\"col-3\">
                <div class=\"list-group\" role=\"tablist\">
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('general')\" data-channel=\"general\" href=\"#general\" class=\"list-group-item list-group-item-action\" role=\"tab\">General</a>
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('mezzo')\" data-channel=\"mezzo\" href=\"#mezzo\" class=\"list-group-item list-group-item-action\" role=\"tab\">Mezzo</a>
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('fov')\" data-channel=\"fov\" href=\"#fov\" class=\"list-group-item list-group-item-action\" role=\"tab\">Fov</a>
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('bach')\" data-channel=\"bach\" href=\"#bach\" class=\"list-group-item list-group-item-action\" role=\"tab\">Bach</a>
                    <a data-toggle=\"list\" onclick=\"javascript:setChannel('inno')\" data-channel=\"inno\" href=\"#inno\" class=\"list-group-item list-group-item-action\" role=\"tab\">Inno</a>
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"general\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `general`</h3>
                    </div>
                    <div class=\"tab-pane\" id=\"mezzo\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `mezzo`</h3>
                    </div>
                    <div class=\"tab-pane\" id=\"fov\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `fov`</h3>
                    </div>
                    <div class=\"tab-pane\" id=\"bach\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `bach`</h3>
                    </div>
                    <div class=\"tab-pane\" id=\"inno\" role=\"tabpanel\">
                        <h3 class=\"border-bottom pb-3\">Channel `inno`</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class=\"navbar fixed-bottom navbar-light bg-light border-top\">
        <div class=\"input-group mb-3\">
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">
                <img src=\"{{ publisher.avatarUrl }}\" height=30 class=\"align-self-center mr-3 avatar-user\">
            </a>
            <input id=\"message_text\" type=\"text\" class=\"form-control\" onkeypress=\"javascript:enterKeyPress(event)\" placeholder=\"Type something here...\" value=\"\">
            <div class=\"input-group-append\">
                <button onclick=\"javascript:sendMessage()\" class=\"btn btn-primary\" type=\"button\">
                    <i class=\"fa fa-send\"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class=\"modal fade\" id=\"staticBackdrop\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Welcome to mercure chat</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">

                    <form method=\"get\" action=\"{{ url('room', {'channel': topic}) }}\">
                        <div class=\"form-group row\">
                            <label for=\"staticUsername\" class=\"col-sm-2 col-form-label\">Username</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"staticUsername\" name=\"\" placeholder=\"The displayed name\" value=\"{{ publisher.username }}\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputAvatar\" class=\"col-sm-2 col-form-label\">Avatar</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" class=\"form-control\" id=\"inputAvatar\" placeholder=\"http://www.server.ext/path/to-my-avatar.png\" value=\"{{ publisher.avatarUrl }}\">
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
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        const odd = '{{ publisher.username }}'
        let channel = '{{ topic }}'
        let subscriptions = []

        document.querySelectorAll('div.list-group [data-channel]').forEach(item => {
            item. classList.remove('active')
        });
        document.querySelector('div.list-group [data-channel=' + channel + ']').classList.add('active');

        let join = function () {
            window.location.href = encodeURI(
                '{{ url('room') }}/' + channel + '?'
                + '&username=' + document.querySelector('#staticUsername').value
                + '&avatar_url=' + document.querySelector('#inputAvatar').value)
        }

        let subscribe = function (topic) {
            if (subscriptions.indexOf(topic) === -1) {
                subscriptions.push(topic)
                const url = new URL('http://127.0.0.1:1337/.well-known/mercure');
                url.searchParams.append('topic', 'https://localhost/room/' + topic);

                const eventSource = new EventSource(url);
                eventSource.onmessage = function (e) {
                    let data = JSON.parse(e.data)
                    renderMessage(data, topic)
                }
            }
        }

        let setChannel = function (_channel) {
            subscribe(_channel)
            channel = _channel
        }

        let enterKeyPress = function (event) {
            if (event.keyCode === 13) {
                sendMessage();
            }
        }

        let sendMessage = function () {
            fetch('https://localhost/room/publish?message='
                + encodeURI(
                    document.querySelector('#message_text').value
                    + '&channel=' + channel
                    + '&username={{ publisher.username }}'
                    + '&avatar_url={{ publisher.avatarUrl }}'
                )
            )
                .then(response => console.log(response))
            document.querySelector('#message_text').value = ''
        }

        let renderMessage = function (data, topic) {
            if (\"content\" in document.createElement(\"template\")) {
                var template = document.querySelector(\"#message-\" + (data.username === odd ? 'odd' : 'even'));
                var clone = document.importNode(template.content, true);
                clone.querySelector(\"img\").setAttribute('src', data.avatar_url);
                clone.querySelector(\"p:first-child\").innerHTML = data.message;
                clone.querySelector(\"p:last-child\").innerHTML = data.username + ' | ' + data.sent_at;
                document.querySelector('#' + topic).appendChild(clone);
            } else {
                console.error('template is not handled by your browser')
            }
        }

        subscribe(channel);
    </script>
{% endblock %}
", "room/index.html.twig", "/srv/app/templates/room/index.html.twig");
    }
}
