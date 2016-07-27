# WordPress Security

## Cardinal Rules

* KEEP CORE, PLUGINS, AND THEMES UPDATED
* Never create an "admin" account
* Never go with the "default" options
* Always change your salts
* Know where your code comes from (Tim Thumb example)
* Disable file editing (client site example)
* Choose secure passwords

## Security Plugins

* Sucuri Security Scanner
* Limit Login Attempts
* Clef
* Simple Login Log

## Coding Securely

* Escape ALL data
* Trust no one
* https://cloudup.com/crQkQzPQnfE
* https://make.wordpress.org/themes/tag/writing-secure-themes/

### Aspects of Coding Security

### Data validation

Ensure that input is secure before using it in your code.

Whitelisting: are the only valid choices yes or no? Then make those the only one that are accepted by the code.

	function ga_validate_yes_no( $some_input ) {
	    if ( in_array( $some_input, array( 'yes', 'no' ), true ) ) {
	        return $some_input;
	    }
	}

PHP Validation Functions

* is_bool()
* is_float()
* is_int()
* is_numeric()
* is_string()





* Data sanitation
* Cross-Site Scripting (XSS)
* SQL Injection
	* https://imgs.xkcd.com/comics/exploits_of_a_mom.png
* Cross-Site Request Forgery