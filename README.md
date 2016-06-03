# WP ACF Select Gravity Forms

> ACT Type to select a new Gravity Form  

## Description

This is a type for the [ACF plugin](https://www.advancedcustomfields.com/) that creates a new select type
of field to allow easy selection of [Gravity Forms](http://www.gravityforms.com/).  

It creates a dropdown with a list of all active forms in the site by title and returns
the ID of the form to be used as required. if the value none is selected it will return
`0` as the default value for no form selected.  

## Requirements

- PHP 5.4+  
- Composer  
- ACF 5+  
- Gravity Forms plugin  

## Installation.  

This plugin works only on ACF 5 and above so please make sure you have the correct version
mentioned on the (requirements)[#requirements] section. In order to install this new
type you need to add a `composer.json` file at the root of your WordPress project as follows.  

```json
{
  "name": "project-name",
  "require": {
    "php": ">=5.4",
    "moxie-lean/acf-gravity-forms-select": "^0.1.0"
  }
}
```

Or directly from your terminal:  

```bash
composer require moxie-lean/acf-gravity-forms-select
```

And then run `composer update` and activate the new ACF Type as a regular plugin.  
