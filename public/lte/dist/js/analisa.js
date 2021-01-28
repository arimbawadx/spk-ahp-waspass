document.getElementById('k1b1').value = 1;
document.getElementById('k1b1').className = 'bg-black';
document.getElementById('k1b1').readOnly = true;

document.getElementById('k2b2').value = 1;
document.getElementById('k2b2').className = 'bg-black';
document.getElementById('k2b2').readOnly = true;

document.getElementById('k3b3').value = 1;
document.getElementById('k3b3').className = 'bg-black';
document.getElementById('k3b3').readOnly = true;

document.getElementById('k4b4').value = 1;
document.getElementById('k4b4').className = 'bg-black';
document.getElementById('k4b4').readOnly = true;




document.getElementById("k1b2").placeholder = "AUTO";
document.getElementById('k1b2').readOnly = true;

document.getElementById("k1b3").placeholder = "AUTO";
document.getElementById('k1b3').readOnly = true;

document.getElementById("k1b4").placeholder = "AUTO";
document.getElementById('k1b4').readOnly = true;

document.getElementById("k2b3").placeholder = "AUTO";
document.getElementById('k2b3').readOnly = true;

document.getElementById("k2b4").placeholder = "AUTO";
document.getElementById('k2b4').readOnly = true;

document.getElementById("k3b4").placeholder = "AUTO";
document.getElementById('k3b4').readOnly = true;





function changeOtomatic() {
	var changek1b2 = document.getElementById("k2b1").value;
    document.getElementById("k1b2").value = 1/changek1b2;

    var changek1b3 = document.getElementById("k3b1").value;
    document.getElementById("k1b3").value = 1/changek1b3;

    var changek1b4 = document.getElementById("k4b1").value;
    document.getElementById("k1b4").value = 1/changek1b4;

    var changek2b3 = document.getElementById("k3b2").value;
    document.getElementById("k2b3").value = 1/changek2b3;

    var changek2b4 = document.getElementById("k4b2").value;
    document.getElementById("k2b4").value = 1/changek2b4;

    var changek3b4 = document.getElementById("k4b3").value;
    document.getElementById("k3b4").value = 1/changek3b4;

}