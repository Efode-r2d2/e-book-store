## eBookStore

eBookStore is a laravel based backend system designed to manage books in a library. The system is designed to:

- Manage Books
- Manage Users
- Manage Book Renting

This is an open source project and you are welcome to contribute.

## Installing AdminLte and FontAwesome

* ***Install laravel ui package***

    `composer require laravel/ui`

* ***Configure ui assets***

    `php artisan ui bootstrap`

* ***Install AdminLte***

    `npm install admin-lte`

* ***Install Fontawesome***

    `npm install --save @fortawesome/fontawesome-free`

* ***Install PooperJs based on bootstrap version***

    `npm install @popperjs/core --save`

* ***Update sass/app.css with***

    ```html
        // Fonts
        @import url('https://fonts.googleapis.com/css?family=Nunito');

        // Font Awesome
        @import '~@fortawesome/fontawesome-free/scss/brands';
        @import '~@fortawesome/fontawesome-free/scss/regular';
        @import '~@fortawesome/fontawesome-free/scss/solid';
        @import '~@fortawesome/fontawesome-free/scss/fontawesome';

        // Variables
        @import 'variables';

        // Bootstrap
        @import '~bootstrap/scss/bootstrap';

        // AdminLTE
        @import '~admin-lte/dist/css/adminlte.css';
    ```

* ***Update js/bootstrap.js with***

    ```html
        require('admin-lte');
    ```

* ***Run npm run watch***

    `npm run dev && npm run watch`

* ***Finally***

    `php artisan optimize`
    `php artisan serve`

