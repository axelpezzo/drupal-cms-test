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

/* @theme_custom/partials/footer.html.twig */
class __TwigTemplate_55823d8f5b61f681065fa813cdf8d450 extends Template
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
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("theme_custom/footer"), "html", null, true);
        yield "

<footer class=\"site-footer\">
  <div class=\"container\">
    <div class=\"footer-menus\">
      ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 7), "theme_custom_footer1", [], "any", false, false, true, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "        <div class=\"footer-menu-column\">
          ";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 9), "theme_custom_footer1", [], "any", false, false, true, 9), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 12
        yield "
      ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 13), "theme_custom_footer2", [], "any", false, false, true, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "        <div class=\"footer-menu-column\">
          ";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 15), "theme_custom_footer2", [], "any", false, false, true, 15), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 18
        yield "
      ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 19), "theme_custom_footer3", [], "any", false, false, true, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "        <div class=\"footer-menu-column\">
          ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 21), "theme_custom_footer3", [], "any", false, false, true, 21), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 24
        yield "
      ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 25), "theme_custom_footer4", [], "any", false, false, true, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "        <div class=\"footer-menu-column\">
          ";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 27), "theme_custom_footer4", [], "any", false, false, true, 27), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 30
        yield "    </div>
  </div>

  <div class=\"footer-bottom\">
    <div class=\"container\">
      <div class=\"footer-bottom-content\">
        <div class=\"footer-logo\">
          <a href=\"";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\" class=\"logo\">
            <img src=\"";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/icons/logo_white.png\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Footer Logo"));
        yield "\" />
          </a>
        </div>

        <div class=\"footer-legal\">
          <span>P.IVA ";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["site_config"] ?? null), "vat_number", [], "any", true, true, true, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["site_config"] ?? null), "vat_number", [], "any", false, false, true, 43), "IT01234567890")) : ("IT01234567890")), "html", null, true);
        yield "</span>
          <span>Cap.Soc.i.v ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["site_config"] ?? null), "capital", [], "any", true, true, true, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["site_config"] ?? null), "capital", [], "any", false, false, true, 44), "Euro 1.000.000,00")) : ("Euro 1.000.000,00")), "html", null, true);
        yield "</span>
          <div class=\"footer-policy-links\">
            <a href=\"";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => 1]));
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Condizioni di vendita"));
        yield "</a>
            <a href=\"";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => 2]));
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Privacy policy"));
        yield "</a>
            <a href=\"";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => 3]));
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cookie policy"));
        yield "</a>
          </div>
        </div>

        <div class=\"footer-social\">
          <div class=\"social-links\">
            <a href=\"#\" class=\"social-link facebook\" aria-label=\"Facebook\">
              <svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M11.9078 9.26794H10.5011V8.34572C10.4872 8.24715 10.5129 8.14708 10.5727 8.06749C10.6325 7.9879 10.7214 7.93531 10.82 7.92127C10.844 7.91906 10.8682 7.91906 10.8922 7.92127H11.8889V6.39461H10.5178C10.0601 6.35808 9.60673 6.50484 9.25729 6.80261C8.90785 7.10037 8.691 7.52475 8.65444 7.98239C8.64667 8.07407 8.64667 8.16625 8.65444 8.25794V9.27794H7.77778V10.8424H8.65556V15.2868H10.5011V10.8424H11.7467L11.9078 9.26794ZM14.8689 0.833496H5.13C3.7707 0.837599 2.46825 1.3794 1.50707 2.34057C0.545901 3.30174 0.00410313 4.6042 0 5.9635L0 15.7024C0.00381014 17.0619 0.545479 18.3646 1.50668 19.326C2.46789 20.2874 3.77051 20.8294 5.13 20.8335H14.8689C16.2286 20.8297 17.5315 20.2879 18.4929 19.3264C19.4544 18.365 19.9962 17.0621 20 15.7024V5.9635C19.9959 4.60401 19.4539 3.30139 18.4925 2.34018C17.5311 1.37897 16.2284 0.837306 14.8689 0.833496ZM18.5911 15.7013C18.587 16.6873 18.1936 17.6318 17.4964 18.3292C16.7993 19.0265 15.8549 19.4202 14.8689 19.4246H5.13111C4.14509 19.4208 3.20053 19.0274 2.50331 18.3302C1.80608 17.633 1.41269 16.6884 1.40889 15.7024V5.96461C1.41269 4.97858 1.80608 4.03403 2.50331 3.3368C3.20053 2.63957 4.14509 2.24619 5.13111 2.24239H14.8689C15.8547 2.24619 16.7991 2.63942 17.4963 3.33641C18.1935 4.0334 18.587 4.97767 18.5911 5.9635V15.7013Z\" fill=\"white\"/>
              </svg>
            </a>
            <a href=\"#\" class=\"social-link instagram\" aria-label=\"Instagram\">
              <svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M11.9078 9.26794H10.5011V8.34572C10.4872 8.24715 10.5129 8.14708 10.5727 8.06749C10.6325 7.9879 10.7214 7.93531 10.82 7.92127C10.844 7.91906 10.8682 7.91906 10.8922 7.92127H11.8889V6.39461H10.5178C10.0601 6.35808 9.60673 6.50484 9.25729 6.80261C8.90785 7.10037 8.691 7.52475 8.65444 7.98239C8.64667 8.07407 8.64667 8.16625 8.65444 8.25794V9.27794H7.77778V10.8424H8.65556V15.2868H10.5011V10.8424H11.7467L11.9078 9.26794ZM14.8689 0.833496H5.13C3.7707 0.837599 2.46825 1.3794 1.50707 2.34057C0.545901 3.30174 0.00410313 4.6042 0 5.9635L0 15.7024C0.00381014 17.0619 0.545479 18.3646 1.50668 19.326C2.46789 20.2874 3.77051 20.8294 5.13 20.8335H14.8689C16.2286 20.8297 17.5315 20.2879 18.4929 19.3264C19.4544 18.365 19.9962 17.0621 20 15.7024V5.9635C19.9959 4.60401 19.4539 3.30139 18.4925 2.34018C17.5311 1.37897 16.2284 0.837306 14.8689 0.833496ZM18.5911 15.7013C18.587 16.6873 18.1936 17.6318 17.4964 18.3292C16.7993 19.0265 15.8549 19.4202 14.8689 19.4246H5.13111C4.14509 19.4208 3.20053 19.0274 2.50331 18.3302C1.80608 17.633 1.41269 16.6884 1.40889 15.7024V5.96461C1.41269 4.97858 1.80608 4.03403 2.50331 3.3368C3.20053 2.63957 4.14509 2.24619 5.13111 2.24239H14.8689C15.8547 2.24619 16.7991 2.63942 17.4963 3.33641C18.1935 4.0334 18.587 4.97767 18.5911 5.9635V15.7013Z\" fill=\"white\"/>
              </svg>
            </a>
            <a href=\"#\" class=\"social-link twitter\" aria-label=\"Twitter\">
              <svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M11.9078 9.26794H10.5011V8.34572C10.4872 8.24715 10.5129 8.14708 10.5727 8.06749C10.6325 7.9879 10.7214 7.93531 10.82 7.92127C10.844 7.91906 10.8682 7.91906 10.8922 7.92127H11.8889V6.39461H10.5178C10.0601 6.35808 9.60673 6.50484 9.25729 6.80261C8.90785 7.10037 8.691 7.52475 8.65444 7.98239C8.64667 8.07407 8.64667 8.16625 8.65444 8.25794V9.27794H7.77778V10.8424H8.65556V15.2868H10.5011V10.8424H11.7467L11.9078 9.26794ZM14.8689 0.833496H5.13C3.7707 0.837599 2.46825 1.3794 1.50707 2.34057C0.545901 3.30174 0.00410313 4.6042 0 5.9635L0 15.7024C0.00381014 17.0619 0.545479 18.3646 1.50668 19.326C2.46789 20.2874 3.77051 20.8294 5.13 20.8335H14.8689C16.2286 20.8297 17.5315 20.2879 18.4929 19.3264C19.4544 18.365 19.9962 17.0621 20 15.7024V5.9635C19.9959 4.60401 19.4539 3.30139 18.4925 2.34018C17.5311 1.37897 16.2284 0.837306 14.8689 0.833496ZM18.5911 15.7013C18.587 16.6873 18.1936 17.6318 17.4964 18.3292C16.7993 19.0265 15.8549 19.4202 14.8689 19.4246H5.13111C4.14509 19.4208 3.20053 19.0274 2.50331 18.3302C1.80608 17.633 1.41269 16.6884 1.40889 15.7024V5.96461C1.41269 4.97858 1.80608 4.03403 2.50331 3.3368C3.20053 2.63957 4.14509 2.24619 5.13111 2.24239H14.8689C15.8547 2.24619 16.7991 2.63942 17.4963 3.33641C18.1935 4.0334 18.587 4.97767 18.5911 5.9635V15.7013Z\" fill=\"white\"/>
              </svg>
            </a>
            <a href=\"#\" class=\"social-link youtube\" aria-label=\"YouTube\">
              <svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M11.9078 9.26794H10.5011V8.34572C10.4872 8.24715 10.5129 8.14708 10.5727 8.06749C10.6325 7.9879 10.7214 7.93531 10.82 7.92127C10.844 7.91906 10.8682 7.91906 10.8922 7.92127H11.8889V6.39461H10.5178C10.0601 6.35808 9.60673 6.50484 9.25729 6.80261C8.90785 7.10037 8.691 7.52475 8.65444 7.98239C8.64667 8.07407 8.64667 8.16625 8.65444 8.25794V9.27794H7.77778V10.8424H8.65556V15.2868H10.5011V10.8424H11.7467L11.9078 9.26794ZM14.8689 0.833496H5.13C3.7707 0.837599 2.46825 1.3794 1.50707 2.34057C0.545901 3.30174 0.00410313 4.6042 0 5.9635L0 15.7024C0.00381014 17.0619 0.545479 18.3646 1.50668 19.326C2.46789 20.2874 3.77051 20.8294 5.13 20.8335H14.8689C16.2286 20.8297 17.5315 20.2879 18.4929 19.3264C19.4544 18.365 19.9962 17.0621 20 15.7024V5.9635C19.9959 4.60401 19.4539 3.30139 18.4925 2.34018C17.5311 1.37897 16.2284 0.837306 14.8689 0.833496ZM18.5911 15.7013C18.587 16.6873 18.1936 17.6318 17.4964 18.3292C16.7993 19.0265 15.8549 19.4202 14.8689 19.4246H5.13111C4.14509 19.4208 3.20053 19.0274 2.50331 18.3302C1.80608 17.633 1.41269 16.6884 1.40889 15.7024V5.96461C1.41269 4.97858 1.80608 4.03403 2.50331 3.3368C3.20053 2.63957 4.14509 2.24619 5.13111 2.24239H14.8689C15.8547 2.24619 16.7991 2.63942 17.4963 3.33641C18.1935 4.0334 18.587 4.97767 18.5911 5.9635V15.7013Z\" fill=\"white\"/>
              </svg>
            </a>
            <a href=\"#\" class=\"social-link linkedin\" aria-label=\"LinkedIn\">
              <svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M11.9078 9.26794H10.5011V8.34572C10.4872 8.24715 10.5129 8.14708 10.5727 8.06749C10.6325 7.9879 10.7214 7.93531 10.82 7.92127C10.844 7.91906 10.8682 7.91906 10.8922 7.92127H11.8889V6.39461H10.5178C10.0601 6.35808 9.60673 6.50484 9.25729 6.80261C8.90785 7.10037 8.691 7.52475 8.65444 7.98239C8.64667 8.07407 8.64667 8.16625 8.65444 8.25794V9.27794H7.77778V10.8424H8.65556V15.2868H10.5011V10.8424H11.7467L11.9078 9.26794ZM14.8689 0.833496H5.13C3.7707 0.837599 2.46825 1.3794 1.50707 2.34057C0.545901 3.30174 0.00410313 4.6042 0 5.9635L0 15.7024C0.00381014 17.0619 0.545479 18.3646 1.50668 19.326C2.46789 20.2874 3.77051 20.8294 5.13 20.8335H14.8689C16.2286 20.8297 17.5315 20.2879 18.4929 19.3264C19.4544 18.365 19.9962 17.0621 20 15.7024V5.9635C19.9959 4.60401 19.4539 3.30139 18.4925 2.34018C17.5311 1.37897 16.2284 0.837306 14.8689 0.833496ZM18.5911 15.7013C18.587 16.6873 18.1936 17.6318 17.4964 18.3292C16.7993 19.0265 15.8549 19.4202 14.8689 19.4246H5.13111C4.14509 19.4208 3.20053 19.0274 2.50331 18.3302C1.80608 17.633 1.41269 16.6884 1.40889 15.7024V5.96461C1.41269 4.97858 1.80608 4.03403 2.50331 3.3368C3.20053 2.63957 4.14509 2.24619 5.13111 2.24239H14.8689C15.8547 2.24619 16.7991 2.63942 17.4963 3.33641C18.1935 4.0334 18.587 4.97767 18.5911 5.9635V15.7013Z\" fill=\"white\"/>
              </svg>
            </a>
            <a href=\"#\" class=\"social-link rss\" aria-label=\"RSS\">
              <svg width=\"20\" height=\"21\" viewBox=\"0 0 20 21\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M11.9078 9.26794H10.5011V8.34572C10.4872 8.24715 10.5129 8.14708 10.5727 8.06749C10.6325 7.9879 10.7214 7.93531 10.82 7.92127C10.844 7.91906 10.8682 7.91906 10.8922 7.92127H11.8889V6.39461H10.5178C10.0601 6.35808 9.60673 6.50484 9.25729 6.80261C8.90785 7.10037 8.691 7.52475 8.65444 7.98239C8.64667 8.07407 8.64667 8.16625 8.65444 8.25794V9.27794H7.77778V10.8424H8.65556V15.2868H10.5011V10.8424H11.7467L11.9078 9.26794ZM14.8689 0.833496H5.13C3.7707 0.837599 2.46825 1.3794 1.50707 2.34057C0.545901 3.30174 0.00410313 4.6042 0 5.9635L0 15.7024C0.00381014 17.0619 0.545479 18.3646 1.50668 19.326C2.46789 20.2874 3.77051 20.8294 5.13 20.8335H14.8689C16.2286 20.8297 17.5315 20.2879 18.4929 19.3264C19.4544 18.365 19.9962 17.0621 20 15.7024V5.9635C19.9959 4.60401 19.4539 3.30139 18.4925 2.34018C17.5311 1.37897 16.2284 0.837306 14.8689 0.833496ZM18.5911 15.7013C18.587 16.6873 18.1936 17.6318 17.4964 18.3292C16.7993 19.0265 15.8549 19.4202 14.8689 19.4246H5.13111C4.14509 19.4208 3.20053 19.0274 2.50331 18.3302C1.80608 17.633 1.41269 16.6884 1.40889 15.7024V5.96461C1.41269 4.97858 1.80608 4.03403 2.50331 3.3368C3.20053 2.63957 4.14509 2.24619 5.13111 2.24239H14.8689C15.8547 2.24619 16.7991 2.63942 17.4963 3.33641C18.1935 4.0334 18.587 4.97767 18.5911 5.9635V15.7013Z\" fill=\"white\"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "directory", "site_config"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@theme_custom/partials/footer.html.twig";
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
        return array (  149 => 48,  143 => 47,  137 => 46,  132 => 44,  128 => 43,  118 => 38,  114 => 37,  105 => 30,  99 => 27,  96 => 26,  94 => 25,  91 => 24,  85 => 21,  82 => 20,  80 => 19,  77 => 18,  71 => 15,  68 => 14,  66 => 13,  63 => 12,  57 => 9,  54 => 8,  52 => 7,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@theme_custom/partials/footer.html.twig", "/var/www/html/web/themes/custom/theme_custom/templates/partials/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 7];
        static $filters = ["escape" => 2, "t" => 38, "default" => 43];
        static $functions = ["attach_library" => 2, "path" => 37];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'default'],
                ['attach_library', 'path'],
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
