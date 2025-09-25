<!doctype html>
<html <?php language_attributes(); ?> style="visibility: hidden;" class="reveal">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/assets/img/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/assets/img/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/img/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/assets/img/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/img/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/assets/img/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/assets/img/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/assets/img/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/img/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/assets/img/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/assets/img/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/img/fav/favicon-16x16.png">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="format-detection" content="telephone=no">
    <style>
    html.sr {
        visibility: hidden;
    }
    @font-face {
        font-family:"SohneMono";
        src:url("<?php bloginfo('template_url'); ?>/assets/font/SohneMono-Buch.woff2") format("woff2"),url("<?php bloginfo('template_url'); ?>/assets/font/SohneMono-Buch.woff") format("woff"),url("<?php bloginfo('template_url'); ?>/assets/font/SohneMono-Buch.otf") format("opentype");
        font-style:normal;font-weight:400;
    }
            
    @font-face {
        font-family:"Sohne";
        src:url("<?php bloginfo('template_url'); ?>/assets/font/Sohne-Buch.woff2") format("woff2"),url("<?php bloginfo('template_url'); ?>/assets/font/Sohne-Buch.woff") format("woff"),url("<?php bloginfo('template_url'); ?>/assets/font/Sohne-Buch.otf") format("opentype");
        font-style:normal;font-weight:400;
    }
            
    @font-face {
        font-family:"Sohne";
        src:url("<?php bloginfo('template_url'); ?>/assets/font/Sohne-Halbfett.woff2") format("woff2"),url("<?php bloginfo('template_url'); ?>/assets/font/Sohne-Halbfett.woff") format("woff"),url("<?php bloginfo('template_url'); ?>/assets/font/Sohne-Halbfett.otf") format("opentype");
        font-style:normal;font-weight:500;
    }
            
    @font-face {
        font-family:"Sohne";
        src:url("<?php bloginfo('template_url'); ?>/assets/font/Sohne-Kraftig.woff2") format("woff2"),url("<?php bloginfo('template_url'); ?>/assets/font/Sohne-Kraftig.woff") format("woff"),url("<?php bloginfo('template_url'); ?>/assets/font/Sohne-Kraftig.otf") format("opentype");
        font-style:normal;font-weight:700;
    }
        
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
    <a id="header__logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="reveal">
        <svg class="reponsive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.97 95.53"><path class="cls-1" d="m63.06,26.21c-.66-1.95-2.32-3.58-4.44-4.37-2.12-.79-4.45-.64-6.22.4-.47.28-.68.84-.5,1.35.66,1.95,2.32,3.58,4.45,4.37,2.12.79,4.45.64,6.22-.4.47-.27.68-.84.5-1.35h0Zm-5.93-.39"/><path class="cls-1" d="m68.25,9.83c-2.08-1.02-4.7-1-7.01.06-2.32,1.06-4.05,3.03-4.63,5.27-.16.59.13,1.21.67,1.48,2.08,1.02,4.7,1,7.01-.06,2.32-1.06,4.05-3.03,4.63-5.26.15-.59-.13-1.21-.68-1.47h0Zm-5.02,4.41"/><path class="cls-1" d="m46.37,14.24c.17.29.43.5.73.62s.64.12.96.01c2.58-.88,4.75-3.09,5.8-5.91,1.05-2.82.85-5.91-.53-8.26-.34-.58-1.05-.85-1.69-.63-2.58.88-4.75,3.09-5.8,5.9-1.05,2.82-.85,5.91.53,8.26h0Z"/><path class="cls-1" d="m32.25,59.39v-3.17c-1.88,2.4-5.96,3.95-10.56,3.95-6.41,0-11.98-2.4-15.93-6.99-3.69-4.21-5.76-10.1-5.76-16.64s2.2-12.82,6.28-17.29c4.21-4.6,10.17-7.12,16.84-7.12,10.69,0,18.07,5.25,21.18,14.83l-14.05,4.4c-.58-4.21-3.11-6.61-6.99-6.61-5.12,0-8.48,4.6-8.48,11.59s3.43,11.53,8.68,11.53c2.91,0,5.44-1.42,6.54-3.69h-7.38v-11.4h22.28v26.62h-12.63Z"/><path class="cls-1" d="m3.54,79.24v-9.66h3.32c1.47,0,2.71.44,3.57,1.29.88.85,1.33,2.07,1.33,3.54s-.46,2.69-1.33,3.54c-.86.85-2.1,1.29-3.57,1.29h-3.32Zm1.94-1.7h1.39c1.83,0,2.95-1.2,2.95-3.14s-1.12-3.14-2.96-3.14h-1.37v6.27Z"/><path class="cls-1" d="m12.89,71.33v-1.75h1.92v1.75h-1.92Zm1.91.83v7.08h-1.88v-7.08h1.88Z"/><path class="cls-1" d="m16.87,78.34c-.61-.66-.94-1.57-.94-2.64s.34-1.92.94-2.58c.63-.7,1.52-1.09,2.5-1.09s1.78.32,2.36.98c.58.65.88,1.49.88,2.56v.55h-4.87c.12,1.08.79,1.72,1.72,1.72.75,0,1.31-.38,1.52-1.04l1.59.57c-.5,1.25-1.67,2.02-3.12,2.02-1.04,0-1.94-.36-2.57-1.05Zm.93-3.5h2.93c-.01-.79-.55-1.31-1.37-1.31-.77,0-1.35.46-1.56,1.31Z"/><path class="cls-1" d="m34.64,69.58v9.66h-1.72l-4.52-6.66v6.66h-1.9v-9.66h2.01l4.24,6.34v-6.34h1.9Z"/><path class="cls-1" d="m38.19,79.36c-.71,0-1.29-.19-1.74-.58s-.67-.89-.67-1.51c0-1.22.82-1.95,2.56-2.26l1.76-.34v-.11c0-.66-.35-.98-1.09-.98-.69,0-1.06.3-1.22.94l-1.79-.34c.36-1.31,1.53-2.17,3.08-2.17,1.84,0,2.87.86,2.87,2.46v2.89c0,.38.16.5.58.44v1.41c-1.17.16-1.91-.05-2.23-.66-.47.5-1.2.78-2.1.78Zm1.91-2.64v-.73l-1.39.28c-.77.15-1.08.42-1.08.89s.35.77.93.77c.88,0,1.53-.5,1.53-1.21Z"/><path class="cls-1" d="m43.75,77.4v-3.66h-.94v-1.57h.94v-2.02h1.86v2.02h1.44v1.57h-1.44v3.27c0,.5.19.69.89.69.21,0,.32,0,.65-.04v1.56c-.36.07-.77.11-1.21.11-1.55,0-2.18-.58-2.18-1.92Z"/><path class="cls-1" d="m54.36,72.16v7.08h-1.88v-.73c-.48.58-1.14.87-1.91.87-1.45,0-2.41-1-2.41-2.54v-4.68h1.88v4.27c0,.85.39,1.29,1.13,1.29s1.31-.58,1.31-1.4v-4.16h1.88Z"/><path class="cls-1" d="m60.15,72.15v1.84c-.26-.04-.4-.04-.61-.04-1.04,0-1.74.66-1.74,1.7v3.59h-1.88v-7.08h1.88v1c.32-.65,1.04-1.04,1.88-1.04.12,0,.24.01.46.03Z"/><path class="cls-1" d="m67.47,78.46c0,1.04-.32,1.84-.97,2.44-.65.59-1.52.89-2.61.89-1.74,0-2.91-.73-3.3-2.09l1.76-.51c.22.71.77,1.13,1.56,1.13,1.08,0,1.67-.58,1.67-1.66v-.48c-.39.52-1.14.86-1.96.86-.93,0-1.74-.36-2.29-1.06-.5-.63-.78-1.49-.78-2.45s.28-1.8.78-2.44c.55-.7,1.36-1.06,2.29-1.06.82,0,1.57.34,1.96.86v-.73h1.88v6.3Zm-1.87-3.01c0-1.13-.61-1.83-1.53-1.83-1.01,0-1.6.71-1.6,1.91s.59,1.92,1.6,1.92c.93,0,1.53-.7,1.53-1.82v-.19Z"/><path class="cls-1" d="m70.95,79.36c-.71,0-1.29-.19-1.74-.58s-.67-.89-.67-1.51c0-1.22.82-1.95,2.56-2.26l1.76-.34v-.11c0-.66-.35-.98-1.09-.98-.69,0-1.06.3-1.22.94l-1.79-.34c.36-1.31,1.53-2.17,3.08-2.17,1.84,0,2.87.86,2.87,2.46v2.89c0,.38.16.5.58.44v1.41c-1.17.16-1.91-.05-2.23-.66-.47.5-1.2.78-2.1.78Zm-1.36-8.03v-1.75h1.91v1.75h-1.91Zm3.27,5.4v-.73l-1.39.28c-.77.15-1.08.42-1.08.89s.35.77.93.77c.88,0,1.53-.5,1.53-1.21Zm-.66-5.4v-1.75h1.91v1.75h-1.91Z"/><path class="cls-1" d="m80.57,72.15v1.84c-.26-.04-.4-.04-.61-.04-1.04,0-1.74.66-1.74,1.7v3.59h-1.88v-7.08h1.88v1c.32-.65,1.04-1.04,1.88-1.04.12,0,.24.01.46.03Z"/><path class="cls-1" d="m81.93,77.4v-3.66h-.94v-1.57h.94v-2.02h1.86v2.02h1.44v1.57h-1.44v3.27c0,.5.19.69.89.69.21,0,.32,0,.65-.04v1.56c-.36.07-.77.11-1.21.11-1.55,0-2.18-.58-2.18-1.92Z"/><path class="cls-1" d="m86.92,78.34c-.61-.66-.94-1.57-.94-2.64s.34-1.92.94-2.58c.63-.7,1.52-1.09,2.5-1.09s1.78.32,2.36.98c.58.65.88,1.49.88,2.56v.55h-4.87c.12,1.08.79,1.72,1.72,1.72.75,0,1.31-.38,1.52-1.04l1.59.57c-.5,1.25-1.67,2.02-3.12,2.02-1.04,0-1.94-.36-2.57-1.05Zm.93-3.5h2.93c-.01-.79-.55-1.31-1.37-1.31-.77,0-1.35.46-1.56,1.31Z"/><path class="cls-1" d="m93.77,79.24v-7.08h1.88v.73c.47-.55,1.14-.86,1.94-.86,1.45,0,2.38.98,2.38,2.54v4.67h-1.88v-4.13c0-.87-.39-1.36-1.13-1.36s-1.3.55-1.3,1.4v4.09h-1.88Z"/><path class="cls-1" d="m4.28,95.01c-.77-.35-1.33-.81-1.71-1.39l1.36-1.32c.7,1.01,1.74,1.57,2.81,1.57s1.75-.47,1.75-1.27c0-.48-.26-.77-.92-.98-.18-.05-.66-.17-1.45-.35-1.09-.26-1.63-.47-2.07-.78-.63-.44-.93-1.08-.93-1.92,0-.92.4-1.71,1.12-2.25.65-.48,1.52-.75,2.48-.75,1.55,0,2.91.65,3.65,1.71l-1.3,1.28c-.65-.9-1.43-1.33-2.4-1.33s-1.59.46-1.59,1.16c0,.42.22.67.74.88.22.07.43.13,1.22.31.69.15,1.2.28,1.51.4.31.11.58.23.81.36.75.47,1.1,1.14,1.1,2.07s-.42,1.79-1.18,2.34c-.69.5-1.59.78-2.6.78-.83,0-1.63-.17-2.4-.52Z"/><path class="cls-1" d="m13.07,91.85c0,1.31.63,2.1,1.66,2.1.71,0,1.22-.46,1.43-1.27l1.63.73c-.17.63-.55,1.16-1.1,1.55s-1.2.58-1.96.58c-1.02,0-1.92-.36-2.56-1.06-.63-.66-.96-1.59-.96-2.62s.32-1.96.96-2.62c.63-.69,1.53-1.05,2.56-1.05,1.51,0,2.67.83,3.04,2.09l-1.6.75c-.2-.81-.71-1.27-1.43-1.27-1.02,0-1.66.81-1.66,2.1Z"/><path class="cls-1" d="m18.68,95.39v-9.66h1.88v3.31c.47-.55,1.14-.86,1.94-.86,1.45,0,2.38.98,2.38,2.54v4.67h-1.88v-4.13c0-.87-.39-1.36-1.13-1.36s-1.3.55-1.3,1.4v4.09h-1.88Z"/><path class="cls-1" d="m28.32,95.51c-.71,0-1.29-.19-1.74-.58s-.67-.89-.67-1.51c0-1.22.82-1.95,2.56-2.26l1.76-.34v-.11c0-.66-.35-.98-1.09-.98-.69,0-1.06.3-1.22.94l-1.79-.34c.36-1.31,1.53-2.17,3.08-2.17,1.84,0,2.87.86,2.87,2.46v2.89c0,.38.16.5.58.44v1.41c-1.17.16-1.91-.05-2.23-.66-.47.5-1.2.78-2.1.78Zm1.91-2.64v-.73l-1.39.28c-.77.15-1.08.42-1.08.89s.35.77.93.77c.88,0,1.53-.5,1.53-1.21Z"/><path class="cls-1" d="m37.2,85.62v1.55c-.12-.01-.2-.01-.48-.01-.66,0-.9.24-.9.87v.28h1.37v1.57h-1.37v5.5h-1.88v-5.5h-.96v-1.57h.96v-.39c0-1.55.86-2.33,2.54-2.33.38,0,.51.01.73.03Z"/><path class="cls-1" d="m41.73,85.62v1.55c-.12-.01-.2-.01-.48-.01-.66,0-.9.24-.9.87v.28h1.37v1.57h-1.37v5.5h-1.88v-5.5h-.96v-1.57h.96v-.39c0-1.55.86-2.33,2.54-2.33.38,0,.51.01.73.03Z"/><path class="cls-1" d="m43.04,94.48c-.61-.66-.94-1.57-.94-2.64s.34-1.92.94-2.58c.63-.7,1.52-1.09,2.5-1.09s1.78.32,2.36.98c.58.65.88,1.49.88,2.56v.55h-4.87c.12,1.08.79,1.72,1.72,1.72.75,0,1.31-.38,1.52-1.04l1.59.57c-.5,1.25-1.67,2.02-3.12,2.02-1.04,0-1.94-.36-2.57-1.05Zm.93-3.5h2.93c-.01-.79-.55-1.31-1.37-1.31-.77,0-1.35.46-1.56,1.31Z"/><path class="cls-1" d="m54.11,88.29v1.84c-.26-.04-.4-.04-.61-.04-1.04,0-1.74.66-1.74,1.7v3.59h-1.88v-7.08h1.88v1c.32-.65,1.04-1.04,1.88-1.04.12,0,.24.01.46.03Z"/><path class="cls-1" d="m53.87,95.39v-2.18h2.21v2.18h-2.21Z"/></svg>
    </a>
</header>
<main id="main">
