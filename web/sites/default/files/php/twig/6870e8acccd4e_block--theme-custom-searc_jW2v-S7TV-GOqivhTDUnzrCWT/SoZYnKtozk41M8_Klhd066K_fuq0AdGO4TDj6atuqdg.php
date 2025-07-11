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

/* themes/custom/theme_custom/templates/block--theme-custom-searchform.html.twig */
class __TwigTemplate_024f2c7527543d0724f8f1fe03ebb8a9 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "
<div class=\"custom-search-form\">
  <form";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
    <label for=\"";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 8), "html", null, true);
        yield "-input\" class=\"visually-hidden\">
      ";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "
    </label>
    <input
      type=\"search\"
      id=\"";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 13), "html", null, true);
        yield "-input\"
      name=\"";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["search_input_name"] ?? null), "html", null, true);
        yield "\"
      value=\"";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["search_input_value"] ?? null), "html", null, true);
        yield "\"
      placeholder=\"Cerca...\"
      class=\"custom-search-input\"
    >
    <button type=\"submit\" class=\"custom-search-button\">
      <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
        <path d=\"M16.4413 17.4028L10.2439 11.2028C9.75054 11.6157 9.18141 11.9341 8.53652 12.1581C7.89165 12.3822 7.23144 12.4942 6.55587 12.4942C4.88169 12.4942 3.46681 11.9162 2.31125 10.7601C1.15568 9.60411 0.577896 8.19161 0.577896 6.52264C0.577896 4.85369 1.15504 3.44037 2.30932 2.28267C3.46359 1.12498 4.87608 0.546143 6.5468 0.546143C8.21751 0.546143 9.63171 1.12471 10.7894 2.28184C11.9471 3.43896 12.5259 4.85279 12.5259 6.52334C12.5259 7.22186 12.4086 7.89483 12.174 8.54227C11.9394 9.1897 11.6263 9.75032 11.2346 10.2241L17.4346 16.4096L16.4413 17.4028ZM6.55192 11.0952C7.83205 11.0952 8.91459 10.6533 9.79952 9.76959C10.6845 8.88589 11.1269 7.80256 11.1269 6.51959C11.1269 5.23663 10.6845 4.15348 9.79952 3.27014C8.91459 2.38681 7.83125 1.94514 6.54952 1.94514C5.26779 1.94514 4.18525 2.387 3.30192 3.27072C2.41859 4.15444 1.97692 5.23777 1.97692 6.52072C1.97692 7.80369 2.41872 8.88684 3.30232 9.77017C4.18592 10.6535 5.26912 11.0952 6.55192 11.0952Z\" fill=\"black\"/>
      </svg>
    </button>
  </form>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "label", "search_input_name", "search_input_value"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/theme_custom/templates/block--theme-custom-searchform.html.twig";
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
        return array (  71 => 15,  67 => 14,  63 => 13,  56 => 9,  52 => 8,  48 => 7,  44 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/theme_custom/templates/block--theme-custom-searchform.html.twig", "/var/www/html/web/themes/custom/theme_custom/templates/block--theme-custom-searchform.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 7];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
