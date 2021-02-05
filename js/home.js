  
const hamburger = document.querySelector('.hamburger');
const ul = document.querySelector('.header ul');
const steps = document.getElementById('steps');
const tabs = document.querySelector('.tabs');
const submitBtn = document.getElementById("submit-btn")
const deleteBtn = document.getElementById("delete-btn")
const nextBtn = document.getElementById("next-btn")
const prevBtn = document.getElementById("prev-btn")
const addMoreBtn = document.getElementById("add-more-btn")
const currentPage = document.getElementById("currentPage")
const maxPage = document.getElementById("maxPage")
var currentTab = 0; // Current tab is set to be the first tab (0)
currentPage.textContent = currentTab+1;
maxPage.textContent = "/ "+tabs.childElementCount;
let p = 1;
var counter = 1;

hamburger.addEventListener('click',()=>{
    if(hamburger.classList.contains('open'))
    {
      console.log(hamburger);
        hamburger.classList.remove('open');
        ul.classList.remove('active');
    }
    else
    {
        hamburger.classList.add('open')
        ul.classList.add('active')
    }

})
const radio1 = document.getElementById("radio-1");
const radio2 = document.getElementById("radio-2");
const radio3 = document.getElementById("radio-3");
const radio4 = document.getElementById("radio-4");
const radios = [
    radio1,radio2,radio3,radio4
]

radios.forEach(radio => {
    radio.addEventListener('click',()=>{
        var res = radio.id.split("-");
        counter = res[1];
    })
});
setInterval(() => {
    document.getElementById('radio-'+counter).checked = true;
    counter++;
    if(counter>4)
    counter=1  
  },5000);
  
  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.querySelector(".request");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var deleteModal = document.getElementById('delete-modal');
var span1 = document.getElementsByClassName("close")[1];
const no = document.getElementById("no")
const yes = document.getElementById("yes")

deleteBtn.onclick = function() {
  deleteModal.style.display = "block";
}
span1.onclick = function() {
  deleteModal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == deleteModal) {
    deleteModal.style.display = "none";
  }
}

yes.onclick = function(){
  deleteModal.style.display = "none";
  delete_page();
}
no.onclick = function(){
  deleteModal.style.display = "none";
}


submitBtn.onclick = function(){
  var values = submitValidation();
  console.log(values);
  if(values[1]===false){
    //prev
    if(values[0] < currentTab){
        while(currentTab != values[0])  nextPrev(-1,true);
      
    }
    //next
    else if(values[0] > currentTab){
      while(currentTab != values[0]) nextPrev(1,true);
    }
    return;
  }
  else{
    submitBtn.type ="submit"
    submitBtn.click();

  }

}




//Request

showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var tab = document.getElementsByClassName("tab");
  tab[n].style.display = "block";
  if(tabs.childElementCount >2)
  {
    deleteBtn.style.display ="inline";
  }
  else{
    deleteBtn.style.display ="none";
  }
  //... and fix the Previous/Next buttons:
 
  if (n == 0) {
    prevBtn.style.display = "none";
    addMoreBtn.style.display ="none";
    deleteBtn.style.display ="none";
    submitBtn.style.display = "none";
    nextBtn.style.display ="inline";
  } else {
    //on last page
    if(n === tab.length-1){
      nextBtn.style.display ="none";
      addMoreBtn.style.display ="inline";
  
    }
    else {
      nextBtn.style.display ="inline";
      addMoreBtn.style.display ="none";
    }
    prevBtn.style.display = "inline";
    if(tab.length > 2)
    submitBtn.style.display ="inline";
    else
    submitBtn.style.display ="none";
  }
  
  //... and run a function that will display the correct step indicator:
}


function nextPrev(n,validate) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if(validate){
    validateForm();
  
 
  var y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value != "") {
      // add an "invalid" class to the field:
      y[i].classList.remove("invalid");
      // and set the current valid status to false
    }
  }

    // Hide the current tab:
  x[currentTab].style.display = "none";
}
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  currentPage.textContent = currentTab+1;
  maxPage.textContent = "/ "+tabs.childElementCount;
  // Otherwise, display the correct tab:
  showTab(currentTab);  

}


function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].classList.add("invalid")
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:

  return valid; // return the valid status
}


function addMoreMenu(n){
   // This function will figure out which tab to display
   var x = document.getElementsByClassName("tab");
   var tabs = document.createElement('div');
   tabs.className ='tab';
   p++;
   tabs.innerHTML += generate_tab();
   
   
   // Exit the function if any field in the current tab is invalid:
    validateForm();
   t = document.querySelector('.tabs');
   t.appendChild(tabs);

   // Hide the current tab:
   x[currentTab].style.display = "none";
   x[currentTab].classList.add("finished");
   // Increase or decrease the current tab by 1:
   var y = x[currentTab].getElementsByTagName("input");
   for (i = 0; i < y.length; i++) {
     // If a field is empty...
     if (y[i].value != "") {
       // add an "invalid" class to the field:
       y[i].classList.remove("invalid");
       // and set the current valid status to false
     }
   }
 
   currentTab = currentTab + n;
   currentPage.textContent = currentTab+1;
   maxPage.textContent = "/ "+t.childElementCount;
   // if you have reached the end of the form...
   if (currentTab >= x.length) {
     // ... the form gets submitted:
     document.getElementById("regForm").submit();
     return false;
   }
   // Otherwise, display the correct tab:
   showTab(currentTab);

   
}

function submitValidation(){
  var tab = document.getElementsByClassName("tab");
  validateForm();
  for(i = 0 ; i < tab.length ;i++){
    var input = tab[i].getElementsByTagName("input");
    for(j = 0 ; j < input.length ;j++){
      if(input[j].value !=""){
        input[j].classList.remove("invalid")
      }
      if(input[j].classList.contains("invalid"))
      return[i,false]
    }
  }
  return true;

}

function delete_page(){
  var parentTab = document.querySelector('.tabs');
  var tabs = document.getElementsByClassName("tab");
  if(tabs.length > 2)
  parentTab.removeChild(tabs[currentTab]);
  nextPrev(-1,false)
  
}
function generate_tab(){
  return `<h1>Menu</h1>
  <label for="menu-name[]">Menu Name:</label>
  <input type="text" class="menu-name" name="menu-name[]" required>
  <label for="menu-category[]">Menu Category(Food/Drinks/Appetizer/etc):</label>
  <input type="text" class="menu-category" name="menu-category[]" required>
  <label for="menu-short-desc[]">Short Desc</label>
  <input type="text" class="menu-short-desc" name="menu-short-desc[]">
  <label for="menu-price[]">Price</label>
  <input type="text" class="menu-price"name="menu-price[]">
  <label for="files-${p}[]">Select images to upload:</label>
  <input type="file" name="files-${p}[]" class="menu-image" multiple required>`;
}

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    
  }
}

function showPosition(position) {
 console.log(position.coords.latitude)
 console.log(position.coords.longitude)
}