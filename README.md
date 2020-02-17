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
By default, the module uses Bootstrap 4 CSS classes for styling.
The CSS class assigned to the various video widths can be configured using a YML config file:

eg:

```
DorsetDigital\Elements\VideoTextElement:
  sizes:
    'col-md-6': '1/2 page width'
    'col-md-4': '1/3 page width'
    'col-md-3': '1/4 page width'
    'col-md-2': '1/6 page width'
```
