document.getElementById("id_version").innerHTML = "2019.12.02.1";

window.addEventListener("touchstart", touch_start_uab);
window.addEventListener("touchmove", touch_move_uab);

var canvas = document.getElementById("id_canvas");
var context = canvas.getContext("2d");

var last_position = [];

function touch_start_uab(p)
{
    var t = p.changedTouches;
    for(var i = 0; i < t.length; i++)
    {
        context.beginPath();
        context.arc(t[i].pageX, t[i].pageY, 10, 0, 2 * Math.PI);
        context.stroke();

        var touch_info = {};
        touch_info.x = t[i].pageX;
        touch_info.y = t[i].pageY;
        touch_info.id = t[i].identifier;

        last_position.push(touch_info);
    }
}

function touch_move_uab(p)
{
    var t = p.changedTouches;
    for(var i = 0; i < t.length; i++)
    {
        
    }
}