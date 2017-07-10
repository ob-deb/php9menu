# php9menu
9menu categorized menu generator in PHP-CLI for i3wm and similar environments.

It basically reads all ``*.desktop`` files in ``/usr/share/applications`` and ``~/.local/share/applications`` folders in order to automatically generate categorized menus for 9menu.

## Disclaimer

* This script is a work in progress, and was created for learning purpose and to meet my needs using i3wm.

* It's in PHP-CLI, but should be easily ported to any other more agnostic language.

* If you liked it, feel free to suggest improvements and help me solve any eventual bug.

## Requirements

* `php7-cli` with `mb` module
* `9menu`

## Install and Usage

Just save the files somewere in filesystem and run the script ``php9menu``. All generated files will be saved in `~/.config/9menu/`.

## Future (soon)...

* Add auto "places" menu;
* Add an option to not reload `*.desktop` files list on startup (which would imply in creating a menu entry for updates).
