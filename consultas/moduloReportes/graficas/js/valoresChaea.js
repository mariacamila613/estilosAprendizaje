
$('input[type="radio"]').change(function(){
  /* TEST CHAEA */
  let numA = $('#check_1:checked').length;
  let numB = $('#check_2:checked').length;
   let numC = $('#check_3:checked').length;
  let numD = $('#check_4:checked').length;


  let porActivo=((numA*100)/20)+'%';
  let porRef=((numB*100)/20)+'%';
  let porTeo=((numC*100)/20)+'%';
  let porPrag=((numD*100)/20)+'%';

  $(".activo-si").html(porActivo);

  $(".reflexivo-si").html(porRef);

  $(".teorico-si").html(porTeo);

  $(".pragmatico-si").html(porPrag);


/* TEST CHAEA JUNIOR */
  let numE = $('#check_10:checked').length;
  let numF = $('#check_11:checked').length;
  let numG = $('#check_12:checked').length;
  let numH = $('#check_1:checked').length;



  let porAct=((numE*100)/11)+'%';
  let porRe=((numF*100)/11)+'%';
  let porTe=((numG*100)/11)+'%';
  let porPr=((numH*100)/11)+'%';

  $(".activo-s").html(porAct);

  $(".reflexivo-s").html(porRe);

  $(".teorico-s").html(porTe);

  $(".pragmatico-s").html(porPr);


});