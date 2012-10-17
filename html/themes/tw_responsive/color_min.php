<?php
header('Content-Type: text/css'); 

//config
//基本色
define('_TC_BG_COLOR','#fafafa'); 									//基本背景色
define('_TC_BASE_COLOR','#333333'); 								//基本文字色

define('_TC_NAV_COLOR','#777777'); 									//navbar 文字色
define('_TC_NAVBG_COLOR','#fafafa'); 								//navbar background color
define('_TC_NAVBG_IMAGE1','#ede4e1'); 							//navbar background image color 1
define('_TC_NAVBG_IMAGE2','#e5c1cd'); 							//navbar background image color 2
define('_TC_BREADCRUMB_BG_COLOR','#f5ecf4'); 				//パンくずリスト背景色
define('_TC_BREADCRUMB_DIVIDER_COLOR','#8d6449'); 	//パンくずリスト区切り
define('_TC_BREADCRUMB_ACTIVE_COLOR','#999999'); 		//パンくずリスト　アクティブ

define('_TC_A_COLOR','#c85179'); 										//基本a
define('_TC_A_HOVER_COLOR','#9a493f'); 							//基本a hover

?>
/*============================================================================*/

/******************************************************************************/
/* colors.css */
/******************************************************************************/

body {
  color: <?php echo _TC_BASE_COLOR ?>;
  background-color: <?php echo _TC_BG_COLOR ?>;
}
a {
  color: <?php echo _TC_A_COLOR ?>;
}

a:hover {
  color: <?php echo _TC_A_HOVER_COLOR ?>;
}
.span12 {
}

.span11 {
}

.span10 {
}

.span9 {
}

.span8 {
}

.span7 {
}

.span6 {
}

.span5 {
}

.span4 {
}

.span3 {
}

.span2 {
}

.span1 {
}

h1,
h2,
h3,
h4,
h5,
h6 {
}

h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
  color: #999999;
}
blockquote small {
  color: #999999;
}
code,
pre {
  color: #333333;
}

code {
  color: #d14;
  background-color: #f7f7f9;
  border: 1px solid #e1e1e8;
}
pre {
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
}

pre code {
  color: inherit;
  background-color: transparent;
}
select,
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
  color: #555555;
}
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
  background-color: #ffffff;
  border: 1px solid #cccccc;
}
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
  border-color: rgba(82, 168, 236, 0.8);
}
select {
  background-color: #ffffff;
  border: 1px solid #cccccc;
}
input[disabled],
select[disabled],
textarea[disabled],
input[readonly],
select[readonly],
textarea[readonly] {
  background-color: #eeeeee;
}

input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"][readonly],
input[type="checkbox"][readonly] {
  background-color: transparent;
}

input:focus:required:invalid,
textarea:focus:required:invalid,
select:focus:required:invalid {
  color: #b94a48;
  border-color: #ee5f5b;
}

input:focus:required:invalid:focus,
textarea:focus:required:invalid:focus,
select:focus:required:invalid:focus {
  border-color: #e9322d;
}

table {
  background-color: transparent;
}
.table-striped tbody tr:nth-child(odd) td,
.table-striped tbody tr:nth-child(odd) th {
  background-color: #f9f9f9;
}

.table-hover tbody tr:hover td,
.table-hover tbody tr:hover th {
  background-color: #f5f5f5;
}
.table tbody tr.success td {
  background-color: #dff0d8;
}

.table tbody tr.error td {
  background-color: #f2dede;
}

.table tbody tr.warning td {
  background-color: #fcf8e3;
}

.table tbody tr.info td {
  background-color: #d9edf7;
}

.table-hover tbody tr.success:hover td {
  background-color: #d0e9c6;
}

.table-hover tbody tr.error:hover td {
  background-color: #ebcccc;
}

.table-hover tbody tr.warning:hover td {
  background-color: #faf2cc;
}

.table-hover tbody tr.info:hover td {
  background-color: #c4e3f3;
}
.dropdown-menu {
  background-color: #ffffff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
}
.dropdown-menu .divider {
  background-color: #e5e5e5;
  border-bottom: 1px solid #ffffff;
}

.dropdown-menu a {
  color: #333333;
}

.dropdown-menu li > a:hover,
.dropdown-menu li > a:focus,
.dropdown-submenu:hover > a {
  color: #ffffff;
  text-decoration: none;
  background-color: #0088cc;
  background-color: #0081c2;
  background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0077b3));
  background-image: -webkit-linear-gradient(top, #0088cc, #0077b3);
  background-image: -o-linear-gradient(top, #0088cc, #0077b3);
  background-image: linear-gradient(to bottom, #0088cc, #0077b3);
  background-repeat: repeat-x;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);
}

.dropdown-menu .active > a,
.dropdown-menu .active > a:hover {
  color: #ffffff;
  text-decoration: none;
  background-color: #0088cc;
  background-color: #0081c2;
  background-image: linear-gradient(to bottom, #0088cc, #0077b3);
  background-image: -moz-linear-gradient(top, #0088cc, #0077b3);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0077b3));
  background-image: -webkit-linear-gradient(top, #0088cc, #0077b3);
  background-image: -o-linear-gradient(top, #0088cc, #0077b3);
  background-repeat: repeat-x;
  outline: 0;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0077b3', GradientType=0);
}

.dropdown-menu .disabled > a,
.dropdown-menu .disabled > a:hover {
  color: #999999;
}

.dropdown-menu .disabled > a:hover {
  background-color: transparent;
}
.dropdown-submenu > a:after {
  border-color: transparent;
  border-left-color: #cccccc;
}

.dropdown-submenu:hover > a:after {
  border-left-color: #ffffff;
}
.nav > li > a:hover {
  text-decoration: none;
  background-color: #eeeeee;
}
.nav-header {
  color: #999999;
}
.nav-list > .active > a,
.nav-list > .active > a:hover {
  color: #ffffff;
  background-color: #0088cc;
}
.nav-list .divider {
  background-color: #e5e5e5;
  border-bottom: 1px solid #ffffff;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #dddddd;
}

.nav-tabs > .active > a,
.nav-tabs > .active > a:hover {
  color: #555555;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}
.nav-pills > .active > a,
.nav-pills > .active > a:hover {
  color: #ffffff;
  background-color: #0088cc;
}
.nav-tabs.nav-stacked > li > a:hover {
  border-color: #ddd;
}
.nav .dropdown-toggle .caret {
  border-top-color: #0088cc;
  border-bottom-color: #0088cc;
}

.nav .dropdown-toggle:hover .caret {
  border-top-color: #005580;
  border-bottom-color: #005580;
}
.nav .active .dropdown-toggle .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}

.nav-tabs .active .dropdown-toggle .caret {
  border-top-color: #555555;
  border-bottom-color: #555555;
}
.nav-tabs .open .dropdown-toggle,
.nav-pills .open .dropdown-toggle,
.nav > li.dropdown.open.active > a:hover {
  color: #ffffff;
  background-color: #999999;
  border-color: #999999;
}

.nav li.dropdown.open .caret,
.nav li.dropdown.open.active .caret,
.nav li.dropdown.open a:hover .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
  opacity: 1;
  filter: alpha(opacity=100);
}

.tabs-stacked .open > a:hover {
  border-color: #999999;
}
.tabs-below > .nav-tabs > li > a:hover {
  border-top-color: #ddd;
  border-bottom-color: transparent;
}

.tabs-below > .nav-tabs > .active > a,
.tabs-below > .nav-tabs > .active > a:hover {
  border-color: transparent #ddd #ddd #ddd;
}


.tabs-left > .nav-tabs > li > a:hover {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover {
  border-color: #ddd transparent #ddd #ddd;
  *border-right-color: #ffffff;
}

.tabs-right > .nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #eeeeee #dddddd;
}

.tabs-right > .nav-tabs .active > a,
.tabs-right > .nav-tabs .active > a:hover {
  border-color: #ddd #ddd #ddd transparent;
  *border-left-color: #ffffff;
}

.nav > .disabled > a {
  color: #999999;
}

.nav > .disabled > a:hover {
  background-color: transparent;
}
.navbar {
  color: <?php echo _TC_NAV_COLOR ?>;
}

.navbar-inner {
  background-color: <?php echo _TC_NAVBG_COLOR ?>;
  background-image: -moz-linear-gradient(top, <?php echo _TC_NAVBG_IMAGE1 ?>, <?php echo _TC_NAVBG_IMAGE2 ?>);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo _TC_NAVBG_IMAGE1 ?>), to(<?php echo _TC_NAVBG_IMAGE2 ?>));
  background-image: -webkit-linear-gradient(top, <?php echo _TC_NAVBG_IMAGE1 ?>, <?php echo _TC_NAVBG_IMAGE2 ?>);
  background-image: -o-linear-gradient(top, <?php echo _TC_NAVBG_IMAGE1 ?>, <?php echo _TC_NAVBG_IMAGE2 ?>);
  background-image: linear-gradient(to bottom, <?php echo _TC_NAVBG_IMAGE1 ?>, <?php echo _TC_NAVBG_IMAGE2 ?>);
  background-repeat: repeat-x;
  border: 1px solid #d4d4d4;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff2f2f2', GradientType=0);
}
.navbar .brand {
  color: #777777;
}
.navbar-link {
  color: #777777;
}

.navbar-link:hover {
  color: #333333;
}
.navbar .nav > li > a {
  color: #777777;
}
.navbar .nav > li > a:focus,
.navbar .nav > li > a:hover {
  color: #333333;
  background-color: transparent;
}

.navbar .nav > .active > a,
.navbar .nav > .active > a:hover,
.navbar .nav > .active > a:focus {
  color: #555555;
  background-color: #e5e5e5;
}
.navbar .btn-navbar {
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #ededed;
  *background-color: #e5e5e5;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f2f2f2), to(#e5e5e5));
  background-image: -webkit-linear-gradient(top, #f2f2f2, #e5e5e5);
  background-image: -o-linear-gradient(top, #f2f2f2, #e5e5e5);
  background-image: linear-gradient(to bottom, #f2f2f2, #e5e5e5);
  background-image: -moz-linear-gradient(top, #f2f2f2, #e5e5e5);
  background-repeat: repeat-x;
  border-color: #e5e5e5 #e5e5e5 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fff2f2f2', endColorstr='#ffe5e5e5', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.075);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.075);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.075);
}

.navbar .btn-navbar:hover,
.navbar .btn-navbar:active,
.navbar .btn-navbar.active,
.navbar .btn-navbar.disabled,
.navbar .btn-navbar[disabled] {
  color: #ffffff;
  background-color: #e5e5e5;
  *background-color: #d9d9d9;
}

.navbar .btn-navbar:active,
.navbar .btn-navbar.active {
  background-color: #cccccc \9;
}

.navbar .btn-navbar .icon-bar {
  background-color: #f5f5f5;
}
.navbar .nav > li > .dropdown-menu:before {
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-left: 7px solid transparent;
  border-bottom-color: rgba(0, 0, 0, 0.2);
}
.navbar-fixed-bottom .nav > li > .dropdown-menu:before {
  border-top: 7px solid #ccc;
  border-top-color: rgba(0, 0, 0, 0.2);
}
.navbar .nav li.dropdown.open > .dropdown-toggle,
.navbar .nav li.dropdown.active > .dropdown-toggle,
.navbar .nav li.dropdown.open.active > .dropdown-toggle {
  color: #555555;
  background-color: #e5e5e5;
}

.navbar .nav li.dropdown > .dropdown-toggle .caret {
  border-top-color: #777777;
  border-bottom-color: #777777;
}

.navbar .nav li.dropdown.open > .dropdown-toggle .caret,
.navbar .nav li.dropdown.active > .dropdown-toggle .caret,
.navbar .nav li.dropdown.open.active > .dropdown-toggle .caret {
  border-top-color: #555555;
  border-bottom-color: #555555;
}

.breadcrumb {
  background-color: <?php echo _TC_BREADCRUMB_BG_COLOR ?>;
}
.breadcrumb .divider {
  color: <?php echo _TC_BREADCRUMB_DIVIDER_COLOR ?>;
}
.breadcrumb .active {
  color: <?php echo _TC_BREADCRUMB_ACTIVE_COLOR ?>;
}


.pagination ul > li > a,
.pagination ul > li > span {
  background-color: #ffffff;
  border: 1px solid #dddddd;
}

.pagination ul > li > a:hover,
.pagination ul > .active > a,
.pagination ul > .active > span {
  background-color: #f5f5f5;
}

.pagination ul > .active > a,
.pagination ul > .active > span {
  color: #999999;
}

.pagination ul > .disabled > span,
.pagination ul > .disabled > a,
.pagination ul > .disabled > a:hover {
  color: #999999;
  background-color: transparent;
}

.pager a,
.pager span {
  background-color: #fff;
  border: 1px solid #ddd;
}

.pager a:hover {
  background-color: #f5f5f5;
}

.pager .disabled a,
.pager .disabled a:hover,
.pager .disabled span {
  color: #999999;
  background-color: #fff;
}

