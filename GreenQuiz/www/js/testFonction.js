document.getElementsByClassName('answers').onclick = function () {
    if (Calc.Input.value == '' || Calc.Input.value == '0') {
        window.alert("Please enter a number");
    } else {
        document.getElementById('dropbutton').value = ' Justera längd ';
        document.getElementById('length').innerHTML = Calc.Input.value;
        document.getElementById('dropbutton').style.backgroundColor = '#FFF6B3';
    }
    return false;
}
