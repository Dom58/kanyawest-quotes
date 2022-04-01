# kanyewest-quotes
Kanye West Quotes Technical Test

## Prerequisites
* PHP 7+
* Postman
* Composer
* Github account
* Third Part API of Kanye West Quotes ``https://api.kanye.rest``

## Technology used

### Frontend
* Laravel Framework
* JavaScript
* HTML
* CSS
* JQuery

### Backend 
  * Laravel Framework

### Version 1 Endpoints

| Method         | Endpoint             | Description  |
| ---         |     ---      |          --- |
| GET   | /api/v2/quotes/random-five    | Get five random quotes of Kanye West  |

## Setup 

### 1. Backend
  1. Clone the repository
    ```https://github.com/Dom58/kanyawest-quotes.git``` by running ```git clone https://github.com/Dom58/kanyawest-quotes.git```
     
  2. Go to root folder by running

  ```cd kanyawest-quotes```

   3. Install dependencies

    Run ```composer install``` and  ```composer update```
     
   4. Start the server of development
  
    Run ```php artisan serve``` which will run on port ``8000`` or set new port ``````php artisan serve --port=ADD_YOUR_PORT_NUMBER````` and copy the generated url by pasting it on any browser.
  
    6. To test the API: Open postman to test challenge API and add this url with ``GET`` method
    ```http://localhost:8000/api/v2/quotes/random-five``` or when you changed the port use this ```http://localhost:ADD_YOUR_PORT_NUMBER/api/v2/quotes/random-five```

### 2. Frontend
  1. To run the frontend copy and past the link generated on command line(cmd) and paste to any  browser on index page you will see all the features of the application.

### 3. Run Test
Go to your root folder of your project and open ``CMD`` in it and type ``php artisan test``  or run ```./vendor/bin/phpunit```with enter from the keyboard, and wait the test to run.
  
## Author
Dominique Ndahimana
