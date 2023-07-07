(function($) {

    var form = $("#signup-form");
    console.log(form)
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous: 'Previous',
            next: 'Next',
            finish: 'Finish',
            current: '',
        },
        titleTemplate: '<h3 class="title">#title#</h3>',
        onStepChanging: function (event , currentIndex , priorIndex)
        {
            var form = $("#signup-form");
            if(currentIndex == 0)
            {
                if ($('input[name=options]:checked').length > 0) {
                    return true;
                }else
                {
                    $('#errors').css('display','block');
                    return false;
                }
            }
            if(currentIndex == 1)
            {
                if ($('input[name=home_type]:checked').length > 0) {
                    return true;
                }else
                {
                    $('#home_type_age').css('display','block');
                    return false;
                }
            }
            if(currentIndex == 2)
            {
                if ($('input[name=rangeValue]')) {
                    return true;
                }else
                {
                    return false;
                }
            }
            if(currentIndex == 3)
            {
                var address_input =document.getElementById('address-input').value;
                if (address_input.length > 0) {
                    return true;
                }else
                {
                    $('#address_address_errors').css('display','block');
                    return false;
                }
            }
            if(currentIndex == 4)
            {
                if ($('input[name=home_age]:checked').length > 0) {
                    return true;
                }else
                {
                    $('#home_age_errors').css('display','block');
                    return false;
                }
            }
            if(currentIndex == 5)
            {
                var name =document.getElementById('name').value;
                if (name.length > 0) {
                    return true;
                }else
                {
                    $('#fname_errors').css('display','block');
                    return false;
                }
            }
            if(currentIndex == 6)
            {
                var email =document.getElementById('email').value;
                if (email.length > 0) {
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if(email.match(mailformat))
                    {
                       
                        return true;
                    }
                    else
                    {
                        $('#email_errors').css('display','block');
                        return false;
                    }
                }else
                {
                    $('#email_errors').css('display','block');
                    return false;
                }
            }
            if(currentIndex == 7)
            {
                var number =document.getElementById('number').value;
                if (number.length > 0) {
                    return true;
                }else
                {
                    $('#number_errors').css('display','block');
                    return false;
                }
            }
        },
        onFinished: function(event, currentIndex) {
            var property_type = $('input[name=options]:checked').val();
            console.log(property_type)
            var home_type =$('input[name=home_type]:checked').val();
            console.log(home_type)
            var bill = $('#rangeValue')[0].innerText;
            console.log(bill);
            var address_input = $('#address-input').val();
            console.log(address_input);
            var address_latitude = $('#address-latitude').val();
            console.log(address_latitude);
            var address_longitude = $('#address-longitude').val();
            console.log(address_longitude);
            var home_age =$('input[name=home_age]:checked').val();
    console.log(home_age)
            var name = $('#name').val();
            console.log(name);
            var email = $('#email').val();
            console.log(email);
            var number = $('#number').val();
            console.log(number);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'store_quotes',
                dataType: 'script',
                type: "POST",
                data: {
                    'property_type': property_type,
                    'home_type': home_type,
                    'bill': bill,
                    'address_input': address_input,
                    'address_latitude': address_latitude,
                    'address_longitude': address_longitude,
                    'home_age': home_age,
                    'name': name,
                    'email': email,
                    'number': number,
                },
                success: function(data,status){
                    console.log(status=='success');
                    if (status == "success" )
                    {
                        window.location.href = '/after_process'
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            });



        },
    });
})(jQuery);
