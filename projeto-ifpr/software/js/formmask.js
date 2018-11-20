// function mascara(o,f){
//   a_obj = o;
//   funcao = f;
//   setTimeout("execMask()", 1);
// }
// function execMask(){
//   a_obj.value = funcao(a_obj.value);
// }
// function maskCel(x){
//   x = x.replace(/\D/g, "");
//   x = x.replace(/^(\d{2})(\d)/g, "($1)$2");
//   x = x.replace(/.(\d)(\d{4})$/, "$1=$2");
//   return v;
// }
// function id( el ){
//   return document.getElementById( el );
// }
// window.onload = function(){
//   id('celular').onkeypress = function(){
//     mascara(this, maskCel);
//   }
// }

function Mascara(){
  var x = this;
  this.celular = function( obj ){
    obj.value = obj.value;
    .replace(/\D/g, '')
    .replace(/^(\d{2})(\d)/g, '($1) $2')
    .replace(/(\d{4})(\d)/, '$1-$2');
    setTimeout(function (){
      object.celular( obj ); }, 1);
  }
}
mascara = new Mascara();
