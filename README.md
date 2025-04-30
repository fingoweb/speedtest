# Laravel LibreSpeed Package by Fingoweb

This is a Laravel package that integrates [LibreSpeed](https://librespeed.org), a lightweight and modern speed test tool. The package provides tools to display a speed test for your users with minimal setup, leveraging Laravel's features for routing and asset management.

---

## Features

This package is based on [LibreSpeed](https://librespeed.org) and inherits its features. It provides the following functionalities:

- **Download Speed Test**
- **Upload Speed Test**

---

## Requirements

To use this package, ensure your Laravel application meets the following requirements:

- Laravel 7 or newer
- PHP 7.4 or newer
- Composer installed in your system
- A fast internet connection (for proper speed test accuracy)

---

## Installation and Setup

Here is how to install and configure the Laravel LibreSpeed package:

### Step 1: Add repository to Composer

Before installing the package, make sure to add the following to your `composer.json` in the `repositories` section:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:fingoweb/speedtest.git"
    }
]
```

### Step 2: Install the Package
Run the following command to install the package via Composer:
```bash
composer require fingoweb/speedtest
```

### Step 3: Create Symbolic Link (Recommended Alternative to Asset Publishing)
Instead of publishing the assets, you can create a symbolic link to the package's public folder, avoiding the need to copy the files. Simply run the following Artisan command:
```bash
php artisan speedtest:link
```

This command will create a symbolic link in your `public/` directory, making the assets available without duplicating files. The link will point to the `vendor` directory where the package resides.

---

## Usage

Once installed and configured, you can visit `/speedtest` to perform speed tests using the LibreSpeed tool, now integrated with Laravel.

The route `/speedtest` is automatically registered by the package and linked to the provided view, so no additional setup is required.

Users will see an interactive speed testing interface, which relies on JavaScript and XMLHttpRequests for performance.

---

## Server Requirements for Speed Test

The performance of speed tests depends on your hosting environment. Below are the suggested server requirements:

- A reasonably fast web server (Apache, nginx, or IIS supported)
- PHP 7.4 or newer
- Database for storing results (only required for telemetry)
- A fast and stable internet connection on the server

---

## License

This package is based on the original [LibreSpeed](https://github.com/librespeed/speedtest) tool created by Federico Dossena and follows the GNU Lesser General Public License (LGPLv3). 

You can redistribute it and/or modify it under the terms of the LGPLv3.

This program is distributed in the hope that it will be useful, but **WITHOUT ANY WARRANTY**; without even the implied warranty of **MERCHANTABILITY** or **FITNESS FOR A PARTICULAR PURPOSE**.

For full license details, see [GNU Lesser General Public License](https://www.gnu.org/licenses/lgpl-3.0.en.html).

---

## Credits

- **LibreSpeed**  
  Original speed test implementation by [Federico Dossena](https://github.com/librespeed/speedtest)  
  Website: [LibreSpeed.org](https://librespeed.org)  
  License: [LGPLv3](https://www.gnu.org/licenses/lgpl-3.0.en.html)

- **Laravel Package Implementation**  
  Developed and maintained by [Fingoweb](https://github.com/fingoweb).

---

## Contributing

Feel free to submit pull requests to improve this package. Contributions are always welcome, and any contributions must abide by the terms of the GNU Lesser General Public License.

---

## Support

For issues with the package, please use the GitHub issue tracker. For general questions about LibreSpeed, refer to their [official documentation](https://librespeed.org).
