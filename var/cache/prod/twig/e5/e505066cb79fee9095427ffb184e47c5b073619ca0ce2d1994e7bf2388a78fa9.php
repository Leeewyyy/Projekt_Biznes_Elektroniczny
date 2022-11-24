<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__5a57265f78953e129bdacafeae646e7529c02c553048a200e3aea496570c93ba */
class __TwigTemplate_0a1f4a0c4cd4f48784a082d132d3777cd202512bf81f03a5c73c69942260ebfb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Strony • BESklep</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '8.0.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '2aba84430cfe5615346f85b30054c738';
    var token_admin_orders = tokenAdminOrders = '5ef0fd653a5cb1208d73345a1c3eab45';
    var token_admin_customers = '3e37d494f0f0b4f3a864b64dd14613ed';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'e27656772ad03a8c234c4b67bd4b68c7';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = '437144d746d82191894e8ef7b7b1cec8';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/admin959zyirsstq62mddx3e/index.php/improve/modules/manage?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4';
    var admin_notification_get_link = '/admin959zyirsstq62mddx3e/index.php/common/notifications?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1";
        // line 42
        echo "y_-wDv4';
    var admin_notification_push_link = adminNotificationPushLink = '/admin959zyirsstq62mddx3e/index.php/common/notifications/ack?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var search_product_msg = 'Szukaj produktu';
  </script>



<link
      rel=\"preload\"
      href=\"/admin959zyirsstq62mddx3e/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin959zyirsstq62mddx3e/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin959zyirsstq62mddx3e/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin959zyirsstq62mddx3e\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin959zyirsstq62mddx3e\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\"";
        // line 69
        echo ";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin959zyirsstq62mddx3e/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.0.0\"></script>
<script type=\"text/javascript\" src=\"/admin959zyirsstq62mddx3e/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.0.0\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin959zyirsstq62mddx3e/themes/default/js/vendor/nv.d3.min.js\"></script>

  

";
        // line 87
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl admincmscontent\"
  data-base-url=\"/admin959zyirsstq62mddx3e/index.php\"  data-token=\"IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminDashboard&amp;token=0315be88db003a96e5332faba4b37906\"></a>
      <span id=\"shop_version\">8.0.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php/sell/catalog/categories/new?token=ac8fd308363647e2a4caf001f85ddbe3\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=23a27bae7c88544474cff717c3060685\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php/sell/catalog/products/new?token=ac8fd308363647e2a4caf001f85ddbe3\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b882e21c7cae09dfa589e28ff97c596f\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
     ";
        // line 124
        echo "     <a class=\"dropdown-item quick-row-link\"
         href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php/improve/modules/manage?token=ac8fd308363647e2a4caf001f85ddbe3\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php/sell/orders?token=ac8fd308363647e2a4caf001f85ddbe3\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"130\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages/?-wDv4\"
        data-post-link=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminQuickAccesses&token=5ca926d4a96d1461d11b9665a81a246e\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Strony - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminQuickAccesses&token=5ca926d4a96d1461d11b9665a81a246e\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin959zyirsstq62mddx3e/index.php?controller=AdminSearch&amp;token=421091da58a7a06b74c085d2cb6e0b2d\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-gr";
        // line 163
        echo "oup\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder";
        // line 178
        echo "=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Anuluj</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Szybki dostęp</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php/sell/catalog/categories/new?token=ac8fd308363647e2a4caf001f85ddbe3\"
             data-item=\"Nowa kategoria\"
    >Nowa kategoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=23a27bae7c88544474cff717c3060685\"
             data-item=\"Nowy kupon\"
    >Nowy kupon</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php/sell/catalog/products/new?token=ac8fd308363647e2a4caf001f85ddbe3\"
             data-item=\"Nowy produkt\"
    >Nowy produkt</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b882e21c7cae09dfa589e28ff97c596f\"
             data-item=\"Ocena katalogu\"
    >Ocena katalogu</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php/improve/modules/manage?token=ac8fd308363647e2a4caf001f85ddbe3\"
             data-item=\"Zainstalowane moduły\"
    >Zainstalowane moduły</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/admi";
        // line 218
        echo "n959zyirsstq62mddx3e/index.php/sell/orders?token=ac8fd308363647e2a4caf001f85ddbe3\"
             data-item=\"Zamówienia\"
    >Zamówienia</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"111\"
      data-icon=\"icon-AdminParentThemes\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/cms-pages/?-wDv4\"
      data-post-link=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminQuickAccesses&token=5ca926d4a96d1461d11b9665a81a246e\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"Strony - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminQuickAccesses&token=5ca926d4a96d1461d11b9665a81a246e\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://127.0.0.1/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Zobacz sklep</span>
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
    <div class=\"notifications\"";
        // line 264
        echo ">
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
              Zamówienia<span id=\"_nb_new_orders_\"></span>
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
              Klienci<span id=\"_nb_new_customers_\"></span>
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
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=b16998d0fe432b84ed97a9cd1b659993\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
     ";
        // line 315
        echo "         Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
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
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
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
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://127.0.0.1/img/pr/default.jpg\" alt=\"Kuzyni\" /></sp";
        // line 364
        echo "an>
        <span class=\"employee_profile\">Witaj ponownie Kuzyni</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/employees/1/edit?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminLogin&amp;logout=1&amp;token=c4d2129381729ee3d2df804a9d46fb3a\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/employees/toggle-navigation?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminDashboard&amp;token=0315be88db003a96e5332faba4b37906\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminDashboard&amp;token=0315be88db003a96e5332faba4b37906\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                ";
        // line 413
        echo "                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/orders/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/orders/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/orders/i";
        // line 447
        echo "nvoices/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/orders/credit-slips/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/orders/delivery-slips/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminCarts&amp;token=b16998d0fe432b84ed97a9cd1b659993\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                           ";
        // line 479
        echo "           
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/catalog/products?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/catalog/products?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/catalog/categories?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                            ";
        // line 510
        echo "                                
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/catalog/monitoring/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminAttributesGroups&amp;token=206c7c0062612d861362245c1c416d42\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/catalog/brands/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/attachments/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Pliki
                                </a>
            ";
        // line 538
        echo "                  </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminCartRules&amp;token=23a27bae7c88544474cff717c3060685\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/stocks/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/customers/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                 ";
        // line 570
        echo "                           </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/customers/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/addresses/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminCustomerThreads&amp;token=e27656772ad03a8c234c4b67bd4b68c7\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                         ";
        // line 601
        echo "           <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminCustomerThreads&amp;token=e27656772ad03a8c234c4b67bd4b68c7\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/sell/customer-service/order-messages/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminReturn&amp;token=c10780ef75697965d91dae75ff347167\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                  ";
        // line 630
        echo "                                                            </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminStats&amp;token=b882e21c7cae09dfa589e28ff97c596f\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/modules/manage?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                              ";
        // line 668
        echo "                      keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/modules/manage?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/themes/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                           ";
        // line 697
        echo "                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/themes/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/mail_theme/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/cms-pages/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/modules/positions/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv";
        // line 725
        echo "4\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminImages&amp;token=28d463cbb6301e64903fe3e5f192bef0\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/modules/link-widget/list?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminCarriers&amp;token=f0bf5768e9ba00d7891e4aab48829793\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                         ";
        // line 758
        echo "                                           keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminCarriers&amp;token=f0bf5768e9ba00d7891e4aab48829793\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/shipping/preferences/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/payment/payment_methods?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Płatność
     ";
        // line 789
        echo "                 </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/payment/payment_methods?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/payment/preferences?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/international/localization/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" ";
        // line 818
        echo "class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/international/localization/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/international/zones/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/i";
        // line 848
        echo "mprove/international/taxes/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/international/translations/settings?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/shop/preferences/preferences?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                         ";
        // line 885
        echo "   </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/shop/preferences/preferences?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/shop/order-preferences/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/shop/product-preferences/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustom";
        // line 914
        echo "erPreferences\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/shop/customer-preferences/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/shop/contacts/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/shop/seo-urls/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminSearchConf&amp;token=edd30c9b463f02c2809c56244fb1acdc\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        ";
        // line 944
        echo "</li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/system-information/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/system-information/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/performance/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Wydajność
 ";
        // line 973
        echo "                               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/administration/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/emails/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/import/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/";
        // line 1004
        echo "admin959zyirsstq62mddx3e/index.php/configure/advanced/employees/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/sql-requests/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/logs/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/webservice-keys/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                       ";
        // line 1032
        echo "       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/feature-flags/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin959zyirsstq62mddx3e/index.php/configure/advanced/security/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Wygląd</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/cms-pages/?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\" aria-current=\"page\">Strony</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Strony          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                 ";
        // line 1084
        echo "         <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_cms_category\"
                  href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/cms-pages/category/new?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\"                  title=\"Dodaj nową kategorię strony\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Dodaj nową kategorię strony
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_cms_page\"
                  href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/cms-pages/new?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\"                  title=\"Dodaj nową stronę\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Dodaj nową stronę
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin959zyirsstq62mddx3e/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminCmsContent%253Fversion%253D8.0.0%2526country%253Dpl/Pomoc?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container coll";
        // line 1118
        echo "apse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_cms_category\"
              href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/cms-pages/category/new?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\"              title=\"Dodaj nową kategorię strony\"            >
              Dodaj nową kategorię strony
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_cms_page\"
              href=\"/admin959zyirsstq62mddx3e/index.php/improve/design/cms-pages/new?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\"              title=\"Dodaj nową stronę\"            >
              Dodaj nową stronę
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin959zyirsstq62mddx3e/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminCmsContent%253Fversion%253D8.0.0%2526country%253Dpl/Pomoc?_token=IhZdnZyTxdvmT8qRO_PmwUuVG8fCmTCULDg1y_-wDv4\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1157
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://127.0.0.1/admin959zyirsstq62mddx3e/index.php?controller=AdminDashboard&amp;token=0315be88db003a96e5332faba4b37906\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1191
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1157
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1191
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__5a57265f78953e129bdacafeae646e7529c02c553048a200e3aea496570c93ba";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1354 => 1191,  1333 => 1157,  1322 => 87,  1313 => 1191,  1273 => 1157,  1232 => 1118,  1196 => 1084,  1142 => 1032,  1112 => 1004,  1079 => 973,  1048 => 944,  1016 => 914,  985 => 885,  946 => 848,  914 => 818,  883 => 789,  850 => 758,  815 => 725,  785 => 697,  754 => 668,  714 => 630,  683 => 601,  650 => 570,  616 => 538,  586 => 510,  553 => 479,  519 => 447,  483 => 413,  432 => 364,  381 => 315,  328 => 264,  280 => 218,  238 => 178,  221 => 163,  180 => 124,  138 => 87,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5a57265f78953e129bdacafeae646e7529c02c553048a200e3aea496570c93ba", "");
    }
}
