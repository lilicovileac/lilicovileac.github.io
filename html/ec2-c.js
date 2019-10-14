
document.getElementById("id_logic_version").innerHTML = "logic verions = 2019.10.14.4";
document.getElementById("id_button").addEventListener("click", solve_eq2);

class t_eq2
{
    a;
    b;
    c;
    x1_im;
    x1_re;
    x2_im;
    x2_re;
    
    read_coefficients ()
    {
        a = document.getElementById("id_a").value;
        b = document.getElementById("id_b").value;
        c = document.getElementById("id_c").value;
    }

    compute_solutions()
    {
        var delta = b * b - 4 * a * c;
        if(delta >= 0)
        {
            x1_re = (-b - Math.sqrt(delta)) / (2* a);
            x2_re = (-b + Math.sqrt(delta)) / (2* a);
            x1_im = 0;
            x2_im = 0;
        }
        else{
            x1_re = (-b) / (2* a);
            x2_re = (-b) / (2* a);
            x1_im = - Math.sqrt(-delta) / (2* a);
            x2_im = + Math.sqrt(-delta) / (2* a);
        }
    }

    print_solutions()
    {
        document.getElementById("id_x1").innerHTML = "x1 = " + x1_re + "+" + x1_im + "i";
        document.getElementById("id_x2").innerHTML = "x2 = " + x2_re + "+" + x2_im + "i";


    }
}


function solve_eq2()
{ 

    var eq2 = new t_eq2();
    t_eq2.read_coefficients();
    t_eq2.compute_solutions();
    t_eq2.print_solutions();

}
