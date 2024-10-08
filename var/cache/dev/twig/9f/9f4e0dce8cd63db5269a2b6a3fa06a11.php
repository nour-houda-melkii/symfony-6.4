<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* author/list.html.twig */
class __TwigTemplate_b7bbee053b89e7b1597070c5d0e998e3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        img {
            max-width: 40px;
            height: auto;
            border-radius: 50%;
        }

        td a {
            color: #3498db;
        }

        p {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Le nombre des auteurs est : ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 52, $this->source); })())), "html", null, true);
        yield "</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Picture</th>
        <th>Username</th>
        <th>Email</th>
        <th>Number of Books</th>
        <th>Details</th>
    </tr>

    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 65
            yield "        <tr>
            <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
            <td><img src=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["a"], "picture", [], "any", false, false, false, 67))), "html", null, true);
            yield "\" alt=\"Author Picture\"></td>
            <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "username", [], "any", false, false, false, 68)), "html", null, true);
            yield "</td>
            <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
            <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nb_books", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
            <td><a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_authorDetails", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\">Details</a></td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            yield "        <tr>
            <td colspan=\"6\" style=\"text-align: center;\">Tableau Vide</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "</table>

";
        // line 80
        $context["nbTotal"] = 0;
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 82
            yield "    ";
            $context["nbTotal"] = ((isset($context["nbTotal"]) || array_key_exists("nbTotal", $context) ? $context["nbTotal"] : (function () { throw new RuntimeError('Variable "nbTotal" does not exist.', 82, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nb_books", [], "any", false, false, false, 82));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "
<p>Le nombre total des livres de tous les auteurs est : ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nbTotal"]) || array_key_exists("nbTotal", $context) ? $context["nbTotal"] : (function () { throw new RuntimeError('Variable "nbTotal" does not exist.', 85, $this->source); })()), "html", null, true);
        yield "</p>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "author/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  181 => 85,  178 => 84,  171 => 82,  167 => 81,  165 => 80,  161 => 78,  152 => 74,  144 => 71,  140 => 70,  136 => 69,  132 => 68,  128 => 67,  124 => 66,  121 => 65,  116 => 64,  101 => 52,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        img {
            max-width: 40px;
            height: auto;
            border-radius: 50%;
        }

        td a {
            color: #3498db;
        }

        p {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Le nombre des auteurs est : {{ authors | length }}</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Picture</th>
        <th>Username</th>
        <th>Email</th>
        <th>Number of Books</th>
        <th>Details</th>
    </tr>

    {% for a in authors %}
        <tr>
            <td>{{ a.id }}</td>
            <td><img src=\"{{ asset('images/' ~ a.picture) }}\" alt=\"Author Picture\"></td>
            <td>{{ a.username | upper }}</td>
            <td>{{ a.email }}</td>
            <td>{{ a.nb_books }}</td>
            <td><a href=\"{{ path('app_authorDetails', {'id': a.id}) }}\">Details</a></td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"6\" style=\"text-align: center;\">Tableau Vide</td>
        </tr>
    {% endfor %}
</table>

{% set nbTotal = 0 %}
{% for a in authors %}
    {% set nbTotal = nbTotal + a.nb_books %}
{% endfor %}

<p>Le nombre total des livres de tous les auteurs est : {{ nbTotal }}</p>

</body>
</html>
", "author/list.html.twig", "C:\\Users\\nourm\\FirstProject1\\templates\\author\\list.html.twig");
    }
}
