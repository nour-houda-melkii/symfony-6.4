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

/* author/showAuthor.html.twig */
class __TwigTemplate_f4efab1ba149c1c26062ff9c0b3f9699 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/showAuthor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/showAuthor.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Author Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #ddd;
        }

        p {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }

        p span {
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>

<div class=\"container\">
    <h1>Author Details</h1>
    <img src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 70, $this->source); })()), "picture", [], "any", false, false, false, 70))), "html", null, true);
        yield "\" alt=\"Author Picture\">
    <p><span>Name:</span> ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 71, $this->source); })()), "username", [], "any", false, false, false, 71), "html", null, true);
        yield "</p>
    <p><span>Email:</span> ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>
    <p><span>Number of books:</span> ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 73, $this->source); })()), "nb_books", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
</div>

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
        return "author/showAuthor.html.twig";
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
        return array (  131 => 73,  127 => 72,  123 => 71,  119 => 70,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Author Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #ddd;
        }

        p {
            font-size: 18px;
            color: #555;
            margin: 10px 0;
        }

        p span {
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            img {
                width: 120px;
                height: 120px;
            }
        }
    </style>
</head>
<body>

<div class=\"container\">
    <h1>Author Details</h1>
    <img src=\"{{ asset('images/' ~ author.picture) }}\" alt=\"Author Picture\">
    <p><span>Name:</span> {{ author.username }}</p>
    <p><span>Email:</span> {{ author.email }}</p>
    <p><span>Number of books:</span> {{ author.nb_books }}</p>
</div>

</body>
</html>
", "author/showAuthor.html.twig", "C:\\Users\\nourm\\FirstProject1\\templates\\author\\showAuthor.html.twig");
    }
}
