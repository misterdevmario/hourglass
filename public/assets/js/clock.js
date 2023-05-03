days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
];
arrToUp = String.prototype.toUpperCase.apply(days).split(",");

months = [
    "JANUARY",
    "FEBRUARY",
    "MARCH",
    "APRIL",
    "MAY",
    "JUNE",
    "JULY",
    "AUGUST",
    "SEPTEMBER",
    "OCTOBER",
    "NOVEMBER",
    "DECEMBER",
];

date_data = new Date();

current_day = date_data.getDay();

document.getElementById("dayname").textContent = arrToUp[current_day];

current_month = date_data.getMonth();
current_date = date_data.getDate();
current_year = date_data.getFullYear();
document.getElementById(
    "date"
).textContent = `${months[current_month]}, ${current_date}, ${current_year}`;

current_hour = date_data.getHours();
current_minute = date_data.getMinutes();

am_pm = "";

if (current_hour >= 12) {
    am_pm = "PM";
    current_hour = current_hour - 12;
} else {
    am_pm = "AM";
}
if (current_hour == 0) {
    current_hour = 12;
}
document.getElementById(
    "clock"
).textContent = `${current_hour} : ${current_minute} ${am_pm} `;
