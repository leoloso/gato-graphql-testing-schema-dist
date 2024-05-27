<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e8bdb2453d97662eac0a9c74821f2d3
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GatoGraphQL\\TestingSchema\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GatoGraphQL\\TestingSchema\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GatoGraphQL\\TestingSchema\\Constants\\Actions' => __DIR__ . '/../..' . '/src/Constants/Actions.php',
        'GatoGraphQL\\TestingSchema\\Constants\\CustomHeaders' => __DIR__ . '/../..' . '/src/Constants/CustomHeaders.php',
        'GatoGraphQL\\TestingSchema\\ContentProcessors\\ExtensionMarkdownContentRetrieverTrait' => __DIR__ . '/../..' . '/src/ContentProcessors/ExtensionMarkdownContentRetrieverTrait.php',
        'GatoGraphQL\\TestingSchema\\ExtensionInitializationConfiguration' => __DIR__ . '/../..' . '/src/ExtensionInitializationConfiguration.php',
        'GatoGraphQL\\TestingSchema\\ExtensionMetadata' => __DIR__ . '/../..' . '/src/ExtensionMetadata.php',
        'GatoGraphQL\\TestingSchema\\ExtensionStaticHelpers' => __DIR__ . '/../..' . '/src/ExtensionStaticHelpers.php',
        'GatoGraphQL\\TestingSchema\\GatoGraphQLExtension' => __DIR__ . '/../..' . '/src/GatoGraphQLExtension.php',
        'GatoGraphQL\\TestingSchema\\Module' => __DIR__ . '/../..' . '/src/Module.php',
        'GatoGraphQL\\TestingSchema\\ModuleResolvers\\ModuleResolverTrait' => __DIR__ . '/../..' . '/src/ModuleResolvers/ModuleResolverTrait.php',
        'GatoGraphQL\\TestingSchema\\ModuleResolvers\\SchemaTypeModuleResolver' => __DIR__ . '/../..' . '/src/ModuleResolvers/SchemaTypeModuleResolver.php',
        'GatoGraphQL\\TestingSchema\\Overrides\\Log\\Logger' => __DIR__ . '/../..' . '/src/Overrides/Log/Logger.php',
        'GatoGraphQL\\TestingSchema\\Services\\Blocks\\AbstractServerSideRegisteredOrNotSchemaTestingBlock' => __DIR__ . '/../..' . '/src/Services/Blocks/AbstractServerSideRegisteredOrNotSchemaTestingBlock.php',
        'GatoGraphQL\\TestingSchema\\Services\\Blocks\\ExtensionBlockTrait' => __DIR__ . '/../..' . '/src/Services/Blocks/ExtensionBlockTrait.php',
        'GatoGraphQL\\TestingSchema\\Services\\Blocks\\NotServerSideRegisteredSchemaTestingBlock' => __DIR__ . '/../..' . '/src/Services/Blocks/NotServerSideRegisteredSchemaTestingBlock.php',
        'GatoGraphQL\\TestingSchema\\Services\\Blocks\\ServerSideRegisteredSchemaTestingBlock' => __DIR__ . '/../..' . '/src/Services/Blocks/ServerSideRegisteredSchemaTestingBlock.php',
        'GatoGraphQL\\TestingSchema\\Services\\Scripts\\ExtensionScriptTrait' => __DIR__ . '/../..' . '/src/Services/Scripts/ExtensionScriptTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e8bdb2453d97662eac0a9c74821f2d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e8bdb2453d97662eac0a9c74821f2d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e8bdb2453d97662eac0a9c74821f2d3::$classMap;

        }, null, ClassLoader::class);
    }
}
