# Work Weather

In order to determine whether or not a job site will be suitable for work, we need you to build an application that provides a weather forecast for the next 5 days.

You will need to communicate with a weather API and build a user interface using Laravel, Tailwind CSS and React. The user should be able to select a city from a drop down box, and have the results for the next 5 days render on the screen.

Additionally, a report needs to be prepared which can be automatically generated each day. This report needs to be generated from the console and should output to the console. The arguments for this command will be a comma delimited list of cities, and the expected output will be a table of cities and their 5 day weather forecasts.


1. You may use any 3rd party weather api you feel comfortable with

2. The web application should receive a single selection from a drop down box of cities. You are free to populate this drop down box in any way you wish

3. The console application should be able to receive a comma delimited list of cities

4. Both the web application and the console application need to deal with invalid inputs and errors gracefully.

5. The solution must be built in Laravel, using Tailwind CSS and React for any front end CSS or javascript work.

6. The submission should be production ready code, and should be maintainable and extensible.

7. Your submission should include a readme file with instructions for installation and execution of your solution as well as a brief summary of the assumptions and design decisions made.

8. Please submit your submission via Github, bitbucket or some other online version control system.

### Planning

- Web service will consume data from API service
- API service will store location data locally
- Weather data fetched from 3rd party service

### Task List

- ~~Create docker environments~~
    - ~~DB (MariaDB)~~
    - ~~API (Laravel 9)~~
    - ~~Web (React)~~
- ~~Create Location Model/Controller~~
- ~~Location data API response (/api/weather)~~
- Integrate PHPUnit
- Create Location Factory
- Integrate upsteream (external) weather API
- Tailwind CSS setup
- Create React layouts/components

#### Installation Instructions

1. Clone the repository locally 
`git clone git@github.com:niallone/work-weather.git`
2. Bring up the docker containers
`docker-compose up -d`







