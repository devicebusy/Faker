<?php

declare(strict_types=1);

namespace Faker\Test\Provider\sk_SK;

use Faker\Provider\Miscellaneous;
use Faker\Provider\sk_SK\Address;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testStreet(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $street = $this->faker->streetName();

            self::assertIsString($street);
            self::assertNotEmpty($street);

        }
    }

    public function testCity()
    {
        for ($i = 0; $i < 100; ++$i) {
            $city = $this->faker->city();
            self::assertNotEmpty($city);
            self::assertIsString($city);

        }
    }

    public function testPostcode()
    {
        for ($i = 0; $i < 100; ++$i) {
            $postcode = $this->faker->postcode();
            self::assertNotEmpty($postcode);
            self::assertIsString($postcode);
            self::assertMatchesRegularExpression('/^[0-9]{3} [0-9]{2}$/i', $postcode);
        }
    }

    public function testStreetSuffix()
    {
        for ($i = 0; $i < 100; ++$i) {
            $streetSuffix = $this->faker->streetSuffix();
            self::assertNotEmpty($streetSuffix);
            self::assertIsString($streetSuffix);
        }
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);

        yield new Miscellaneous($this->faker);

    }
}
