<?php

namespace Phil404\RiotAPI\Tests;

use Phil404\RiotAPI\Models\Region;
use Phil404\RiotAPI\Models\Spectator\FeaturedGames;
use Phil404\RiotAPI\SpectatorV3;
use PHPUnit\Framework\TestCase;

class SpectatorV3Test extends TestCase
{
    public function testGetFeaturedGames()
    {
        if (!file_exists("apiKey.txt")) {
            self::markTestSkipped("ApiKey not found!");
        } else {
            $response = SpectatorV3::getFeaturedGames(Region::EUW);
            self::assertTrue(
                $response instanceof FeaturedGames
            );
            self::assertNotNull($response->getClientRefreshInterval());
        }
    }
}