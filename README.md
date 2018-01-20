# LaravelBulBueVue

Clean Installed Laravel 5.5 with Authentication AND:
- <strong>Bulma 0.6.2</strong> (Bulma is a free and open source CSS framework based on Flexbox)
- <strong>Buefy 0.6.2</strong> (Lightweight UI components for Vue.js based on Bulma)
- <strong>VueJS 2.5.13</strong> (The Progressive JavaScript Framework)
- <strong>JQuery 3.3.0</strong> (jQuery is a fast, small, and feature-rich JavaScript library)
- <strong>Axios 0.17.1</strong> (Promise based HTTP client for the browser and node.js)
- <strong>Lodash 4.17.4</strong> (A modern JavaScript utility library delivering modularity, performance & extras)
- <strong>Laravel Mix 1.7.2</strong> (Compiling Assets)
- <strong>Font Awesome 4.7.0</strong> (The iconic font and CSS toolkit)
- <strong>Cross Env 5.1.3</strong> (Run scripts that set and use environment variables across platforms)
- J. A. Curtis's <a href="https://gist.github.com/jacurtis/30da4bf9a6c9b9b5cc0aebac512ca7c9#file-_spacing-helpers-scss">Spacing Helpers</a>


<strong>This release is with styled Auth and Navbar. If you want clean version download <a href="https://github.com/Guliat/LaravelBulBueVue/releases/tag/v1.0">Version 1</a>.</strong>

Installation
- IMPORTANT ! You must have installed all Laravel dependencies on web server
- Lets start
- Open terminal and go to your webserver folder (where your projects are)
- Type git clone https://github.com/Guliat/LaravelBulBueVue.git
- Go to folder LaravelBulBueVue
- Type composer install --no-dev
- Duplicate file .env.example and rename it .env
- Type php artisan key:generate
- Now you must fill .env file with your database config. This is important for Authentication.
- DB_DATABASE= YOUR DATABASE NAME
- DB_USERNAME= YOUR USERNAME (root)
- DB_PASSWORD= YOUR PASSWORD (blank)
- Now in terminal type php artisan migrate (In windows its possible to have any errors)
- Finnaly you must change ownership and permissions.
- If you use linux type chown -R :www-data /var/www/LaravelBulBueVue/ (example)
- type chmod -R 755 storage
- type chmod -R 755 bootstrap/cache
- Done !


<a href="https://github.com/Guliat/LaravelBulBueVue/releases/tag/v1.0">Version 1</a> - Auth and Nav - NO styled. <br>
<a href="https://github.com/Guliat/LaravelBulBueVue/releases/tag/v2.0">Version 2</a> - Auth and Nav - BULMA styled.

Everything I know is from this extremely good teacher >> https://www.youtube.com/channel/UC6kwT7-jjZHHF1s7vCfg2CA
