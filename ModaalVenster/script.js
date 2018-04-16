let modaal          = document.querySelector('#modaalAchtergrond');
let modaalVenster   = document.querySelector('#modaalVenster');
let modaalInhoud    = document.querySelector('#modaalInhoud');
let modaalTriggers  = document.querySelectorAll('.trigger');
let alleModalen     = new Object();

const sluitModaal = () => {
  modaal.parentNode.removeChild(modaal);
}

modaalVenster.addEventListener('click', (e) => {
  e.stopPropagation();
})

sluitKnop.addEventListener('click', sluitModaal);
modaal.addEventListener('click', sluitModaal);

for (let i = 0; i < modaalTriggers.length; i++) {
  let item = modaalTriggers[i].hash.substr(1);
  alleModalen[item] = document.getElementById(item);

  modaalTriggers[i].addEventListener('click', (e)=>{
    e.preventDefault();
    modaalInhoud.appendChild(alleModalen[item]);
    document.body.appendChild(modaal);
  })
}

for (elem in alleModalen) {
  alleModalen[elem].parentNode.removeChild(alleModalen[elem]);
}

sluitModaal();
