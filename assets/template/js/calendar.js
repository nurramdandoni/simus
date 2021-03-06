< script type = "text/javascript" >
    var get_data = '<?php echo $get_data; ?>';
var backend_url = '<?php echo base_url(); ?>';

$(document).ready(function () {
    $('.date-picker').datepicker();
    $('#calendarIO').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'agendaWeek,agendaDay,listMonth'
        },
        defaultDate: moment().format('YYYY-MM-DD'),
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        selectable: true,
        selectHelper: true,
        select: function (start, end) {
            $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD'));
            $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD'));
            $('#create_modal').modal('show');
            save();
            $('#calendarIO').fullCalendar('unselect');
        },
        eventDrop: function (event, delta, revertFunc) { // si changement de position
            editDropResize(event);
        },
        eventResize: function (event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur
            editDropResize(event);
        },
        eventClick: function (event, element) {
            deteil(event);
            editData(event);
            deleteData(event);
        },
        events: JSON.parse(get_data)
    });
});

$(document).on('click', '.add_calendar', function () {
    $('#create_modal input[name=calendar_id]').val(0);
    $('#create_modal').modal('show');
})

$(document).on('submit', '#form_create', function () {

    var element = $(this);
    var eventData;
    $.ajax({
        url: backend_url + 'pengajuan/save',
        type: element.attr('method'),
        data: element.serialize(),
        dataType: 'JSON',
        beforeSend: function () {
            element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
        },
        success: function (data) {
            if (data.status) {
                eventData = {
                    id: data.id,
                    title: $('#create_modal input[name=title]').val(),
                    description: $('#create_modal textarea[name=description]').val(),
                    konfirmasi: $('#create_modal select[name=konfirmasi]').val(),
                    nama_ruangan: $('#create_modal select[name=nama_ruangan]').val(),
                    start: moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                    end: moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                    color: $('#create_modal select[name=color]').val()
                };
                $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                $('#create_modal').modal('hide');
                element[0].reset();
                $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
            } else {
                element.find('.alert').css('display', 'block');
                element.find('.alert').html(data.notif);
            }
            element.find('button[type=submit]').html('Submit');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            element.find('button[type=submit]').html('Submit');
            element.find('.alert').css('display', 'block');
            element.find('.alert').html('Wrong server, please save again');
        }
    });
    return false;
})

function editDropResize(event) {
    start = event.start.format('YYYY-MM-DD HH:mm:ss');
    if (event.end) {
        end = event.end.format('YYYY-MM-DD HH:mm:ss');
    } else {
        end = start;
    }

    $.ajax({
        url: backend_url + 'pengajuan/save',
        type: 'POST',
        data: 'calendar_id=' + event.id + '&title=' + event.title + '&start_date=' + start + '&end_date=' + end,
        dataType: 'JSON',
        beforeSend: function () {},
        success: function (data) {
            if (data.status) {
                $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html('Data success update');
            } else {
                $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Data cant update');
            }

        },
        error: function (jqXHR, textStatus, errorThrown) {
            $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Wrong server, please save again');
        }
    });
}

function save() {
    $('#form_create').submit(function () {
        var element = $(this);
        var eventData;
        $.ajax({
            url: backend_url + 'pengajuan/save',
            type: element.attr('method'),
            data: element.serialize(),
            dataType: 'JSON',
            beforeSend: function () {
                element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
            },
            success: function (data) {
                if (data.status) {
                    eventData = {
                        id: data.id,
                        title: $('#create_modal input[name=title]').val(),
                        description: $('#create_modal textarea[name=description]').val(),
                        konfirmasi: $('#create_modal select[name=konfirmasi]').val(),
                        nama_ruangan: $('#create_modal select[name=nama_ruangan]').val(),
                        start: moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                        end: moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                        color: $('#create_modal select[name=color]').val()
                    };
                    $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                    $('#create_modal').modal('hide');
                    element[0].reset();
                    $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                } else {
                    element.find('.alert').css('display', 'block');
                    element.find('.alert').html(data.notif);
                }
                element.find('button[type=submit]').html('Submit');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                element.find('button[type=submit]').html('Submit');
                element.find('.alert').css('display', 'block');
                element.find('.alert').html('Wrong server, please save again');
            }
        });
        return false;
    })
}

function deteil(event) {
    $('#create_modal input[name=calendar_id]').val(event.id);
    $('#create_modal input[name=start_date]').val(moment(event.start).format('YYYY-MM-DD'));
    $('#create_modal input[name=end_date]').val(moment(event.end).format('YYYY-MM-DD'));
    $('#create_modal input[name=title]').val(event.title);
    $('#create_modal input[name=description]').val(event.description);
    $('#create_modal select[name=konfirmasi]').val(event.konfirmasi);
    $('#create_modal select[name=nama_ruangan]').val(event.nama_ruangan);
    $('#create_modal select[name=color]').val(event.color);
    $('#create_modal .delete_calendar').show();
    $('#create_modal').modal('show');
}

function editData(event) {
    $('#form_create').submit(function () {
        var element = $(this);
        var eventData;
        $.ajax({
            url: backend_url + 'pengajuan/save',
            type: element.attr('method'),
            data: element.serialize(),
            dataType: 'JSON',
            beforeSend: function () {
                element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
            },
            success: function (data) {
                if (data.status) {
                    event.title = $('#create_modal input[name=title]').val();
                    event.description = $('#create_modal textarea[name=description]').val();
                    event.konfirmasi = $('#create_modal select[name=konfirmasi]').val();
                    event.nama_ruangan = $('#create_modal select[name=nama_ruangan]').val();
                    event.start = moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                    event.end = moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                    event.color = $('#create_modal select[name=color]').val();
                    $('#calendarIO').fullCalendar('updateEvent', event);

                    $('#create_modal').modal('hide');
                    element[0].reset();
                    $('#create_modal input[name=calendar_id]').val(0)
                    $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                } else {
                    element.find('.alert').css('display', 'block');
                    element.find('.alert').html(data.notif);
                }
                element.find('button[type=submit]').html('Submit');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                element.find('button[type=submit]').html('Submit');
                element.find('.alert').css('display', 'block');
                element.find('.alert').html('Wrong server, please save again');
            }
        });
        return false;
    })
}

function deleteData(event) {
    $('#create_modal .delete_calendar').click(function () {
        $.ajax({
            url: backend_url + 'pengajuan/delete',
            type: 'POST',
            data: 'id=' + event.id,
            dataType: 'JSON',
            beforeSend: function () {},
            success: function (data) {
                if (data.status) {
                    $('#calendarIO').fullCalendar('removeEvents', event._id);
                    $('#create_modal').modal('hide');
                    $('#form_create')[0].reset();
                    $('#create_modal input[name=calendar_id]').val(0)
                    $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                } else {
                    $('#form_create').find('.alert').css('display', 'block');
                    $('#form_create').find('.alert').html(data.notif);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#form_create').find('.alert').css('display', 'block');
                $('#form_create').find('.alert').html('Wrong server, please save again');
            }
        });
    })
} <
/script>