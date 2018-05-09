Youngstown State University Wordpress Theme
===
Youngstown State University Wordpress theme is built for YSU Marketing and Communications Department in Spring 2017 for Wordpress 4.7.3 and should be scalable long as there are no major updates to the [Wordpress Codex](https://codex.wordpress.org/). This theme was built off the [BlankSlate theme](https://wordpress.org/themes/blankslate/) by TidyThemes. At the time of developing the YSU Wordpress theme, the latest update to the BlankSlate theme was 4.0.3 on [December 16, 2015](https://themes.trac.wordpress.org/changeset/54234/blankslate). The YSU theme should work in Wordpress 4.0.3, however is not recommended. This theme should be used in [4.7.3 or later](https://codex.wordpress.org/Version_4.7.3).

## Dependencies
* [Wordpress](https://codex.wordpress.org/Version_4.7.3), the CMS that the theme uses.
* [Ruby](https://www.ruby-lang.org/), used for SASS.

## What to know

Before editing take time to read up on the following:
* [Sass](http://sass-lang.com/), a CSS preprocessor.
    * [Grid.scss](https://github.com/haphazardly/Grid.scss), a grid system built with SASS.
* [jQuery](http://jquery.com), a JavaScript library (used in the drop down search).
* [FontAwesome](http://fontawesome.io), an icon package.
* [Prettify.js](https://github.com/google/code-prettify) a JavaScript library that stylizes `<pre>` tags.

## File Stucture
* `wp-ysu` - main theme folder.
    * `js/` - JavaScript file for Drop down search.
    * `languages/` - Alternative langauges.
    * `media/` 
        * `fonts/` 
        * `images/`
    * `stylesheets/`
        * `css/` - Location of compiled CSS.
        * `sass/` - Where to write CSS.
    * `.php` template files.

## Documentation

This next section will document all the important information regarding the YSU WordPress theme.

### Stylesheets
All of the stylesheets are written in [SASS](http://sass-lang.org), and all modification of the stylesheets should be written in SASS, then compiled. This can be done in a terminal and following these steps.

1. Locate the directory of where the stylesheets are located.
    * `cd wordpress/wp-content/themes/wp-ysu/stylesheets` 
2. Once in `stylesheets/` run the SASS command in the terminal. 
    * `sass --watch scss:css`

The `sass` command starts sass, the `--watch` flag will constantly check for changes in `.scss` files inside the `scss/` directory and convert all files to `.css` inside the `css/` directory. 

#### Structure
There are currently, **14** stylesheets. The names of each `.scss` file relate to what component of HTML they belong too or nested in. For examples, `header.scss` will relate to anything inside the `<header role="banner"> ... </header>` section of the WordPress template; `header.php`. 

Out of the 14 stylesheets, there are **4** special stylesheets, they are:
* `grid.scss` - The grid system that keeps everything from breaking.
* `master.scss` - Where all the stylesheets come together
* `ie.scss` - Specialized IE shenanigans
* `styles.scss` - All the important colors, fonts, variables and etc. 

##### Grid.scss

Does not require any editing, but it should be important to know this file. It is how everything is aligned within the system. 

##### Master.scss

As mentioned, this is where all stylesheets meet. This file is the main stylesheet used in the template, and is the only file that should be used. If you add a new stylesheet is should be included using `@import 'MyNewStylesheet.scss'`.

##### Styles.scss

Any colors, important widths, or such should be defined here. Defining is simple in SASS. Nothing should go before `styles.scss` in this file, or none of the variables will work. 

#### Mini-Crashcourse on SASS
For a comphrensive guide to SASS check the [documentation](http://sass-lang.com/documentation/).
##### Defining Variables 
Let's define a new color in `styles.scss`.
```scss
$myNewColor: rgb(123,82,29);
```

If you want a slight saturation in the color, try using `saturate($color, $percent)`.

```scss
$mySecondColor: saturate($myNewColor, .9);
```
This will saturate the color by 90%. Now apply it to a class in the `body.scss` stylesheet. 
```scss
.myCustomClass {
    background: $myNewColor;
    color: $mySecondColor;
    padding: 2rem;
    border: 1px solid $mySecondColor;
}
```

##### Nesting

The nesting approach has a DRY technique. Consider the following `css` code:

```css
.myclass {
    background: rgba(255, 0, 0, 1);
}
.myclass ul {
   margin-left: 1.25rem;
}
.myclass ul li {
    padding: 1.25rem;
}
.myclass ul li a {
    background: rgba(255, 0, 0, .5);
}
.myclass ul li a:hover {
    background: rgba(255, 0, 0, 1);
}
```

Rewriting this class 4 times is not DRY. The SASS approach to combat this:

```scss
$color_red: rgb(255, 0, 0);
$special_rem: 1rem;
.myclass {
    background: $color_red;
    ul {
        margin-left: $special_rem;
        li {
            padding: $special_rem;
            a {
                background: rgba($color_red, .5);
                &:hover {
                    background: $color_red;
                }
            }
        }
    }
}
```
These two pieces, of code are the same. 

#### What is `wp-ysu/style.css`?

WordPress looks for this file when accessing a theme. This file should not be edited, unless a new author is added, or a major version is released.

### Templating and Components

WordPress allows developers to break there files into manageable chunks however this can be confusing. Here is a template map on what is what, and what is nested where.

[![alt text](https://developer.wordpress.org/files/2014/10/template-hierarchy.png "Wordpress Template Map")](https://developer.wordpress.org/files/2014/10/template-hierarchy.png)
*_Click for a full image_

This map lists all the possible templates that are supported in the WordPress system. 

#### Adding a new section using `Grid.scss`

When adding a new section to the theme, use the `Grid.scss` classes. Everything is structure like a table, rows and columns.

```html
<!--- This class will add a row --->
<div class="row"></div>
```
Now that the row is set, add columns. In `Grid.scss` our custom columns are set too 13. All columns should add up to 13.
```html
<div class="row">
    <!--- Set as a 'col' and specify the 'col' amount --->
    <div class="col col-5">I am five columns wide</div>
    <div class="col col-5">Me too!</div>
    <div class="col col-3">I am only three.<div>
</div>
```
Once a row and columns are set, this component will contain 3 columns inside a row. Rows can be nested inside of columns aswell.

```html
<div class="row">
    <div class="col col-5">
        Still 5 columns wide.
        <!--- A nested row --->
        <div class="row">
            <div class="col col-10">10 columns wide.</div>
            <div class="col col-3">3 columns wide.</div>
        </div>
    </div>
    <div class="col col-5">Me too!</div>
    <div class="col col-3">I am only three.<div>
</div>
```

### Compiling with `zip`

Once the theme has been edited to your liking run the zip command in the `theme/` folder.


`zip -r wp-ysu.zip wp-ysu/*`


This command will zip all files in the `wp-ysu/` directory and save it as `wp-ysu.zip`.


