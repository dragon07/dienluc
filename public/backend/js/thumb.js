$('.image-modal').on('hidden.bs.modal', function (e) {
    let imgName = $('#image').val()
    let imgUrl = "{{url('uploads')}}/" + imgName
    document.getElementById('img-thumb').innerHTML = '<img class="img-fluid mt-2 mb-2" src="' + imgUrl + '" alt="">'
})
