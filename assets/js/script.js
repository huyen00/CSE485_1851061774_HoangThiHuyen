$(document).ready(function(){
    $('#btnsendm').click(function () {
        $.ajax({
            url: 'http://localhost/btl/admin/controller/send-mess.php',
            dataType: 'text',
            data: {
                name: $('#cname').val(),
                email: $('#cemail').val(),
                subject: $('#csubject').val(),
                message: $('#cmessage').val(),
            },
            type: 'post',
            success: function (res) {
                if (res === '1') {
                    alert('Cảm ơn bạn đã xem cv của mình !!! ')   
                    $('#cname').val('')
                     $('#cemail').val('')
                     $('#csubject').val('')
                     $('#cmessage').val('')       
                }
                else if(res ==='0') {
                    alert('Error');

                }
                else{
                    alert('Cần điền đầy đủ thông tin !!!')
                }
            }
        })
    })
})