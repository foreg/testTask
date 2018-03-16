$('.numberOnly').on('input change paste', function() {          //ввод с полями для сумм только цифр
    $(this).val(this.value.replace(/[^0-9]/, ''));
});

$('#summRange').on('mousemove', function() {                    //связывание ползунков и input
    $('#summ').val(this.value);
});

$('#summ').on('change', function() {
    $('#summRange').val(this.value);
});

$('#summAdditionRange').on('mousemove', function() {
    $('#summAddition').val(this.value);
});

$('#summAddition').on('change', function() {
    $('#summAdditionRange').val(this.value);
});                                                             //конец связывания

$( function() {                                                 //добавление датапикер в input
    $( "#datepicker" ).datepicker();
});

function calc() {                                               //подсчет итогового значения
$.ajax({
    url: 'calc.php',
    method: "POST",
    data:   "date="+$("#datepicker").val()+
            "&summ="+$("#summ").val()+
            "&time="+$("#time").val()+
            "&addition=" +$('input[name=Addition]')[1].checked+
            "&summAddition="+$("#summAddition").val(),
    success: function(data) {
      $('.res').html(data);
    }
  });
}