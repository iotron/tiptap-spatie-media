# Spatie Media Integration Support for Tiptap Editor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/iotronlab/tiptap-spatie-media.svg?style=flat-square)](https://packagist.org/packages/iotronlab/tiptap-spatie-media)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/iotronlab/tiptap-spatie-media/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/iotronlab/tiptap-spatie-media/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/iotronlab/tiptap-spatie-media/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/iotronlab/tiptap-spatie-media/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/iotronlab/tiptap-spatie-media.svg?style=flat-square)](https://packagist.org/packages/iotronlab/tiptap-spatie-media)

## Introduction

**Spatie Media Integration Support for Tiptap Editor** is a package that seamlessly integrates the Tiptap Editor with Spatie's Media Library, providing an easy way to manage and upload media within your Tiptap Editor. Built specifically for Laravel and Filament, this package extends the functionalities of the popular [Tiptap Editor](https://filamentphp.com/plugins/awcodes-tiptap-editor), making it a breeze to handle images and media directly within your rich text editing experience.

This package allows developers to customize the `media_action` configuration of the Tiptap Editor with just a single line change, enabling media upload management via Filament's Spatie Media Library integration. Once set up, users can effortlessly manage their media, giving a seamless media management experience.

> **Note**: This package requires the Tiptap Editor to be installed before you can use it.

## Features

- Integrate Tiptap Editor with Spatie's Media Library.
- Easily upload and manage images within the Tiptap Text Editor.
- Supports customization via a simple configuration change.

## Installation

You can install the package via Composer:

```bash
composer require iotronlab/tiptap-spatie-media
```

Next, publish and run the migrations with:

```bash
php artisan vendor:publish --tag="tiptap-spatie-media-migrations"
php artisan migrate
```

Publish the configuration file with:

```bash
php artisan vendor:publish --tag="tiptap-spatie-media-config"
```

Optionally, you can publish the views using:

```bash
php artisan vendor:publish --tag="tiptap-spatie-media-views"
```

## Configuration

To modify the media action for the Tiptap Editor, update the `media_action` in your config file:

```php
// Comment out the existing action
// 'media_action' => FilamentTiptapEditor\Actions\MediaAction::class,

// Replace it with the new action
'media_action' => \Iotronlab\TiptapSpatieMedia\TiptapSpatieMediaAction::class,
```

After making this change, you'll be able to manage media uploads in your Tiptap Editor using Spatie's Media Library via Filament.

## Usage

Use the Tiptap Editor as you normally would:

```php
TiptapEditor::make('description')
    ->columnSpanFull(),
```

Just ensure that you have updated the Tiptap Editor config file with the new `media_action`, and you're all set to manage media uploads seamlessly.

## Testing

You can run the package tests using:

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Iotronlab](https://github.com/Iotronlab)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Support Us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/tiptap-spatie-media.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/tiptap-spatie-media)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Prerequisites

This package requires:

- PHP 8.2 or higher
- [Tiptap Editor](https://filamentphp.com/plugins/awcodes-tiptap-editor) (must be installed before using this package)
- [Filament Spatie Media Library Plugin](https://filamentphp.com/plugins/filament-spatie-media-library)

Ensure you have these dependencies installed to take full advantage of this package's features.
