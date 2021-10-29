$('.image-list-modal').on('hidden.bs.modal', function (e) {
    let imgName = $('#image-list').val()
    let listImg = '';
    try {
        let arrImg = JSON.parse(imgName);
        for (let i = 0; i < arrImg.length; i++) {
            let url = "{{url('uploads')}}/" + arrImg[i];
            listImg += '<div class="col-md-4 pr-0 mb-2">';
            listImg += '<img src="' + url + '" alt="" class="img-fluid">'
            listImg += '</div>';
        }
    } catch (e) {
        let url = "{{url('uploads')}}/" + imgName;
        listImg += '<div class="col-md-4 pr-0 mb-2">';
        listImg += '<img src="' + url + '" alt="" class="img-fluid">'
        listImg += '</div>';
    }
    document.getElementById('img-gallery').innerHTML = listImg
})
