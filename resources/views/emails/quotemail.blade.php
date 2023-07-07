<!DOCTYPE html>

<html>

<head>

    <title>Power this Roof</title>

</head>

<body>
    <h2>Name:</h2>
<p>{{ $details['name'] }}</p>

    <h2>Email:</h2>
<p>{{ $details['email'] }}</p>

    <h2>Phone Number:</h2>
<p>{{ $details['number'] }}</p>


<h2>Property type:</h2>
<p>{{ $details['property_type'] }}</p>

<h2>Home type:</h2>
<p>{{ $details['home_type'] }}</p>

<h2>Home Bill:</h2>
<p>${{ $details['bill'] }}</p>

<h2>Home Address:</h2>
<p>{{ $details['address_input'] }}</p>

<h2>Home Age is 20 Year Old:</h2>

    @if($details['home_age'] == 'yes')
        <p>Home Is 20 Year Old</p>
    @elseif($details['home_age'] == 'replace')
        <p>Home Is 20 Year Old But I want to replace</p>
    @elseif($details['home_age'] == 'no')
        <p>No, Home Is Not 20 Year Old</p>
    @endif


<p>Thank you</p>

</body>

</html>
