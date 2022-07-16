
// jquery code to solve the problem of (dropdown menue not working)
$('.dropdown').click(function(){
  $('.dropdown-menu').toggleClass('show');
 })
 
 //  active |& background color
 $(".collapse ul li").click(function(){
   $(this).children().toggleClass("blue")
   $(this).siblings().children().removeClass("active")
   $(this).siblings().children().removeClass("blue")
   $(this).siblings().children().removeClass("show")
   })
 
 
   // menue
 $(".login-dropdown ").mouseleave(function(){
     $(".dropdown-menu").removeClass("show")
     })
     
     $(".department-dropdown ").mouseleave(function(){
       $(".dropdown-menu").removeClass("show")
       })

var nameInput=document.getElementById("nameInput");
var emailInput=document.getElementById("emailInput")
var passwordInput=document.getElementById("passwordInput");
var nationalIdInput=document.getElementById("nationalIdInput");
var classInput=document.getElementById("classInput")
var studentIdInput=document.getElementById("studentIdInput");


var inputs=document.getElementsByClassName("form-control");
var mainButn=document.getElementById("mainButn");

var studentContainer;
if (localStorage.getItem('myStudents')==null) {
  studentContainer=[];
}
else{
studentContainer= JSON.parse(localStorage.getItem('myStudents'));
displaystudents();
}


//  اللي هتحصل لما اضغط ع الزرارfunction
mainButn.onclick =function(){  
  addStudent();
  displaystudents();
  clearForm()
}

function deleteStudent(studentIndex){
  if(confirm('Are you sure to delete this record ?'))
  studentContainer.splice(studentIndex,1);
  localStorage.setItem('myStudents',JSON.stringify(studentContainer));
  displaystudents();

}


//  هاخد البيانات واحطها ف اوبجيت علشان يبقي سهل عليا اخزنها ف ارراي واخزنها ف تابل function
//function add
function addStudent(){
  var student={
    name:nameInput.value,
    email:emailInput.value,
    password:passwordInput.value,
    nationalId:nationalIdInput.value,
    class:classInput.value,
    studentId:studentIdInput.value,}
  
  studentContainer.push(student);
  localStorage.setItem('myStudents',JSON.stringify(studentContainer));
  clearForm();
  displaystudents();

}


//  هخزن الداتا بتاعتي ف تابل function
function displaystudents(){
  var catrtona="";
  for(var i=0;i<studentContainer.length;i++){
    catrtona+= ` <tr>
    <td>`+i+`</td>
    <td>`+studentContainer[i].name+`</td>
    <td>`+studentContainer[i].email+`</td>
    <td>`+studentContainer[i].password+`</td>
    <td>`+studentContainer[i].nationalId+`</td>
    <td>`+studentContainer[i].class+`</td>
   <td>`+studentContainer[i].studentId+`</td>
<td><button onclick="upDate(`+i+`)" class="btn updateBtn">Update</button></td>
<td><button onclick="deleteStudent(`+i+`)" class="btn deleteBtn"> Delete</button></td>
</tr>`
  }
  document.getElementById("tableBody").innerHTML=catrtona;
}


// هتعمل ريست كل مره  function
function clearForm(){
  for(var i=0;i< inputs.length;i++){
      inputs[i].value="";
  }
}


//  function البحث 
function search( searchTxt){
  var trs="";
 for( var i=0; i< studentContainer.length;i++){

   // filttur 
   //   INCLUDE  البحث هنا بالكابتال والسمال وبمجرد ما بكتب حرف بيظهر بسبب ال
      if( studentContainer[i].name.toLowerCase().includes(searchTxt.toLowerCase()) ){
      trs+=`
      <tr>
      <td> `+i+` </td>
        <td>${studentContainer[i].name }      </td>
        <td>${studentContainer[i].email}      </td> 
        <td>${studentContainer[i].password}   </td> 
        <td>${studentContainer[i].nationalId} </td> 
        <td>${studentContainer[i].class}      </td> 
        <td>${studentContainer[i].studentId}  </td>
        <td>  <button onclick="upDate(${i})" class="btn updateBtn" > Update</button></td>
        <td>
        <button onclick="deleteStudent(${i})" class="btn deleteBtn">Delete</button></td>
      </tr>`
  }
}
      document.getElementById("tableBody").innerHTML=trs;
 }

 



function upDate(studentIndex){
  nameInput.value=studentContainer[studentIndex].name;
  emailInput.value=studentContainer[studentIndex].email;
  passwordInput.value=studentContainer[studentIndex].password;
  nationalIdInput.value=studentContainer[studentIndex].nationalId;
  classInput.value=studentContainer[studentIndex].class;
  studentIdInput.value=studentContainer[studentIndex].studentId;
 
  
  
    
  
  
}

