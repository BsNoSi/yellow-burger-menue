# Burger Theme for YELLOW

A reduced responsive theme with burger menu only. 

> if you want to use this theme on a existing Yellow installation, you should have backups of it!

## Basics

Tested with Yellow V0.6.5

## Modified Standard Files

- system/themes/templates/blog.html
- system/themes/templates/blogpages.html
- system/themes/templates/default.html

> sidebar include stripped

- system/themes/snippets/content-sidebar.php
- system/themes/snippets/header.php
- system/themes/snippets/navigation.php

> modifications for desired operation

## new files

- system/themes/burger.css

> required

- system/themes/note-burger-theme.md (this file)
- system/themes/assets/note.md
- system/themes/assets/burger-logo.md
- system/themes/assets/burger-logo.md

> for working sample. To use your own logo, you have to modify burger.css / .thelogo style.

## Midifications in config.ini

Theme: burger
# Depending on your naming of first content folder 1-blog >
ContentHomeDir: blog/

## How it works

- Header contains a standard navigation for all main pages.
- Header takes "sidebar" as additional navigation.

Depending to your needs, you have to place a "sidbar.txt" into each main folder. 
