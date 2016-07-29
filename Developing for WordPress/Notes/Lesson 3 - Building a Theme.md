# Building a Theme

The theme is the presentation layer. Ideally, it should handle things like:

* Fonts
* Colors
* Layouts
* Responsiveness

It should _not_ handle things like:

* Custom Post Types
* Custom taxonomies

## Child Themes

* Relies on another theme as a template
* You can customize an existing theme without fear of losing your changes to theme updates
* Frameworks often work under a child theme model
* You can have child themes, but not grandchild themes

## Starter Themes

* Using another theme and modifying it directly to create a new theme
* Often these themes have minimal styling, but are also based on Foundation or Bootstrap
* You never update the original starter theme, so no chance in losing your updates
* Download theme, change name, change namespaces, customize, profit!

We will be using a starter theme which we will modify. The starter theme which we will use is called "_s" (pronounced underscores), and is maintained by Automattic, a driving force behind WordPress.

Themes should only be used to alter the _presentation_ of content, not the structure, taxonomy, or organization.

## Theme Frameworks

## Sass & Responsive Web Design

This isn't a course on either Sass or RWD, but it's how I work, and how I'll be teaching this class. So a little introduction is in order.

### Sass vs. CSS

Sass is a "pre-processor". Browsers don't understand it. In order to convert it into CSS, you need to run it through software that will convert it into CSS. In our case, we will be using Gulp, which has a plugin that converts Sass into CSS.

What's important to remember is while Sass gives you features and tools that CSS doesn't, it's still CSS at its heart, so you still have to know the rules of CSS. Box models, specificity, browser compatibilities, etc. still are important things you have to know, even when working with Sass.

### Sass vs. SCSS

Sass refers to both the the software (written in Ruby) that converts Sass into CSS, as well as to the original, "indented" syntax of Sass that was in use when it was first developed. The goal of this format was conciseness: you needed fewer keystrokes to create your CSS, saving you time.

SCSS came along later, and is a "meta" language for CSS. Any valid CSS (complete with curly braces, semicolons, etc.) is also valid SCSS. SCSS allows additional features, such as selector nesting, property groupings, etc. We use SCSS because of its structural similarity to CSS, making it more intuitive to code in. From this point on, I'll be referring to Sass, but we'll be writing in SCSS

### Responsive Web Design

In April, Google implemented a new algorithm that favored "Mobile Friendly" sites on searches made from "mobile" devices. Responsive Web Design is one solution for addressing the "Mopocalypse", and in my opinion, the best way.

[Provide link to my WordCamp Miami talk]




## Pages

* Default Page Template
* Alternate Page Templates

## Navigation Menus

* register_nav_menus()
* wp_nav_menu()

## Archives

## Single Posts

## Sidebars and Widgets

## WP_Query

