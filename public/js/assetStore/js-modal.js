/**
 * Created by Yahya on 03/02/2018.
 */
$(function() {
    $('img').on('click', function() {
        $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
        $('#enlargeImageModal').modal('show');
        console.log($(this).attr('src')) ;
    });
});


    $(function() {
        $("input:file").change(function (){
            var fileName = $(this).val();
            console.log(fileName);

            $('.enlargeImageModalSource').attr('src', fileName );

        });
    });
