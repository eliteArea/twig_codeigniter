<?php

/* view.twig */
class __TwigTemplate_acb3398ce8d171812bf04d58b19abf04 extends Twig_Template
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
        // line 1
        echo "

<h1>
  Hello testovi twigova
</h1>

";
        // line 7
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "

<p>posle kesiranja</p>

<p class=\"footer\">Page rendered in <strong>";
        // line 11
        if (isset($context["elapsed_time"])) { $_elapsed_time_ = $context["elapsed_time"]; } else { $_elapsed_time_ = null; }
        echo twig_escape_filter($this->env, $_elapsed_time_, "html", null, true);
        echo "</strong> seconds , Memmory used: <strong>";
        if (isset($context["memory_usage"])) { $_memory_usage_ = $context["memory_usage"]; } else { $_memory_usage_ = null; }
        echo twig_escape_filter($this->env, $_memory_usage_, "html", null, true);
        echo "</strong> </p>
";
    }

    public function getTemplateName()
    {
        return "view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  27 => 7,  19 => 1,);
    }
}
