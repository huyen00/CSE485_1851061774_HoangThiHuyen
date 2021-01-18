//--------------------------  EDIT PROFILE    -----------------------------
$(document).ready(function () {
    $('.editpro').hide();
    $('#editprofile').click(function () {
        $('.editpro').show();
    })
    $('#btneditpro').click(function () {
        $.ajax({
            url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/update-profile.php',
            dataType: 'text',
            data: {
                city: $('#city').val(),
                phone: $('#phone').val(),
                email: $('#email').val(),
                age: $('#age').val(),
                job: $('#job').val()
            },
            type: 'post',
            success: function (res) {
                if (res === '1') {
                    $('.editpro').hide(1000);
                    $('#txtphone').html('' + $('#phone').val() + '');
                    $('#txtcity').html('' + $('#city').val() + '');
                    $('#txtemail').html('' + $('#email').val() + '');
                    $('#txtage').html('' + $('#age').val() + '');
                    $('#txtjob').html('' + $('#job').val() + '');
                }
                else {
                    alert('Error');
                }

            }
        })
    })


    //  ------------------------------      ADD EDUCATION -  ------------------

    $('#addedu').hide();
    $('#btnaddedu').hide()
    $('#addeducation').click(function () {
        $('#addedu').toggle();
        $('#btnaddedu').toggle()
    })
    $('#btnaddedu').click(function () {
        $.ajax({
            url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/add-education.php',
            dataType: 'text',
            data: {
                date: $('#date').val(),
                text: $('#text').val(),

            },
            type: 'post',
            success: function (res) {
                if (res === '1') {
                    $('.addedu').hide(1000);
                    $('.hocvan').append("  <div class='resume-item pb-0'><h4>"+ $('#text').val()+ "</h4><p><em>" + $('#date').val() + "</em></p></div> ")
                    $('#date').val('')
                    $('#text').val('')
                    $('#addeducation').show();
                    $('#btnaddedu').hide()

                }
                else if (res === '0') {
                    alert('Error');
                }
                else {
                    alert(res)
                }

            }
        })
    })

    
     // ----------   EDIT EDUCATION  ------------
     $('#editedu').hide()
     $('#btneditedu').hide()
     $('.editeducation').click(function () {
         $('#editedu').toggle(500)
         $('#btneditedu').toggle()
         var id = this.id    
         var edit = id.split("_")[1]
 
         $('#btneditedu').click(function () {
             $.ajax({
                 url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/edit-education.php',
                 type: 'post',
                 data: {
                     education: $('#ededu').val(),
                     date : $('#eddateedu').val(),
                     id: edit
                 },
                 success: function (res) {
                     if (res === '1') {
                        $('#editedu').hide()
                        $('#btneditedu').hide()
                        $('h4#tenhocvan'+edit+'').text($('#ededu').val())  
                        $('em#thoigianhv'+edit+'').text($('#eddateedu').val())   
                        edit=0                 
                     }
                     else if (res === '0') {
                         alert('Error');
                     }
                     else {
                         alert(res)
                     }
 
                 }
             })
         })
         return false
     })
     
     
 
    //--------------------------- DELETE  EDUCATION  ---------------------------
    $('.delhv').click(function () {
        var id = this.id
        var del_id = id.split('_')[1]
        $.ajax({
            url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/delete-education.php?id=' + del_id + '',
            type: 'get',
            success: function (res) {
                if (res == '1') {
                    $('.divhv_' + del_id + '').remove()
                } else {
                    alert('Error')
                }
            }
        })

    })
    //-----------------------------    ADD EXPERIENCE --------------------------

    $('#addexper').hide();
    $('#btnaddexper').hide()
    $('#addexperience').click(function () {
        $('#addexper').toggle();
        $('#btnaddexper').toggle()
    })

    $('#btnaddexper').click(function () {
        $.ajax({
            url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/add-experience.php',
            dataType: 'text',
            data: {
                date: $('#dateex').val(),
                experience: $('#experience').val(),
            },
            type: 'post',
            success: function (res) {
                if (res === '1') {
                    $('.addexper').hide(1000);
                    $('.kinhnghiem').append("  <div class='resume-item pb-0 '><h4>" + $('#experience').val() + "</h4><p><em>" + $('#dateex').val() + "</em></p></div>")
                    $('#date').val('')
                    $('#experience').val('')
                    $('#addexperience').show();
                    $('#btnaddexper').hide()

                }
                else if (res === '0') {
                    alert('Error');
                }
                else {
                    alert(res)
                }

            }
        })
    })
    // ----------------------------   EDIT EXPERIENCE  ---------------------------
    // viết bằng ajax, truyền dữ liệu bằng phương thức post,get
    //get với chức năng xóa , post dùng với chức năng thêm với sửa 
    $('#editexper').hide()
    $('#btneditexper').hide()
    $('.editexperience').click(function () {
        $('#editexper').toggle(500)
        $('#btneditexper').toggle()
        var id = this.id    
        var edid = id.split("_")[1]

        $('#btneditexper').click(function () {
            $.ajax({
                url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/edit-experience.php',
                type: 'post',
                data: {
                    experience: $('#edexper').val(),
                    date : $('#eddate').val(),
                    id: edid
                },
                success: function (res) {   //res lấy dl từ file 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/edit-experience.php',
                    if (res === '1') {
                        $('#editexper').hide()
                        $('#btneditexper').hide()
                       $('h4#tenkn'+edid+'').text($('#edexper').val())   // để hiển thị giá trị vừa sửa lên web
                       $('em#thoigiankn'+edid+'').text('>'+$('#eddate').val())//
                       edid=0 //reset lại id (sửa cái trên thì cái dưới không bị sửa theo)
                       
                    }
                    else if (res === '0') {
                        alert('Error');
                    }
                    else {
                        alert(res)
                    }

                }
            })
        })
        return false

    })
    // --------------------------   DELETE EXPERIENCE   ------------------------
    $('.delkn').click(function () {
        var id = this.id
        var del_id = id.split('_')[1]
        $.ajax({
            url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/delete-experience.php?id=' + del_id + '',
            type: 'get',
            success: function (res) {
                if (res == '1') {
                    $('.divkn_' + del_id + '').remove()
                } else {
                    alert('Error')
                }
            }
        })

    })
    //----------------------------------   ADD SKILL   --------------------------
    $('#addski').hide();
    $('#btnaddski').hide()
    $('#addskill').click(function () {
        $('#addski').toggle();
        $('#btnaddski').toggle()
    })

    $('#btnaddski').click(function () {
        $.ajax({
            url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/add-skill.php',
            dataType: 'text',
            data: {
                name: $('#nameskill').val(),
                level: $('#level').val(),

            },
            type: 'post',
            success: function (res) {
                if (res === '1') {
                    $('.addski').show(1000);
                    $('.skills-content').append(" <div class='col-lg-6 kynang' data-aos='fade-up'><div class='progress'><span class='skill'> " + $('#nameskill').val() + " <i class='val'>" + $('#level').val() + "%</i></span><div class='progress-bar-wrap'><div class='progress-bar' role='progressbar' aria-valuenow=" + $('#level').val() + " aria-valuemin='0' aria-valuemax='100' style='width: " + $('#level').val() + "%;'></div></div></div></div> ")
                    $('#nameskill').val('')
                    $('#level').val('')
                    $('#addski').hide();
                    $('#btnaddski').hide()
                }
                else if (res === '0') {
                    alert('Error');
                }
                else {
                    alert(res)
                }

            }
        })

    })
    // ----------------------------     EDIT SKILL     --------------------------
    $('#skski').hide()
    $('#btneditski').hide()
    $('.editskill').click(function () {
        $('#skski').toggle(500)
        $('#btneditski').toggle()
        var id = this.id    //lấy giá trị id
        var edid = id.split("_")[1]

        $('#btneditski').click(function () {
            $.ajax({
                url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/edit-skill.php',
                type: 'post',
                data: {
                    name: $('#ednameskill').val(),
                    level: $('#edlevel').val(),
                    id: edid
                },
                success: function (res) {
                    if (res === '1') {
                        $('#skski').hide()
                        $('#btneditski').hide()
                        $("#sk_"+edid+"").html(" <div class='col-lg-6 kynang' data-aos='fade-up' id='sk_"+edid+"'><div class='progress'><span class='skill'>"+ $('#ednameskill').val()+" <i class='val'>"+$('#edlevel').val()+"% </i></span><div class='progress-bar-wrap'><div class='progress-bar' role='progressbar' aria-valuenow='"+$('#edlevel').val()+"' aria-valuemin='0' aria-valuemax='100' style='width: " + $('#edlevel').val() + "%;'></div></div></div><button name='' class='btn btn-primary mb-5 editskill' id='editsk_"+edid+"'>Sửa</button></div> ")
                        //dùng để thay cả thẻ lẫn giá trị trong skill để hiển thị lên khi sửa 
                    }
                    else if (res === '0') {
                        alert('Error');
                    }
                    else {
                        alert(res)
                    }

                }
            })
        })

    })


     
//-----------------------        ADD PROJECT          ------------------------------

$('#addpro').hide();
$('#btnaddpro').hide()
$('#addproject').click(function () {
    $('#addpro').show();
    $('#btnaddpro').show()
})

$('#btnaddpro').click(function () {
    $.ajax({
        url: 'http://localhost/CSE485_1851061774_HoangThiHuyen/admin/controller/add-project.php',
        dataType: 'text',
        data: {
           
            name: $('#nameproject').val(),
            description: $('#description').val(),
            location : $('#location').val(),
            role : $('#role').val(),

        },
        type: 'post',
        success: function (res) {
            if (res === '1') {
                $('.addpro').hide(1000);
                $('#listduan').append(" <tr><td>"+$('#nameproject').val()+"</td><td>"+$('#description').val()+"</td><td>"+$('#location').val()+"</td><td>"+$('#role').val()+"</td><tr> ")
                $('#nameproject').val('')
                $('#description').val('')
                $('#location').val('')
                $('#role').val('')
                $('#addproject').show();
                $('#btnaddpro').hide()

            }
            else if (res === '0') {
                alert('Error');
            }
            else {
                alert(res)
            }

        }
    })
})
 



})

