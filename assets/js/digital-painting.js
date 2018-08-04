// digital painting js


//
// var digitalPaintingsThumbs = [
//     './assets/img/digital-painting/explore-600.jpg',
//     './assets/img/digital-painting/captains-cabin-600.jpg',
//     './assets/img/digital-painting/image-600.jpg',
//     './assets/img/digital-painting/image-600.jpg',
//     './assets/img/digital-painting/image-600.jpg',
//     './assets/img/digital-painting/image-600.jpg',
//     './assets/img/digital-painting/image-600.jpg',
//     './assets/img/digital-painting/image-600.jpg',
//     './assets/img/digital-painting/image-600.jpg',
//     './assets/img/digital-painting/image-600.jpg',
// ];

$(document).ready(function(){
    //Here are some examples using jQuery
    //.addClass is used to add a class to any element
    //here we are targeting the div1 element

    $(".digital-painting-images").click(function () {
            var digitalPaintingImgAlt =  $(this).attr('alt');
            // console.log(digitalPaintingImgAlt);
        showModal(digitalPaintingImgAlt);

    });

    function showModal(imageAltTag) {
        //console.log(imageAltTag);
        $(".imageModal").addClass("showModal");
    }

    $(".imageModal").click(function () {
        console.log('test');
        $(".imageModal").removeClass("showModal");

    });





    //Here is another .click example that changes the color of the div every time you click on it
    $("#div2").click(function(){
        $("#div2").toggleClass("green");    //Advanced: $(this).toggleClass("green");

        //Here is an if statement that outputs the color of div2 to the console when it is clicked
        if($("#div2").hasClass("green")){
            //If it has the class "green" then it will output "I am Green!"
            $("#div2").text(" I'm Green");
        }else{
            //else it does not have the class "green" then it will output "I am White!"
            $("#div2").text(" I'm White");
        }
    });



});

// $(document).ready(function () {
//
//     // Add a click handler to the button using jQuery.  This click handler will call a function named make_guess
//     $(".portfolio-piece").click( function () {
//         showImage();
//     });
//
//
// }); // document ready end
//
//
//
// function showImage() {
//     console.log('test');
//
//     var alt = $(this).attr('alt');
//
//     console.log($(this));
//
// }



