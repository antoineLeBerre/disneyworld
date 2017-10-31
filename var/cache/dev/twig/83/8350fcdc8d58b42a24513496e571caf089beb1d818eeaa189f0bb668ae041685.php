<?php

/* DisneylanddisneyBundle:Default:index.html.twig */
class __TwigTemplate_e32336b4ca07dcc2b77329b6406e2276b09145bba25607e372ad4962cd0d690a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5ccb61a5fd80102ddfef13ad2e3c73900bc9d9061e066935e00335de1a380e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ccb61a5fd80102ddfef13ad2e3c73900bc9d9061e066935e00335de1a380e2->enter($__internal_b5ccb61a5fd80102ddfef13ad2e3c73900bc9d9061e066935e00335de1a380e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DisneylanddisneyBundle:Default:index.html.twig"));

        $__internal_2af2dd054f96b112800f39224f727c85ac99592ce89c7bc83217875e2b42049f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af2dd054f96b112800f39224f727c85ac99592ce89c7bc83217875e2b42049f->enter($__internal_2af2dd054f96b112800f39224f727c85ac99592ce89c7bc83217875e2b42049f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DisneylanddisneyBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_b5ccb61a5fd80102ddfef13ad2e3c73900bc9d9061e066935e00335de1a380e2->leave($__internal_b5ccb61a5fd80102ddfef13ad2e3c73900bc9d9061e066935e00335de1a380e2_prof);

        
        $__internal_2af2dd054f96b112800f39224f727c85ac99592ce89c7bc83217875e2b42049f->leave($__internal_2af2dd054f96b112800f39224f727c85ac99592ce89c7bc83217875e2b42049f_prof);

    }

    public function getTemplateName()
    {
        return "DisneylanddisneyBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "DisneylanddisneyBundle:Default:index.html.twig", "/Users/adrienjourdier/Sites/workshop_symfony/disneyland/src/Disneyland/disneyBundle/Resources/views/Default/index.html.twig");
    }
}
