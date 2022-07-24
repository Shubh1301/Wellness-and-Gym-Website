window.setTimeout(alert("Welcome to FitKnight!"),2000);
// let person = prompt("Please Enter your Name");
// if (person == null || person == "") {
//   alert("No Name filled");
// } else {
//   alert("Hello " + person + "! How you doin'?");
// }
function validateForm2() {
    let x = document.forms["form2"]["username"].value;
    if (x == "") {
      alert("Please Enter Name");
      return false;
    }
}