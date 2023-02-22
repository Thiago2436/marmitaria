function initMap() {
    let mapOptions = new google.maps.Map(
      document.getElementById("mapa-localizacao"),
      {
        center: new google.maps.LatLng(-30.05398562745279, -51.199959785841554),
        zoom: 14,
      }
    );
  }