# yellow-burger-menue

**Development discontinued.**

A reduced responsive theme with burger menu only. 

> if you want to use this theme on a existing Yellow installation, you should have backups of it!

## Basics

This template package is based on [Yellow V0.6.5](https://github.com/datenstrom/yellow)

A login is available:

- Name: test
- E-Mail: test@te.st
- Password: test

## Modified Standard Files

system/themes/templates
:To avoid a "double sidebar" relevant templates are patched, that they do not include a sidebar themself.

system/themes/snippets/header.php
: This is the place, where "the magic happens". It is modified to include the sidebar file into the navigation.

system/themes/snippets/navigation.php
: A small modification, I deleted the last line that included a no more needed style.

## new files

system/themes/burger.css
: Developed starting from "flatfile.css" by Mark Seuffert (Creator of Yellow). Added formats for burger menu, modified for responsive design, added css-zooming for images.

The Burger
: Burger-Icon [found at Iconfinder.com](https://www.iconfinder.com/icons/49739/burger_fast_food_food_hamburger_junk_food_icon#size=128) Replace system/themes/assets/icon.png with your own logo

config.ini
: modify theme to "burger", maybe "ContentHomeDir" to the respective starting folder.

sidebar.txt
: Depending to your needs, you have to place a "sidbar.txt" into each main folder. 

