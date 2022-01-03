# <div align="center">Plus Malaysia Berhad Website</div> 

[![](https://img.shields.io/badge/PHP-^7.3|^8.0-lightgrey?style=flat&logo=php)](https://www.php.net/)
[![](https://img.shields.io/badge/Laravel-^8.75-red?style=flat&logo=laravel)](https://laravel.com/)
[![](https://img.shields.io/badge/Laravel%20Jetstream-^2.5-purple?style=flat&logo=jetstream)](https://jetstream.laravel.com/)
[![](https://img.shields.io/badge/TailwindCSS-^3.0.0-blue?style=flat&logo=tailwindcss)](https://tailwindcss.com/)
[![](https://img.shields.io/badge/Alpine.js-^3.0.6-lightblue?style=flat&logo=alpine.js)](https://alpinejs.dev/)

## Screenshot of the Program
![ Screenshot.](https://github.com/hovahyii/plus-malaysia-berhad/tree/main/public/image/laravel.jpg)

<br/>

## 💻 Command that I used
- php artisan serve
- php artisan migrate
- php artisan make:model Model -m 
- php artisan make:controller ExampleController --resource
- php artisan tinker

<br/>

## 🤔 What I learnt
- MVC model
- Authentication
- Storing SQL database
- Setup composer
- Setup Laravel Jetstream

<br/>

## ✨ Code Highlight

### User.php
> The name store in the database should be capitalized each word (ex: My Name) eventhought the staff insert all lowercase or uppercase (Tips: Convert in Model)
```
public function setNameAttribute($value)
{
    $this->attributes['name'] = strtoupper($value);
}
```

### Branch.php
> Each branch has many fire extinguishers
```
public function fireExtinguisher(){
    return $this->hasMany(FireExtinguisher::class);
}
```

### FireExtinguisher.php
> Each fire extinguisher belongs to one branch
```
public function branch(){
    return $this->belongsTo(Branch::class, 'location', 'id');
}
```

### CreateFireExtinguishersTable
```
 Schema::create('fire_extinguishers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('location');
            $table->date('expiry_date');
            $table->string('serial_numbers');
            $table->string('type');
            $table->float('weight');
            $table->string('brand');
            $table->timestamps();
            $table->foreign('location')
                ->references('id')
                ->on('branches')
                ->onDelete('cascade');
        });
```

### FireExtinguishersController.php
```
  public function store(Request $request)
    {
         $fireExtinguisher = FireExtinguisher::create([
            'location' => $request->input('location'),
            'expiry_date' => $request->input('expiry_date'),
            'serial_numbers' => $request->input('serial_numbers'),
            'type' => $request->input('type'),
            'weight' => $request->input('weight'),
            'brand' => $request->input('brand'),  
        ]);


        return redirect('/fire-extinguishers');
    }
```



<br/>



## 📺 Reference
* [Complete Laravel 8 Tutorial | Laravel 8 From Scratch | Full Laravel 8 Course | Laravel For Beginners
](https://www.youtube.com/watch?v=376vZ1wNYPA)


<br/>

## 📝 License
MIT

<br/>

### Like this website? You can show your appreciation by buying Hovah a coffee ☕
<a target="_blank" rel="noopener noreferrer" href="https://www.buymeacoffee.com/hovahyii">
<img src="https://github.com/appcraftstudio/buymeacoffee/raw/master/Images/snapshot-bmc-button.png" width="300" style="max-width:100%;">
</a>

<br/>

**This website is built with by ❤️‍🔥 Hovah!**
