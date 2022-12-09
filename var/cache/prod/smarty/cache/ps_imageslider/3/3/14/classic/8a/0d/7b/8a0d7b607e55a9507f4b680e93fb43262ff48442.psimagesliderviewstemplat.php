<?php
/* Smarty version 4.2.1, created on 2022-12-09 01:02:56
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63927b3066dad3_90319324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1669300968,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_63927b3066dad3_90319324 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="2000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Pokaz slajdów">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://127.0.0.1/smartfony-i-telefony/16-galaxy-s20-fe-5g-fan-edition-niebieski.html">            <figure>
              <img src="http://127.0.0.1/modules/ps_imageslider/images/1fcfa031cfe4c62951626a9edeb6ed88be918e7b_slide3.jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://127.0.0.1/38-myszy-bezprzewodowe-dla-graczy">            <figure>
              <img src="http://127.0.0.1/modules/ps_imageslider/images/3631bffa7735976a4094fd80de2c082d65ccde66_slide4.jpg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
