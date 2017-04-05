ymaps.ready(init);
  function init() {
    var geolocation = ymaps.geolocation;
    if (geolocation.city) {
      $("#custom-city").val(geolocation.city);
      $(".first-step #select-city").prop('disabled', true).niceSelect("update");
      $(".first-step #radio2").prop("checked", true)
    } else {
      console.log('Не удалось установить местоположение');
    }
  };