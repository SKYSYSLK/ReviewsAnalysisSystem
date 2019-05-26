# ReviewsAnalysisSystem
## A Review Management System

### Introduction
This system is implemented to analyse user reviews given by the user to a hotel. The main purpose was to make a summery of reviews and category all reviews to 4 main levels.

<br>

![Capture01](./readme-assets/Capture01.PNG)

<br>

![Capture02](./readme-assets/Capture02.PNG)

<br>

![Capture01](./readme-assets/Capture03.PNG)

<br>

### Project Scope

**IN SCOPE**
- Full featured dynamic website with member registration facility and publishing user reviews facility.
  - Any public user can register into the system and make reviews for hotel's facilities.
- Administration System 
  - Administrative interface as a part of the main system in order to perform administrative functionalities of the system. Administrator can view the summary of reviews and levels of review's meaning.

**OUT SCOPE**
- The system does not concern about communications between the users and the administator of the hotel

<br>

### Used Technologies

- [Laravel as Backend Framework](https://laravel.com/)
- [Google Natural Language API](https://cloud.google.com/natural-language/)

<br>

### Installation Guidance

**PREREQUISITES**

- Latest Version of Laravel Framework with Composer
- Google NLP API (For category the review)

**HOW TO INSTALL**

- Fork and clone the github repository of the project.
- Run following bash commands inside your project directory as the order.

```console
shell:~$ composer install
.........................
.........................
shell:~$ php artisan migrate
.........................
.........................
```

- Then add the google-service.json which is download in the credentials of the API and place it under 
```storage/app/public```


- Finally run the web server and go to the [http://127.0.0.1:8000](http://127.0.0.1:8000)

```console
shell:~$ php artisan serve
```

<br>

### Developers
<table>
<tr>
<td align="center"><img src="https://avatars0.githubusercontent.com/u/25032998?s=460&v=4" width=100></td>
<td align="center"><img src="https://avatars0.githubusercontent.com/u/12469768?s=400&v=4" width=100></td>
<td align="center"><img src="https://avatars0.githubusercontent.com/u/29378743?s=400&v=4" width=100></td>
</tr>
<tr>
<td align="center"><a href="https://github.com/RavinduSachintha">Ravindu Sachintha</a></td>
<td align="center"><a href="https://github.com/Danushka96">Danushka Herath</a></td>
<td align="center"><a href="https://github.com/Sacheerc/">Sachintha Rathnayake</a></td>
</tr>
</table>

<br>

### Contributing
Warmly welcome to developers for contributing **ReviewAnalysisSystem** Project. Make sure to open an issue and communicate with us before 
creating a Pull Request.

<br>

### License

The ReviewAnalysisSystem is open-sourced software solution licensed under the [GNU General Public License v3.0](./LICENSE).

