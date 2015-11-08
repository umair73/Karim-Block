<?php


$installer = $this;
$installer->startSetup();
$installer->endSetup();

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$setup->addAttribute('catalog_product', 'magikfeatured', array(
        'group'             => 'General',
        'type'              => 'int',
        'backend'           => '',
        'frontend'          => '',
        'label'             => 'Featured Product On Home',
        'input'             => 'boolean',
        'class'             => '',
        'source'            => '',
        'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible'           => true,
        'required'          => false,
        'user_defined'      => true,
        'default'           => '0',
        'searchable'        => false,
        'filterable'        => false,
        'comparable'        => false,
        'visible_on_front'  => false,
        'unique'            => false,
        'apply_to'          => 'simple,configurable,virtual,bundle,downloadable',
        'is_configurable'   => false
    )); 

try {
//create pages and blocks programmatically

//Custom Tab1
$staticBlock = array(
    'title' => 'Custom Tab1',
    'identifier' => 'civic_custom_tab1',
    'content' => "<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>",
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Custom Tab2
$staticBlock = array(
    'title' => 'Custom Tab2',
    'identifier' => 'civic_custom_tab2',
    'content' => "<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>",
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Empty Category
$staticBlock = array(
    'title' => 'Empty Category',
    'identifier' => 'civic_empty_category',
    'content' => "<p>There are no products matching the selection.<br/> This is a static CMS block displayed if category is empty. You can put your own content here.</p>",
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Logo Brand block
 $staticBlock = array(
     'title' => 'Civic Logo Brand block',
     'identifier' => 'civic_logo_brand_block',
     'content' => '<div class="brand-logo">
<div class="jcarousel-skin-tango">
<div class="new_title center">
<h2><span>Logo Brands</span></h2>
</div>
<div id="mycarousel2" class="jcarousel-container jcarousel-container-horizontal">
<div class="jcarousel-clip jcarousel-clip-horizontal">
<ul class="jcarousel-list jcarousel-list-horizontal">
<li><img src="{{skin url="images/b-logo1.png"}}" alt="b-logo1.png" /></li>
<li><img src="{{skin url="images/b-logo2.png"}}" alt="b-logo2.png" /></li>
<li><img src="{{skin url="images/b-logo3.png"}}" alt="b-logo3.png" /></li>
<li><img src="{{skin url="images/b-logo4.png"}}" alt="b-logo4.png" /></li>
<li><img src="{{skin url="images/b-logo5.png"}}" alt="b-logo5.png" /></li>
<li><img src="{{skin url="images/b-logo6.png"}}" alt="b-logo6.png" /></li>
<li><img src="{{skin url="images/b-logo3.png"}}" alt="b-logo3.png" /></li>
<li><img src="{{skin url="images/b-logo2.png"}}" alt="b-logo2.png" /></li>
<li><img src="{{skin url="images/b-logo5.png"}}" alt="b-logo5.png" /></li>
<li><img src="{{skin url="images/b-logo4.png"}}" alt="b-logo4.png" /></li>
<li><img src="{{skin url="images/b-logo1.png"}}" alt="b-logo1.png" /></li>
<li><img src="{{skin url="images/b-logo2.png"}}" alt="b-logo2.png" /></li>
<li><img src="{{skin url="images/b-logo3.png"}}" alt="b-logo3.png" /></li>
<li><img src="{{skin url="images/b-logo4.png"}}" alt="b-logo4.png" /></li>
<li><img src="{{skin url="images/b-logo5.png"}}" alt="b-logo5.png" /></li>
<li><img src="{{skin url="images/b-logo6.png"}}" alt="b-logo6.png" /></li>
<li><img src="{{skin url="images/b-logo3.png"}}" alt="b-logo3.png" /></li>
<li><img src="{{skin url="images/b-logo2.png"}}" alt="b-logo2.png" /></li>
<li><img src="{{skin url="images/b-logo5.png"}}" alt="b-logo5.png" /></li>
<li><img src="{{skin url="images/b-logo4.png"}}" alt="b-logo4.png" /></li>
</ul>
</div>
<div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;">&nbsp;</div>
<div class="jcarousel-next jcarousel-next-horizontal" style="display: block;">&nbsp;</div>
</div>
</div>
</div>',
     'is_active' => 1,
     'stores' => array(0)
 );
 Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Store Logo
$staticBlock = array(
    'title' => 'Civic Store Logo',
    'identifier' => 'civic_logo',
    'content' => '<img src="{{skin url="images/logo.png"}}" alt="Civic Store" />',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();


//Civic Footer Information Links Block
$staticBlock = array(
    'title' => 'Civic Footer Information Links Block',
    'identifier' => 'civic_footer_information_links_block',
    'content' => '<div class="footer-column">
<h4>Company</h4>
<ul class="links">
<li class="first"><a title="Features" href="#">Features</a></li>
<li><a title="Blog" href="{{store_url=blog}}">Blog</a></li>
<li><a title="Payment" href="#">Payment</a></li>
<li><a title="Shipment&lt;/a&gt;" href="#">Shipment</a></li>
<li><a title="FAQs" href="#">FAQs</a></li>
<li class="last"><a title="Return policy" href="#">Return policy</a></li>
</ul>
</div>
<div class="footer-column">
<h4>Style Advisor</h4>
<ul class="links">
<li class="first"><a title="Your Account" href="#">Your Account</a></li>
<li><a title="Information" href="#">Information</a></li>
<li><a title="Addresses" href="#">Addresses</a></li>
<li><a title="Addresses" href="#">Discount</a></li>
<li><a title="Orders History" href="#">Orders History</a></li>
<li class="last"><a title=" Additional Information" href="#">Additional Information</a></li>
</ul>
</div>
<div class="footer-column-last">
<h4>Information</h4>
<ul class="links">
<li class="first"><a title="Site Map" href="{{store_url=catalog/seo_sitemap/category/}}">Site Map</a></li>
<li><a title="Search Terms" href="{{store_url=catalogsearch/term/popular/}}">Search Terms</a></li>
<li><a title="Advanced Search" href="{{store_url=catalogsearch/advanced/}}">Advanced Search</a></li>
<li><a title="Contact Us" href="{{store_url=contacts}}">Contact Us</a></li>
<li><a title="Suppliers" href="#">Suppliers</a></li>
<li class=" last"><a class="link-rss" title="Our stores" href="#">Our stores</a></li>
</ul>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Footer About Us Block
$staticBlock = array(
    'title' => 'Civic Footer About Us Block',
    'identifier' => 'civic_footer_about_us_block',
    'content' => '<div class="footer-column-1">
<h4>About Company</h4>
<p>Our Company is a Magento product development and solutions company..</p>
<address><em class="add-icon">&nbsp;</em>123 Main Street, Anytown, <br /> &nbsp;CA 12345 USA</address>
<div class="phone-footer"><em class="phone-icon">&nbsp;</em> +1 800 123 1234</div>
<div class="email-footer"><em class="email-icon">&nbsp;</em> <a href="mailto:support@magikcommerce.com">support@magikcommerce.com</a></div>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();


//Civic Home Featured Block
$staticBlock = array(
    'title' => 'Civic Home Featured Block',
    'identifier' => 'civic_home_featured_block',
    'content' => '<div class="offer-banner">
<div class="offer-banner-section">
<div class="col"><a href="#"><img src="{{skin url="images/prom-banner-women.png"}}" alt="prom-banner-women.png" /></a></div>
<div class="col"><a href="#"><img src="{{skin url="images/prom-banner-electronics.png"}}" alt="prom-banner-electronics.png" /></a></div>
<div class="col"><a href="#"><img src="{{skin url="images/promo-banner-men.png"}}" alt="promo-banner-men.png" /></a></div>
<div class="col-last"><a href="#"><img src="{{skin url="images/promo-banner-furniture.png"}}" alt="promo-banner-furniture.png" /></a></div>
</div>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Home Offer Banner Block
$staticBlock = array(
    'title' => 'Civic Home Offer Banner Block',
    'identifier' => 'civic_home_offer_banner_block',
    'content' => '<div class="banner-section">
<div><img src="{{skin url="images/banner-bottom.png"}}" alt="banner bottom" /></div>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Contact Us Static Block
$staticBlock = array(
    'title' => 'Civic Contact Us Static Block',
    'identifier' => 'civic_contact_us_static_block',
    'content' => '<div class="block block-company">
<div class="block-title">Company</div>
<div class="block-content"><ol id="recently-viewed-items">
<li class="item odd"><a href="#">About Us</a></li>
<li class="item even"><a href="{{store_url=catalog/seo_sitemap/category/}}">Sitemap</a></li>
<li class="item  odd"><a href="#">Terms of Service</a></li>
<li class="item last"><a href="{{store_url=catalogsearch/term/popular/}}">Search Terms</a></li>
</ol></div>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Toplinks Company Block
$staticBlock = array(
    'title' => 'Civic Toplinks Company Block',
    'identifier' => 'civic_toplinks_company_block',
    'content' => '<div class="company">
<div class="click-nav">
<ul class="no-js">
<li><a class="clicker" title="Company">Company <span class="caret">&nbsp;</span></a>
<ul class="link">
<li><a title="About Us" href="{{store_url=about-us}}">About Us</a></li>
<li><a title="Customer Service" href="#">Customer Service</a></li>
<li><a title="Privacy Policy" href="#">Privacy Policy</a></li>
<li><a title="Site Map" href="{{store_url=catalog/seo_sitemap/category/}}"><span>Site Map</span></a></li>
<li><a title="Search Terms" href="{{store_url=catalogsearch/term/popular/}}"><span>Search Terms</span></a></li>
<li class="last"><a title="Advanced Search" href="{{store_url=catalogsearch/advanced/}}"><span>Advanced Search</span></a></li>
</ul>
</li>
</ul>
</div>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Home Freeshipping Banner Block
$staticBlock = array(
    'title' => 'Civic Home Freeshipping Banner Block',
    'identifier' => 'civic_home_freeshipping_banner_block',
    'content' => '<div class="prom-section">
<div class="inner">
<div class="col-info">Return &amp; Exchange in <span>3 working days</span></div>
<div class="col-info">Get <span>15%</span> off when you spend over <span>$100</span></div>
<div class="col-info-last">Free Shipping! <span> All Orders Over $299</span></div>
</div>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Home Testimonial Block
$staticBlock = array(
    'title' => 'Civic Home Testimonial Block',
    'identifier' => 'civic_home_testimonial_block',
    'content' => '<div class="testimonials">
<div class="testimonials_RC">
<div class="quote-box"><span class="quote-left">&nbsp;</span> <q>We had some issues concerning design &amp; layout. The support team was very helpful in adressing these issues. Great help! </q></div>
<cite><span class="photo tina"><img src="{{skin url="images/photo-img1.png"}}" alt="testimonial photo" /> </span><span class="author">John Doe,</span> CEO, XYZ Softwear </cite></div>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Blog Banner Ad Block
$staticBlock = array(
    'title' => 'Civic Blog Banner Ad Block',
    'identifier' => 'civic_blog_banner_ad_block',
    'content' => '<div class="ad-spots widget widget__sidebar">
<h3 class="widget-title">Ad Spots</h3>
<div class="widget-content"><a title="" href="#" target="_self"><img src="{{skin url="images/offer-banner1.jpg"}}" alt="offer banner" /></a></div>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Blog Banner Text Block
$staticBlock = array(
    'title' => 'Civic Blog Banner Text Block',
    'identifier' => 'civic_blog_banner_text_block',
    'content' => '<div class="text-widget widget widget__sidebar">
<h3 class="widget-title">Text Widget</h3>
<div class="widget-content">Mauris at blandit erat. Nam vel tortor non quam scelerisque cursus. Praesent nunc vitae magna pellentesque auctor. Quisque id lectus.<br /> <br /> Massa, eget eleifend tellus. Proin nec ante leo ssim nunc sit amet velit malesuada pharetra. Nulla neque sapien, sollicitudin non ornare quis, malesuada.</div>
</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

//Civic Home Latest Blog Block
$staticBlock = array(
    'title' => 'Civic Home Latest Blog Block',
    'identifier' => 'civic_home_latest_blog_block',
    'content' => '<div>{{block type="blogmate/index" name="blog_home" template="blogmate/right/home_right.phtml"}}</div>',
    'is_active' => 1,
    'stores' => array(0)
);
Mage::getModel('cms/block')->setData($staticBlock)->save();

}
catch (Exception $e) {
    Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('An error occurred while installing Civic theme pages and cms blocks.'));
}