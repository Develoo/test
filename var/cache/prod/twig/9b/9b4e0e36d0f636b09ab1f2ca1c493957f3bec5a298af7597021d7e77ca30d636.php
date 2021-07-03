<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__977ff1511e0a39f692ea4f252a66c181ca3ceecb8eefcec52e4e3797033db9df */
class __TwigTemplate_35ca191189dab32b2c4daa9a7345d2edf33ea02261923e5b492dad418deeeb49 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/digital1769/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/digital1769/img/app_icon.png\" />

<title>Webservice • shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminWebservice';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.6.9';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '5b112be3b98028970f48624e90b5951a';
    var token_admin_orders = '400cea7976255533bc11f4878ccf69f6';
    var token_admin_customers = 'd465dce9563ae0da1af1d75424a66cff';
    var token_admin_customer_threads = 'ba5819ac3955870826e4fadce4f67700';
    var currentIndex = 'index.php?controller=AdminWebservice';
    var employee_token = '9ebaa8eff60539e62b0a5d068d76d7e6';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/digital1769/admin586dnzehn/index.php/improve/modules/catalog/recommended?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY';
    var admin_notification_get_link = '/digital1769/admin586dnzehn/index.php/common/notifications?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY';
    var admin_notification_push_link = '/digital1769/admin586dnzehn/index.php/common/notifications/ack?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/digital1769/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/digital1769/admin586dnzehn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/digital1769/modules/prestablog/views/css/prestablog-back-office.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/digital1769/modules/prestablog/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/digital1769/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/digital1769/admin586dnzehn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/digital1769/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/digital1769/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/digital1769\\/admin586dnzehn\\/\";
var baseDir = \"\\/digital1769\\/\";
var changeFormLanguageUrl = \"\\/digital1769\\/admin586dnzehn\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/digital1769/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/admin586dnzehn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/js/admin.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/digital1769/admin586dnzehn/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/js/tools.js?v=1.7.6.9\"></script>
<script type=\"text/javascript\" src=\"/digital1769/admin586dnzehn/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/admin586dnzehn/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/digital1769/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/digital1769/admin586dnzehn/index.php/common/notifications?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/digital1769\\/admin586dnzehn\\/index.php?controller=AdminGamification&token=b97f34d56496c8e02f830d0658d6036f\";
            var current_id_tab = 117;
        </script>";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-fr adminwebservice\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminDashboard&amp;token=05316c5d6689ecf354a1a67ed6222847\"></a>
      <span id=\"shop_version\">1.7.6.9</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminOrders&amp;token=400cea7976255533bc11f4878ccf69f6\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=113d6a1c9394f9e5c3f96e950dab8333\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/digital1769/admin586dnzehn/index.php/improve/modules/manage?token=a266dafa740c4b0a836bdbc0061faa67\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7bde69dc342e264713bd82b7fbf86841\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/digital1769/admin586dnzehn/index.php/sell/catalog/products/new?token=a266dafa740c4b0a836bdbc0061faa67\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/digital1769/admin586dnzehn/index.php/sell/catalog/categories/new?token=a266dafa740c4b0a836bdbc0061faa67\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminModules&amp;configure=prestablog&amp;module_name=prestablog&amp;token=30b3d0eaf6a3a078c515aaf16157c56d\"
                 data-item=\"PrestaBlog\"
      >PrestaBlog</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"179\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/webservice-keys\"
        data-post-link=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminQuickAccesses&token=c5fd86baab0fac14fd21a1cd7f201323\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Webservice - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminQuickAccesses&token=c5fd86baab0fac14fd21a1cd7f201323\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/digital1769/admin586dnzehn/index.php?controller=AdminSearch&amp;token=ae1f6541cdb6b3423d8e054a7ba4fea6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/digital1769/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté votre taux de conversion dernièrement ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              Pas de nouvelle, bonne nouvelle, n'est-ce pas ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/brahmii.kathemm%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Kadhem</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/employees/1/edit?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\">
      <i class=\"material-icons\">settings</i>
      Votre profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminLogin&amp;logout=1&amp;token=eeffb23d693415b16732bb75a4d91644\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/digital1769/admin586dnzehn/index.php/configure/advanced/employees/toggle-navigation?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminDashboard&amp;token=05316c5d6689ecf354a1a67ed6222847\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminOrders&amp;token=400cea7976255533bc11f4878ccf69f6\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminOrders&amp;token=400cea7976255533bc11f4878ccf69f6\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/sell/orders/invoices/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminSlip&amp;token=f3d28ffafd89e8229bb04cc60926841b\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/sell/orders/delivery-slips/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminCarts&amp;token=ccdde3cae51f2b1e524d5afd2503bcee\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/digital1769/admin586dnzehn/index.php/sell/catalog/products?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/sell/catalog/products?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/sell/catalog/categories?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminTracking&amp;token=8c7f6d4a100da4253a9d3c4e213ac59f\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminAttributesGroups&amp;token=bb67b5f27fe25ea87b5dcd078216e604\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/sell/catalog/brands/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminAttachments&amp;token=343a4768195ea8c50d7159963cc9052c\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminCartRules&amp;token=7bde69dc342e264713bd82b7fbf86841\" class=\"link\"> Réductions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/sell/stocks/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/digital1769/admin586dnzehn/index.php/sell/customers/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/sell/customers/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminAddresses&amp;token=985429ad841f30b0c1d7b8ef9c58a320\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminCustomerThreads&amp;token=ba5819ac3955870826e4fadce4f67700\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminCustomerThreads&amp;token=ba5819ac3955870826e4fadce4f67700\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminOrderMessage&amp;token=fb7a81d91cac2038b38b7da5c429c5a7\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminReturn&amp;token=b4824d780ae628bea8054ecbe29b4ac2\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminStats&amp;token=113d6a1c9394f9e5c3f96e950dab8333\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/digital1769/admin586dnzehn/index.php/improve/modules/manage?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/modules/manage?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/modules/addons/modules/catalog?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/digital1769/admin586dnzehn/index.php/improve/design/themes/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/design/themes/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/modules/addons/themes/catalog?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/design/mail_theme/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Thème d&#039;email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/design/cms-pages/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/design/modules/positions/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminImages&amp;token=5f737a23c15ab0acca7523a4cdcf526a\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/modules/link-widget/list?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminCarriers&amp;token=0be99f4fa074f2de236614d7adfec84e\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminCarriers&amp;token=0be99f4fa074f2de236614d7adfec84e\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/shipping/preferences?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/digital1769/admin586dnzehn/index.php/improve/payment/payment_methods?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/payment/payment_methods?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/payment/preferences?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/digital1769/admin586dnzehn/index.php/improve/international/localization/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/international/localization/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminZones&amp;token=87b927ea83c5aba0e4aa469b33e262de\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/international/taxes/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/improve/international/translations/settings?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminEmarketing&amp;token=abd72caec7a2e325de10f9951cc9669f\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/digital1769/admin586dnzehn/index.php/configure/shop/preferences/preferences?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/shop/preferences/preferences?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/shop/order-preferences/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/shop/product-preferences/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/shop/customer-preferences/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/shop/contacts/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/shop/seo-urls/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminSearchConf&amp;token=a6bf95e0fc7261ed72b4a739434f6cfa\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminGamification&amp;token=b97f34d56496c8e02f830d0658d6036f\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/system-information/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/system-information/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/performance/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/administration/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/emails/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/import/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/employees/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/sql-requests/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/logs/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/webservice-keys/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"141\" id=\"tab-Management\">
              <span class=\"title\">CONTENT MANAGEMENT</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"142\" id=\"subtab-AdminPrestaBlog\">
                  <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminPrestaBlog&amp;token=8c4b7dc3a2a6b0422c2ec7e964d04109\" class=\"link\">
                    <i class=\"material-icons mi-library_books\">library_books</i>
                    <span>
                    PrestaBlog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/webservice-keys/?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\" aria-current=\"page\">Webservice</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Webservice          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/digital1769/admin586dnzehn/index.php/configure/advanced/webservice-keys/new?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\"                  title=\"Ajouter une clé de service web\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une clé de service web
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/digital1769/admin586dnzehn/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminWebservice%253Fversion%253D1.7.6.9%2526country%253Dfr/Aide?_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modules et services recommandés',
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/digital1769/admin586dnzehn/index.php/modules/addons/modules/recommended?tabClassName=AdminWebservice&_token=4kN322CjT1GHdUYwONINaZeiwcGK6ThRl2IYmUsPAMY',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>";
        // line 1142
        $this->displayBlock('content_header', $context, $blocks);
        // line 1143
        $this->displayBlock('content', $context, $blocks);
        // line 1144
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1145
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1146
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/digital1769/admin586dnzehn/index.php?controller=AdminDashboard&amp;token=05316c5d6689ecf354a1a67ed6222847\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=brahmii.kathemm%40gmail.com&amp;firstname=Kadhem&amp;lastname=Brahmi&amp;website=http%3A%2F%2Flocalhost%2Fdigital1769%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/digital1769/admin586dnzehn/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=brahmii.kathemm%40gmail.com&amp;firstname=Kadhem&amp;lastname=Brahmi&amp;website=http%3A%2F%2Flocalhost%2Fdigital1769%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>";
        // line 1253
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1142
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1143
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1144
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1145
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1253
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__977ff1511e0a39f692ea4f252a66c181ca3ceecb8eefcec52e4e3797033db9df";
    }

    public function getDebugInfo()
    {
        return array (  1333 => 1253,  1328 => 1145,  1323 => 1144,  1318 => 1143,  1313 => 1142,  1304 => 103,  1296 => 1253,  1189 => 1146,  1187 => 1145,  1185 => 1144,  1183 => 1143,  1181 => 1142,  141 => 103,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__977ff1511e0a39f692ea4f252a66c181ca3ceecb8eefcec52e4e3797033db9df", "");
    }
}
