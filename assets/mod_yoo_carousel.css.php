/* (C) 2007 YOOtheme.com */

a:focus { outline: none; }

div.yoo-carousel {
	overflow: hidden;
}

div.yoo-carousel div.frame {
	position: relative;
	overflow: hidden;
}

div.yoo-carousel div.panel {
	overflow: hidden;
}

div.yoo-carousel div.panel div.slide {
	float: left;
	overflow: hidden;
}

div.yoo-carousel ul.tabs {
	padding: 0px;
	margin: auto;
	list-style: none;
}

div.yoo-carousel ul.tabs li {
	margin: 0px;
	padding: 0px;
	float: left;
	display: block;
}

div.yoo-carousel ul.tabs li a {
	float: left;
	display: block;
}

div.yoo-carousel ul.tabs li a span {
	float: left;
	display: block;
}

/* list styling */
div.yoo-carousel div.left ul.tabs {
	float: left;
}

/* list styling */
div.yoo-carousel div.right ul.tabs {
	float: right;
}

/* list styling */
div.yoo-carousel div.left ul.tabs li, div.yoo-carousel div.left ul.tabs li a, div.yoo-carousel div.left ul.tabs li a span,
div.yoo-carousel div.right ul.tabs li, div.yoo-carousel div.right ul.tabs li a, div.yoo-carousel div.right ul.tabs li a span {
	float: none;
}

div.yoo-carousel .prev, div.yoo-carousel .next {
	position: absolute;
	top: 35%;
	z-index: 1;
}

div.yoo-carousel .prev {
	left: 0px;
}

div.yoo-carousel .next {
	right: 0px;
}/* (C) 2007 YOOtheme.com */

div.default div.yoo-carousel {
	background: #ffffff;
}

/* tabs */
div.default div.yoo-carousel div.top ul.tabs {
	height: 40px;
	background: url(styles/default/images/tab_bg.png) 0 100% repeat-x;
}

div.default div.yoo-carousel div.top ul.tabs li {
	margin: 0px 10px 0px 0px;
}

div.default div.yoo-carousel div.top ul.tabs li.item1 {
	margin: 0px 10px 0px 20px;
}

div.default div.yoo-carousel div.top ul.tabs li a {
	background: url(styles/default/images/tab_m.png) 0 0 repeat-x;
}

div.default div.yoo-carousel div.top ul.tabs li.selected a {
	background: url(styles/default/images/tab_m.png) 0 -40px repeat-x;
	cursor: pointer;
}

div.default div.yoo-carousel div.top ul.tabs li a span {
	background: url(styles/default/images/tab_l.png) 0 0 no-repeat;
}

div.default div.yoo-carousel div.top ul.tabs li.selected a span {
	background: url(styles/default/images/tab_l.png) 0 -40px no-repeat;
}

div.default div.yoo-carousel div.top ul.tabs li a span span {
	height: 40px;
	padding: 0px 20px 0px 20px;
	background: url(styles/default/images/tab_r.png) 100% 0 no-repeat;
	line-height: 50px;
	font-weight: bold;
	font-size: 125%;
	overflow: hidden;
}

div.default div.yoo-carousel div.top ul.tabs li.selected a span span {
	background: url(styles/default/images/tab_r.png) 100% -40px no-repeat;
}

div.default div.yoo-carousel li a:link, div.default div.yoo-carousel li a:visited {
	color: #969696;
	text-decoration: none;
}

div.default div.yoo-carousel li a:hover, div.default div.yoo-carousel li.selected a:link, div.default div.yoo-carousel li.selected a:visited {
	color: #646464;
	text-decoration: none;
}

/* buttons */
div.default div.yoo-carousel .prev span {
	width: 50px;
	height: 40px;
	display: block;
	background: url(styles/default/images/button_prev.png) 100% 0 no-repeat;
}

div.default div.yoo-carousel .next span {
	width: 50px;
	height: 40px;
	display: block;
	background: url(styles/default/images/button_next.png) 100% 0 no-repeat;
}

div.default div.yoo-carousel .prev a, div.default div.yoo-carousel .next a {
	cursor: pointer;
}

/* scroller */
div.default div.yoo-carousel .panel-container {
	margin: auto;
	background: url(styles/default/images/panel_b.png) 0 100% repeat-x;
}

div.default div.yoo-carousel .panel-container-bl {
	background: url(styles/default/images/panel_bl.png) 0 100% no-repeat;
}

div.default div.yoo-carousel .panel-container-br {
	background: url(styles/default/images/panel_br.png) 100% 100% no-repeat;
}

/* article */
div.default div.yoo-carousel .article {
	padding: 10px 10px 10px 10px;
	font-size: 95%;
	line-height: 125%;
}

div.default div.yoo-carousel .article h3 {
	padding-bottom: 0px;
	margin-bottom: 5px;
	line-height: 100%;
	font-size: 150%;
	font-weight: bold;
	color: #323232;
}/* (C) 2007 YOOtheme.com */

body.yootools-black div.default div.yoo-carousel {
	background: #141414;
}

/* tabs */
body.yootools-black div.default div.yoo-carousel div.top ul.tabs {
	background: url(styles/default/black/images/tab_bg.png) 0 100% repeat-x;
}

body.yootools-black div.default div.yoo-carousel div.top ul.tabs li a {
	background: url(styles/default/black/images/tab_m.png) 0 0 repeat-x;
}

body.yootools-black div.default div.yoo-carousel div.top ul.tabs li.selected a {
	background: url(styles/default/black/images/tab_m.png) 0 -40px repeat-x;
}

body.yootools-black div.default div.yoo-carousel div.top ul.tabs li a span {
	background: url(styles/default/black/images/tab_l.png) 0 0 no-repeat;
}

body.yootools-black div.default div.yoo-carousel div.top ul.tabs li.selected a span {
	background: url(styles/default/black/images/tab_l.png) 0 -40px no-repeat;
}

body.yootools-black div.default div.yoo-carousel div.top ul.tabs li a span span {
	background: url(styles/default/black/images/tab_r.png) 100% 0 no-repeat;
}

body.yootools-black div.default div.yoo-carousel div.top ul.tabs li.selected a span span {
	background: url(styles/default/black/images/tab_r.png) 100% -40px no-repeat;
}

body.yootools-black div.default div.yoo-carousel li a:link, body.yootools-black div.default div.yoo-carousel li a:visited {
	color: #646464;
}

body.yootools-black div.default div.yoo-carousel li a:hover, body.yootools-black div.default div.yoo-carousel li.selected a:link, body.yootools-black div.default div.yoo-carousel li.selected a:visited {
	color: #969696;
}

/* buttons */
body.yootools-black div.default div.yoo-carousel .prev span {
	background: url(styles/default/black/images/button_prev.png) 100% 0 no-repeat;
}

body.yootools-black div.default div.yoo-carousel .next span {
	background: url(styles/default/black/images/button_next.png) 100% 0 no-repeat;
}

/* scroller */
body.yootools-black div.default div.yoo-carousel .panel-container {
	background: url(styles/default/black/images/panel_b.png) 0 100% repeat-x;
}

body.yootools-black div.default div.yoo-carousel .panel-container-bl {
	background: url(styles/default/black/images/panel_bl.png) 0 100% no-repeat;
}

body.yootools-black div.default div.yoo-carousel .panel-container-br {
	background: url(styles/default/black/images/panel_br.png) 100% 100% no-repeat;
}

body.yootools-black div.default div.yoo-carousel .article h3 {
	color: #787878;
}/* (C) 2007 YOOtheme.com */

div.basic div.yoo-carousel {
	background: #ffffff;
}

/* tabs */
/* top */
div.basic div.yoo-carousel div.top ul.tabs {
	height: 30px;
	background: url(styles/basic/images/top_tab_bg.png) 0 100% repeat-x;
}

div.basic div.yoo-carousel div.top ul.tabs li {
	margin: 0px 3px 0px 0px;
}

div.basic div.yoo-carousel div.top ul.tabs li a {
	background: url(styles/basic/images/top_tab_l.png) 0 0 no-repeat;
}

div.basic div.yoo-carousel div.top ul.tabs li.selected a {
	background: url(styles/basic/images/top_tab_l.png) 0 -30px no-repeat;
	cursor: pointer;
}

div.basic div.yoo-carousel div.top ul.tabs li a span {
	padding: 0px 10px 0px 10px;
	background: url(styles/basic/images/top_tab_r.png) 100% 0 no-repeat;
}

div.basic div.yoo-carousel div.top ul.tabs li.selected a span {
	background: url(styles/basic/images/top_tab_r.png) 100% -30px no-repeat;
}

div.basic div.yoo-carousel div.top ul.tabs li a span span {
	height: 30px;
	padding: 0px 10px 0px 10px;
	background: url(styles/basic/images/top_tab_m.png) 0 0 repeat-x;
	line-height: 35px;
	font-weight: bold;
	font-size: 110%;
	overflow: hidden;
}

div.basic div.yoo-carousel div.top ul.tabs li.selected a span span {
	background: url(styles/basic/images/top_tab_m.png) 0 -30px repeat-x;
}

/* bottom */
div.basic div.yoo-carousel div.bottom ul.tabs {
	height: 30px;
	background: url(styles/basic/images/bottom_tab_bg.png) 0 100% repeat-x;
	position: relative;
}

div.basic div.yoo-carousel div.bottom ul.tabs li {
	margin: -1px 3px 0px 0px;
}

div.basic div.yoo-carousel div.bottom ul.tabs li a {
	background: url(styles/basic/images/bottom_tab_l.png) 0 0 no-repeat; 
}

div.basic div.yoo-carousel div.bottom ul.tabs li.selected a {
	background: url(styles/basic/images/bottom_tab_l.png) 0 -30px no-repeat;
	cursor: pointer;
}

div.basic div.yoo-carousel div.bottom ul.tabs li a span {
	padding: 0px 10px 0px 10px;
	background: url(styles/basic/images/bottom_tab_r.png) 100% 0 no-repeat;
}

div.basic div.yoo-carousel div.bottom ul.tabs li.selected a span {
	background: url(styles/basic/images/bottom_tab_r.png) 100% -30px no-repeat; 
}

div.basic div.yoo-carousel div.bottom ul.tabs li a span span {
	height: 30px;
	padding: 0px 10px 0px 10px;
	background: url(styles/basic/images/bottom_tab_m.png) 0 0 repeat-x;
	line-height: 30px;
	font-weight: bold;
	font-size: 110%;
	overflow: hidden;
}

div.basic div.yoo-carousel div.bottom ul.tabs li.selected a span span {
	background: url(styles/basic/images/bottom_tab_m.png) 0 -30px repeat-x;
}

/* links */
div.basic div.yoo-carousel li a:link, div.basic div.yoo-carousel li a:visited {
	color: #969696;
	text-decoration: none;
}

div.basic div.yoo-carousel li a:hover, div.basic div.yoo-carousel li.selected a:link, div.basic div.yoo-carousel li.selected a:visited {
	color: #646464;
	text-decoration: none;
}

/* scroller */
div.basic div.yoo-carousel .panel-container {
	margin: auto;
}

div.basic div.yoo-carousel .top .panel-container-outer {
	padding: 0px 1px 1px 1px;
	border-left: 1px solid #C8C8C8;
	border-right: 1px solid #C8C8C8;
	border-bottom: 1px solid #C8C8C8;
	background: #ffffff;
}

div.basic div.yoo-carousel .bottom .panel-container-outer {
	padding: 0px 1px 1px 1px;
	border-left: 1px solid #C8C8C8;
	border-right: 1px solid #C8C8C8;
	border-top: 1px solid #C8C8C8;
	background: #ffffff;
}

div.basic div.yoo-carousel .panel-container-inner {
	background: url(styles/basic/images/panel_b.png) 0 100% repeat-x;
}

/* article */
div.basic div.yoo-carousel .article {
	padding: 10px 10px 10px 10px;
	font-size: 95%;
	line-height: 125%;
}

div.basic div.yoo-carousel .article h3 {
	padding-bottom: 0px;
	margin-bottom: 5px;
	line-height: 100%;
	font-size: 150%;
	font-weight: bold;
	color: #323232;
}/* (C) 2007 YOOtheme.com */

body.yootools-black div.basic div.yoo-carousel {
	background: #141414;
}

/* tabs */
/* top */
body.yootools-black div.basic div.yoo-carousel div.top ul.tabs {
	background: url(styles/basic/black/images/top_tab_bg.png) 0 100% repeat-x;
}

body.yootools-black div.basic div.yoo-carousel div.top ul.tabs li a {
	background: url(styles/basic/black/images/top_tab_l.png) 0 0 no-repeat;
}

body.yootools-black div.basic div.yoo-carousel div.top ul.tabs li.selected a {
	background: url(styles/basic/black/images/top_tab_l.png) 0 -30px no-repeat;
}

body.yootools-black div.basic div.yoo-carousel div.top ul.tabs li a span {
	background: url(styles/basic/black/images/top_tab_r.png) 100% 0 no-repeat;
}

body.yootools-black div.basic div.yoo-carousel div.top ul.tabs li.selected a span {
	background: url(styles/basic/black/images/top_tab_r.png) 100% -30px no-repeat;
}

body.yootools-black div.basic div.yoo-carousel div.top ul.tabs li a span span {
	background: url(styles/basic/black/images/top_tab_m.png) 0 0 repeat-x;
}

body.yootools-black div.basic div.yoo-carousel div.top ul.tabs li.selected a span span {
	background: url(styles/basic/black/images/top_tab_m.png) 0 -30px repeat-x;
}

/* bottom */
body.yootools-black div.basic div.yoo-carousel div.bottom ul.tabs {
	background: url(styles/basic/black/images/bottom_tab_bg.png) 0 100% repeat-x;
}

body.yootools-black div.basic div.yoo-carousel div.bottom ul.tabs li a {
	background: url(styles/basic/black/images/bottom_tab_l.png) 0 0 no-repeat; 
}

body.yootools-black div.basic div.yoo-carousel div.bottom ul.tabs li.selected a {
	background: url(styles/basic/black/images/bottom_tab_l.png) 0 -30px no-repeat;
}

body.yootools-black div.basic div.yoo-carousel div.bottom ul.tabs li a span {
	background: url(styles/basic/black/images/bottom_tab_r.png) 100% 0 no-repeat;
}

body.yootools-black div.basic div.yoo-carousel div.bottom ul.tabs li.selected a span {
	background: url(styles/basic/black/images/bottom_tab_r.png) 100% -30px no-repeat; 
}

body.yootools-black div.basic div.yoo-carousel div.bottom ul.tabs li a span span {
	background: url(styles/basic/black/images/bottom_tab_m.png) 0 0 repeat-x;
}

body.yootools-black div.basic div.yoo-carousel div.bottom ul.tabs li.selected a span span {
	background: url(styles/basic/black/images/bottom_tab_m.png) 0 -30px repeat-x;
}

/* links */
body.yootools-black div.basic div.yoo-carousel li a:link, body.yootools-black div.basic div.yoo-carousel li a:visited {
	color: #646464;
}

body.yootools-black div.basic div.yoo-carousel li a:hover, body.yootools-black div.basic div.yoo-carousel li.selected a:link, body.yootools-black div.basic div.yoo-carousel li.selected a:visited {
	color: #969696;
}

/* scroller */
body.yootools-black div.basic div.yoo-carousel .top .panel-container-outer {
	border-left: 1px solid #323232;
	border-right: 1px solid #323232;
	border-bottom: 1px solid #323232;
	background: #141414;
}

body.yootools-black div.basic div.yoo-carousel .bottom .panel-container-outer {
	border-left: 1px solid #323232;
	border-right: 1px solid #323232;
	border-top: 1px solid #323232;
	background: #141414;
}

body.yootools-black div.basic div.yoo-carousel .panel-container-inner {
	background: url(styles/basic/black/images/panel_b.png) 0 100% repeat-x;
}

/* article */
body.yootools-black div.basic div.yoo-carousel .article h3 {
	color: #787878;
}/* (C) 2007 YOOtheme.com */

div.plain div.yoo-carousel {
	background: #ffffff;
}

/* tabs */
div.plain div.yoo-carousel div.top ul.tabs {
	height: 30px;
	background: url(styles/plain/images/tab_separator.png) 0 0 no-repeat;
}

div.plain div.yoo-carousel div.top ul.tabs li.item1 {
	margin: 0px 0px 0px 1px;
}

div.plain div.yoo-carousel div.top ul.tabs li {
	background: url(styles/plain/images/tab_bg.png) 0 0 repeat-x;
}


div.plain div.yoo-carousel div.top ul.tabs li.selected {
	background: url(styles/plain/images/tab_bg.png) 0 -30px repeat-x;
}

div.plain div.yoo-carousel div.top ul.tabs li a span {
	height: 30px;
	padding: 0px 10px 0px 10px;
	background: url(styles/plain/images/tab_separator.png) 100% 0 no-repeat;
	line-height: 35px;
	font-weight: bold;
	font-size: 110%;
	overflow: hidden;
	cursor: pointer;
}

/* links */
div.plain div.yoo-carousel li a:link,
div.plain div.yoo-carousel li a:visited {
	color: #969696;
	text-decoration: none;
}

div.plain div.yoo-carousel li a:hover,
div.plain div.yoo-carousel li.selected a:link,
div.plain div.yoo-carousel li.selected a:visited {
	color: #646464;
	text-decoration: none;
}

/* scroller */
div.plain div.yoo-carousel .panel-container {
	margin: auto;
}

/* article */
div.plain div.yoo-carousel .article {
	padding: 15px 1px 0px 1px;
	font-size: 95%;
	line-height: 125%;
}

div.plain div.yoo-carousel .article h3 {
	padding-bottom: 0px;
	margin-bottom: 5px;
	line-height: 100%;
	font-size: 150%;
	font-weight: bold;
	color: #323232;
}/* (C) 2007 YOOtheme.com */

body.yootools-black div.plain div.yoo-carousel {
	background: #141414;
}

/* tabs */
body.yootools-black div.plain div.yoo-carousel div.top ul.tabs {
	background: url(styles/plain/black/images/tab_separator.png) 0 0 no-repeat;
}

body.yootools-black div.plain div.yoo-carousel div.top ul.tabs li {
	background: url(styles/plain/black/images/tab_bg.png) 0 0 repeat-x;
}


body.yootools-black div.plain div.yoo-carousel div.top ul.tabs li.selected {
	background: url(styles/plain/black/images/tab_bg.png) 0 -30px repeat-x;
}

body.yootools-black div.plain div.yoo-carousel div.top ul.tabs li a span {
	background: url(styles/plain/black/images/tab_separator.png) 100% 0 no-repeat;
}

/* links */
body.yootools-black div.plain div.yoo-carousel li a:link,
body.yootools-black div.plain div.yoo-carousel li a:visited {
	color: #646464;
}

body.yootools-black div.plain div.yoo-carousel li a:hover,
body.yootools-black div.plain div.yoo-carousel li.selected a:link,
body.yootools-black div.plain div.yoo-carousel li.selected a:visited {
	color: #969696;
}

body.yootools-black div.plain div.yoo-carousel .article h3 {
	color: #646464;
}/* (C) 2007 YOOtheme.com */

div.list div.yoo-carousel {
	background: #ffffff;
}

/* panel */
div.list div.yoo-carousel .panel-container-t {
	background: url(styles/list/images/panel_t.png) 0 0 repeat-x;
}

div.list div.yoo-carousel .panel-container-b {
	background: url(styles/list/images/panel_b.png) 0 100% repeat-x;
}

div.list div.yoo-carousel .panel-container-l {
	background: url(styles/list/images/panel_l.png) 0 0 repeat-y;
}

div.list div.yoo-carousel .panel-container-r {
	background: url(styles/list/images/panel_r.png) 100% 0 repeat-y;
}

div.list div.yoo-carousel .panel-container-tl {
	background: url(styles/list/images/panel_tl.png) 0 0 no-repeat;
}

div.list div.yoo-carousel .panel-container-tr {
	background: url(styles/list/images/panel_tr.png) 100% 0 no-repeat;
}

div.list div.yoo-carousel .panel-container-bl {
	background: url(styles/list/images/panel_bl.png) 0 100% no-repeat;
}

div.list div.yoo-carousel .panel-container-br {
	padding: 20px 0px 20px 0px;
	background: url(styles/list/images/panel_br.png) 100% 100% no-repeat;
}

/* tabs */
div.list div.yoo-carousel div.left ul.tabs {
	background: url(styles/list/images/tabs_bg.png) 100% 0 repeat-y;
}

div.list div.yoo-carousel div.left ul.tabs li {
	margin: -1px 0px 0px 20px;
}

div.list div.yoo-carousel div.left ul.tabs li.item1 {
	margin-top: 0px;
}

div.list div.yoo-carousel div.left ul.tabs li a {
	padding-right: 45px;
	cursor: pointer;
}

div.list div.yoo-carousel div.left ul.tabs li.selected a {
	background: url(styles/list/images/tab_bg.png) 100% -30px no-repeat;
}

div.list div.yoo-carousel div.left ul.tabs li a span {
	padding-left: 20px;
	background: url(styles/list/images/tab_bg.png) 0 0 repeat-x;
}

div.list div.yoo-carousel div.left ul.tabs li.selected a span {
	background: url(styles/list/images/tab_bg.png) 0 -60px no-repeat;
}

div.list div.yoo-carousel div.left ul.tabs li a span span {
	padding-left: 0px;
	height: 30px;
	line-height: 30px;
	font-weight: bold;
	font-size: 110%;
	overflow: hidden;
}

div.list div.yoo-carousel div.left ul.tabs li.selected a span span {
	background: url(styles/list/images/tab_bg.png) 0 -90px repeat-x;
}

div.list div.yoo-carousel li a:link, div.list div.yoo-carousel li a:visited {
	color: #969696;
	text-decoration: none;
}

div.list div.yoo-carousel li a:hover, div.list div.yoo-carousel li.selected a:link, div.list div.yoo-carousel li.selected a:visited {
	color: #646464;
	text-decoration: none;
}

/* article */
div.list div.yoo-carousel .article {
	padding: 0px 10px 0px 10px;
	font-size: 95%;
	line-height: 125%;
}

div.list div.yoo-carousel .article h3 {
	padding-bottom: 0px;
	margin-bottom: 5px;
	line-height: 100%;
	font-size: 150%;
	font-weight: bold;
	color: #323232;
}/* (C) 2007 YOOtheme.com */

body.yootools-black div.list div.yoo-carousel {
	background: #141414;
}

/* panel */
body.yootools-black div.list div.yoo-carousel .panel-container-t {
	background: url(styles/list/black/images/panel_t.png) 0 0 repeat-x;
}

body.yootools-black div.list div.yoo-carousel .panel-container-b {
	background: url(styles/list/black/images/panel_b.png) 0 100% repeat-x;
}

body.yootools-black div.list div.yoo-carousel .panel-container-l {
	background: url(styles/list/black/images/panel_l.png) 0 0 repeat-y;
}

body.yootools-black div.list div.yoo-carousel .panel-container-r {
	background: url(styles/list/black/images/panel_r.png) 100% 0 repeat-y;
}

body.yootools-black div.list div.yoo-carousel .panel-container-tl {
	background: url(styles/list/black/images/panel_tl.png) 0 0 no-repeat;
}

body.yootools-black div.list div.yoo-carousel .panel-container-tr {
	background: url(styles/list/black/images/panel_tr.png) 100% 0 no-repeat;
}

body.yootools-black div.list div.yoo-carousel .panel-container-bl {
	background: url(styles/list/black/images/panel_bl.png) 0 100% no-repeat;
}

body.yootools-black div.list div.yoo-carousel .panel-container-br {
	background: url(styles/list/black/images/panel_br.png) 100% 100% no-repeat;
}

/* tabs */
body.yootools-black div.list div.yoo-carousel div.left ul.tabs {
	background: url(styles/list/black/images/tabs_bg.png) 100% 0 repeat-y;
}

body.yootools-black div.list div.yoo-carousel div.left ul.tabs li.selected a {
	background: url(styles/list/black/images/tab_bg.png) 100% -30px no-repeat;
}

body.yootools-black div.list div.yoo-carousel div.left ul.tabs li a span {
	background: url(styles/list/black/images/tab_bg.png) 0 0 repeat-x;
}

body.yootools-black div.list div.yoo-carousel div.left ul.tabs li.selected a span {
	background: url(styles/list/black/images/tab_bg.png) 0 -60px no-repeat;
}

body.yootools-black div.list div.yoo-carousel div.left ul.tabs li.selected a span span {
	background: url(styles/list/black/images/tab_bg.png) 0 -90px repeat-x;
}

body.yootools-black div.list div.yoo-carousel li a:link, div.list div.yoo-carousel li a:visited {
	color: #646464;
}

body.yootools-black iv.list div.yoo-carousel li a:hover, body.yootools-black div.list div.yoo-carousel li.selected a:link, body.yootools-black div.list div.yoo-carousel li.selected a:visited {
	color: #969696;
}

body.yootools-black div.list div.yoo-carousel .article h3 {
	color: #787878;
}/* (C) 2007 YOOtheme.com */

/* buttons */
div.slideshow div.yoo-carousel .prev, div.slideshow div.yoo-carousel .next {
	top: 0px;
}

div.slideshow div.yoo-carousel .prev a, div.slideshow div.yoo-carousel .next a {
	width: 65px;
	display: block;
}

div.slideshow div.yoo-carousel .prev a {
	background: url(styles/slideshow/images/button_prev.png) 0 -32px no-repeat; 
}

div.slideshow div.yoo-carousel .next a {
	background: url(styles/slideshow/images/button_next.png) 0 -32px no-repeat; 
}

div.slideshow div.yoo-carousel .prev a:hover {
	background: url(styles/slideshow/images/button_prev.png) 0 45% no-repeat; 
}

div.slideshow div.yoo-carousel .next a:hover {
	background: url(styles/slideshow/images/button_next.png) 0 45% no-repeat; 
}/* (C) 2007 YOOtheme.com */

/* buttons */
body.yootools-black div.slideshow div.yoo-carousel .prev a {
	background: url(styles/slideshow/black/images/button_prev.png) 0 -32px no-repeat; 
}

body.yootools-black div.slideshow div.yoo-carousel .next a {
	background: url(styles/slideshow/black/images/button_next.png) 0 -32px no-repeat; 
}

body.yootools-black div.slideshow div.yoo-carousel .prev a:hover {
	background: url(styles/slideshow/black/images/button_prev.png) 0 45% no-repeat; 
}

body.yootools-black div.slideshow div.yoo-carousel .next a:hover {
	background: url(styles/slideshow/black/images/button_next.png) 0 45% no-repeat; 
}/* (C) 2007 YOOtheme.com */

div.basiclist div.yoo-carousel {
	background: #ffffff;
}

/* panel */
div.basiclist div.yoo-carousel .panel-container {
	padding: 1px 1px 1px 1px;
	border: 1px solid #C8C8C8;
}

/* tabs */
div.basiclist div.yoo-carousel div.left div.tabs-container {
	background: #E6E9EB url(styles/basiclist/images/tabs_l.png) 0 0 repeat-y;
	float: left;
}

div.basiclist div.yoo-carousel div.left ul.tabs {
	background: url(styles/basiclist/images/tabs_r.png) 100% 0 repeat-y;
}

div.basiclist div.yoo-carousel div.left ul.tabs li {
	margin: -1px 0px 0px 0px;
}

div.basiclist div.yoo-carousel div.left ul.tabs li.item1 {
	margin-top: 10px;
}

div.basiclist div.yoo-carousel div.left ul.tabs li a {
	cursor: pointer;
}

div.basiclist div.yoo-carousel div.left ul.tabs li.selected a {
	background: url(styles/basiclist/images/tab_m.png) 0 0 repeat-x;
}

div.basiclist div.yoo-carousel div.left ul.tabs li a span {
}

div.basiclist div.yoo-carousel div.left ul.tabs li.selected a span {
	background: url(styles/basiclist/images/tab_l.png) 0 0 no-repeat;
}

div.basiclist div.yoo-carousel div.left ul.tabs li a span span {
	padding-left: 30px;
	height: 30px;
	line-height: 32px;
	font-weight: bold;
	font-size: 110%;
	overflow: hidden;
}

div.basiclist div.yoo-carousel div.left ul.tabs li.selected a span span {
	background: url(styles/basiclist/images/tab_r.png) 100% 0 no-repeat;
}

div.basiclist div.yoo-carousel li a:link, div.basiclist div.yoo-carousel li a:visited {
	color: #969696;
	text-decoration: none;
}

div.basiclist div.yoo-carousel li a:hover, div.basiclist div.yoo-carousel li.selected a:link, div.basiclist div.yoo-carousel li.selected a:visited {
	color: #646464;
	text-decoration: none;
}

/* scroller */
div.basiclist div.yoo-carousel .panel-container-b {
	background: url(styles/basiclist/images/panel_b.png) 0 100% repeat-x;
}

/* article */
div.basiclist div.yoo-carousel .article {
	padding: 15px 15px 0px 15px;
	font-size: 95%;
	line-height: 125%;
}

div.basiclist div.yoo-carousel .article h3 {
	padding-bottom: 0px;
	margin-bottom: 5px;
	line-height: 100%;
	font-size: 150%;
	font-weight: bold;
	color: #323232;
}/* (C) 2007 YOOtheme.com */

body.yootools-black div.basiclist div.yoo-carousel {
	background: #141414;
}

/* panel */
body.yootools-black div.basiclist div.yoo-carousel .panel-container {
	border: 1px solid #323232;
}

/* tabs */
body.yootools-black div.basiclist div.yoo-carousel div.left div.tabs-container {
	background: #282828 url(styles/basiclist/black/images/tabs_l.png) 0 0 repeat-y;
}

body.yootools-black div.basiclist div.yoo-carousel div.left ul.tabs {
	background: url(styles/basiclist/black/images/tabs_r.png) 100% 0 repeat-y;
}

body.yootools-black div.basiclist div.yoo-carousel div.left ul.tabs li.selected a {
	background: url(styles/basiclist/black/images/tab_m.png) 0 0 repeat-x;
}

body.yootools-black div.basiclist div.yoo-carousel div.left ul.tabs li.selected a span {
	background: url(styles/basiclist/black/images/tab_l.png) 0 0 no-repeat;
}

body.yootools-black div.basiclist div.yoo-carousel div.left ul.tabs li.selected a span span {
	background: url(styles/basiclist/black/images/tab_r.png) 100% 0 no-repeat;
}

body.yootools-black div.basiclist div.yoo-carousel li a:link, body.yootools-black div.basiclist div.yoo-carousel li a:visited {
	color: #646464;
}

body.yootools-black div.basiclist div.yoo-carousel li a:hover, body.yootools-black div.basiclist div.yoo-carousel li.selected a:link, body.yootools-black div.basiclist div.yoo-carousel li.selected a:visited {
	color: #969696;
}

/* scroller */
body.yootools-black div.basiclist div.yoo-carousel .panel-container-b {
	background: url(styles/basiclist/black/images/panel_b.png) 0 100% repeat-x;
}

body.yootools-black div.basiclist div.yoo-carousel .article h3 {
	color: #787878;
}/* (C) 2007 YOOtheme.com */

div.plainlist div.yoo-carousel {
	background: #F0F0F0;
}

/* tabs */
div.plainlist div.yoo-carousel ul.tabs li a {
	background: url(styles/plainlist/images/tab_bg.png) 0 0 repeat-x;
}

div.plainlist div.yoo-carousel ul.tabs li.selected a {
	background: url(styles/plainlist/images/tab_bg.png) 0 -40px repeat-x;
}

div.plainlist div.yoo-carousel ul.tabs li a span {
	padding: 5px 5px 0px 10px;
	height: 35px;
	line-height: 15px;
	font-size: 12px;
	overflow: hidden;
	cursor: pointer;
}

div.plainlist div.yoo-carousel ul.tabs li.selected a span {
	color: #ffffff;
}

div.plainlist div.yoo-carousel li a:link,
div.plainlist div.yoo-carousel li a:visited {
	color: #969696;
	text-decoration: none;
}

div.plainlist div.yoo-carousel li a:hover,
div.plainlist div.yoo-carousel li.selected a:link,
div.plainlist div.yoo-carousel li.selected a:visited {
	color: #646464;
	text-decoration: none;
}

/* scroller */
div.plainlist div.yoo-carousel div.frame {
	float: left;
}

/* article */
div.plainlist div.yoo-carousel .article {
	font-size: 95%;
	line-height: 125%;
}

div.plainlist div.yoo-carousel .article h3 {
	padding-bottom: 0px;
	margin-bottom: 5px;
	line-height: 100%;
	font-size: 150%;
	font-weight: bold;
	color: #323232;
}/* (C) 2007 YOOtheme.com */

body.yootools-black div.plainlist div.yoo-carousel {
	background: #1E1E1E;
}

/* tabs */
body.yootools-black div.plainlist div.yoo-carousel ul.tabs li a {
	background: url(styles/plainlist/black/images/tab_bg.png) 0 0 repeat-x;
}

body.yootools-black div.plainlist div.yoo-carousel ul.tabs li.selected a {
	background: url(styles/plainlist/black/images/tab_bg.png) 0 -40px repeat-x;
}

body.yootools-black div.plainlist div.yoo-carousel ul.tabs li.selected a span {
	color: #ffffff;
}

body.yootools-black div.plainlist div.yoo-carousel li a:link,
body.yootools-black div.plainlist div.yoo-carousel li a:visited {
	color: #646464;
}

body.yootools-black div.plainlist div.yoo-carousel li a:hover,
body.yootools-black div.plainlist div.yoo-carousel li.selected a:link,
body.yootools-black div.plainlist div.yoo-carousel li.selected a:visited {
	color: #969696;
}

body.yootools-black div.plainlist div.yoo-carousel .article h3 {
	color: #646464;
}