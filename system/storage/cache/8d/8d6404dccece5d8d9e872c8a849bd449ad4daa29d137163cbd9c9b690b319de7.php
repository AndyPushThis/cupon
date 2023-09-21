<?php

/* default/template/common/footer.twig */
class __TwigTemplate_d2cc8f3aad80bf34f1bd9b7e7a73c3f01496f2606782e5a3e5159b742b999bd8 extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <div id=\"logo\"><a href=\"";
        // line 5
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\"><img src=\"/catalog/view/theme/default/image/logo.png\" title=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" alt=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" class=\"img-responsive\" /></a>
          ";
        // line 7
        echo "        </div>
      </div>
      <div class=\"col-sm-3\">
        <h5>Компанія</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"#\">Про нас</a></li>
          <li><a href=\"index.php?route=information/contact\">Співпраця</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>Інформація</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"#\">Як це працює?</a></li>
          <li><a href=\"index.php?route=information/information&information_id=3\">Політика безпеки</a></li>
          <li><a href=\"index.php?route=information/information&information_id=5\">Угода користувача</a></li>
        </ul>
      </div>
      ";
        // line 33
        echo "      ";
        // line 42
        echo "    </div>
    ";
        // line 45
        echo "  </div>
</footer>
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 48
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 50,  65 => 48,  61 => 47,  57 => 45,  54 => 42,  52 => 33,  33 => 7,  25 => 5,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-4">*/
/*         <div id="logo"><a href="{{ home }}"><img src="/catalog/view/theme/default/image/logo.png" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/*           {# <h1><a href="{{ home }}">{{ name }}</a></h1> #}*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>Компанія</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="#">Про нас</a></li>*/
/*           <li><a href="index.php?route=information/contact">Співпраця</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>Інформація</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="#">Як це працює?</a></li>*/
/*           <li><a href="index.php?route=information/information&information_id=3">Політика безпеки</a></li>*/
/*           <li><a href="index.php?route=information/information&information_id=5">Угода користувача</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       {# <div class="col-sm-3">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div> #}*/
/*       {# <div class="col-sm-3">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div> #}*/
/*     </div>*/
/*     {# <hr>*/
/*     <p>{{ powered }}</p> #}*/
/*   </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </body></html>*/
