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

/* @WebProfiler/Icon/memory.svg */
class __TwigTemplate_389f984050646f1d73eaf0a9ddd8f9b45761529d23865e112b77f3b9c03b2837 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/memory.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/memory.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M6 18.9V15h12v3.9c0 .7-.2 1.1-1 1.1H7c-.8 0-1-.4-1-1.1zM20 1c-.6 0-1 .5-1 1.1v18c0 .5-.4.9-.9.9H5.9a.9.9 0 0 1-.9-.9v-18C5 1.5 4.6 1 4 1c-.5 0-1 .5-1 1.1v18C3 21.7 4.3 23 5.9 23h12.2c1.6 0 2.9-1.3 2.9-2.9v-18c0-.6-.4-1.1-1-1.1zm-2 8H6v5h12V9z\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/memory.svg";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M6 18.9V15h12v3.9c0 .7-.2 1.1-1 1.1H7c-.8 0-1-.4-1-1.1zM20 1c-.6 0-1 .5-1 1.1v18c0 .5-.4.9-.9.9H5.9a.9.9 0 0 1-.9-.9v-18C5 1.5 4.6 1 4 1c-.5 0-1 .5-1 1.1v18C3 21.7 4.3 23 5.9 23h12.2c1.6 0 2.9-1.3 2.9-2.9v-18c0-.6-.4-1.1-1-1.1zm-2 8H6v5h12V9z\"/></svg>
", "@WebProfiler/Icon/memory.svg", "/Users/thekazdal/Desktop/lovedones/CurrencyAPI/vendor/symfony/web-profiler-bundle/Resources/views/Icon/memory.svg");
    }
}
