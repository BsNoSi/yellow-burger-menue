<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $yellow->page->getHtml("language") ?>">
<head>
<meta charset="utf-8" />
<meta name="description" content="<?php echo $yellow->page->getHtml("description") ?>" />
<meta name="keywords" content="<?php echo $yellow->page->getHtml("keywords") ?>" />
<meta name="author" content="<?php echo $yellow->page->getHtml("author") ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php if($yellow->page->isExisting("robots")): ?>
<meta name="robots" content="<?php echo $yellow->page->getHtml("robots") ?>" />
<?php endif ?>
<title><?php echo $yellow->page->getHtml("titleHeader") ?></title>
<?php echo $yellow->page->getExtra("header") ?>
</head>
<body>
<?php $yellow->page->set("pageClass", "page") ?>
<?php $yellow->page->set("pageClass", $yellow->page->get("pageClass")." ".$yellow->page->get("template")) ?>
<?php if($yellow->page->get("navigation") == "navigation-sidebar") { $yellow->page->set("navigation", "navigation"); $yellow->page->set("sidebar", "navigation-sidebar"); } ?>
<?php if($yellow->page->isExisting("sidebar")) $yellow->page->set("pageClass", $yellow->page->get("pageClass")." with-sidebar") ?>
<div class="<?php echo $yellow->page->getHtml("pageClass") ?>">
<div class="header">

<div id="top" class="sitename">
  <input class="burger-check" id="burger-check" type="checkbox"><label for="burger-check" class="burger"></label>
  <h1><a href="<?php echo $yellow->page->base."/" ?>"><i class="thelogo"></i><?php echo $yellow->page->getHtml("sitename") ?></a></a></h1>
    <nav id="navi1" class="navi">
    <?php $yellow->snippet("navigation") ?>
    <?php $yellow->snippet("content-sidebar") ?>
  </nav>
    </div>
<div class="searchbox">
     <form class="search-form" action="<?php echo $yellow->page->base ?>/search/" method="post">
<input class="search-text" type="text" name="query" placeholder="<?php echo $yellow->text->getHtml("searchButton") ?>" />
<?php if($yellow->plugins->isExisting("fontawesome")):?>
<button class="search-button" type="submit"><i class="fa fa-search"></i></button>
<?php endif ?>
<input type="hidden" name="clean-url" />
</form>
</div>
  
</div>

<div class="sitename-banner"></div>

</div>

