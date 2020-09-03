<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98dde460e8a16c8877d8f8d8a8e6921c
{
    public static $files = array (
        'e9b48b9bab803e9eba6dfd8e270dddfd' => __DIR__ . '/..' . '/ducks-project/spl-types/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Process\\' => 26,
        ),
        'D' => 
        array (
            'Dzava\\Lighthouse\\' => 17,
            'Ducks\\Component\\SplTypes\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Dzava\\Lighthouse\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeroen-g/lighthouse/src',
        ),
        'Ducks\\Component\\SplTypes\\' => 
        array (
            0 => __DIR__ . '/..' . '/ducks-project/spl-types',
        ),
    );

    public static $classMap = array (
        'ComposerAutoloaderInit98dde460e8a16c8877d8f8d8a8e6921c' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit98dde460e8a16c8877d8f8d8a8e6921c' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Ducks\\Component\\SplTypes\\SplBool' => __DIR__ . '/..' . '/ducks-project/spl-types/SplBool.php',
        'Ducks\\Component\\SplTypes\\SplEnum' => __DIR__ . '/..' . '/ducks-project/spl-types/SplEnum.php',
        'Ducks\\Component\\SplTypes\\SplFloat' => __DIR__ . '/..' . '/ducks-project/spl-types/SplFloat.php',
        'Ducks\\Component\\SplTypes\\SplInt' => __DIR__ . '/..' . '/ducks-project/spl-types/SplInt.php',
        'Ducks\\Component\\SplTypes\\SplString' => __DIR__ . '/..' . '/ducks-project/spl-types/SplString.php',
        'Ducks\\Component\\SplTypes\\SplType' => __DIR__ . '/..' . '/ducks-project/spl-types/SplType.php',
        'Dzava\\Lighthouse\\Exceptions\\AuditFailedException' => __DIR__ . '/..' . '/jeroen-g/lighthouse/src/Exceptions/AuditFailedException.php',
        'Dzava\\Lighthouse\\Lighthouse' => __DIR__ . '/..' . '/jeroen-g/lighthouse/src/Lighthouse.php',
        'Dzava\\Lighthouse\\Tests\\Integration\\LighthouseTest' => __DIR__ . '/..' . '/jeroen-g/lighthouse/tests/Integration/LighthouseTest.php',
        'Dzava\\Lighthouse\\Tests\\Unit\\LighthouseTest' => __DIR__ . '/..' . '/jeroen-g/lighthouse/tests/Unit/LighthouseTest.php',
        'Dzava\\Lighthouse\\Tests\\Unit\\MockLighthouse' => __DIR__ . '/..' . '/jeroen-g/lighthouse/tests/Unit/LighthouseTest.php',
        'Piwik\\Plugins\\PerformanceAudit\\API' => __DIR__ . '/../..' . '/API.php',
        'Piwik\\Plugins\\PerformanceAudit\\Archiver' => __DIR__ . '/../..' . '/Archiver.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Filters\\AuditScoreClassifier' => __DIR__ . '/../..' . '/Columns/Filters/AuditScoreClassifier.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\Audit' => __DIR__ . '/../..' . '/Columns/Metrics/Audit.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\Max' => __DIR__ . '/../..' . '/Columns/Metrics/Max.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\MaxPercent' => __DIR__ . '/../..' . '/Columns/Metrics/MaxPercent.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\MaxSeconds' => __DIR__ . '/../..' . '/Columns/Metrics/MaxSeconds.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\Median' => __DIR__ . '/../..' . '/Columns/Metrics/Median.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\MedianPercent' => __DIR__ . '/../..' . '/Columns/Metrics/MedianPercent.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\MedianSeconds' => __DIR__ . '/../..' . '/Columns/Metrics/MedianSeconds.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\Min' => __DIR__ . '/../..' . '/Columns/Metrics/Min.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\MinPercent' => __DIR__ . '/../..' . '/Columns/Metrics/MinPercent.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\Metrics\\MinSeconds' => __DIR__ . '/../..' . '/Columns/Metrics/MinSeconds.php',
        'Piwik\\Plugins\\PerformanceAudit\\Columns\\PageUrl' => __DIR__ . '/../..' . '/Columns/PageUrl.php',
        'Piwik\\Plugins\\PerformanceAudit\\Controller' => __DIR__ . '/../..' . '/Controller.php',
        'Piwik\\Plugins\\PerformanceAudit\\EmulatedDevice' => __DIR__ . '/../..' . '/EmulatedDevice.php',
        'Piwik\\Plugins\\PerformanceAudit\\Exceptions\\AuditFailedException' => __DIR__ . '/../..' . '/Exceptions/AuditFailedException.php',
        'Piwik\\Plugins\\PerformanceAudit\\Exceptions\\DependencyMissingException' => __DIR__ . '/../..' . '/Exceptions/DependencyMissingException.php',
        'Piwik\\Plugins\\PerformanceAudit\\Exceptions\\DependencyNpmMisconfigurationException' => __DIR__ . '/../..' . '/Exceptions/DependencyNpmMisconfigurationException.php',
        'Piwik\\Plugins\\PerformanceAudit\\Exceptions\\DependencyOfChromeMissingException' => __DIR__ . '/../..' . '/Exceptions/DependencyOfChromeMissingException.php',
        'Piwik\\Plugins\\PerformanceAudit\\Exceptions\\DependencyUnexpectedResultException' => __DIR__ . '/../..' . '/Exceptions/DependencyUnexpectedResultException.php',
        'Piwik\\Plugins\\PerformanceAudit\\Exceptions\\DirectoryNotWriteableException' => __DIR__ . '/../..' . '/Exceptions/DirectoryNotWriteableException.php',
        'Piwik\\Plugins\\PerformanceAudit\\Exceptions\\InstallationFailedException' => __DIR__ . '/../..' . '/Exceptions/InstallationFailedException.php',
        'Piwik\\Plugins\\PerformanceAudit\\Exceptions\\InternetUnavailableException' => __DIR__ . '/../..' . '/Exceptions/InternetUnavailableException.php',
        'Piwik\\Plugins\\PerformanceAudit\\ExecutableFinder' => __DIR__ . '/../..' . '/ExecutableFinder.php',
        'Piwik\\Plugins\\PerformanceAudit\\Helper' => __DIR__ . '/../..' . '/Helper.php',
        'Piwik\\Plugins\\PerformanceAudit\\Lighthouse' => __DIR__ . '/../..' . '/Lighthouse.php',
        'Piwik\\Plugins\\PerformanceAudit\\MeasurableSettings' => __DIR__ . '/../..' . '/MeasurableSettings.php',
        'Piwik\\Plugins\\PerformanceAudit\\Menu' => __DIR__ . '/../..' . '/Menu.php',
        'Piwik\\Plugins\\PerformanceAudit\\NodeDependencyInstaller' => __DIR__ . '/../..' . '/NodeDependencyInstaller.php',
        'Piwik\\Plugins\\PerformanceAudit\\PerformanceAudit' => __DIR__ . '/../..' . '/PerformanceAudit.php',
        'Piwik\\Plugins\\PerformanceAudit\\Process' => __DIR__ . '/../..' . '/Process.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceBase' => __DIR__ . '/../..' . '/Reports/GetPerformanceBase.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceCumulativeLayoutShiftDesktop' => __DIR__ . '/../..' . '/Reports/GetPerformanceCumulativeLayoutShiftDesktop.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceCumulativeLayoutShiftMobile' => __DIR__ . '/../..' . '/Reports/GetPerformanceCumulativeLayoutShiftMobile.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceFirstContentfulPaintDesktop' => __DIR__ . '/../..' . '/Reports/GetPerformanceFirstContentfulPaintDesktop.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceFirstContentfulPaintMobile' => __DIR__ . '/../..' . '/Reports/GetPerformanceFirstContentfulPaintMobile.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceInteractiveDesktop' => __DIR__ . '/../..' . '/Reports/GetPerformanceInteractiveDesktop.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceInteractiveMobile' => __DIR__ . '/../..' . '/Reports/GetPerformanceInteractiveMobile.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceLargestContentfulPaintDesktop' => __DIR__ . '/../..' . '/Reports/GetPerformanceLargestContentfulPaintDesktop.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceLargestContentfulPaintMobile' => __DIR__ . '/../..' . '/Reports/GetPerformanceLargestContentfulPaintMobile.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceScoreDesktop' => __DIR__ . '/../..' . '/Reports/GetPerformanceScoreDesktop.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceScoreMobile' => __DIR__ . '/../..' . '/Reports/GetPerformanceScoreMobile.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceSpeedIndexDesktop' => __DIR__ . '/../..' . '/Reports/GetPerformanceSpeedIndexDesktop.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceSpeedIndexMobile' => __DIR__ . '/../..' . '/Reports/GetPerformanceSpeedIndexMobile.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceTotalBlockingTimeDesktop' => __DIR__ . '/../..' . '/Reports/GetPerformanceTotalBlockingTimeDesktop.php',
        'Piwik\\Plugins\\PerformanceAudit\\Reports\\GetPerformanceTotalBlockingTimeMobile' => __DIR__ . '/../..' . '/Reports/GetPerformanceTotalBlockingTimeMobile.php',
        'Piwik\\Plugins\\PerformanceAudit\\Tasks' => __DIR__ . '/../..' . '/Tasks.php',
        'Piwik\\Plugins\\PerformanceAudit\\tests\\Integration\\ApiTest' => __DIR__ . '/../..' . '/tests/Integration/ApiTest.php',
        'Piwik\\Plugins\\PerformanceAudit\\tests\\Integration\\PerformanceAuditIntegrationTest' => __DIR__ . '/../..' . '/tests/Integration/PerformanceAuditIntegrationTest.php',
        'Piwik\\Plugins\\PerformanceAudit\\tests\\Unit\\Filter\\AuditScoreClassifierTest' => __DIR__ . '/../..' . '/tests/Unit/Filter/AuditScoreClassifierTest.php',
        'Piwik\\Plugins\\PerformanceAudit\\tests\\Unit\\Metric\\PercentTest' => __DIR__ . '/../..' . '/tests/Unit/Metric/PercentTest.php',
        'Piwik\\Plugins\\PerformanceAudit\\tests\\Unit\\Metric\\SecondsTest' => __DIR__ . '/../..' . '/tests/Unit/Metric/SecondsTest.php',
        'Symfony\\Component\\Process\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/process/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Process\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/process/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Process\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/process/Exception/LogicException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessFailedException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessFailedException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessSignaledException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessSignaledException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessTimedOutException.php',
        'Symfony\\Component\\Process\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/process/Exception/RuntimeException.php',
        'Symfony\\Component\\Process\\ExecutableFinder' => __DIR__ . '/..' . '/symfony/process/ExecutableFinder.php',
        'Symfony\\Component\\Process\\InputStream' => __DIR__ . '/..' . '/symfony/process/InputStream.php',
        'Symfony\\Component\\Process\\PhpExecutableFinder' => __DIR__ . '/..' . '/symfony/process/PhpExecutableFinder.php',
        'Symfony\\Component\\Process\\PhpProcess' => __DIR__ . '/..' . '/symfony/process/PhpProcess.php',
        'Symfony\\Component\\Process\\Pipes\\AbstractPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/AbstractPipes.php',
        'Symfony\\Component\\Process\\Pipes\\PipesInterface' => __DIR__ . '/..' . '/symfony/process/Pipes/PipesInterface.php',
        'Symfony\\Component\\Process\\Pipes\\UnixPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/UnixPipes.php',
        'Symfony\\Component\\Process\\Pipes\\WindowsPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/WindowsPipes.php',
        'Symfony\\Component\\Process\\Process' => __DIR__ . '/..' . '/symfony/process/Process.php',
        'Symfony\\Component\\Process\\ProcessUtils' => __DIR__ . '/..' . '/symfony/process/ProcessUtils.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98dde460e8a16c8877d8f8d8a8e6921c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98dde460e8a16c8877d8f8d8a8e6921c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98dde460e8a16c8877d8f8d8a8e6921c::$classMap;

        }, null, ClassLoader::class);
    }
}
