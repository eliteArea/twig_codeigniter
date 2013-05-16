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

<p> title je : ";
        // line 6
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo " </p>


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
        // line 16
        echo "  ";
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "
";
        // line 18
        echo "

";
        // line 20
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        echo twig_var_dump($this->env, $context, $_query_);
        echo "


  ";
        // line 23
        if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_query_);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 24
            echo "    <h2>User info</h2>
    <ul>
      <li>";
            // line 26
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "name"));
            echo "</li>
      <li>";
            // line 27
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "uid"), "html", null, true);
            echo "</li>
      <li>";
            // line 28
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "date"), "html", null, true);
            echo "</li>
      <li>";
            // line 29
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "age"), "html", null, true);
            echo "</li>
      <li>";
            // line 30
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "type"), "html", null, true);
            echo "</li>
    </ul>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "  
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
        return array (  102 => 33,  92 => 30,  87 => 29,  82 => 28,  77 => 27,  72 => 26,  68 => 24,  63 => 23,  56 => 20,  52 => 18,  46 => 16,  35 => 11,  26 => 6,  19 => 1,);
    }
}
