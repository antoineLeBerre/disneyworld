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
        $__internal_3e522491a5550a8f5272b7f73b382c0b1839dc1be1952bfb0f3016d20df19a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e522491a5550a8f5272b7f73b382c0b1839dc1be1952bfb0f3016d20df19a9c->enter($__internal_3e522491a5550a8f5272b7f73b382c0b1839dc1be1952bfb0f3016d20df19a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DisneylanddisneyBundle:Default:index.html.twig"));

        $__internal_363b664ec09dbd3b80a7c9409c3c6659e768cac371660358277e08a87efb75be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363b664ec09dbd3b80a7c9409c3c6659e768cac371660358277e08a87efb75be->enter($__internal_363b664ec09dbd3b80a7c9409c3c6659e768cac371660358277e08a87efb75be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DisneylanddisneyBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3e522491a5550a8f5272b7f73b382c0b1839dc1be1952bfb0f3016d20df19a9c->leave($__internal_3e522491a5550a8f5272b7f73b382c0b1839dc1be1952bfb0f3016d20df19a9c_prof);

        
        $__internal_363b664ec09dbd3b80a7c9409c3c6659e768cac371660358277e08a87efb75be->leave($__internal_363b664ec09dbd3b80a7c9409c3c6659e768cac371660358277e08a87efb75be_prof);

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
", "DisneylanddisneyBundle:Default:index.html.twig", "/Users/adrienjourdier/Sites/workshop_symfony/disneyworld/src/Disneyland/disneyBundle/Resources/views/Default/index.html.twig");
    }
}
