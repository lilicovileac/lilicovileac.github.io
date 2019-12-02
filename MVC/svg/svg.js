window.addEventListener("deviceorientation", on_gyro_data_uab);
window.addEventListener("devicemotion", on_acc_data_uab);

function deseneaza(unghi_x, unghi_y)
{
    var circle = document.getElementById("id_circle");
    var svg = document.getElementById("id_svg")
    var r = circle.getAttribute("r");
    
    var x = unghi_x / 90 * (svg.width.animVal.value / 2 - r  ) + svg.width.animVal.value / 2;
    var y = unghi_y / 90 * (svg.height.animVal.value / 2 - r  ) + svg.height.animVal.value / 2;


    circle.setAttribute("cx", x + "px");
    circle.setAttribute("cy", y + "px");
}

function on_gyro_data_uab(e)
{
    deseneaza(e.beta, e.gamma);
}
function on_acc_data_uab(e)
{
    var acc = e.accelerationIncludingGravity;

    var rot_x = Math.atan(acc.x/acc/z) * 180 / Math.PI;
    var rot_y = Math.atan(acc.x/acc/z) * 180 / Math.PI;
}