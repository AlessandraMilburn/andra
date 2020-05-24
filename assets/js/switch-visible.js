function switchVisible1() {
    document.getElementById('section1').style.display = 'block';
    document.getElementById('section2').style.display = 'none';
    document.getElementById('button1').classList.add("pink-hl");
    document.getElementById('button2').classList.add("light-grey");
    document.getElementById('button1').classList.remove("light-grey");
    document.getElementById('button2').classList.remove("pink-hl");
}

function switchVisible2() {
    document.getElementById('section1').style.display = 'none';
    document.getElementById('section2').style.display = 'block';
    document.getElementById('button1').classList.remove("pink-hl");
    document.getElementById('button1').classList.add("light-grey");
    document.getElementById('button2').classList.remove("light-grey");
    document.getElementById('button2').classList.add("pink-hl");

}

