 function countdown() {
    var now = new Date();
    var eventDate = new Date(2022, 11, 19);

    var currentTiime = now.getTime();
    var eventTime = eventDate.getTime();

    var remTime = eventTime - currentTiime;

    if (remTime <= 0) {
        document.getElementById('countdownContainer').style.display = 'none';
        document.getElementById('greetingMsg').style.display = '';
        return;
    }

    var s = Math.floor(remTime / 1000);
    var m = Math.floor(s / 60);
    var h = Math.floor(m / 60);
    var d = Math.floor(h / 24);
    var y = Math.floor(d / 365);

    h %= 24;
    m %= 60;
    s %= 60;

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    document.getElementById("days").textContent = d;
    document.getElementById("days").innerText = d;
    document.getElementById("years").textContent = y;
    document.getElementById("years").innerText = y;

    document.getElementById("hours").textContent = h;
    document.getElementById("minutes").textContent = m;
    document.getElementById("seconds").textContent = s;

    setTimeout(countdown, 1000);
}

countdown();