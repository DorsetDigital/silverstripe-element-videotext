# silverstripe-element-videotext
Adds an elemental content block with a video

# Requirements
* Silverstripe 4.x
* Silverstripe Elemental

# Installation
* Install the code with `composer require dorsetdigital/silverstripe-element-videotext`
* Run a `dev/build?flush` to update your project

# Usage
This module adds a simple way to add a content block with a video embed
By default, the module doesn't add any styling, it expects you to do this in your own CSS file

A snippet of SCSS is included in the docs, designed to work with Bootstrap 4, which provides some basic layout for the element.

The CSS class assigned to the various image widths can be configured using a YML config file:

eg, for Bootstrap 4, you may want to use:

```
DorsetDigital\Elements\VideoTextElement:
  sizes:
    'col-md-6': '1/2 page width'
    'col-md-4': '1/3 page width'
    'col-md-3': '1/4 page width'
    'col-md-2': '1/6 page width'
```
