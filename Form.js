let person = prompt("Please Enter your Name");
if (person == null || person == "") {
  alert("No Name filled");
} else {
  alert("Hello " + person + "! How you doin'?");
}
function validateForm1() {
    let x = document.forms["form1"]["myName"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
let y= document.forms["form1"]["myContactNumber"].value;
  if (isNaN(y) || y < 1 || y > 10) {
    alert("Invalid Input");
  } else {
    alert("Valid Input");
  }
let z= document.forms["form1"]["myAadharNumber"].value;
  if (isNaN(z) || z < 1 || z > 10) {
    alert("Invalid Aadhar Number");
  } else {
    alert("Valid Input");
  }
let zx= document.forms["form1"]["myAge"].value;
  if (isNaN(zx) || zx < 1 || zx > 100) {
    alert("Invalid Age");
  } else {
    alert("Valid Input");
  }
  let zxy= document.forms["form1"]["myCvv"].value;
  if (isNaN(zxy) || zxy < 1 || zxy > 1000) {
    alert("Invalid CVV");
  } else {
    alert("Valid Input");
  }
}
  