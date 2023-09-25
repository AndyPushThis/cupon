<?php

/* default/template/extension/module/featured.twig */
class __TwigTemplate_fca72de06704c82e47bbcef44eb5731ddb985559b49d82cbc2fa197f38d6ea6d extends Twig_Template
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
        echo "<div class=\"top-cupon\">Популярні промокоди</div>
<div class=\"row\" id=\"pop-product\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 6
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
      <h4><a href=\"";
            // line 7
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>";
            // line 40
            echo "      <div class=\"button-cupon\"><a href=\"";
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">ВІДКРИТИ КУПОН</a></div>
    </div>
  </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</div>
<div class=\"row-wrapper\">
  <div id=\"category-btn\" class=\"button-category\"><a href=\"index.php?route=product/category&path=20\">Перейти до каталогу</a></div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 44,  45 => 40,  40 => 7,  30 => 6,  26 => 4,  22 => 3,  19 => 1,);
    }
}
/* <div class="top-cupon">Популярні промокоди</div>*/
/* <div class="row" id="pop-product">*/
/*  {% for product in products %}*/
/*   <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*       <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*       {# <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*         <p>{{ product.description }}</p>*/
/*         {% if product.rating %}*/
/*         <div class="rating">*/
/*           {% for i in 5 %}*/
/*           {% if product.rating < i %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% else %}*/
/*           <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price">*/
/*           {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %}*/
/*           <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*           {% endif %}*/
/*           {% if product.tax %}*/
/*           <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*         {% endif %}*/
/*       </div> #}*/
/*       {# <div class="button-group">*/
/*         <button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*       </div> #}*/
/*       <div class="button-cupon"><a href="{{ product.href }}">ВІДКРИТИ КУПОН</a></div>*/
/*     </div>*/
/*   </div>*/
/*   {% endfor %}*/
/* </div>*/
/* <div class="row-wrapper">*/
/*   <div id="category-btn" class="button-category"><a href="index.php?route=product/category&path=20">Перейти до каталогу</a></div>*/
/* </div>*/
