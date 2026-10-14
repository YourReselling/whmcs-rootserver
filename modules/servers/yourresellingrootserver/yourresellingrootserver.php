<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\Rootserver\Integration\WhmcsModule;

/** Rootserver: MetaData. */
function yourresellingrootserver_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · Rootserver', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** Rootserver: ConfigOptions. */
function yourresellingrootserver_ConfigOptions(): array
{
    return WhmcsModule::configOptions('rootserver');
}

/** Rootserver: CreateAccount. */
function yourresellingrootserver_CreateAccount(array $params): string
{
    return WhmcsModule::run('rootserver', 'create', $params);
}

/** Rootserver: TestConnection. */
function yourresellingrootserver_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** Rootserver: ClientArea. */
function yourresellingrootserver_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('rootserver', $params);
}

/** Rootserver: AdminCustomButtonArray. */
function yourresellingrootserver_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('rootserver');
}

/** Rootserver: RefreshStatus. */
function yourresellingrootserver_RefreshStatus(array $params): string
{
    return WhmcsModule::run('rootserver', 'refresh', $params);
}

/** Rootserver: TerminateAccount. */
function yourresellingrootserver_TerminateAccount(array $params): string
{
    return WhmcsModule::run('rootserver', 'termination', $params);
}
