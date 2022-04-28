
$(document).ready(initiateApp);


function initiateApp() {

    $(".digital-painting-images").click(function () {
        var digitalPaintingImgAlt =  $(this).attr('id');
        // console.log(digitalPaintingImgAlt);
        showModal(digitalPaintingImgAlt);

    });

    function showModal(imageAltTag) {

        console.log(imageAltTag);
        $('.imageModal').addClass('showModal');
        $('.modal-digital-painting-image').attr('src', 'assets/img/digital-painting/' + imageAltTag + '.jpg');
    }

    $(".imageModal").click(function () {
        //console.log('test');
        $(".imageModal").removeClass("showModal");

    });

}
