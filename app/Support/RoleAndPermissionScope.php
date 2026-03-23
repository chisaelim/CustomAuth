<?php

namespace App\Support;

class RoleAndPermissionScope
{
    public const GLOBAL_TEAM_ID = '00000000-0000-0000-0000-000000000000';

    public static function global(): void
    {
        setPermissionsTeamId(self::GLOBAL_TEAM_ID);
    }

    public static function instance(string $instanceId): void
    {
        setPermissionsTeamId($instanceId);
    }

    public static function shop(string $shopId): void
    {
        setPermissionsTeamId($shopId);
    }
}
