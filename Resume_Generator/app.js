


var loadFile = function (event) {
  var image = document.getElementById('output');
  image.src = URL.createObjectURL(event.target.files[0]);
};

var showinfo = function (event) {
  var x = document.getElementById('toggle');
  if (x.style.display == "none") {
    x.style.display = "block";
  }
  else {
    x.style.display = "none";
  }
};



(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {

        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')

      }, false)
    })

})()

//function to add multiple projects

function addnewproject() {

  let wholediv = document.getElementById('create');
  let textnode = document.createElement('textarea');
  let newnodein = document.createElement('input');
  let label1 = document.createElement("label");
  label1.innerHTML = "project Title";
  let label2 = document.createElement("label");
  label2.innerHTML = "project Description";
  let line = document.createElement('hr');

  newnodein.classList.add('form-control');
  textnode.classList.add('form-control');

  newnodein.setAttribute("name","proj[]")
textnode.setAttribute("name","proj[]")

line.classList.add('m-4')
line.style.width = '70%'
line.style.textAlign =':center'
console.log(line);

  let divnodein1 = document.createElement("div");
  let divnodein2 = document.createElement("div");
  let divnodetext1 = document.createElement("div");
  let divnodetext2 = document.createElement("div");

  divnodein1.classList.add('mt-2');
  divnodetext1.classList.add('mt-2');


  divnodein1.classList.add('col-md-4');
  divnodein2.classList.add('form-floating');
  divnodein1.appendChild(divnodein2);
  divnodein2.appendChild(newnodein);
  divnodein2.appendChild(label1)
  console.log(divnodein1);

  divnodetext1.classList.add('col-md-6');
  divnodetext2.classList.add('form-floating')
  divnodetext1.appendChild(divnodetext2)
  divnodetext2.appendChild(textnode)
  divnodetext2.appendChild(label2)
  console.log(divnodetext1);

  wholediv.append(line,divnodein1, divnodetext1)

  console.log(wholediv);

}
//end 

//Add Experience
function addexperience() {
  let addexp = document.getElementById('experience')
  let cnamediv1 = document.createElement('div')
  let cnamediv2 = document.createElement('div')
  let jrolediv1 = document.createElement('div')
  let jrolediv2 = document.createElement('div')
  let jdescdiv1 = document.createElement('div')
  let jdescdiv2 = document.createElement('div')
  let line =document.createElement('hr');
  console.log(line);

  let inputnode1 = document.createElement('input')
  let inputnode2 = document.createElement('input')

  let textnode1 = document.createElement('textarea')

inputnode1.setAttribute("name","exp[]")
inputnode2.setAttribute("name","exp[]")
textnode1.setAttribute("name","exp[]")


  let label1 = document.createElement("label");
  label1.innerHTML = "Company Name";

  let label2 = document.createElement("label");
  label2.innerHTML = "Job Role";

  let label3 = document.createElement("label");
  label3.innerHTML = "Job Description";
  inputnode1.classList.add('form-control')
  inputnode2.classList.add('form-control')
  textnode1.classList.add('form-control')

  line.classList.add('m-4')
  line.style.width = '70%'
  line.style.textAlign =':center'

  cnamediv1.classList.add('col-md-6')
  cnamediv2.classList.add('form-floating')
  cnamediv1.classList.add('mt-2')

  jrolediv1.classList.add('col-md-4')
  jrolediv2.classList.add('form-floating')
  jrolediv1.classList.add('mt-2')

  jdescdiv1.classList.add('col-md-12')
  jdescdiv2.classList.add('form-floating')
  jdescdiv1.classList.add('mt-2')


  cnamediv1.appendChild(cnamediv2)
  cnamediv2.appendChild(inputnode1)
  cnamediv2.appendChild(label1)
  console.log(cnamediv1)

  jrolediv1.appendChild(jrolediv2)
  jrolediv2.appendChild(inputnode2)
  jrolediv2.appendChild(label2)
  console.log(jrolediv1)

  jdescdiv1.appendChild(jdescdiv2)
  jdescdiv2.appendChild(textnode1)
  jdescdiv2.appendChild(label3)
  console.log(jdescdiv1)

  addexp.append(line,cnamediv1, jrolediv1, jdescdiv1);
  console.log(addexp)

}



var count=0;

function createNew(evt) {
  $('#education')
  .append(
    '<hr class="m-4 " style="width:70%; text-align:center;"><div class="col-md-6 mt-2"> <div class="form-floating">\
  <input type="text" class="form-control educa" id="inputEmail4" name="col[]" value="0">\
      <label class="ladesc2">Collage Name</label>\
  </div>\
</div>\
<div class="col-md-4 mt-2">\
  <div class="form-floating">\
      <input type="text" class="form-control educa" name="col[]" id="inputPassword4">\
      <label class="ladesc2">Course and Branch</label>\
  </div>\
</div>\
<div class="col-md-6 mt-2">\
  <div class="form-floating">\
      <input type="text" class="form-control educa" name="col[]" id="inputPassword4">\
      <label class="ladesc2">GPA</label>\
  </div>\
</div>\
<div class="col-md-4 mt-2">\
  <div class="form-floating">\
      <input type="text" class="form-control educa" id="inputPassword4" name="col[]">\
      <label class="ladesc2">Year Of Passing</label>\
  </div>\
</div>')

var inputlength = $("input[type='text']").length;
console.log(inputlength)
}