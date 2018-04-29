// Hide Parent input
// Only Show if date is less than 18 Yrs
var t = new Date()
var is18 = t.getTime() - 567648000000
$('div.pinput').css('display', 'none');
$('input.bday').on('change', function(){
  var d = Date.parse($(this).val());
       if(d >= is18){
           $('div.pinput').css('display', 'block');
       } else {
           $('div.pinput').css('display', 'none');
       }
    });
