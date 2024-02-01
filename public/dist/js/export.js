const timerange = document.querySelector("#timerange");
const timerange1 = document.querySelector("#timerange1");
const plantData = document.querySelector("#plantData");
const btnExport = document.querySelectorAll(".btnExport");
const btnExport1 = document.querySelectorAll(".btnExport1");
const plantHide = document.getElementById("plantHide");
const DeviceHide = document.getElementById("DeviceHide");
DeviceHide.style.display = "none";
let val2 = "";

btnExport.forEach((item) => {
  item.addEventListener("click", (event) => {
    val2 = "export";
    const buttonText = event.target.innerText;
    if (buttonText === "Detailed Data") {
      activeNonActive(buttonText, val2);
      timerange.innerHTML = `System is going to export the data. (Max. time span: 30 Days)`;
      timerange1.innerHTML = `System is going to export the data. (Max. time span: 30 Days)`;
    } else if (buttonText === "Daily Statistics") {
      activeNonActive(buttonText, val2);
      timerange.innerHTML = `System is going to export daily statistics. (Max. time span: 1 Year)`;
      timerange1.innerHTML = `System is going to export daily statistics. (Max. time span: 1 Year)`;
    } else if (buttonText === "Monthly Statistics") {
      activeNonActive(buttonText, val2);
      timerange.innerHTML = `System is going to export monthly statistics. (Max. time span: 10 Years)`;
      timerange1.innerHTML = `System is going to export monthly statistics. (Max. time span: 10 Years)`;
    } else if (buttonText === "Yearly Statistics") {
      activeNonActive(buttonText, val2);
      timerange.innerHTML = `System is going to export yearly statistics. (Max. time span: 10 Years)`;

      timerange1.innerHTML = `System is going to export yearly statistics. (Max. time span: 10 Years)`;
    }
  });
});

btnExport1.forEach((it) => {
  it.addEventListener("click", (e) => {
    const text = e.target.innerText;
    val2 = "export1";
    if (text === "Plant Data") {
      plantHide.style.display = "block";
      DeviceHide.style.display = "none";
      activeNonActive(text, val2);
    } else if (text == "Device Data") {
      plantHide.style.display = "none";
      DeviceHide.style.display = "block";
      activeNonActive(text, val2);
    }
  });
});

function activeNonActive(val, val2) {
  if (val2 == "export") {
    btnExport.forEach((item) => {
      if (val === item.innerText) {
        item.classList.add("btnActive");
        item.classList.remove("btnNonActive");
      } else {
        item.classList.remove("btnActive");
        item.classList.add("btnNonActive");
      }
    });
  } else if (val2 == "export1") {
    btnExport1.forEach((item) => {
      if (val === item.innerText) {
        item.classList.add("btnActive");
        item.classList.remove("btnNonActive");
      } else {
        item.classList.remove("btnActive");
        item.classList.add("btnNonActive");
      }
    });
  }
}
