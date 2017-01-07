# LaravelMarket
Start Laravel Market
### Install
```sh
$ git clone https://github.com/puuble/laravelMarket.git
```
```sh
$ cd laravelMarket
```
```sh
$ composer install
```
```sh
$ npm install
```

### step 1 (optional)

https://laravel.com/docs/5.3/redis click this link after follow step by step. We required predis !
This step (laravel redis configuration) is optional. if you are choice please config your `.env` file.

### step 2
#### Modules and Branch

check this link for more informations. https://www.atlassian.com/git/tutorials/using-branches/
```sh
$ git branch <module_name>
$ git checkout <module_name>
$ git push -u origin <module_name>
```
And sent pull request check this link https://help.github.com/articles/creating-a-pull-request/

### Working With Modules on Laravel Market
```sh
$ git branch TestModule
$ git checkout TestModule
```
Now ready to working for modules. We change  branch on TestModule.
```sh
php artisan module:create <module_name>
```
This code custom command (`module:create`) in Laravel Market from `app/Console/Commands`
This code mean is created new module in LM 
for example
```sh
php artisan module:create TestModule

Please Choice Module Root  ? [Frontend]:
  [0] Frontend
  [1] Admin
  [2] User

```
Explain: Looking the `app/Modules/` folder. You will see 3 main folders in this folder. The code in the example inserts the Module in these folders. 0 - Frontend  1 Admin 2 User. Why did we do that ? Because Admin and User modules have own middleware and permissions. If you develop Module for User side Choice 2. Frontend is default choice and no guest mode no middleware and no auth etc.

Results:
I choice 0 - Frontend and created successfuly changes. Look at `app/modules/TestModule` folder and subfolders. 
You will see  `Controllers` `Modules` `Views` sub folders in the `TestModule`.


Go to `Controllers` folder check `ActionController`.



```php
namespace App\Modules\Frontend\TestModule\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


```


```php
  public function index()
    {
        //
        return 'Hello Laravel Market';
    }
```

### step 3 Access Modules on Browers

Now! We required config/Module.php.

TestModule write in the frontend area.

```php
   'Admin' => [], //admin side module lists

    'Frontend' => [
        'TestModule'
    ], // frontend side module lists


    'User' => [], // user side module lists

```

And .. Check Your Browser
Example:

```php
http://lm.dev/testModule
```
