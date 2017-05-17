<?
	include('log4php/main/php/Logger.php');
	Logger::configure('log4j2.xml');
	$logger = Logger::getLogger("main");
	$logger->info("This is an informational message.");
	$logger->warn("I'm not feeling so good...");
?>