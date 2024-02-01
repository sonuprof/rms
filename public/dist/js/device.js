const tabs = document.querySelectorAll('.tab');

const inverter=document.getElementById('inverter');
const logger=document.getElementById('logger');
tabs.forEach((tab) => {
  tab.addEventListener('click', function(e) {

    tabs.forEach((tab) => {
      tab.classList.remove('bordBottom');
    });
    this.classList.add('bordBottom');

let val=e.target.innerText;

if(val==='Logger'){
inverter.style.display="none"
logger.style.display='block'
}
else if(val==='Inverter'){
  logger.style.display='none'
  inverter.style.display='block'
}
  });
});

logger.style.display='none';
