let person = prompt("Please Enter your Name");
if (person == null || person == "") {
  alert("No Name filled");
} else {
  alert("Hello " + person + "! How you doin'?");
}
function validateForm() {
    let x = document.forms["form"]["username"].value;
    if (x == "") {
      alert("Please Enter Name");
      return false;
    }
let y= document.forms["form"]["password"].value;
  if (isNaN(y) || y <=1 || y > 1000000) {
    alert("Invalid Input");
  } else {
    alert("Valid Input");
  }
  let z=document.forms["form"]["confirm_password"].value;
  if(y != z)
  alert("Enter Confirm Password correctly!");
  else
  alert("Info Saved");
  let c=document.forms["form"]["address"].value;
  if(c=="")
  alert("Enter your Residential Address");
}