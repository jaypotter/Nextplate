<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\Nextplate\AppInfo\Application::APP_ID, OCA\Nextplate\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\Nextplate\AppInfo\Application::APP_ID, OCA\Nextplate\AppInfo\Application::APP_ID . '-main');

?>

<div id="nextplate"></div>
