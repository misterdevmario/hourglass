// window.addEventListener('load', ()=>{

//     let long;
//     let lat;
//     let temperatureDescription = document.querySelector('.temperature-description');
//     let temperatureDegree = document.querySelector('.temperature-degree');
//     let locationTimezone = document.querySelector('.location-timezone');
//     let iconElement = document.querySelector('.weather-icon');

//     if(navigator.geolocation){
//         navigator.geolocation.getCurrentPosition(position =>{
//             long = position.coords.longitude;
//             lat = position.coords.latitude;

//             const APP_ID = '6f3236b2f990e60026f119ad3a13b819';
//             const api = `http://api.openweathermap.org/data/2.5/weather?lat=${22.89088}&lon=${-109.91238}&units=imperial&appid=${APP_ID}`;

//             fetch(api)
//             .then(response =>{
//                 return response.json();
//             })
//             .then(data =>{
//                 console.log(data);

//                 // weather.iconId = data.weather[0].icon;
//                 temperatureDegree.textContent =data.main.temp;
//                 temperatureDescription.textContent = data.weather[0].main;
//                 locationTimezone.textContent = data.name;
//                 // iconElement.innerHTML = `<img src="weather-icons/${weather.iconId}.png"/>`;
//                 iconElement.innerHTML = data.weather[0].icon;

//             })
//         });

//     }

// });

const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".temperature-description p");
const locationElement = document.querySelector(".location p");
const notificationElement = document.querySelector(".notification");

const weather = {};

weather.temperature = {
    unit: "celsius",
};

const KELVIN = 273;

const key = "6f3236b2f990e60026f119ad3a13b819";

if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(setPosition, showError);
} else {
    notificationElement.style.display = "block";
    notificationElement.innerHTML =
        "<p>Browser doesn't Support Geolocation</p>";
}

function setPosition(position) {
    let latitude = position.coords.latitude;
    let longitude = position.coords.longitude;

    getWeather(latitude, longitude);
}

function showError(error) {
    notificationElement.style.display = "block";
    notificationElement.innerHTML = `<p> ${error.message} </p>`;
}

function getWeather(latitude, longitude) {
    let api = `https://api.openweathermap.org/data/2.5/weather?lat=${22.89088}&lon=${-109.91238}&appid=${key}`;

    fetch(api)
        .then(function (response) {
            let data = response.json();
            console.log(data);
            return data;
        })
        .then(function (data) {
            weather.temperature.value = Math.floor(data.main.temp - KELVIN);
            weather.description = data.weather[0].description.toUpperCase();
            weather.iconId = data.weather[0].icon;
            weather.city = data.name.toUpperCase();
        })
        .then(function () {
            displayWeather();
        });
}

function displayWeather() {
    iconElement.innerHTML = `<img src="images/Icons/${weather.iconId}.png"/>`;
    tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
    descElement.innerHTML = weather.description;
    locationElement.innerHTML = `${weather.city} `;
}

function celsiusToFahrenheit(temperature) {
    return (temperature * 9) / 5 + 32;
}

tempElement.addEventListener("click", function () {
    if (weather.temperature.value === undefined) return;

    if (weather.temperature.unit == "celsius") {
        let fahrenheit = celsiusToFahrenheit(weather.temperature.value);
        fahrenheit = Math.floor(fahrenheit);

        tempElement.innerHTML = `${fahrenheit}°<span>F</span>`;
        weather.temperature.unit = "fahrenheit";
    } else {
        tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
        weather.temperature.unit = "celsius";
    }
});
