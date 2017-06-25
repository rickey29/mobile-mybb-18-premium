<?php
/*
	project: Mobile MyBB 1.8 Premium (MMyBB18P)
	file:    MYBB_ROOT/inc/plugins/mmybb18p/lib/style.php
	version: 1.0.0
	author:  Rickey Gu
	web:     http://flexplat.com
	email:   rickey29@gmail.com
*/

if ( !defined("IN_MYBB") )
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}


function mmybb18p_get_amp_custom_style()
{
	$style = <<<EOT
/* 16 */
.ui-bar-a {
    border: 1px solid #333 /*{a-bar-border}*/;
    background: #111 /*{a-bar-background-color}*/;
    color: #fff /*{a-bar-color}*/;
    font-weight: bold;
    text-shadow: 0 /*{a-bar-shadow-x}*/ -1px /*{a-bar-shadow-y}*/ 0 /*{a-bar-shadow-radius}*/ #000 /*{a-bar-shadow-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #3c3c3c /*{a-bar-background-start}*/), to( #111 /*{a-bar-background-end}*/));
    background-image: -webkit-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/);
    background-image: -moz-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/);
    background-image: -ms-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/);
    background-image: -o-linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/);
    background-image: linear-gradient( #3c3c3c /*{a-bar-background-start}*/, #111 /*{a-bar-background-end}*/);
}
/* 33 */
.ui-bar-a, .ui-bar-a input, .ui-bar-a select, .ui-bar-a textarea, .ui-bar-a button {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
/* 93 */
.ui-btn-up-a {
    border: 1px solid #111 /*{a-bup-border}*/;
    background: #333 /*{a-bup-background-color}*/;
    font-weight: bold;
    color: #fff /*{a-bup-color}*/;
    text-shadow: 0 /*{a-bup-shadow-x}*/ 1px /*{a-bup-shadow-y}*/ 0 /*{a-bup-shadow-radius}*/ #111 /*{a-bup-shadow-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #444 /*{a-bup-background-start}*/), to( #2d2d2d /*{a-bup-background-end}*/));
    background-image: -webkit-linear-gradient( #444 /*{a-bup-background-start}*/, #2d2d2d /*{a-bup-background-end}*/);
    background-image: -moz-linear-gradient( #444 /*{a-bup-background-start}*/, #2d2d2d /*{a-bup-background-end}*/);
    background-image: -ms-linear-gradient( #444 /*{a-bup-background-start}*/, #2d2d2d /*{a-bup-background-end}*/);
    background-image: -o-linear-gradient( #444 /*{a-bup-background-start}*/, #2d2d2d /*{a-bup-background-end}*/);
    background-image: linear-gradient( #444 /*{a-bup-background-start}*/, #2d2d2d /*{a-bup-background-end}*/);
}
/* 107 */
.ui-btn-up-a:visited, .ui-btn-up-a a.ui-link-inherit {
    color: #fff /*{a-bup-color}*/;
}
/* 148 */
.ui-btn-up-a, .ui-btn-hover-a, .ui-btn-down-a {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
    text-decoration: none;
}
/* 154 */
.ui-bar-b {
    border: 1px solid #456f9a /*{b-bar-border}*/;
    background: #5e87b0 /*{b-bar-background-color}*/;
    color: #fff /*{b-bar-color}*/;
    font-weight: bold;
    text-shadow: 0 /*{b-bar-shadow-x}*/ 1px /*{b-bar-shadow-y}*/ 0 /*{b-bar-shadow-radius}*/ #3e6790 /*{b-bar-shadow-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #6facd5 /*{b-bar-background-start}*/), to( #497bae /*{b-bar-background-end}*/));
    background-image: -webkit-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/);
    background-image: -moz-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/);
    background-image: -ms-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/);
    background-image: -o-linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/);
    background-image: linear-gradient( #6facd5 /*{b-bar-background-start}*/, #497bae /*{b-bar-background-end}*/);
}
/* 171 */
.ui-bar-b, .ui-bar-b input, .ui-bar-b select, .ui-bar-b textarea, .ui-bar-b button {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
/* 231 */
.ui-btn-up-b {
    border: 1px solid #044062 /*{b-bup-border}*/;
    background: #396b9e /*{b-bup-background-color}*/;
    font-weight: bold;
    color: #fff /*{b-bup-color}*/;
    text-shadow: 0 /*{b-bup-shadow-x}*/ 1px /*{b-bup-shadow-y}*/ 0 /*{b-bup-shadow-radius}*/ #194b7e /*{b-bup-shadow-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #5f9cc5 /*{b-bup-background-start}*/), to( #396b9e /*{b-bup-background-end}*/));
    background-image: -webkit-linear-gradient( #5f9cc5 /*{b-bup-background-start}*/, #396b9e /*{b-bup-background-end}*/);
    background-image: -moz-linear-gradient( #5f9cc5 /*{b-bup-background-start}*/, #396b9e /*{b-bup-background-end}*/);
    background-image: -ms-linear-gradient( #5f9cc5 /*{b-bup-background-start}*/, #396b9e /*{b-bup-background-end}*/);
    background-image: -o-linear-gradient( #5f9cc5 /*{b-bup-background-start}*/, #396b9e /*{b-bup-background-end}*/);
    background-image: linear-gradient( #5f9cc5 /*{b-bup-background-start}*/, #396b9e /*{b-bup-background-end}*/);
}
/* 245 */
.ui-btn-up-b:visited, .ui-btn-up-b a.ui-link-inherit {
    color: #fff /*{b-bup-color}*/;
}
/* 286 */
.ui-btn-up-b, .ui-btn-hover-b, .ui-btn-down-b {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
    text-decoration: none;
}
/* 292 */
.ui-bar-c {
    border: 1px solid #b3b3b3 /*{c-bar-border}*/;
    background: #eee /*{c-bar-background-color}*/;
    color: #3e3e3e /*{c-bar-color}*/;
    font-weight: bold;
    text-shadow: 0 /*{c-bar-shadow-x}*/ 1px /*{c-bar-shadow-y}*/ 0 /*{c-bar-shadow-radius}*/ #fff /*{c-bar-shadow-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #f0f0f0 /*{c-bar-background-start}*/), to( #ddd /*{c-bar-background-end}*/));
    background-image: -webkit-linear-gradient( #f0f0f0 /*{c-bar-background-start}*/, #ddd /*{c-bar-background-end}*/);
    background-image: -moz-linear-gradient( #f0f0f0 /*{c-bar-background-start}*/, #ddd /*{c-bar-background-end}*/);
    background-image: -ms-linear-gradient( #f0f0f0 /*{c-bar-background-start}*/, #ddd /*{c-bar-background-end}*/);
    background-image: -o-linear-gradient( #f0f0f0 /*{c-bar-background-start}*/, #ddd /*{c-bar-background-end}*/);
    background-image: linear-gradient( #f0f0f0 /*{c-bar-background-start}*/, #ddd /*{c-bar-background-end}*/);
}
/* 308 */
.ui-bar-c a.ui-link {
    color: #7cc4e7 /*{c-bar-link-color}*/;
    font-weight: bold;
}
/* 312 */
.ui-bar-c a.ui-link:visited {
    color: #2489ce /*{c-bar-link-visited}*/;
}
/* 325 */
.ui-bar-c, .ui-bar-c input, .ui-bar-c select, .ui-bar-c textarea, .ui-bar-c button {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
/* 329 */
.ui-body-c, .ui-overlay-c {
    border: 1px solid #aaa /*{c-body-border}*/;
    color: #333 /*{c-body-color}*/;
    text-shadow: 0 /*{c-body-shadow-x}*/ 1px /*{c-body-shadow-y}*/ 0 /*{c-body-shadow-radius}*/ #fff /*{c-body-shadow-color}*/;
    background: #f9f9f9 /*{c-body-background-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #f9f9f9 /*{c-body-background-start}*/), to( #eee /*{c-body-background-end}*/));
    background-image: -webkit-linear-gradient( #f9f9f9 /*{c-body-background-start}*/, #eee /*{c-body-background-end}*/);
    background-image: -moz-linear-gradient( #f9f9f9 /*{c-body-background-start}*/, #eee /*{c-body-background-end}*/);
    background-image: -ms-linear-gradient( #f9f9f9 /*{c-body-background-start}*/, #eee /*{c-body-background-end}*/);
    background-image: -o-linear-gradient( #f9f9f9 /*{c-body-background-start}*/, #eee /*{c-body-background-end}*/);
    background-image: linear-gradient( #f9f9f9 /*{c-body-background-start}*/, #eee /*{c-body-background-end}*/);
}
/* 341 */
.ui-overlay-c {
    background-image: none;
    border-width: 0;
}
/* 349 */
.ui-body-c, .ui-body-c input, .ui-body-c select, .ui-body-c textarea, .ui-body-c button {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
/* 352 */
.ui-body-c .ui-link-inherit {
    color: #333 /*{c-body-color}*/;
}
/* 355 */
.ui-body-c .ui-link {
    color: #2489ce /*{c-body-link-color}*/;
    font-weight: bold;
}
/* 359 */
.ui-body-c .ui-link:visited {
    color: #2489ce /*{c-body-link-visited}*/;
}
/* 368 */
.ui-btn-up-c {
    border: 1px solid #ccc /*{c-bup-border}*/;
    background: #eee /*{c-bup-background-color}*/;
    font-weight: bold;
    color: #222 /*{c-bup-color}*/;
    text-shadow: 0 /*{c-bup-shadow-x}*/ 1px /*{c-bup-shadow-y}*/ 0 /*{c-bup-shadow-radius}*/ #fff /*{c-bup-shadow-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #fff /*{c-bup-background-start}*/), to( #f1f1f1 /*{c-bup-background-end}*/));
    background-image: -webkit-linear-gradient( #fff /*{c-bup-background-start}*/, #f1f1f1 /*{c-bup-background-end}*/);
    background-image: -moz-linear-gradient( #fff /*{c-bup-background-start}*/, #f1f1f1 /*{c-bup-background-end}*/);
    background-image: -ms-linear-gradient( #fff /*{c-bup-background-start}*/, #f1f1f1 /*{c-bup-background-end}*/);
    background-image: -o-linear-gradient( #fff /*{c-bup-background-start}*/, #f1f1f1 /*{c-bup-background-end}*/);
    background-image: linear-gradient( #fff /*{c-bup-background-start}*/, #f1f1f1 /*{c-bup-background-end}*/);
}
/* 382 */
.ui-btn-up-c:visited, .ui-btn-up-c a.ui-link-inherit {
    color: #2f3e46 /*{c-bup-color}*/;
}
/* 423 */
.ui-btn-up-c, .ui-btn-hover-c, .ui-btn-down-c {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
    text-decoration: none;
}
/* 429 */
.ui-bar-d {
    border: 1px solid #bbb /*{d-bar-border}*/;
    background: #bbb /*{d-bar-background-color}*/;
    color: #333 /*{d-bar-color}*/;
    font-weight: bold;
    text-shadow: 0 /*{d-bar-shadow-x}*/ 1px /*{d-bar-shadow-y}*/ 0 /*{d-bar-shadow-radius}*/ #eee /*{d-bar-shadow-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #ddd /*{d-bar-background-start}*/), to( #bbb /*{d-bar-background-end}*/));
    background-image: -webkit-linear-gradient( #ddd /*{d-bar-background-start}*/, #bbb /*{d-bar-background-end}*/);
    background-image: -moz-linear-gradient( #ddd /*{d-bar-background-start}*/, #bbb /*{d-bar-background-end}*/);
    background-image: -ms-linear-gradient( #ddd /*{d-bar-background-start}*/, #bbb /*{d-bar-background-end}*/);
    background-image: -o-linear-gradient( #ddd /*{d-bar-background-start}*/, #bbb /*{d-bar-background-end}*/);
    background-image: linear-gradient( #ddd /*{d-bar-background-start}*/, #bbb /*{d-bar-background-end}*/);
}
/* 446 */
.ui-bar-d, .ui-bar-d input, .ui-bar-d select, .ui-bar-d textarea, .ui-bar-d button {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
/* 466 */
.ui-body-d, .ui-overlay-d {
    border: 1px solid #bbb /*{d-body-border}*/;
    color: #333 /*{d-body-color}*/;
    text-shadow: 0 /*{d-body-shadow-x}*/ 1px /*{d-body-shadow-y}*/ 0 /*{d-body-shadow-radius}*/ #fff /*{d-body-shadow-color}*/;
    background: #fff /*{d-body-background-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #fff /*{d-body-background-start}*/), to( #fff /*{d-body-background-end}*/));
    background-image: -webkit-linear-gradient( #fff /*{d-body-background-start}*/, #fff /*{d-body-background-end}*/);
    background-image: -moz-linear-gradient( #fff /*{d-body-background-start}*/, #fff /*{d-body-background-end}*/);
    background-image: -ms-linear-gradient( #fff /*{d-body-background-start}*/, #fff /*{d-body-background-end}*/);
    background-image: -o-linear-gradient( #fff /*{d-body-background-start}*/, #fff /*{d-body-background-end}*/);
    background-image: linear-gradient( #fff /*{d-body-background-start}*/, #fff /*{d-body-background-end}*/);
}
/* 486 */
.ui-body-d, .ui-body-d input, .ui-body-d select, .ui-body-d textarea, .ui-body-d button {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
/* 489 */
.ui-body-d .ui-link-inherit {
    color: #333 /*{d-body-color}*/;
}
/* 505 */
.ui-btn-up-d {
    border: 1px solid #bbb /*{d-bup-border}*/;
    background: #fff /*{d-bup-background-color}*/;
    font-weight: bold;
    color: #333 /*{d-bup-color}*/;
    text-shadow: 0 /*{d-bup-shadow-x}*/ 1px /*{d-bup-shadow-y}*/ 0 /*{d-bup-shadow-radius}*/ #fff /*{d-bup-shadow-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #fafafa /*{d-bup-background-start}*/), to( #f6f6f6 /*{d-bup-background-end}*/));
    background-image: -webkit-linear-gradient( #fafafa /*{d-bup-background-start}*/, #f6f6f6 /*{d-bup-background-end}*/);
    background-image: -moz-linear-gradient( #fafafa /*{d-bup-background-start}*/, #f6f6f6 /*{d-bup-background-end}*/);
    background-image: -ms-linear-gradient( #fafafa /*{d-bup-background-start}*/, #f6f6f6 /*{d-bup-background-end}*/);
    background-image: -o-linear-gradient( #fafafa /*{d-bup-background-start}*/, #f6f6f6 /*{d-bup-background-end}*/);
    background-image: linear-gradient( #fafafa /*{d-bup-background-start}*/, #f6f6f6 /*{d-bup-background-end}*/);
}
/* 519 */
.ui-btn-up-d:visited, .ui-btn-up-d a.ui-link-inherit {
    color: #333 /*{d-bup-color}*/;
}
/* 561 */
.ui-btn-up-d, .ui-btn-hover-d, .ui-btn-down-d {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
    text-decoration: none;
}
/* 643 */
.ui-btn-up-e {
    border: 1px solid #f4c63f /*{e-bup-border}*/;
    background: #fadb4e /*{e-bup-background-color}*/;
    font-weight: bold;
    color: #222 /*{e-bup-color}*/;
    text-shadow: 0 /*{e-bup-shadow-x}*/ 1px /*{e-bup-shadow-y}*/ 0 /*{e-bup-shadow-radius}*/ #fff /*{e-bup-shadow-color}*/;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #ffefaa /*{e-bup-background-start}*/), to( #ffe155 /*{e-bup-background-end}*/));
    background-image: -webkit-linear-gradient( #ffefaa /*{e-bup-background-start}*/, #ffe155 /*{e-bup-background-end}*/);
    background-image: -moz-linear-gradient( #ffefaa /*{e-bup-background-start}*/, #ffe155 /*{e-bup-background-end}*/);
    background-image: -ms-linear-gradient( #ffefaa /*{e-bup-background-start}*/, #ffe155 /*{e-bup-background-end}*/);
    background-image: -o-linear-gradient( #ffefaa /*{e-bup-background-start}*/, #ffe155 /*{e-bup-background-end}*/);
    background-image: linear-gradient( #ffefaa /*{e-bup-background-start}*/, #ffe155 /*{e-bup-background-end}*/);
}
/* 698 */
.ui-btn-up-e, .ui-btn-hover-e, .ui-btn-down-e {
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
    text-decoration: none;
}
/* 705 */
a.ui-link-inherit {
    text-decoration: none;
}
/* 710 */
.ui-btn-active {
    border: 1px solid #2373a5 /*{global-active-border}*/;
    background: #5393c5 /*{global-active-background-color}*/;
    font-weight: bold;
    color: #fff /*{global-active-color}*/;
    cursor: pointer;
    text-shadow: 0 /*{global-active-shadow-x}*/ 1px /*{global-active-shadow-y}*/ 0 /*{global-active-shadow-radius}*/ #3373a5 /*{global-active-shadow-color}*/;
    text-decoration: none;
    background-image: -webkit-gradient(linear, left top, left bottom, from( #5393c5 /*{global-active-background-start}*/), to( #6facd5 /*{global-active-background-end}*/));
    background-image: -webkit-linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/);
    background-image: -moz-linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/);
    background-image: -ms-linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/);
    background-image: -o-linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/);
    background-image: linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/);
    font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
/* 728 */
.ui-btn-active:visited, .ui-btn-active:hover, .ui-btn-active a.ui-link-inherit {
    color: #fff /*{global-active-color}*/;
}
/* 733 */
.ui-btn-inner {
    border-top: 1px solid #fff;
    border-color: rgba(255,255,255,.3);
}
/* 739 */
.ui-corner-all {
    -webkit-border-radius: .6em /*{global-radii-blocks}*/;
    border-radius: .6em /*{global-radii-blocks}*/;
}
/* 745 */
.ui-br {
    border-color: rgb(130,130,130);
    border-color: rgba(130,130,130,.3);
    border-style: solid;
}
/* 765 */
.ui-icon, .ui-icon-searchfield:after {
    background: #666 /*{global-icon-color}*/;
    background: rgba(0,0,0,.4) /*{global-icon-disc}*/;
    background-image: url(https://code.jquery.com/mobile/1.3.2/images/icons-18-white.png) /*{global-icon-set}*/;
    background-repeat: no-repeat;
    -webkit-border-radius: 9px;
    border-radius: 9px;
}
/* 804 */
.ui-icon-arrow-r {
    background-position: -108px -1px;
}
/* 813 */
.ui-icon-arrow-d {
    background-position: -216px -1px;
}
/* 853 */
.ui-icon-checkbox-on {
    background-position: -647px -1px;
}
/* 856 */
.ui-icon-checkbox-off {
    background-position: -683px -1px;
}
/* 866 */
.ui-icon-bars {
    background-position: -788px -1px;
}
@media only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-resolution: 200dpi) {
/* 883 */
.ui-icon-plus, .ui-icon-minus, .ui-icon-delete, .ui-icon-arrow-r, .ui-icon-arrow-l, .ui-icon-arrow-u, .ui-icon-arrow-d, .ui-icon-check, .ui-icon-gear, .ui-icon-refresh, .ui-icon-forward, .ui-icon-back, .ui-icon-grid, .ui-icon-star, .ui-icon-alert, .ui-icon-info, .ui-icon-home, .ui-icon-bars, .ui-icon-edit, .ui-icon-search, .ui-icon-searchfield:after, .ui-icon-checkbox-off, .ui-icon-checkbox-on, .ui-icon-radio-off, .ui-icon-radio-on {
    background-image: url(https://code.jquery.com/mobile/1.3.2/images/icons-36-white.png);
    -moz-background-size: 864px 18px;
    -o-background-size: 864px 18px;
    -webkit-background-size: 864px 18px;
    background-size: 864px 18px;
}
/* 902 */
.ui-icon-arrow-r {
    background-position: -108px 50%;
}
/* 911 */
.ui-icon-arrow-d {
    background-position: -215px 50%;
}
/* 948 */
.ui-icon-checkbox-on {
    background-position: -647px 50%;
}
/* 951 */
.ui-icon-checkbox-off {
    background-position: -683px 50%;
}
/* 960 */
.ui-icon-bars {
    background-position: -788px 50%;
}
}
/* 969 */
.ui-checkbox .ui-icon, .ui-selectmenu-list .ui-icon {
    -webkit-border-radius: 3px;
    border-radius: 3px;
}
/* 974 */
.ui-icon-checkbox-off, .ui-icon-radio-off {
    background-color: transparent;
}
/* 978 */
.ui-checkbox-on .ui-icon, .ui-radio-on .ui-icon {
    background-color: #4596ce /*{global-active-background-color}*/;
}
/* 988 */
.ui-btn-corner-all {
    -webkit-border-radius: 1em /*{global-radii-buttons}*/;
    border-radius: 1em /*{global-radii-buttons}*/;
}
/* 994 */
.ui-corner-all, .ui-btn-corner-all {
    -webkit-background-clip: padding;
    background-clip: padding-box;
}
/* 1013 */
.ui-shadow {
    -moz-box-shadow: 0 1px 3px /*{global-box-shadow-size}*/ rgba(0,0,0,.2) /*{global-box-shadow-color}*/;
    -webkit-box-shadow: 0 1px 3px /*{global-box-shadow-size}*/ rgba(0,0,0,.2) /*{global-box-shadow-color}*/;
    box-shadow: 0 1px 3px /*{global-box-shadow-size}*/ rgba(0,0,0,.2) /*{global-box-shadow-color}*/;
}
/* 1020 */
.ui-bar-a .ui-shadow, .ui-bar-b .ui-shadow, .ui-bar-c .ui-shadow {
    -moz-box-shadow: 0 1px 0 rgba(255,255,255,.3);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.3);
    box-shadow: 0 1px 0 rgba(255,255,255,.3);
}
/* 1025 */
.ui-shadow-inset {
    -moz-box-shadow: inset 0 1px 4px rgba(0,0,0,.2);
    -webkit-box-shadow: inset 0 1px 4px rgba(0,0,0,.2);
    box-shadow: inset 0 1px 4px rgba(0,0,0,.2);
}
/* 1030 */
.ui-icon-shadow {
    -moz-box-shadow: 0 1px 0 rgba(255,255,255,.4) /*{global-icon-shadow}*/;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.4) /*{global-icon-shadow}*/;
    box-shadow: 0 1px 0 rgba(255,255,255,.4) /*{global-icon-shadow}*/;
}
/* 1070 */
.ui-mobile, .ui-mobile body {
    height: 99.9%;
}
/* 1071 */
.ui-mobile fieldset, .ui-page {
    padding: 0;
    margin: 0;
}
/* 1072 */
.ui-mobile a img, .ui-mobile fieldset {
    border-width: 0;
}
/* 1073 */
.ui-mobile fieldset {
    min-width: 0;
}
/* 1075 */
.ui-mobile-viewport {
    margin: 0;
    overflow-x: visible;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
/* 1078 */
body.ui-mobile-viewport, div.ui-mobile-viewport {
    overflow-x: hidden;
}
/* 1080 */
.ui-mobile [data-role=page], .ui-mobile [data-role=dialog], .ui-page {
    top: 0;
    left: 0;
    width: 100%;
    min-height: 100%;
    position: absolute;
    display: none;
    border: 0;
}
/* 1081 */
.ui-mobile .ui-page-active {
    display: block;
    overflow: visible;
}
/* 1083 */
.ui-page {
    outline: none;
}
@media screen and (orientation: portrait){
/* 1086 */
.ui-mobile .ui-page {
    min-height: 420px;
}
}
/* 1106 */
.ui-bar, .ui-body {
    position: relative;
    padding: .4em 15px;
    overflow: hidden;
    display: block;
    clear: both;
}
/* 1109 */
.ui-header, .ui-footer {
    position: relative;
    zoom: 1;
}
/* 1110 */
.ui-mobile .ui-header, .ui-mobile .ui-footer {
    border-left-width: 0;
    border-right-width: 0;
}
/* 1116 */
.ui-header .ui-btn-left, .ui-header .ui-btn-right, .ui-footer .ui-btn-left, .ui-footer .ui-btn-right, .ui-header-fixed.ui-fixed-hidden .ui-btn-left, .ui-header-fixed.ui-fixed-hidden .ui-btn-right {
    position: absolute;
    top: 3px;
}
/* 1118 */
.ui-header-fixed .ui-btn-left, .ui-header-fixed .ui-btn-right {
    top: 4px;
}
/* 1120 */
.ui-header .ui-btn-left, .ui-footer .ui-btn-left {
    left: 5px;
}
/* 1127 */
.ui-header .ui-title, .ui-footer .ui-title {
    min-height: 1.1em;
    text-align: center;
    font-size: 16px;
    display: block;
    margin: .6em 30% .8em;
    padding: 0;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    outline: 0;
}
/* 1128 */
.ui-footer .ui-title {
    margin: .6em 15px .8em;
}
/* 1130 */
.ui-content {
    border-width: 0;
    overflow: visible;
    overflow-x: hidden;
    padding: 15px;
}
/* 1149 */
.ui-icon {
    width: 18px;
    height: 18px;
}
/* 1911 */
.ui-grid-a, .ui-grid-b, .ui-grid-c, .ui-grid-d {
    overflow: hidden;
}
/* 1912 */
.ui-block-a, .ui-block-b, .ui-block-c, .ui-block-d, .ui-block-e {
    margin: 0;
    padding: 0;
    border: 0;
    float: left;
    min-height: 1px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}
/* 1925 */
.ui-grid-c .ui-block-a, .ui-grid-c .ui-block-b, .ui-grid-c .ui-block-c, .ui-grid-c .ui-block-d {
    width: 24.925%;
}
/* 1926 */
.ui-grid-c > :nth-child(n) {
    width: 25%;
    margin-right: -.5px;
}
/* 1927 */
.ui-grid-c .ui-block-a {
    clear: left;
}
/* 1945 */
.ui-header-fixed, .ui-footer-fixed {
    left: 0;
    right: 0;
    width: 100%;
    position: fixed;
    z-index: 1000;
}
/* 1952 */
.ui-header-fixed {
    top: -1px;
    padding-top: 1px;
}
/* 1960 */
.ui-footer-fixed {
    bottom: -1px;
    padding-bottom: 1px;
}
/* 1973 */
.ui-page-header-fixed {
    padding-top: 2.6875em;
}
/* 1976 */
.ui-page-footer-fixed {
    padding-bottom: 2.6875em;
}
/* 1991 */
.ui-header-fixed .ui-btn, .ui-footer-fixed .ui-btn {
    z-index: 10;
}
/* 1998 */
.ui-navbar {
    max-width: 100%;
}
/* 1999 */
.ui-navbar.ui-mini {
    margin: 0;
}
/* 2000 */
.ui-navbar ul:before, .ui-navbar ul:after {
    content: " ";
    display: table;
}
/* 2001 */
.ui-navbar ul:after {
    clear: both;
}
/* 2002 */
.ui-navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
    display: block;
    border: 0;
    max-width: 100%;
    overflow: visible;
    zoom: 1;
}
/* 2003 */
.ui-navbar li .ui-btn {
    display: block;
    text-align: center;
    margin: 0 -1px 0 0;
    border-right-width: 0;
}
/* 2014 */
.ui-header .ui-navbar li .ui-btn, .ui-footer .ui-navbar li .ui-btn {
    border-top-width: 0;
    border-bottom-width: 0;
}
/* 2028 */
.ui-navbar li .ui-btn .ui-btn-inner {
    padding-top: .7em;
    padding-bottom: .8em;
}
/* 2031 */
.ui-btn {
    display: block;
    text-align: center;
    cursor: pointer;
    position: relative;
    margin: .5em 0;
    padding: 0;
}
/* 2032 */
.ui-mini {
    margin-top: .25em;
    margin-bottom: .25em;
}
/* 2034 */
.ui-btn-left, .ui-btn-right, .ui-input-clear, .ui-btn-inline, .ui-grid-a .ui-btn, .ui-grid-b .ui-btn, .ui-grid-c .ui-btn, .ui-grid-d .ui-btn, .ui-grid-e .ui-btn, .ui-grid-solo .ui-btn {
    margin-right: 5px;
    margin-left: 5px;
}
/* 2035 */
.ui-btn-inner {
    font-size: 16px;
    padding: .6em 20px;
    min-width: .75em;
    display: block;
    position: relative;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    zoom: 1;
}
/* 2036 */
.ui-btn input, .ui-btn button {
    z-index: 2;
}
/* 2037 */
.ui-btn-left, .ui-btn-right, .ui-btn-inline {
    display: inline-block;
    vertical-align: middle;
}
/* 2038 */
.ui-mobile .ui-btn-left, .ui-mobile .ui-btn-right, .ui-btn-left > .ui-btn, .ui-btn-right > .ui-btn {
    margin: 0;
}
/* 2041 */
.ui-header > .ui-btn, .ui-footer > .ui-btn {
    display: inline-block;
    margin: 0;
}
/* 2046 */
.ui-header .ui-btn-inner, .ui-footer .ui-btn-inner, .ui-mini .ui-btn-inner {
    font-size: 12.5px;
    padding: .55em 11px .5em;
}
/* 2048 */
.ui-fullsize .ui-btn-inner, .ui-fullsize .ui-btn-inner {
    font-size: 16px;
    padding: .6em 20px;
}
/* 2049 */
.ui-btn-icon-notext {
    width: 24px;
    height: 24px;
}
/* 2050 */
.ui-btn-icon-notext .ui-btn-inner {
    padding: 0;
    height: 100%;
}
/* 2051 */
.ui-btn-icon-notext .ui-btn-inner .ui-icon {
    margin: 2px 1px 2px 3px;
    float: left;
}
/* 2052 */
.ui-btn-text {
    position: relative;
    z-index: 1;
    width: 100%;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
}
/* 2053 */
div.ui-btn-text {
    width: auto;
}
/* 2054 */
.ui-btn-icon-notext .ui-btn-text {
    position: absolute;
    left: -9999px;
}
/* 2055 */
.ui-btn-icon-left .ui-btn-inner {
    padding-left: 40px;
}
/* 2056 */
.ui-btn-icon-right .ui-btn-inner {
    padding-right: 40px;
}
/* 2062 */
.ui-header .ui-btn-icon-left .ui-btn-inner, .ui-footer .ui-btn-icon-left .ui-btn-inner, .ui-mini.ui-btn-icon-left .ui-btn-inner, .ui-mini .ui-btn-icon-left .ui-btn-inner {
    padding-left: 30px;
}
/* 2076 */
.ui-btn-inner {
    -webkit-border-radius: inherit;
    border-radius: inherit;
}
/* 2081 */
.ui-btn-icon-notext .ui-icon {
    display: block;
    z-index: 0;
}
/* 2082 */
.ui-btn-icon-left > .ui-btn-inner > .ui-icon, .ui-btn-icon-right > .ui-btn-inner > .ui-icon {
    position: absolute;
    top: 50%;
    margin-top: -9px;
}
/* 2084 */
.ui-btn-icon-left .ui-icon {
    left: 10px;
}
/* 2085 */
.ui-btn-icon-right .ui-icon {
    right: 10px;
}
/* 2091 */
.ui-header .ui-btn-icon-left .ui-icon, .ui-footer .ui-btn-icon-left .ui-icon, .ui-mini.ui-btn-icon-left .ui-icon, .ui-mini .ui-btn-icon-left .ui-icon {
    left: 5px;
}
/* 2105 */
.ui-btn-hidden {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-appearance: none;
    cursor: pointer;
    background: #fff;
    background: rgba(255,255,255,0);
    filter: Alpha(Opacity=0);
    opacity: .1;
    font-size: 1px;
    border: none;
    text-indent: -9999px;
}
/* 2109 */
.ui-field-contain .ui-btn.ui-submit {
    margin: 0;
}
/* 2116 */
.ui-collapsible-inset {
    margin: .5em 0;
}
/* 2117 */
.ui-collapsible-heading {
    font-size: 16px;
    display: block;
    margin: 0 -15px;
    padding: 0;
    position: relative;
}
/* 2118 */
.ui-collapsible-inset .ui-collapsible-heading {
    margin: 0;
}
/* 2119 */
.ui-collapsible-heading .ui-btn {
    text-align: left;
    margin: 0;
    border-left-width: 0;
    border-right-width: 0;
}
/* 2120 */
.ui-collapsible-inset .ui-collapsible-heading .ui-btn {
    border-right-width: 1px;
    border-left-width: 1px;
}
/* 2123 */
.ui-collapsible-heading .ui-btn-inner {
    padding-left: 12px;
    padding-right: 12px;
}
/* 2124 */
.ui-collapsible-heading .ui-btn-icon-left .ui-btn-inner {
    padding-left: 40px;
}
/* 2128 */
.ui-collapsible-heading .ui-btn-icon-left.ui-mini .ui-btn-inner {
    padding-left: 30px;
}
/* 2133 */
.ui-collapsible-heading-status {
    position: absolute;
    top: -9999px;
    left: 0;
}
/* 2134 */
.ui-collapsible-content {
    display: block;
    margin: 0 -15px;
    padding: 10px 15px;
    border-left-width: 0;
    border-right-width: 0;
    border-top: none;
    background-image: none;
}
/* 2143 */
.ui-collapsible-inset .ui-collapsible-content {
    margin: 0;
    border-right-width: 1px;
    border-left-width: 1px;
}
/* 2150 */
.ui-collapsible-heading, .ui-collapsible-heading > .ui-btn {
    -webkit-border-radius: inherit;
    border-radius: inherit;
}
/* 2161 */
.ui-collapsible-content, .ui-collapsible-set .ui-collapsible.ui-last-child {
    -webkit-border-bottom-right-radius: inherit;
    border-bottom-right-radius: inherit;
    -webkit-border-bottom-left-radius: inherit;
    border-bottom-left-radius: inherit;
}
/* 2176 */
.ui-controlgroup, fieldset.ui-controlgroup {
    padding: 0;
    margin: .5em 0;
    zoom: 1;
}
/* 2178 */
.ui-field-contain .ui-controlgroup, .ui-field-contain fieldset.ui-controlgroup {
    margin: 0;
}
/* 2180 */
.ui-controlgroup-label {
    font-size: 16px;
    line-height: 1.4;
    font-weight: normal;
    margin: 0 0 .4em;
}
/* 2182 */
.ui-controlgroup-label legend {
    max-width: 100%;
}
/* 2186 */
.ui-controlgroup .ui-btn {
    margin: 0;
}
/* 2196 */
.ui-controlgroup .ui-checkbox label, .ui-controlgroup .ui-radio label {
    font-size: 16px;
}
/* 2206 */
.ui-controlgroup-vertical .ui-btn {
    border-bottom-width: 0;
}
/* 2207 */
.ui-controlgroup-vertical .ui-btn.ui-last-child {
    border-bottom-width: 1px;
}
/* 2210 */
.ui-controlgroup .ui-btn-corner-all {
    -webkit-border-radius: 0;
    border-radius: 0;
}
/* 2218 */
.ui-controlgroup .ui-controlgroup-controls, .ui-controlgroup .ui-radio, .ui-controlgroup .ui-checkbox, .ui-controlgroup .ui-select, .ui-controlgroup li {
    -webkit-border-radius: inherit;
    border-radius: inherit;
}
/* 2222 */
.ui-controlgroup-vertical .ui-btn.ui-first-child {
    -webkit-border-top-left-radius: inherit;
    border-top-left-radius: inherit;
    -webkit-border-top-right-radius: inherit;
    border-top-right-radius: inherit;
}
/* 2228 */
.ui-controlgroup-vertical .ui-btn.ui-last-child {
    -webkit-border-bottom-left-radius: inherit;
    border-bottom-left-radius: inherit;
    -webkit-border-bottom-right-radius: inherit;
    border-bottom-right-radius: inherit;
}
/* 2246 */
.ui-controlgroup .ui-shadow:not(.ui-focus) {
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}
/* 2418 */
.ui-checkbox, .ui-radio {
    position: relative;
    clear: both;
    margin: 0;
    z-index: 1;
}
/* 2419 */
.ui-checkbox .ui-btn, .ui-radio .ui-btn {
    text-align: left;
    z-index: 2;
}
/* 2420 */
.ui-controlgroup .ui-checkbox .ui-btn, .ui-controlgroup .ui-radio .ui-btn {
    margin: 0;
}
/* 2421 */
.ui-checkbox .ui-btn-inner, .ui-radio .ui-btn-inner {
    white-space: normal;
}
/* 2422 */
.ui-checkbox .ui-btn-icon-left .ui-btn-inner, .ui-radio .ui-btn-icon-left .ui-btn-inner {
    padding-left: 45px;
}
/* 2428 */
.ui-checkbox .ui-icon, .ui-radio .ui-icon {
    top: 1.1em;
}
/* 2429 */
.ui-checkbox .ui-btn-icon-left .ui-icon, .ui-radio .ui-btn-icon-left .ui-icon {
    left: 15px;
}
/* 2444 */
.ui-checkbox input, .ui-radio input {
    position: absolute;
    left: 20px;
    top: 50%;
    width: 10px;
    height: 10px;
    margin: -5px 0 0 0;
    outline: 0;
    z-index: 1;
}
/* 2445 */
.ui-field-contain, fieldset.ui-field-contain {
    padding: .8em 0;
    margin: 0;
    border-width: 0 0 1px 0;
    overflow: visible;
}
/* 2446 */
.ui-field-contain:last-child {
    border-bottom-width: 0;
}
/* 2447 */
.ui-field-contain {
    max-width: 100%;
}
/* 2451 */
.ui-select {
    display: block;
    position: relative;
}
/* 2452 */
.ui-select select {
    position: absolute;
    left: -9999px;
    top: -9999px;
}
/* 2453 */
.ui-select .ui-btn {
    opacity: 1;
}
/* 2454 */
.ui-field-contain .ui-select .ui-btn {
    margin: 0;
}
/* 2456 */
.ui-select .ui-btn select {
    cursor: pointer;
    -webkit-appearance: none;
    left: 0;
    top: 0;
    width: 100%;
    min-height: 1.5em;
    min-height: 100%;
    height: 3em;
    max-height: 100%;
    filter: Alpha(Opacity=0);
    opacity: 0;
    z-index: 2;
}
/* 2464 */
.ui-select .ui-btn-icon-right .ui-btn-inner, .ui-select .ui-li-has-count .ui-btn-inner {
    padding-right: 45px;
}
/* 2468 */
.ui-select .ui-btn-icon-right .ui-icon {
    right: 15px;
}
/* 2473 */
label.ui-select {
    font-size: 16px;
    line-height: 1.4;
    font-weight: normal;
    margin: 0 0 .3em;
    display: block;
}
/* 2475 */
.ui-select .ui-btn-text, .ui-selectmenu .ui-btn-text {
    display: block;
    min-height: 1em;
    overflow: hidden;
}
/* 2477 */
.ui-select .ui-btn-text {
    text-overflow: ellipsis;
}
/* 2494 */
label.ui-input-text {
    font-size: 16px;
    line-height: 1.4;
    display: block;
    font-weight: normal;
    margin: 0 0 .3em;
}
/* 2495 */
input.ui-input-text, textarea.ui-input-text {
    background-image: none;
    padding: .4em;
    margin: .5em 0;
    min-height: 1.4em;
    line-height: 1.4em;
    font-size: 16px;
    display: block;
    width: 100%;
    outline: 0;
}
/* 2498 */
div.ui-input-text input.ui-input-text, div.ui-input-text textarea.ui-input-text, .ui-input-search input.ui-input-text {
    border: none;
    width: 100%;
    padding: .4em 0;
    margin: 0;
    display: block;
    background: transparent none;
    outline: 0;
}
/* 2499 */
.ui-input-search, div.ui-input-text {
    margin: .5em 0;
    background-image: none;
    position: relative;
}
/* 2501 */
div.ui-input-text {
    padding: 0 .4em;
}
/* 2506 */
.ui-field-contain input.ui-input-text, .ui-field-contain textarea.ui-input-text, .ui-field-contain .ui-input-search, .ui-field-contain div.ui-input-text {
    margin: 0;
}
/* 2507 */
textarea.ui-input-text {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}
/* 2508 */
input.ui-input-text {
    -webkit-appearance: none;
}
/* 2509 */
textarea.ui-input-text {
    height: 50px;
    -webkit-transition: height 200ms linear;
    -moz-transition: height 200ms linear;
    -o-transition: height 200ms linear;
    transition: height 200ms linear;
}
/* 2639 */
.ui-listview {
    margin: 0;
}
/* 2641 */
.ui-content .ui-listview, .ui-panel-inner > .ui-listview {
    margin: -15px;
}
/* 2642 */
.ui-collapsible-content > .ui-listview {
    margin: -10px -15px;
}
/* 2645 */
.ui-listview, .ui-li {
    list-style: none;
    padding: 0;
}
/* 2646 */
.ui-li, .ui-li.ui-field-contain {
    display: block;
    margin: 0;
    position: relative;
    overflow: visible;
    text-align: left;
    border-width: 0;
    border-top-width: 1px;
}
/* 2647 */
.ui-li.ui-btn, .ui-li.ui-field-contain, .ui-li-divider, .ui-li-static {
    margin: 0;
}
/* 2649 */
.ui-li.ui-last-child, .ui-li.ui-field-contain.ui-last-child {
    border-bottom-width: 1px;
}
/* 2650 */
.ui-collapsible-content > .ui-listview:not(.ui-listview-inset) > .ui-li.ui-first-child {
    border-top-width: 0;
}
/* 2651 */
.ui-collapsible-themed-content .ui-listview:not(.ui-listview-inset) > .ui-li.ui-last-child {
    border-bottom-width: 0;
}
/* 2652 */
.ui-li .ui-btn-text a.ui-link-inherit {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
/* 2653 */
.ui-li-static {
    background-image: none;
}
/* 2654 */
.ui-li-divider {
    padding: .5em 15px;
    font-size: 14px;
    font-weight: bold;
}
/* 2657 */
.ui-listview .ui-li > .ui-btn-text {
    -webkit-border-radius: inherit;
    border-radius: inherit;
}
/* 2662 */
.ui-listview > .ui-li.ui-first-child, .ui-listview .ui-btn.ui-first-child > .ui-li > .ui-btn-text > .ui-link-inherit {
    -webkit-border-top-right-radius: inherit;
    border-top-right-radius: inherit;
    -webkit-border-top-left-radius: inherit;
    border-top-left-radius: inherit;
}
/* 2671 */
.ui-listview > .ui-li.ui-last-child, .ui-listview .ui-btn.ui-last-child > .ui-li > .ui-btn-text > .ui-link-inherit, .ui-collapsible-content > .ui-listview:not(.ui-listview-inset), .ui-collapsible-content > .ui-listview:not(.ui-listview-inset) .ui-li.ui-last-child {
    -webkit-border-bottom-right-radius: inherit;
    border-bottom-right-radius: inherit;
    -webkit-border-bottom-left-radius: inherit;
    border-bottom-left-radius: inherit;
}
/* 2681 */
.ui-listview > .ui-li.ui-last-child .ui-li-link-alt {
    -webkit-border-bottom-right-radius: inherit;
    border-bottom-right-radius: inherit;
}
/* 2693 */
.ui-li>.ui-btn-inner {
    display: block;
    position: relative;
    padding: 0;
}
/* 2694 */
.ui-li .ui-btn-inner a.ui-link-inherit, .ui-li-static.ui-li {
    padding: .7em 15px;
    display: block;
}
/* 2697 */
.ui-li-has-count .ui-btn-inner a.ui-link-inherit, .ui-li-static.ui-li-has-count, .ui-li-divider.ui-li-has-count {
    padding-right: 45px;
}
/* 2698 */
.ui-li-has-arrow .ui-btn-inner a.ui-link-inherit, .ui-li-static.ui-li-has-arrow {
    padding-right: 40px;
}
/* 2699 */
.ui-li-has-arrow.ui-li-has-count .ui-btn-inner a.ui-link-inherit, .ui-li-static.ui-li-has-arrow.ui-li-has-count {
    padding-right: 75px;
}
/* 2700 */
.ui-li-heading {
    font-size: 16px;
    font-weight: bold;
    display: block;
    margin: .6em 0;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
/* 2701 */
.ui-li-desc {
    font-size: 12px;
    font-weight: normal;
    display: block;
    margin: -.5em 0 .6em;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
/* 2711 */
.ui-li-divider {
    cursor: default;
}
/* 2712 */
.ui-li-has-alt .ui-btn-inner a.ui-link-inherit, .ui-li-static.ui-li-has-alt {
    padding-right: 53px;
}
/* 2713 */
.ui-li-has-alt.ui-li-has-count .ui-btn-inner a.ui-link-inherit, .ui-li-static.ui-li-has-alt.ui-li-has-count {
    padding-right: 88px;
}
/* 2714 */
.ui-li-has-count .ui-li-count {
    position: absolute;
    font-size: 11px;
    font-weight: bold;
    padding: .2em .5em;
    top: 50%;
    margin-top: -.9em;
    right: 10px;
}
/* 2715 */
.ui-li-has-count.ui-li-divider .ui-li-count, .ui-li-has-count .ui-link-inherit .ui-li-count {
    margin-top: -.95em;
}
/* 2716 */
.ui-li-has-arrow.ui-li-has-count .ui-li-count {
    right: 40px;
}
/* 2717 */
.ui-li-has-alt.ui-li-has-count .ui-li-count {
    right: 53px;
}
/* 2718 */
.ui-li-link-alt {
    position: absolute;
    width: 40px;
    height: 100%;
    border-width: 0;
    border-left-width: 1px;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    z-index: 2;
}
/* 2719 */
.ui-li-link-alt .ui-btn {
    overflow: hidden;
    position: absolute;
    right: 8px;
    top: 50%;
    margin: -13px 0 0 0;
    border-bottom-width: 1px;
    z-index: -1;
}
/* 2720 */
.ui-li-link-alt .ui-btn-inner {
    padding: 0;
    height: 100%;
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
}
/* 2721 */
.ui-li-link-alt .ui-btn .ui-icon {
    right: 50%;
    margin-right: -9px;
}
/* 2722 */
.ui-li-link-alt .ui-btn-icon-notext .ui-btn-inner .ui-icon {
    position: absolute;
    top: 50%;
    margin-top: -9px;
}
/* 2723 */
.ui-listview * .ui-btn-inner > .ui-btn > .ui-btn-inner {
    border-top: 0;
}
/* 3146 */
.ui-panel {
    width: 80vw;
    min-height: 100%;
    max-height: none;
    border-width: 0;
    position: absolute;
    top: 0;
    display: block;
}
/* 3166 */
.ui-panel-display-overlay {
    z-index: 1001;
}
/* 3175 */
.ui-panel-inner {
    padding: 15px;
}
/* 3205 */
.ui-panel-animate {
    -webkit-transition: -webkit-transform 350ms ease;
    -moz-transition: -moz-transform 350ms ease;
    transition: transform 350ms ease;
}
/* 3215 */
.ui-panel-animate.ui-panel:not(.ui-panel-display-reveal), .ui-panel-animate.ui-panel:not(.ui-panel-display-reveal) > div, .ui-panel-animate.ui-panel-closed.ui-panel-display-reveal > div, .ui-panel-animate.ui-panel-content-wrap, .ui-panel-animate.ui-panel-content-fixed-toolbar {
    -webkit-backface-visibility: hidden;
    -webkit-transform: translate3d(0,0,0);
}
/* 3221 */
.ui-panel-position-left {
    left: -17em;
}
/* 3226 */
.ui-panel-animate.ui-panel-position-left.ui-panel-display-overlay, .ui-panel-animate.ui-panel-position-left.ui-panel-display-push {
    left: 0;
    -webkit-transform: translate3d(-17em,0,0);
    -moz-transform: translate3d(-17em,0,0);
    transform: translate3d(-17em,0,0);
}
/* 3234 */
.ui-panel-position-left.ui-panel-display-reveal, .ui-panel-position-left.ui-panel-open {
    left: 0;
}
/* 3239 */
.ui-panel-animate.ui-panel-position-left.ui-panel-open.ui-panel-display-overlay, .ui-panel-animate.ui-panel-position-left.ui-panel-open.ui-panel-display-push {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    -moz-transform: none;
}
/* 3311 */
.ui-page-active.ui-page-panel {
    overflow-x: hidden;
}
/* 3325 */
.ui-panel-display-overlay {
    -webkit-box-shadow: 5px 0 5px rgba(0,0,0,.15);
    -moz-box-shadow: 5px 0 5px rgba(0,0,0,.15);
    box-shadow: 5px 0 5px rgba(0,0,0,.15);
}
#page-style {
    padding-top: 42px;
    padding-bottom: 43px;
    min-height: 483px;
}
#bold-style {
    font-weight: bold;
}
#italic-style {
    font-style: italic;
}
#underline-style {
    text-decoration: underline;
}
#strikethrough-style {
    text-decoration: line-through;
}
#align-left-style {
    text-align: left;
}
#center-style {
    text-align: center;
}
#align-right-style {
    text-align: right;
}
#justify-style {
    text-align: justify;
}
EOT;

	$pattern = '#\s*/\*.*\*/#i';
	$style = preg_replace($pattern, '', $style);

	$pattern = '#^\s+#im';
	$style = preg_replace($pattern, '', $style);

	return $style;
}

function mmybb18p_update_style($contents)
{
	$pattern = '#<html(\sxml:lang="[^"]*")?(\slang="[^"]*")?(\sdir="[^"]*")?(\sxmlns="[^"]*")?(.*)>#i';
	$contents = preg_replace($pattern, '<html amp$2$3$5>', $contents);

	$pattern = '#(<ul[^>]*>.*<li[^>]* class="[^"]*)("[^>]*>)#isU';
	$contents = preg_replace($pattern, '$1 ui-first-child$2', $contents);

	$contents = strrev($contents);
	$pattern = '#(>lu/<.*>il/<.*>[^<]*")([^"]*"=ssalc [^<]*il<)#isU';
	$contents = preg_replace($pattern, '$1dlihc-tsal-iu $2', $contents);
	$contents = strrev($contents);

	$pattern = '#(<li[^>]* class="[^"]*) ui-li-has-arrow([^"]*"[^>]* data-icon=")arrow-r("[^>]*>.*<div[^>]* class="[^"]*)("[^>]*>.*<span[^>]*>.*<span[^>]*></span>.*<span[^>]*>.*<span[^>]*>.*<span[^>]*></span>.*<span[^>]*>&nbsp;</span>.*</span>.*</span>.*</span>.*</li>)#isU';
	$contents = preg_replace($pattern, '$1 ui-li-has-alt$2false$3 ui-li-has-alt$4', $contents);

	$pattern = '#<form action-xhr="[^"]+" method="post"[^>]*>#i';
	if ( !preg_match($pattern, $contents) )
	{
		$pattern = '#<script async custom-element="amp-form" src="[^"]+"></script>#i';
		$contents = preg_replace($pattern, '', $contents);
	}

	$style = mmybb18p_get_amp_custom_style();

	$pattern = '#(<style amp-custom>).*(</style>)#isU';
	$contents = preg_replace($pattern, '$1' . "\n" . $style . "\n" . '$2', $contents);

	return $contents;
}