<?php











namespace Composer;

use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => 'ead8f60d2218624889da3c2adfa780e0d0937eac',
    'name' => 'agentejo/cockpit',
  ),
  'versions' => 
  array (
    'agentejo/cockpit' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => 'ead8f60d2218624889da3c2adfa780e0d0937eac',
    ),
    'bacon/bacon-qr-code' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e9d791b67d0a2912922b7b7c7312f4b37af41e4',
    ),
    'claviska/simpleimage' => 
    array (
      'pretty_version' => '3.6.0',
      'version' => '3.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd4652ab80aa87d3f5bb6daa857ca6d57c1b421a1',
    ),
    'colinodell/json5' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd7f788c5de3837d1483a216dc9b30e5d9c8c00a',
    ),
    'composer/package-versions-deprecated' => 
    array (
      'pretty_version' => '1.11.99.1',
      'version' => '1.11.99.1',
      'aliases' => 
      array (
      ),
      'reference' => '7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
    ),
    'dasprid/enum' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5abf82f213618696dda8e3bf6f64dd042d8542b2',
    ),
    'firebase/php-jwt' => 
    array (
      'pretty_version' => 'v5.2.1',
      'version' => '5.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f42c9110abe98dd6cfe9053c49bc86acc70b2d23',
    ),
    'jean85/pretty-package-versions' => 
    array (
      'pretty_version' => '1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e0104b46f045868f11942aea058cd7186d6c303',
    ),
    'ksubileau/color-thief-php' => 
    array (
      'pretty_version' => 'v1.4.1',
      'version' => '1.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc2acefacbd037f68cf61bcc62b30ac1bb16ed59',
    ),
    'league/color-extractor' => 
    array (
      'pretty_version' => '0.3.2',
      'version' => '0.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '837086ec60f50c84c611c613963e4ad2e2aec806',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9be3b16c877d477357c015cec057548cf9b2a14a',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
    ),
    'maennchen/zipstream-php' => 
    array (
      'pretty_version' => 'v0.5.2',
      'version' => '0.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '95922b6324955974675fd4923f987faa598408af',
    ),
    'matthecat/colorextractor' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'mongodb/mongodb' => 
    array (
      'pretty_version' => '1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '953dbc19443aa9314c44b7217a16873347e6840d',
    ),
    'ocramius/package-versions' => 
    array (
      'replaced' => 
      array (
        0 => '1.11.99',
      ),
    ),
    'phpmailer/phpmailer' => 
    array (
      'pretty_version' => 'v6.2.0',
      'version' => '6.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e38888a75c070304ca5514197d4847a59a5c853f',
    ),
    'robthree/twofactorauth' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '37983bf675c5baca09d19d6705170489d0df0002',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ),
  ),
);







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}
