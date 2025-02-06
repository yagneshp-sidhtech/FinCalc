$(function () {    
    $('#submitBtn').on('click', (e) => {
        e.preventDefault();
        var formData = new FormData();

        let name = $("input[name=name]").val();
        let _token = $('meta[name="csrf-token"]').attr('content');
        var photo = $('#photo').prop('files')[0];   

        formData.append('photo', photo);
        formData.append('name', name);
        
        $.ajax({
            url: 'api/store',
            type: 'POST',
            contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: (response) => {
                // success
                console.log(response);
            },
            error: (response) => {
                console.log(response);
            }
        });
    });


});