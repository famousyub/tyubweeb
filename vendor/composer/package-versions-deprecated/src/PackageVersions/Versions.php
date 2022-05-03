<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.2@295082d3750987065912816a9d536c2df735f637',
  'doctrine/dbal' => '3.3.3@82331b861727c15b1f457ef05a8729e508e7ead5',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.7@1e0d1d7a5982eeebc37dcb4d77bb1a5c5961d96d',
  'doctrine/doctrine-migrations-bundle' => '3.2.2@3393f411ba25ade21969c33f2053220044854d01',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/migrations' => '3.4.1@e7df670aa9565b435ffec636cebdb4d0a1987f10',
  'doctrine/orm' => '2.11.2@9c351e044478135aec1755e2c0c0493a4b6309db',
  'doctrine/persistence' => '2.3.0@f8af155c1e7963f3d2b4415097d55757bbaa53d8',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'easycorp/easyadmin-bundle' => 'v3.5.21@d766f12080cf51e29a5db524c1dcf74fe25929e6',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.7@c828ced1f932094ab79e4120a106a666565e4d9c',
  'laminas/laminas-code' => '4.5.1@6fd96d4d913571a2cd056a27b123fa28cb90ac4e',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'phpstan/phpdoc-parser' => '1.2.0@dbc093d7af60eff5cd575d2ed761b15ed40bd08e',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.1.1@846c25f58a1f02b93a00f2404e3626b6bf9b7807',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'sensio/framework-extra-bundle' => 'v6.2.6@6bd976c99ef3f78e31c9490a10ba6dd8901076eb',
  'symfony/asset' => 'v5.4.3@156e45cba14f9be3fe8b987e86f482a76aa078f3',
  'symfony/cache' => 'v5.4.6@c0718d0e01ac14251a45cc9c8b93716ec41ae64b',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.4.3@d65e1bd990c740e31feb07d2b0927b8d4df9956f',
  'symfony/console' => 'v5.4.5@d8111acc99876953f52fe16d4c50eb60940d49ad',
  'symfony/dependency-injection' => 'v5.4.6@0828fa3e6e436243dbb3dc85abe6b698b3876b89',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v5.4.6@ca55e1f888b7e5b358736bb6c8e33482939993cc',
  'symfony/dotenv' => 'v5.4.5@83a2310904a4f5d4f42526227b5a578ac82232a9',
  'symfony/error-handler' => 'v6.0.3@20343b3bad7ebafa38138ddcb97290a24722b57b',
  'symfony/event-dispatcher' => 'v5.4.3@dec8a9f58d20df252b9cd89f1c6c1530f747685d',
  'symfony/event-dispatcher-contracts' => 'v3.0.0@aa5422287b75594b90ee9cd807caf8f0df491385',
  'symfony/expression-language' => 'v5.4.3@c68c6d1a308f6e2a1382bdb3a317959e1ee9aa08',
  'symfony/filesystem' => 'v5.4.6@d53a45039974952af7f7ebc461ccdd4295e29440',
  'symfony/finder' => 'v6.0.3@8661b74dbabc23223f38c9b99d3f8ade71170430',
  'symfony/flex' => 'v2.1.6@dd7dafe3bfebf8441e167b76d8a18974585467f3',
  'symfony/form' => 'v5.4.5@18f4f8209d2db06fc3cf5ba3b2eb8e4706b34aac',
  'symfony/framework-bundle' => 'v5.4.6@76ea755f30924924ea37a28e098df61679efcb63',
  'symfony/http-client' => 'v5.4.5@fab84798694e45b4571d305125215699eb2b1f73',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v5.4.6@34e89bc147633c0f9dd6caaaf56da3b806a21465',
  'symfony/http-kernel' => 'v5.4.6@d41f29ae9af1b5f40c7ebcddf09082953229411d',
  'symfony/intl' => 'v5.4.5@47a1413da15ff840d7c419fa704d32caba3276ac',
  'symfony/mailer' => 'v5.4.5@f6e927ec95c957131e6b2c78790e1a6d4c576447',
  'symfony/mime' => 'v5.4.3@e1503cfb5c9a225350f549d3bb99296f4abfb80f',
  'symfony/monolog-bridge' => 'v5.4.3@4b56e17c443e7092895477f047f2a70f324f984c',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/notifier' => 'v5.4.6@cf926e6ffc3d3c4aba412f722dd61faf39944eaa',
  'symfony/options-resolver' => 'v6.0.3@51f7006670febe4cbcbae177cbffe93ff833250d',
  'symfony/password-hasher' => 'v6.0.3@4d04edcbcee4a97f39c72d1cf6149681d634e63f',
  'symfony/polyfill-intl-grapheme' => 'v1.25.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-icu' => 'v1.25.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.25.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.25.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.25.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php73' => 'v1.25.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.25.0@4407588e0d3f1f52efb65fbe92babe41f37fe50c',
  'symfony/polyfill-php81' => 'v1.25.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/polyfill-uuid' => 'v1.25.0@7529922412d23ac44413d0f308861d50cf68d3ee',
  'symfony/process' => 'v5.4.5@95440409896f90a5f85db07a32b517ecec17fa4c',
  'symfony/property-access' => 'v5.4.5@95534d912f61117d3bce2d4456419ee2ee548d7a',
  'symfony/property-info' => 'v5.4.3@bcc2b6904cbcf16b2e5d618da16117cd8e132f9a',
  'symfony/proxy-manager-bridge' => 'v5.4.6@e6936de1cc8f4e6e3b2264aef186ca21695aee8e',
  'symfony/routing' => 'v6.0.5@a738b152426ac7fcb94bdab8188264652238bef1',
  'symfony/runtime' => 'v5.4.5@06fdd940ebf240ed7d9c9832cd97bf3133847316',
  'symfony/security-bundle' => 'v5.4.5@d6ae2f605fa8e4e0860c1a6574271af2bb4ba16c',
  'symfony/security-core' => 'v5.4.5@11d815ccbff929899a4ec545f9f85185071abd12',
  'symfony/security-csrf' => 'v6.0.3@fcf01e56fba0e7843da3205b9d05e4e86d3ef1f9',
  'symfony/security-guard' => 'v5.4.3@3d68d9f8e162f6655eb0a0237b9f333a82a19da9',
  'symfony/security-http' => 'v5.4.5@53d572f06fc438faae3713cc97d186d941919748',
  'symfony/serializer' => 'v5.4.6@851007ff0781d06d1bf9890069ab19ac1610a027',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/stopwatch' => 'v5.4.5@4d04b5c24f3c9a1a168a131f6cbe297155bc0d30',
  'symfony/string' => 'v5.4.3@92043b7d8383e48104e411bc9434b260dbeb5a10',
  'symfony/translation' => 'v5.4.6@a7ca9fdfffb0174209440c2ffa1dee228e15d95b',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v6.0.5@a0f84e65d5e0c6b26d0b5185ae7b97f1688a8fa4',
  'symfony/twig-bundle' => 'v5.4.3@45ae3ee8155f93042a1033b166a7a3ed57b96a92',
  'symfony/uid' => 'v5.4.3@2b52d90f0a913a1f770e0b09be3e9baf298b4872',
  'symfony/validator' => 'v5.4.6@ab461eab209e3be062ba9c609d37b37e8364dbe4',
  'symfony/var-dumper' => 'v6.0.6@38358405ae948963c50a3aae3dfea598223ba15e',
  'symfony/var-exporter' => 'v6.0.6@130229a482abf17635a685590958894dfb4b4360',
  'symfony/web-link' => 'v5.4.3@8b9b073390359549fec5f5d797f23bbe9e2997a5',
  'symfony/yaml' => 'v5.4.3@e80f87d2c9495966768310fc531b487ce64237a2',
  'twig/extra-bundle' => 'v3.3.8@2e58256b0e9fe52f30149347c0547e4633304765',
  'twig/twig' => 'v3.3.8@972d8604a92b7054828b539f2febb0211dd5945c',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.15@2e9da11878c4202f97915c1cb4bb1ca318a63f5f',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.18@1b5856028273bfd855e60a887278857d872ec67a',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v5.4.3@18e73179c6a33d520de1b644941eba108dd811ad',
  'symfony/css-selector' => 'v5.4.3@b0a190285cd95cb019237851205b8140ef6e368e',
  'symfony/debug-bundle' => 'v5.4.3@6f508169752ed2c0d0d8a6641c4cca39a8f1dfcb',
  'symfony/dom-crawler' => 'v6.0.6@9b4126901a6146c151d95af3868b1e0e30519ea6',
  'symfony/maker-bundle' => 'v1.38.0@143024ab0e426285d3d9b7f6a3ce51e12a9d8ec5',
  'symfony/phpunit-bridge' => 'v6.0.3@81f5e8e453433e0182a49ca45d4734cb3a2f818f',
  'symfony/web-profiler-bundle' => 'v5.4.6@1497b1d22c2807a77563439f8ec489407a989d59',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}