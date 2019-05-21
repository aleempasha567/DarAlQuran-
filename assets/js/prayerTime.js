$(document).ready(function () {
  $('#prayerTimings').hide();
  getLocation();
});
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else {
    alert('Geolocation is not supported by this browser.');
  }
}

function showPosition(position) {
  var lat = position.coords.latitude;
  var long = position.coords.longitude;
  var timeStamp = Math.round(+new Date() / 1000);
  var method = 4;
  var url = 'https://api.aladhan.com/v1/timings/' + timeStamp + '?latitude=' + lat + '&longitude=' + long + '&method=' + method;
  $.get(url, function (result) {
    var Fajr = convertTo12Hour(result.data.timings.Fajr).split(' ');
    $('#prayerTimings .item:eq(0)').append('<span> <span class="time">' + Fajr[0] + '</span> | ' + Fajr[1] + ' </span>');
    var Dhuhr = convertTo12Hour(result.data.timings.Dhuhr).split(' ');
    $('#prayerTimings .item:eq(1)').append('<span> <span class="time">' + Dhuhr[0] + '</span> | ' + Dhuhr[1] + ' </span>');
    var Asr = convertTo12Hour(result.data.timings.Asr).split(' ');
    $('#prayerTimings .item:eq(2)').append('<span> <span class="time">' + Asr[0] + '</span> | ' + Asr[1] + ' </span>');
    var Maghrib = convertTo12Hour(result.data.timings.Maghrib).split(' ');
    $('#prayerTimings .item:eq(3)').append('<span> <span class="time">' + Maghrib[0] + '</span> | ' + Maghrib[1] + ' </span>');
    var Isha = convertTo12Hour(result.data.timings.Isha).split(' ');
    $('#prayerTimings .item:eq(4)').append('<span> <span class="time">' + Isha[0] + '</span> | ' + Isha[1] + ' </span>');
    $('#prayerTimings').show();
    var prayerArray = [result.data.timings.Fajr, result.data.timings.Dhuhr, result.data.timings.Asr, result.data.timings.Maghrib, result.data.timings.Isha];
    nextPrayer(prayerArray);
  });
}
function showError(error) {
  switch (error.code) {
    case error.PERMISSION_DENIED:
      alert("User denied the request for Geolocation.");
      break;
    case error.POSITION_UNAVAILABLE:
      alert("Location information is unavailable.");
      break;
    case error.TIMEOUT:
      alert("The request to get user location timed out.");
      break;
    case error.UNKNOWN_ERROR:
      alert("An unknown error occurred.");
      break;
  }
}
function convertTo12Hour(oldFormatTime) {
  var oldFormatTimeArray = oldFormatTime.split(":");

  var HH = parseInt(oldFormatTimeArray[0]);
  var min = oldFormatTimeArray[1];

  var AMPM = HH >= 12 ? "PM" : "AM";
  var hours;
  if (HH == 0) {
    hours = HH + 12;
  } else if (HH > 12) {
    hours = HH - 12;
  } else {
    hours = HH;
  }
  var newFormatTime = hours + ":" + min + " " + AMPM;
  return newFormatTime;
}
function nextPrayer(prayerTimes) {
  for (i = 0; i < 5; i++) {
    var timeLeft = '';
    var now = new Date();
    var currentTime = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();
    var distance = (new Date("1970-1-1 " + prayerTimes[i]) - new Date("1970-1-1 " + currentTime));
    if (distance >= 1) {
      var hours = Math.floor((distance / 86400000) * 24);
      var minutes = Math.floor((distance % 3600000) / 60000);
      var seconds = Math.floor((distance / 1000) % 60);
      timeLeft = hours + ' HRS ' + minutes + ' MINS ' + seconds + ' SEC ';
      $('#timeLeftHours').html(hours + ' <span> h</span>');
      $('#timeLeftMinutes').html(minutes + ' <span> m</span>');
      $('#timeLeftSeconds').html(seconds + ' <span> s</span>');
      setTimeout(function () { nextPrayer(prayerTimes); }, 500);
      return 1;
    }
  }
}
