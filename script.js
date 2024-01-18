// WYSWIETLANIE I CHOWANIE OKIENKA Z FORMULARZEM DO LOGOWANIA

   document.getElementById('loginbutton').addEventListener('click', function() {
    document.getElementById('loginContainer').style.display = 'block';
  });
  

  document.getElementById('x').addEventListener('click', function() {
    document.getElementById('loginContainer').style.display = 'none';
  });
  

  // FUNKCJA DO WYLOGOWYWANIA USERA

  function logout() {
    window.location.href = 'logout.php';
  }


  // API POGODOWE
  // const apiKey = "ae93da6dc40f25a8ecf55edfc0166600";
  // const apiUrl = "https://api.openweathermap.org/data/2.5/weather?appid=" + apiKey;
  
  // const searchBox = document.querySelector(".header-middle input");
  // const searchButton = document.querySelector(".header-middle button");
  // const weathericon = document.querySelector(".weather-icon");
  
  // searchButton.addEventListener("click", function() {
  //   const coordinates = searchBox.value.split(" ");
  //   const lat = coordinates[0];
  //   const lon = coordinates[1];
  //   checkWeather(lat, lon);
  // });
  
  // async function checkWeather(lat, lon) {
  //   const response = await fetch(apiUrl + "&lat=" + lat + "&lon=" + lon);
  
  //   if (response.status == 404) {
  //     document.querySelector(".error").style.display = "block";
  //     document.querySelector(".pogodawmiejscu").style.display = "none";
  //   } else {
  //     var data = await response.json( );
  
  //     console.log(data);
  
  //     document.querySelector(".city").innerHTML = data.name;
  //     document.querySelector(".temp").innerHTML = data.main.temp + "°C";
  //     document.querySelector(".humidity").innerHTML = data.main.humidity + "%";
  //     document.querySelector(".wind").innerHTML = data.wind.speed + " km/h";
  
  //     // const weathericon = document.querySelector(".weather-icon");

  //     // if (data.weather[0].main == "Clouds") {
  //     //   weathericon.classList = "fa-light fa-clouds";
  //     // } else if (data.weather[0].main == "Clear") {
  //     //   weathericon.classList = "fa-light fa-sun-bright";
  //     // } else if (data.weather[0].main == "Rain") {
  //     //   weathericon.classList = "fa-light fa-cloud-rain";
  //     // } else if (data.weather[0].main == "Drizzle") {
  //     //   weathericon.classList = "fa-light fa-cloud-drizzle";
  //     // } else if (data.weather[0].main == "Mist") {
  //     //   weathericon.classList = "fa-light fa-cloud-fog";
  //     // }
  
  //     document.querySelector(".pogodawmiejscu").style.display = "block";
  //     document.querySelector(".error").style.display = "none";
  //   }
  // }
  


  // searchButton.addEventListener("click", ()=>{
  //   checkWeather(searchBox.value);
  // });
 
  
  
