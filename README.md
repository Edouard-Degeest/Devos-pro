# DEVOS-PRO #
![photo-site](https://user-images.githubusercontent.com/55830722/111809476-50cdac80-88d5-11eb-873f-ade88007392b.JPG)

# WEBSITE SOCIAL MEDIA #
## Used technologies ##

### Development Languages ###
<br>
<img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>
<img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>
<img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>
<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />

------------------------------------
### Frontend libraries used ###

* Bootstrap  (Cloudflare CDN)
* Slick carousel 1.8.1  (Cloudflare CDN)
* \+ custom CSS/JS
------------------------------------

##  Files / compiled files
Output files are in /data folder:
* `/db/database.php` - Database connexion
* `/seed/users.php` - Fake members 
* `/views` - Front-End pages
* `/assets/css` - CSS files
* `/assets/images` - Images
* `/includes` - Functions declares
* `/assets/js` - Javascript files
* `/users` - images into database
------------------------------------

## CSS source files
CSS files are in `/assets/css` folder:

* `/assets/css/style.css` - main CSS file
* `/assets/css/flex-slider.css` - slider CSS file
* `/assets/css/font-awesome.css` - icon CSS file
* `/assets/css/form.css` - connexion and register CSS file
* `/assets/css/owl-carousel.css` - carousel CSS file
* `/assets/css/profil.css` - profile CSS file
* `/assets/css/templatemo-lava.css` - template CSS file

------------------------------------

## DATABASES INFOS - NETWORK
Variables in the database network :

* `users` - values:
	* `id`
	* `name`
	* `pseudo`
	* `email`
    * `password`
    * `active`
    * `created_at`
    * `city`
    * `country`
    * `sexe`
    * `twitter`
    * `github`
    * `available_for_job`
    * `bio`
    * `img`
* `post` - values:
    * `id`
    * `content`
    * `user_id`
    * `created_at`

* `codes` - values:
    * `id`
    * `code`

------------------------------------
## Register, Login and Logout

Register, Login and Logout are Implemented.



------------------------------------
## Profil Page

You can change youre profil settings ( Picture, name, sex , country, city , gender )



------------------------------------
## Share youre code

The share code was save in the database


------------------------------------
## Users list

An acces to every users profil page

------------------------------------
## Post

You can make Posts and share on your profil



------------------------------------
## Development config setup
### Requirement :
Make a folder 'data'

And on vagrant install mysql server : sudo apt install mysql-server

Database & Vagrant File are include.

`Vagrant` :

    Launch vm : vagrant up

    vagrant ssh : Enter vm

    Reload vagrant : vagrant reload

    Close vagrant : vagrant halt
------------------------------------