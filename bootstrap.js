$(function() {

    /*$('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $("#employeeInfoForm").fadeOut(100);
        $("#personalInfoForm").fadeOut(100);
        $("#salary-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $('#officialInfo').removeClass('active');
        $('#personalInfo').removeClass('active');
        $('#salaryStructure').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $("#employeeInfoForm").fadeOut(100);
        $("#personalInfoForm").fadeOut(100);
        $("#salary-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $('#officialInfo').removeClass('active');
        $('#personalInfo').removeClass('active');
        $('#salaryStructure').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });*/
    $('#officialInfo').click(function(e) {
        $("#employeeInfoForm").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $("#register-form").fadeOut(100);
        $("#personalInfoForm").fadeOut(100);
        $("#salary-form").fadeOut(100);
        $("#educationform").fadeOut(100);
        $("#experienceform").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $('#register-form-link').removeClass('active');
        $('#personalInfo').removeClass('active');
        $('#salaryStructure').removeClass('active');
        $('#education').removeClass('active');
        $('#experience').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#personalInfo').click(function(e) {
        $("#personalInfoForm").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $("#register-form").fadeOut(100);
        $("#employeeInfoForm").fadeOut(100);
        $("#salary-form").fadeOut(100);
        $("#educationform").fadeOut(100);
        $("#experienceform").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $('#officialInfo').removeClass('active');
        $('#register-form-link').removeClass('active');
        $('#salaryStructure').removeClass('active');
        $('#education').removeClass('active');
        $('#experience').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#salaryStructure').click(function(e) {
        $("#salary-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $("#register-form").fadeOut(100);
        $("#employeeInfoForm").fadeOut(100);
        $("#personalInfoForm").fadeOut(100);
        $("#educationform").fadeOut(100);
        $("#experienceform").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $('#officialInfo').removeClass('active');
        $('#register-form-link').removeClass('active');
        $('#personalInfo').removeClass('active');
        $('#education').removeClass('active');
        $('#experience').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

    $('#education').click(function(e) {
        $("#educationform").delay(100).fadeIn(100);
        $("#salary-form").fadeOut(100);
        $("#login-form").fadeOut(100);
        $("#register-form").fadeOut(100);
        $("#employeeInfoForm").fadeOut(100);
        $("#personalInfoForm").fadeOut(100);
        $("#experienceform").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $('#officialInfo').removeClass('active');
        $('#register-form-link').removeClass('active');
        $('#personalInfo').removeClass('active');
        $('#salaryStructure').removeClass('active');
        $('#experience').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#experience').click(function(e) {
        $("#experienceform").delay(100).fadeIn(100);
        $("#educationform").fadeOut(100);
        $("#salary-form").fadeOut(100);
        $("#login-form").fadeOut(100);
        $("#register-form").fadeOut(100);
        $("#employeeInfoForm").fadeOut(100);
        $("#personalInfoForm").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $('#officialInfo').removeClass('active');
        $('#register-form-link').removeClass('active');
        $('#personalInfo').removeClass('active');
        $('#salaryStructure').removeClass('active');
        $('#education').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
$(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);

    $( ".preview-images-zone" ).sortable();

    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});



function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

