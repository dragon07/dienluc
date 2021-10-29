<div class="modal fade image-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <iframe src="{{url('file/dialog.php?field_id=image')}}"
                    style="width: 100%; height:500px; border: none; overflow-y: auto"></iframe>

        </div>
    </div>
</div>
@section('js-thumb')
    <script>
        $('.image-modal').on('hidden.bs.modal', function (e) {
            let imgName = $('#image').val()
            let imgUrl = ''
            try {
                let arrImg = JSON.parse(imgName);
                imgUrl = "{{url('uploads')}}/" + arrImg[0]
            } catch (e) {
                imgUrl = "{{url('uploads')}}/" + imgName
            }

            document.getElementById('img-thumb').innerHTML = '<img class="img-fluid mt-2 mb-2" src="' + imgUrl + '" alt="">'
        })
    </script>
@stop
