let i = 1,
  j = 1;
function addnewfield() {
  let tmbhDt = document.querySelector("#abtn");
  let par = document.querySelector(".sets");

  const setbr = document.createElement("div");
  setbr.setAttribute("class", "set");
  setbr.classList.add("mt-5");
  const setform = document.createElement("form");
  const setnrow1 = document.createElement("div");
  setnrow1.classList.add("row");
  const setncol1 = document.createElement("div");
  setncol1.classList.add("col-6");
  const setmb = document.createElement("div");
  setmb.classList.add("mb-3");
  const setlabel = document.createElement("label");
  setlabel.classList.add("form-label");
  setlabel.setAttribute("for", "wejobttl" + i);
  const tnodelabel = document.createTextNode("Job Title");
  setlabel.appendChild(tnodelabel);
  const setinput = document.createElement("input");
  setinput.classList.add("form-control");
  setinput.setAttribute("type", "text");
  setinput.setAttribute("id", "wejobttl" + i);

  const setncol2 = document.createElement("div");
  setncol2.classList.add("col-6");
  const setmb2 = document.createElement("div");
  setmb2.classList.add("m-auto");
  const setlabel2 = document.createElement("label");
  setlabel2.classList.add("form-label");
  setlabel2.setAttribute("for", "wecname" + i);
  const tnodelabel2 = document.createTextNode("Company name");
  setlabel2.appendChild(tnodelabel2);
  const setinput2 = document.createElement("input");
  setinput2.classList.add("form-control");
  setinput2.setAttribute("type", "text");
  setinput2.setAttribute("id", "wecname" + i);

  const setnrow2 = document.createElement("div");
  setnrow2.classList.add("row");
  const setncol3 = document.createElement("div");
  setncol3.classList.add("col-6");
  const setmb3 = document.createElement("div");
  setmb3.classList.add("mb-3");
  const setlabel3 = document.createElement("label");
  setlabel3.classList.add("form-label");
  setlabel3.setAttribute("for", "wesd" + i);
  const tnodelabel3 = document.createTextNode("Start date");
  setlabel3.appendChild(tnodelabel3);
  const setinput3 = document.createElement("input");
  setinput3.classList.add("form-control");
  setinput3.setAttribute("type", "email");
  setinput3.setAttribute("id", "wesd" + i);

  const setncol4 = document.createElement("div");
  setncol4.classList.add("col-6");
  const setmb4 = document.createElement("div");
  setmb4.classList.add("m-auto");
  const setlabel4 = document.createElement("label");
  setlabel4.classList.add("form-label");
  setlabel4.setAttribute("for", "weed" + i);
  const tnodelabel4 = document.createTextNode("End date");
  setlabel4.appendChild(tnodelabel4);
  const setinput4 = document.createElement("input");
  setinput4.classList.add("form-control");
  setinput4.setAttribute("type", "text");
  setinput4.setAttribute("id", "weed" + i);

  const setlabel5 = document.createElement("label");
  setlabel5.classList.add("form-label");
  setlabel5.setAttribute("for", "wetarea" + i);
  const tnodelabel5 = document.createTextNode("Other information");
  setlabel5.appendChild(tnodelabel5);
  const setinput5 = document.createElement("textarea");
  setinput5.classList.add("form-control");
  setinput5.setAttribute("rows", "5");
  setinput5.setAttribute("id", "wetarea" + i);

  setmb.appendChild(setlabel);
  setmb.appendChild(setinput);
  setncol1.appendChild(setmb);
  setmb2.appendChild(setlabel2);
  setmb2.appendChild(setinput2);
  setncol2.appendChild(setmb2);
  setmb3.appendChild(setlabel3);
  setmb3.appendChild(setinput3);
  setncol3.appendChild(setmb3);
  setmb4.appendChild(setlabel4);
  setmb4.appendChild(setinput4);
  setncol4.appendChild(setmb4);
  setnrow1.appendChild(setncol1);
  setnrow1.appendChild(setncol2);
  setnrow2.appendChild(setncol3);
  setnrow2.appendChild(setncol4);
  setform.appendChild(setnrow1);
  setform.appendChild(setnrow2);
  setform.appendChild(setlabel5);
  setform.appendChild(setinput5);

  setbr.appendChild(setform);
  par.insertBefore(setbr, tmbhDt);
  i++;
}

function addnewedfield() {
  let tmbhDt = document.querySelector("#bbtn");
  let par = document.querySelector(".sets2");

  const setbr = document.createElement("div");
  setbr.setAttribute("class", "set");
  setbr.classList.add("mt-5");
  const setform = document.createElement("form");
  const setnrow1 = document.createElement("div");
  setnrow1.classList.add("row");
  const setncol1 = document.createElement("div");
  setncol1.classList.add("col-6");
  const setmb = document.createElement("div");
  setmb.classList.add("mb-3");
  const setlabel = document.createElement("label");
  setlabel.classList.add("form-label");
  setlabel.setAttribute("for", "ecname" + j);
  const tnodelabel = document.createTextNode("Course name");
  setlabel.appendChild(tnodelabel);
  const setinput = document.createElement("input");
  setinput.classList.add("form-control");
  setinput.setAttribute("type", "text");
  setinput.setAttribute("id", "ecname" + j);

  const setncol2 = document.createElement("div");
  setncol2.classList.add("col-6");
  const setmb2 = document.createElement("div");
  setmb2.classList.add("m-auto");
  const setlabel2 = document.createElement("label");
  setlabel2.classList.add("form-label");
  setlabel2.setAttribute("for", "einame" + j);
  const tnodelabel2 = document.createTextNode("Institution name");
  setlabel2.appendChild(tnodelabel2);
  const setinput2 = document.createElement("input");
  setinput2.classList.add("form-control");
  setinput2.setAttribute("type", "text");
  setinput2.setAttribute("id", "einame" + j);

  const setnrow2 = document.createElement("div");
  setnrow2.classList.add("row");
  const setncol3 = document.createElement("div");
  setncol3.classList.add("col-6");
  const setmb3 = document.createElement("div");
  setmb3.classList.add("mb-3");
  const setlabel3 = document.createElement("label");
  setlabel3.classList.add("form-label");
  setlabel3.setAttribute("for", "esd" + j);
  const tnodelabel3 = document.createTextNode("Start date");
  setlabel3.appendChild(tnodelabel3);
  const setinput3 = document.createElement("input");
  setinput3.classList.add("form-control");
  setinput3.setAttribute("type", "text");
  setinput3.setAttribute("id", "esd" + j);

  const setncol4 = document.createElement("div");
  setncol4.classList.add("col-6");
  const setmb4 = document.createElement("div");
  setmb4.classList.add("m-auto");
  const setlabel4 = document.createElement("label");
  setlabel4.classList.add("form-label");
  setlabel4.setAttribute("for", "eed" + j);
  const tnodelabel4 = document.createTextNode("End date");
  setlabel4.appendChild(tnodelabel4);
  const setinput4 = document.createElement("input");
  setinput4.classList.add("form-control");
  setinput4.setAttribute("type", "text");
  setinput4.setAttribute("id", "eed" + j);

  const setlabel5 = document.createElement("label");
  setlabel5.classList.add("form-label");
  setlabel5.setAttribute("for", "etarea" + j);
  const tnodelabel5 = document.createTextNode("Other information");
  setlabel5.appendChild(tnodelabel5);
  const setinput5 = document.createElement("textarea");
  setinput5.classList.add("form-control");
  setinput5.setAttribute("rows", "5");
  setinput5.setAttribute("id", "etarea" + j);

  setmb.appendChild(setlabel);
  setmb.appendChild(setinput);
  setncol1.appendChild(setmb);
  setmb2.appendChild(setlabel2);
  setmb2.appendChild(setinput2);
  setncol2.appendChild(setmb2);
  setmb3.appendChild(setlabel3);
  setmb3.appendChild(setinput3);
  setncol3.appendChild(setmb3);
  setmb4.appendChild(setlabel4);
  setmb4.appendChild(setinput4);
  setncol4.appendChild(setmb4);
  setnrow1.appendChild(setncol1);
  setnrow1.appendChild(setncol2);
  setnrow2.appendChild(setncol3);
  setnrow2.appendChild(setncol4);
  setform.appendChild(setnrow1);
  setform.appendChild(setnrow2);
  setform.appendChild(setlabel5);
  setform.appendChild(setinput5);

  setbr.appendChild(setform);
  par.insertBefore(setbr, tmbhDt);
  j++;
}

function removeField() {
  const premove = document.querySelector(".sets");
  const cremove = premove.querySelectorAll(".set");

  if (i < 2) {
    alert("You can't remove this field");
  } else {
    premove.removeChild(cremove[i - 1]);
    i--;
  }
}

function removeeField() {
  const premove = document.querySelector(".sets2");
  const cremove = premove.querySelectorAll(".set");

  if (j < 2) {
    alert("You can't remove this field");
  } else {
    premove.removeChild(cremove[j - 1]);
    j--;
  }
}
