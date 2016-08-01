<?php
// Copyright (c) 2013-2015 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Contact plugin
class YellowContact
{
	const Version = "0.6.4";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("contactSpamFilter", "href=|url=");
	}
	
	// Handle page parsing
	function onParsePage()
	{
		if($this->yellow->page->get("template") == "contact")
		{
			if(PHP_SAPI == "cli") $this->yellow->page->error(500, "Static website not supported!");
			if($_REQUEST["status"] == "send")
			{
				$status = $this->sendMail();
				if($status == "error") $this->yellow->page->error(500, $this->yellow->text->get("contactStatusError"));
				$this->yellow->page->setHeader("Last-Modified", $this->yellow->toolbox->getHttpDateFormatted(time()));
				$this->yellow->page->setHeader("Cache-Control", "no-cache, must-revalidate");
				$this->yellow->page->set("status", $status);
			} else {
				$this->yellow->page->set("status", "none");
			}
		}
	}
	
	// Send contact email
	function sendMail()
	{
		$status = "send";
		$name = trim(preg_replace("/[^\pL\d\-\. ]/u", "-", $_REQUEST["name"]));
		$from = trim($_REQUEST["from"]);
		$message = trim($_REQUEST["message"]);
		$spamFilter = $this->yellow->config->get("contactSpamFilter");
		if(empty($name) || empty($from) || empty($message)) $status = "incomplete";
		if(!empty($from) && !filter_var($from, FILTER_VALIDATE_EMAIL)) $status = "invalid";
		if(!empty($message) && preg_match("/$spamFilter/i", $message)) $status = "error";
		if($status == "send")
		{
			$author = $this->yellow->config->get("author");
			$email = $this->yellow->config->get("email");
			if($this->yellow->page->isExisting("email") && !$this->yellow->page->parserSafeMode) $email = $this->yellow->page->get("email");
			$mailTo = mb_encode_mimeheader("$author <$email>");
			$mailSubject = mb_encode_mimeheader($this->yellow->page->get("title") . " vom Blog");
			$mailHeaders = mb_encode_mimeheader("From: $name <$from>")."\r\n";
			$mailHeaders .= mb_encode_mimeheader("X-Request-Url: ".$this->yellow->page->getUrl())."\r\n";
			$mailHeaders .= mb_encode_mimeheader("X-Remote-Addr: $_SERVER[REMOTE_ADDR]")."\r\n";
			$mailHeaders .= "Mime-Version: 1.0\r\n";
			$mailHeaders .= "Content-Type: text/plain; charset=utf-8\r\n";
			$mailMessage = "$message\r\n-- \r\n$name\r\n\r\n" . $_REQUEST["page"];
			$status = mail($mailTo, $mailSubject, $mailMessage, $mailHeaders) ? "done" : "error";
		}
		return $status;
	}
}

$yellow->plugins->register("contact", "YellowContact", YellowContact::Version);
?>