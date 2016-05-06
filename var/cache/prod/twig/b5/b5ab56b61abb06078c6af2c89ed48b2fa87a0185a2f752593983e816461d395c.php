<?php

/* :default:index.html.twig */
class __TwigTemplate_b4a628ba5f83c0c40c02af657b6abcafa758e5e2edf0980e36508c3e5cf5261b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"slider-area\">
            <!-- Slider -->
            <div class=\"block-slider block-slider4\">
                <ul class=\"\" id=\"bxslider-home4\">
                    <li>
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/h4-slide.png"), "html", null, true);
        echo "\" alt=\"Slide\">
                        <div class=\"caption-group\">
                            <h2 class=\"caption title\">
                                iPhone <span class=\"primary\">6 <strong>Plus</strong></span>
                            </h2>
                            <h4 class=\"caption subtitle\">Dual SIM</h4>
                            <a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Shop now</a>
                        </div>
                    </li>
                    <li><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/h4-slide2.png"), "html", null, true);
        echo "\" alt=\"Slide\">
                        <div class=\"caption-group\">
                            <h2 class=\"caption title\">
                                by one, get one <span class=\"primary\">50% <strong>off</strong></span>
                            </h2>
                            <h4 class=\"caption subtitle\">school supplies & backpacks.*</h4>
                            <a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Shop now</a>
                        </div>
                    </li>
                    <li><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/h4-slide3.png"), "html", null, true);
        echo "\" alt=\"Slide\">
                        <div class=\"caption-group\">
                            <h2 class=\"caption title\">
                                Apple <span class=\"primary\">Store <strong>Ipod</strong></span>
                            </h2>
                            <h4 class=\"caption subtitle\">Select Item</h4>
                            <a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Shop now</a>
                        </div>
                    </li>
                    <li><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/h4-slide4.png"), "html", null, true);
        echo "\" alt=\"Slide\">
                        <div class=\"caption-group\">
                          <h2 class=\"caption title\">
                                Apple <span class=\"primary\">Store <strong>Ipod</strong></span>
                            </h2>
                            <h4 class=\"caption subtitle\">& Phone</h4>
                            <a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Shop now</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class=\"promo-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo1\">
                        <i class=\"fa fa-refresh\"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo2\">
                        <i class=\"fa fa-truck\"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo3\">
                        <i class=\"fa fa-lock\"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"single-promo promo4\">
                        <i class=\"fa fa-gift\"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class=\"maincontent-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"latest-product\">
                        <h2 class=\"section-title\">Latest Products</h2>
                        <div class=\"product-carousel\">
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"single-product.html\">Samsung Galaxy s5- 2015</a></h2>
                                
                                <div class=\"product-carousel-price\">
                                    <ins>\$700.00</ins> <del>\$100.00</del>
                                </div> 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>Nokia Lumia 1320</h2>
                                <div class=\"product-carousel-price\">
                                    <ins>\$899.00</ins> <del>\$999.00</del>
                                </div> 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>LG Leon 2015</h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$400.00</ins> <del>\$425.00</del>
                                </div>                                 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"single-product.html\">Sony microsoft</a></h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$200.00</ins> <del>\$225.00</del>
                                </div>                            
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>iPhone 6</h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$1200.00</ins> <del>\$1355.00</del>
                                </div>                                 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"single-product.html\">Samsung gallaxy note 4</a></h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$400.00</ins>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class=\"brands-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"brand-wrapper\">
                        <div class=\"brand-list\">
                            <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/brand1.png"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/brand2.png"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/brand3.png"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/brand4.png"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/brand5.png"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/brand6.png"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/brand1.png"), "html", null, true);
        echo "\" alt=\"\">
                            <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/brand2.png"), "html", null, true);
        echo "\" alt=\"\">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class=\"product-widget-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"single-product-widget\">
                        <h2 class=\"product-wid-title\">Top Sellers</h2>
                        <a href=\"\" class=\"wid-view-more\">View All</a>
                        <div class=\"single-wid-product\">
                            <a href=\"single-product.html\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-thumb-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"product-thumb\"></a>
                            <h2><a href=\"single-product.html\">Sony Smart TV - 2015</a></h2>
                            <div class=\"product-wid-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product-wid-price\">
                                <ins>\$400.00</ins> <del>\$425.00</del>
                            </div>                            
                        </div>
                        <div class=\"single-wid-product\">
                            <a href=\"single-product.html\"><img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-thumb-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"product-thumb\"></a>
                            <h2><a href=\"single-product.html\">Apple new mac book 2015</a></h2>
                            <div class=\"product-wid-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product-wid-price\">
                                <ins>\$400.00</ins> <del>\$425.00</del>
                            </div>                            
                        </div>
                        <div class=\"single-wid-product\">
                            <a href=\"single-product.html\"><img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-thumb-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"product-thumb\"></a>
                            <h2><a href=\"single-product.html\">Apple new i phone 6</a></h2>
                            <div class=\"product-wid-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product-wid-price\">
                                <ins>\$400.00</ins> <del>\$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"single-product-widget\">
                        <h2 class=\"product-wid-title\">Recently Viewed</h2>
                        <a href=\"#\" class=\"wid-view-more\">View All</a>
                        <div class=\"single-wid-product\">
                            <a href=\"single-product.html\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-thumb-4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"product-thumb\"></a>
                            <h2><a href=\"single-product.html\">Sony playstation microsoft</a></h2>
                            <div class=\"product-wid-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product-wid-price\">
                                <ins>\$400.00</ins> <del>\$425.00</del>
                            </div>                            
                        </div>
                        <div class=\"single-wid-product\">
                            <a href=\"single-product.html\"><img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-thumb-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"product-thumb\"></a>
                            <h2><a href=\"single-product.html\">Sony Smart Air Condtion</a></h2>
                            <div class=\"product-wid-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product-wid-price\">
                                <ins>\$400.00</ins> <del>\$425.00</del>
                            </div>                            
                        </div>
                        <div class=\"single-wid-product\">
                            <a href=\"single-product.html\"><img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-thumb-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"product-thumb\"></a>
                            <h2><a href=\"single-product.html\">Samsung gallaxy note 4</a></h2>
                            <div class=\"product-wid-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product-wid-price\">
                                <ins>\$400.00</ins> <del>\$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"single-product-widget\">
                        <h2 class=\"product-wid-title\">Top New</h2>
                        <a href=\"#\" class=\"wid-view-more\">View All</a>
                        <div class=\"single-wid-product\">
                            <a href=\"single-product.html\"><img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-thumb-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"product-thumb\"></a>
                            <h2><a href=\"single-product.html\">Apple new i phone 6</a></h2>
                            <div class=\"product-wid-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product-wid-price\">
                                <ins>\$400.00</ins> <del>\$425.00</del>
                            </div>                            
                        </div>
                        <div class=\"single-wid-product\">
                            <a href=\"single-product.html\"><img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-thumb-4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"product-thumb\"></a>
                            <h2><a href=\"single-product.html\">Samsung gallaxy note 4</a></h2>
                            <div class=\"product-wid-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product-wid-price\">
                                <ins>\$400.00</ins> <del>\$425.00</del>
                            </div>                            
                        </div>
                        <div class=\"single-wid-product\">
                            <a href=\"single-product.html\"><img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/product-thumb-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"product-thumb\"></a>
                            <h2><a href=\"single-product.html\">Sony playstation microsoft</a></h2>
                            <div class=\"product-wid-rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                            <div class=\"product-wid-price\">
                                <ins>\$400.00</ins> <del>\$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    ";
    }

    // line 360
    public function block_footer($context, array $blocks = array())
    {
        // line 361
        echo "    <div class=\"footer-top-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-about-us\">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class=\"footer-social\">
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-menu\">
                        <h2 class=\"footer-wid-title\">User Navigation </h2>
                        <ul>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"#\">Order history</a></li>
                            <li><a href=\"#\">Wishlist</a></li>
                            <li><a href=\"#\">Vendor contact</a></li>
                            <li><a href=\"#\">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-menu\">
                        <h2 class=\"footer-wid-title\">Categories</h2>
                        <ul>
                            <li><a href=\"#\">Mobile Phone</a></li>
                            <li><a href=\"#\">Home accesseries</a></li>
                            <li><a href=\"#\">LED TV</a></li>
                            <li><a href=\"#\">Computer</a></li>
                            <li><a href=\"#\">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-newsletter\">
                        <h2 class=\"footer-wid-title\">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class=\"newsletter-form\">
                            <form action=\"#\">
                                <input type=\"email\" placeholder=\"Type your email\">
                                <input type=\"submit\" value=\"Subscribe\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class=\"footer-bottom-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"copyright\">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href=\"http://www.freshdesignweb.com\" target=\"_blank\">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class=\"col-md-4\">
                    <div class=\"footer-card-icon\">
                        <i class=\"fa fa-cc-discover\"></i>
                        <i class=\"fa fa-cc-mastercard\"></i>
                        <i class=\"fa fa-cc-paypal\"></i>
                        <i class=\"fa fa-cc-visa\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 361,  472 => 360,  449 => 341,  432 => 327,  415 => 313,  392 => 293,  375 => 279,  358 => 265,  335 => 245,  318 => 231,  301 => 217,  281 => 200,  277 => 199,  273 => 198,  269 => 197,  265 => 196,  261 => 195,  257 => 194,  253 => 193,  223 => 166,  205 => 151,  187 => 136,  169 => 121,  152 => 107,  134 => 92,  75 => 36,  63 => 27,  51 => 18,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/* <div class="slider-area">*/
/*             <!-- Slider -->*/
/*             <div class="block-slider block-slider4">*/
/*                 <ul class="" id="bxslider-home4">*/
/*                     <li>*/
/*                         <img src="{{ asset('assets/img/h4-slide.png') }}" alt="Slide">*/
/*                         <div class="caption-group">*/
/*                             <h2 class="caption title">*/
/*                                 iPhone <span class="primary">6 <strong>Plus</strong></span>*/
/*                             </h2>*/
/*                             <h4 class="caption subtitle">Dual SIM</h4>*/
/*                             <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li><img src="{{ asset('assets/img/h4-slide2.png') }}" alt="Slide">*/
/*                         <div class="caption-group">*/
/*                             <h2 class="caption title">*/
/*                                 by one, get one <span class="primary">50% <strong>off</strong></span>*/
/*                             </h2>*/
/*                             <h4 class="caption subtitle">school supplies & backpacks.*</h4>*/
/*                             <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li><img src="{{ asset('assets/img/h4-slide3.png') }}" alt="Slide">*/
/*                         <div class="caption-group">*/
/*                             <h2 class="caption title">*/
/*                                 Apple <span class="primary">Store <strong>Ipod</strong></span>*/
/*                             </h2>*/
/*                             <h4 class="caption subtitle">Select Item</h4>*/
/*                             <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li><img src="{{ asset('assets/img/h4-slide4.png') }}" alt="Slide">*/
/*                         <div class="caption-group">*/
/*                           <h2 class="caption title">*/
/*                                 Apple <span class="primary">Store <strong>Ipod</strong></span>*/
/*                             </h2>*/
/*                             <h4 class="caption subtitle">& Phone</h4>*/
/*                             <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- ./Slider -->*/
/*     </div> <!-- End slider area -->*/
/*     */
/*     <div class="promo-area">*/
/*         <div class="zigzag-bottom"></div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="single-promo promo1">*/
/*                         <i class="fa fa-refresh"></i>*/
/*                         <p>30 Days return</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="single-promo promo2">*/
/*                         <i class="fa fa-truck"></i>*/
/*                         <p>Free shipping</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="single-promo promo3">*/
/*                         <i class="fa fa-lock"></i>*/
/*                         <p>Secure payments</p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="single-promo promo4">*/
/*                         <i class="fa fa-gift"></i>*/
/*                         <p>New products</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End promo area -->*/
/*     */
/*     <div class="maincontent-area">*/
/*         <div class="zigzag-bottom"></div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="latest-product">*/
/*                         <h2 class="section-title">Latest Products</h2>*/
/*                         <div class="product-carousel">*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('assets/img/product-1.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2><a href="single-product.html">Samsung Galaxy s5- 2015</a></h2>*/
/*                                 */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$700.00</ins> <del>$100.00</del>*/
/*                                 </div> */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('assets/img/product-2.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2>Nokia Lumia 1320</h2>*/
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$899.00</ins> <del>$999.00</del>*/
/*                                 </div> */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('assets/img/product-3.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2>LG Leon 2015</h2>*/
/* */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$400.00</ins> <del>$425.00</del>*/
/*                                 </div>                                 */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('assets/img/product-4.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2><a href="single-product.html">Sony microsoft</a></h2>*/
/* */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$200.00</ins> <del>$225.00</del>*/
/*                                 </div>                            */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('assets/img/product-5.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2>iPhone 6</h2>*/
/* */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$1200.00</ins> <del>$1355.00</del>*/
/*                                 </div>                                 */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('assets/img/product-6.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>*/
/* */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$400.00</ins>*/
/*                                 </div>                            */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End main content area -->*/
/*     */
/*     <div class="brands-area">*/
/*         <div class="zigzag-bottom"></div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="brand-wrapper">*/
/*                         <div class="brand-list">*/
/*                             <img src="{{ asset('assets/img/brand1.png') }}" alt="">*/
/*                             <img src="{{ asset('assets/img/brand2.png') }}" alt="">*/
/*                             <img src="{{ asset('assets/img/brand3.png') }}" alt="">*/
/*                             <img src="{{ asset('assets/img/brand4.png') }}" alt="">*/
/*                             <img src="{{ asset('assets/img/brand5.png') }}" alt="">*/
/*                             <img src="{{ asset('assets/img/brand6.png') }}" alt="">*/
/*                             <img src="{{ asset('assets/img/brand1.png') }}" alt="">*/
/*                             <img src="{{ asset('assets/img/brand2.png') }}" alt="">                            */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End brands area -->*/
/*     */
/*     <div class="product-widget-area">*/
/*         <div class="zigzag-bottom"></div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-4">*/
/*                     <div class="single-product-widget">*/
/*                         <h2 class="product-wid-title">Top Sellers</h2>*/
/*                         <a href="" class="wid-view-more">View All</a>*/
/*                         <div class="single-wid-product">*/
/*                             <a href="single-product.html"><img src="{{ asset('assets/img/product-thumb-1.jpg') }}" alt="" class="product-thumb"></a>*/
/*                             <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>*/
/*                             <div class="product-wid-rating">*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </div>*/
/*                             <div class="product-wid-price">*/
/*                                 <ins>$400.00</ins> <del>$425.00</del>*/
/*                             </div>                            */
/*                         </div>*/
/*                         <div class="single-wid-product">*/
/*                             <a href="single-product.html"><img src="{{ asset('assets/img/product-thumb-2.jpg') }}" alt="" class="product-thumb"></a>*/
/*                             <h2><a href="single-product.html">Apple new mac book 2015</a></h2>*/
/*                             <div class="product-wid-rating">*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </div>*/
/*                             <div class="product-wid-price">*/
/*                                 <ins>$400.00</ins> <del>$425.00</del>*/
/*                             </div>                            */
/*                         </div>*/
/*                         <div class="single-wid-product">*/
/*                             <a href="single-product.html"><img src="{{ asset('assets/img/product-thumb-3.jpg') }}" alt="" class="product-thumb"></a>*/
/*                             <h2><a href="single-product.html">Apple new i phone 6</a></h2>*/
/*                             <div class="product-wid-rating">*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </div>*/
/*                             <div class="product-wid-price">*/
/*                                 <ins>$400.00</ins> <del>$425.00</del>*/
/*                             </div>                            */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <div class="single-product-widget">*/
/*                         <h2 class="product-wid-title">Recently Viewed</h2>*/
/*                         <a href="#" class="wid-view-more">View All</a>*/
/*                         <div class="single-wid-product">*/
/*                             <a href="single-product.html"><img src="{{ asset('assets/img/product-thumb-4.jpg') }}" alt="" class="product-thumb"></a>*/
/*                             <h2><a href="single-product.html">Sony playstation microsoft</a></h2>*/
/*                             <div class="product-wid-rating">*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </div>*/
/*                             <div class="product-wid-price">*/
/*                                 <ins>$400.00</ins> <del>$425.00</del>*/
/*                             </div>                            */
/*                         </div>*/
/*                         <div class="single-wid-product">*/
/*                             <a href="single-product.html"><img src="{{ asset('assets/img/product-thumb-1.jpg') }}" alt="" class="product-thumb"></a>*/
/*                             <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>*/
/*                             <div class="product-wid-rating">*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </div>*/
/*                             <div class="product-wid-price">*/
/*                                 <ins>$400.00</ins> <del>$425.00</del>*/
/*                             </div>                            */
/*                         </div>*/
/*                         <div class="single-wid-product">*/
/*                             <a href="single-product.html"><img src="{{ asset('assets/img/product-thumb-2.jpg') }}" alt="" class="product-thumb"></a>*/
/*                             <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>*/
/*                             <div class="product-wid-rating">*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </div>*/
/*                             <div class="product-wid-price">*/
/*                                 <ins>$400.00</ins> <del>$425.00</del>*/
/*                             </div>                            */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <div class="single-product-widget">*/
/*                         <h2 class="product-wid-title">Top New</h2>*/
/*                         <a href="#" class="wid-view-more">View All</a>*/
/*                         <div class="single-wid-product">*/
/*                             <a href="single-product.html"><img src="{{ asset('assets/img/product-thumb-3.jpg') }}" alt="" class="product-thumb"></a>*/
/*                             <h2><a href="single-product.html">Apple new i phone 6</a></h2>*/
/*                             <div class="product-wid-rating">*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </div>*/
/*                             <div class="product-wid-price">*/
/*                                 <ins>$400.00</ins> <del>$425.00</del>*/
/*                             </div>                            */
/*                         </div>*/
/*                         <div class="single-wid-product">*/
/*                             <a href="single-product.html"><img src="{{ asset('assets/img/product-thumb-4.jpg') }}" alt="" class="product-thumb"></a>*/
/*                             <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>*/
/*                             <div class="product-wid-rating">*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </div>*/
/*                             <div class="product-wid-price">*/
/*                                 <ins>$400.00</ins> <del>$425.00</del>*/
/*                             </div>                            */
/*                         </div>*/
/*                         <div class="single-wid-product">*/
/*                             <a href="single-product.html"><img src="{{ asset('assets/img/product-thumb-1.jpg') }}" alt="" class="product-thumb"></a>*/
/*                             <h2><a href="single-product.html">Sony playstation microsoft</a></h2>*/
/*                             <div class="product-wid-rating">*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                                 <i class="fa fa-star"></i>*/
/*                             </div>*/
/*                             <div class="product-wid-price">*/
/*                                 <ins>$400.00</ins> <del>$425.00</del>*/
/*                             </div>                            */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End product widget area -->*/
/*     {% endblock %}*/
/*     {% block footer %}*/
/*     <div class="footer-top-area">*/
/*         <div class="zigzag-bottom"></div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="footer-about-us">*/
/*                         <h2>u<span>Stora</span></h2>*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>*/
/*                         <div class="footer-social">*/
/*                             <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>*/
/*                             <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>*/
/*                             <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>*/
/*                             <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="footer-menu">*/
/*                         <h2 class="footer-wid-title">User Navigation </h2>*/
/*                         <ul>*/
/*                             <li><a href="#">My account</a></li>*/
/*                             <li><a href="#">Order history</a></li>*/
/*                             <li><a href="#">Wishlist</a></li>*/
/*                             <li><a href="#">Vendor contact</a></li>*/
/*                             <li><a href="#">Front page</a></li>*/
/*                         </ul>                        */
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="footer-menu">*/
/*                         <h2 class="footer-wid-title">Categories</h2>*/
/*                         <ul>*/
/*                             <li><a href="#">Mobile Phone</a></li>*/
/*                             <li><a href="#">Home accesseries</a></li>*/
/*                             <li><a href="#">LED TV</a></li>*/
/*                             <li><a href="#">Computer</a></li>*/
/*                             <li><a href="#">Gadets</a></li>*/
/*                         </ul>                        */
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="footer-newsletter">*/
/*                         <h2 class="footer-wid-title">Newsletter</h2>*/
/*                         <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>*/
/*                         <div class="newsletter-form">*/
/*                             <form action="#">*/
/*                                 <input type="email" placeholder="Type your email">*/
/*                                 <input type="submit" value="Subscribe">*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End footer top area -->*/
/*     */
/*     <div class="footer-bottom-area">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-8">*/
/*                     <div class="copyright">*/
/*                         <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-4">*/
/*                     <div class="footer-card-icon">*/
/*                         <i class="fa fa-cc-discover"></i>*/
/*                         <i class="fa fa-cc-mastercard"></i>*/
/*                         <i class="fa fa-cc-paypal"></i>*/
/*                         <i class="fa fa-cc-visa"></i>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End footer bottom area -->*/
/* {% endblock %}*/
