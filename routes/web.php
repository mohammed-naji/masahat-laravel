<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// $moh = new Route();

// $moh->get('/', function () {
//     return 'Homepage using object';
// });

// use , namespace

// Route::get('/', function () {
//     return 'Homepage';
// });
// Route::get('/about', function () {
//     return 'This is about page GET';
// });
// Route::post('/about', function () {
//     return 'This is about page';
// });
// Route::put('/about', function () {
//     return 'This is about page';
// });
// Route::patch('/about', function () {
//     return 'This is about page';
// });
// Route::delete('/about', function () {
//     return 'This is about page';
// });


// Route::method('url', 'action');

// Form Method
// get, post

// Http Method
// get, post, put, patch, delete

// include 'students.php';

// Route::put('/update', function () {
//     return 'posts updated';
// });
// Route::patch('/update', function () {
//     return 'posts updated';
// });
// Route::match(['put', 'patch'], '/update', function () {
//     return 'post updated';
// });

// Route::any('/policy', function () {
//     return 'dddd';
// });

// Route::resource('posts', '');

// Route::view('/posts', 'posts');

// Route::get('/posts', function () {
//     return view('posts');
// });


// home, about, team, contact, students/all, students/marks
// Route::get('/', function () {
//     return 'Homepage';
// });

// Route::get('/post/{id}/{category}', function ($id, $category) {
//     return "Post $id details, Category $category";
// });

// Route::get('/user/{username}', function ($user) {
//     return 'Username ' . $user;
// });

// courses/pmp/live

// Route::get('/courses/{course}', function ($course) {
//     return "Course Name $course";
// });

// Route::get('/courses/{course}/{type?}', function ($course, $type = '') {
//     return "Course Name $course, Type $type";
// })
//     ->where('course', '[1-5]+')
//     ->whereIn('type', ['live', 'book']);
// ->whereAlpha('course');
// ->whereNumber('course');
// ->whereAlphaNumeric('course')
// ->whereNumber('type');

// class Person
// {
//     public $name;
//     public $age;

//     function getName()
//     {
//         echo $this->name;
//         return $this;
//     }

//     function getAge()
//     {
//         echo $this->age;
//         return $this;
//     }
// }

// $p = new Person();
// $p->name = "Mohammed";
// $p->age = 32;

// $p->getName()->getAge();


// Route::get('/user/{user}', function ($user) {
//     return "User Profile Page $user";
// });

// Route::get('/user/all', function () {
//     return "All User";
// });

// Route::get('/page/about', function () {
//     return 'About Page';
// });

// Route::get('/page/contact', function () {
//     return 'contact Page';
// });

// Route::get('/page/{name}', function ($name) {
//     return $name . ' Custom Page';
// });

// Route::get('/', function () {
//     // return "<a href='/about-us'>About Us</a>";
//     $url = route('aboutpage');
//     return "<a href='$url'>About Us</a>";
// });

// Route::get('/about-123', function () {
//     return 'About Us';
// })->name('aboutpage');


// Route::get('/', function () {
//     $url1 = route('profile', 'mohnaji94');
//     $url2 = route('profile', ['abeer123']);
//     $url3 = route('profile', ['alaaxyz']);
//     $url4 = route('profile', ['aa123']);

//     echo "<a href='$url1'>mohnaji94</a><br>";
//     echo "<a href='$url2'>abeer123</a><br>";
//     echo "<a href='$url3'>alaaxyz</a><br>";
//     echo "<a href='$url4'>aa123</a><br>";
// });

// Route::get('/user/{user}', function ($user) {
//     return "Instagram User Profile for : $user";
// })->name('profile');

// Route::get('/', function () {
//     $products = [
//         'New T Shirt Collection',
//         'Story Books',
//         'Laptops',
//         'TV',
//         'Accessories',
//         'Movies'
//     ];
//     // $product = Product::all();
//     foreach ($products as $product) {
//         echo "<a href='" . route('product', $product) . "'>$product</a><br>";
//     }
// });

// Route::get('/product/{name}', function ($product) {
//     return "Product $product";
// })->name('product');

// Route::get('/post/{id}', function ($id) {
//     return "Post $id";
// })->where('id', '[a-mA-Z]+');

// Route::prefix('students')->name('students.')->group(function () {
//     Route::get('/', function () {
//         return 'All Students';
//     })->name('all');

//     Route::get('/exams', function () {
//         return 'Students exams';
//     })->name('exams');

//     Route::get('/leaves', function () {
//         return 'Students leaves';
//     })->name('leaves');
// });


// Route::get('/', [MainController::class, 'index'])->name('homepage');


// home, about, team, services, contact, contact form
// Route::get('/', [MainController::class, 'index'])->name('index');
// Route::get('/about', [MainController::class, 'about'])->name('about');
// Route::get('/team', [MainController::class, 'team'])->name('team');
// Route::get('/services', [MainController::class, 'services'])->name('services');
// Route::get('/contact', [MainController::class, 'contact'])->name('contact');
// Route::post('/contact', [MainController::class, 'contact_form'])->name('contact_form');

// Route::get('/api/developer', [DevController::class, 'info']);



// Route::get('products', [ProductController::class, 'index'])->name('products/index');

// Route::get('/', [SiteController::class, 'index'])->name('index');

// -> // object -> method
// => // key => value
// :: // class::method, class
// . // concatenation

// Route::get('/user/{name}/{year}', [SiteController::class, 'age'])->name('user.age');

// Route::prefix('admin')->name('admin.')->group(function () {

//     Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
// });

// Personal Website Routes
// Route::get('/', [PersonalController::class, 'index'])->name('personal.index');
// Route::get('/resume', [PersonalController::class, 'resume'])->name('personal.resume');
// Route::get('/projects', [PersonalController::class, 'projects'])->name('personal.projects');
// Route::get('/contact-us', [PersonalController::class, 'contact'])->name('personal.contact');

// Route::get('/services', [FurnitureController::class, 'services']);


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');

// Forms Routes
Route::get('/form1', [FormsController::class, 'form1'])->name('form1');
Route::post('/form1', [FormsController::class, 'form1_data']);

Route::get('/form2', [FormsController::class, 'form2'])->name('form2');
Route::post('/form2', [FormsController::class, 'form2_data']);

Route::get('/register', [FormsController::class, 'register'])->name('register');
Route::post('/register', [FormsController::class, 'register_data']);

Route::get('/form3', [FormsController::class, 'form3'])->name('form3');
Route::post('/form3', [FormsController::class, 'form3_data']);

Route::get('/form4', [FormsController::class, 'form4'])->name('form4');
Route::post('/form4', [FormsController::class, 'form4_data']);

Route::get('/form5', [FormsController::class, 'form5'])->name('form5');
Route::post('/form5', [FormsController::class, 'form5_data']);

// camelCaseLetter
// PascalCaseLetter
// snake_case_letter
// kebab-case-letter


// Posts CRUD
// Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');
// Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::match(['put', 'patch'], 'posts/{id}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('posts/trash', [PostController::class, 'trash'])->name('posts.trash');
Route::get('posts/{post}/restore', [PostController::class, 'restore'])->name('posts.restore')->withTrashed();
Route::get('posts/{post}/forcedelete', [PostController::class, 'forcedelete'])->name('posts.forcedelete')->withTrashed();
Route::resource('posts', PostController::class);


Route::get('/users', [MainController::class, 'users'])->name('users');
