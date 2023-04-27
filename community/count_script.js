let valuedisplays =  document.querySelectorAll(".num");
let interval = 4000;
console.log(valuedisplays);
valuedisplays.forEach((valuedisplay) => {
    let startvalue = 0;
    let endvalue = parseInt(valuedisplay.getAttribute
        ("data-val"));
    let duration = Math.floor(interval / endvalue);
    let counter= setInterval(function () {
        startvalue += 1;
        valuedisplay.textContent = startvalue;
        if (startvalue == endvalue){
            clearInterval (counter);
        }
    }, duration);

});