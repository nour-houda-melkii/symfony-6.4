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

/* author/Affiche.html.twig */
class __TwigTemplate_0c38c1927586d26de24bd7a9ddff6108 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/Affiche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/Affiche.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>List authors</h1>
<table border=\"1\">
<tr>
    <th>Username</th>
    <th>Email</th>
    <th>edit</th>
    <th>delete</th>
</tr>

      <tr>  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            yield " </tr>
        <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "username", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
        <td> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
    <td><a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\">edit</a></td>
    <td><a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">delete</a></td>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
</table>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "author/Affiche.html.twig";
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
        return array (  97 => 28,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  69 => 20,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>List authors</h1>
<table border=\"1\">
<tr>
    <th>Username</th>
    <th>Email</th>
    <th>edit</th>
    <th>delete</th>
</tr>

      <tr>  {% for a in author %} </tr>
        <td>{{ a.username }}</td>
        <td> {{ a.email }}</td>
    <td><a href=\"{{ path('app_edit', {'id': a.id}) }}\">edit</a></td>
    <td><a href=\"{{ path('app_delete', {'id': a.id}) }}\">delete</a></td>


    {% endfor %}

</table>
</body>
</html>", "author/Affiche.html.twig", "C:\\Users\\nourm\\FirstProject1\\templates\\author\\Affiche.html.twig");
    }
}
