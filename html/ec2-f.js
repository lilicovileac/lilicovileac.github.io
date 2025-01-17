
document.getElementById("id_logic_version").innerHTML = "logic verions = 2019.10.14.2";
document.getElementById("id_button").addEventListener("click", solve_eq2);

function read_coefficients()
{
    var a = document.getElementById("id_a").value;
    var b = document.getElementById("id_b").value;
    var c = document.getElementById("id_c").value;

    var coef = {};
    coef.a =a;
    coef.b =b;
    coef.c =c;
    return coef;
}

function compute_solutions(coef)
{
    var delta = coef.b * coef.b - 4 * coef.a * coef.c;
    var x1_im, x1_re, x2_im, x2_re;
    if(delta >= 0)
    {
         x1_re = (- coef.b - Math.sqrt(delta)) / (2* coef.a);
         x2_re = (-coef.b + Math.sqrt(delta)) / (2* coef.a);
         x1_im = 0;
         x2_im = 0;
    }
    else{
        x1_re = (- coef.b) / (2* coef.a);
        x2_re = (- coef.b) / (2* coef.a);
        x1_im = - Math.sqrt(-delta) / (2* coef.a);
        x2_im = + Math.sqrt(-delta) / (2*coef.a);
    }
    var solutions= {};
    solutions.x1_re = x1_re;
    solutions.x1_im = x1_im;
    solutions.x2_re = x2_re;
    solutions.x2_im = x2_im;

        return solutions;
}

function print_solutions(solutions)
{
    document.getElementById("id_x1").innerHTML = "x1 = " + solutions.x1_re + "+" + solutions.x1_im + "i";
    document.getElementById("id_x2").innerHTML = "x2 = " + solutions.x2_re + "+" + solutions.x2_im + "i";


}
function solve_eq2()
{
   var coef = read_coefficients();
   var solutions = compute_solutions(coef);
   print_solutions(solutions);

}