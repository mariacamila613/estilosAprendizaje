
var prag=[11];

var prag_Can=0;
var activo_Can=0;
var refle_Can=0;
var teorico_Can=0;


function countOnes(vec,vec_Can){
  for (let i = 0; i <vec.length; i++) {
    if(vec[i]==1)
      vec_Can=vec_Can+1;
  }
}

function contar(categoria, num) {

  if(categoria=='pragmaticoSi' ){
    var val= document.getElementById('check_7').value;

    prag[num]=parseInt(val);

  }else  if(categoria=='pragmaticoNo' ){
    var val= document.getElementById('check_8').value;

    prag[num]=parseInt(val);
  }
  countOnes(prag,prag_Can);
  alert(prag_Can);lñ
}


