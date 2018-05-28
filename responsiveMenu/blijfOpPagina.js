// ALS OP EEN LINK MET EEN SUBMENU GEKLIKT WORD
// MOET IK NIET NAAR DE KOPPELING GAAN
let heeftSub = document.querySelectorAll('.submenu > a');

for(let i = 0; i < heeftSub.lenght; i++) {
  heeftSub[i].addEventListener('click', (e)=> e.preventDefault());
}
