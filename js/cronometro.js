var countDownDate = new Date("Nov 06, 2017 09:00:00").getTime();

var x = setInterval(function() {

    var now = new Date().getTime();
    
    var distance = countDownDate - now;
    
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById("dia").innerHTML = days + "d ";
    document.getElementById("hora").innerHTML = hours + "h ";
    document.getElementById("minuto").innerHTML = minutes + "m ";
    document.getElementById("segundo").innerHTML = seconds + "s ";
    
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("dia").innerHTML = 0 + "d ";
        document.getElementById("hora").innerHTML = 0 + "h ";
        document.getElementById("minuto").innerHTML = 0 + "m ";
        document.getElementById("segundo").innerHTML = 0 + "s ";
    }
}, 1000);