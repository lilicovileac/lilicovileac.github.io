document.getElementById("id_version").innerHTML = "2019.12.02.1";

window.addEventListener("touchstart", touch_start_uab);
window.addEventListener("touchmove", touch_move_uab);

var canvas = document.getElementById("id_canvas");
var context = canvas.getContext("2d");

var last_position = [];

function get_random_color()
{
    var culoare = "#";
    var caractere = "0123456789ABCDEF";
    for(var i=0; i< 6; i++)
    {
        culoare += caractere[Math.floor(Math.random() * 16)];
    }
    return culoare;
}

function touch_start_uab(p)
{
    var t = p.changedTouches;
    for(var i = 0; i < t.length; i++)
    {   var touch_info = {};
        touch_info.x = t[i].pageX;
        touch_info.y = t[i].pageY;
        touch_info.id = t[i].identifier;
        touch_info.color = get_random_color();

        context.beginPath();
        context.arc(t[i].pageX, t[i].pageY, 10, 0, 2 * Math.PI);
        context.strokeStyle = touch_info.color;
        context.fillStyle = touch_info.color;
        context.lineWidth = 1;
        context.fill();
        context.stroke();

        

        last_position.push(touch_info);
    }
}

function touch_move_uab(p)
{
    var t = p.changedTouches;
    for(var i = 0; i < t.length; i++)
    {
        var index_touch = -1;
        for(var j = 0; j < last_position.length; j++ )
        {
            if (last_position[j].id == t[i].identifier)
            {
                index_touch = j;
                break;
            }
        }

        context.beginPath();
        context.moveTo(last_position[index_touch].x, last_position[index_touch].y);
        context.lineTo(t[i].pageX, t[i].pageY);
        context.strokeStyle =last_position[index_touch].color;
        context.fillStyle = last_position[index_touch].color;
        context.lineWidth = 20;
        context.fill();
        context.stroke();

    }
}