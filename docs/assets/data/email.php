<?php




$to = "info@qubitmarketing.com";

$first = $_POST["first"];
$last = $_POST["last"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$drName = $_POST["drName"];
$drPhone = $_POST["drPhone"];
$medication = $_POST["medication"];
$message = $_POST["message"];

$content = "First Name: " . $first . "\nLast Name:" . $last . "\nE-mail: " .$email . "\nPhone: " . $phone . "\nDr Name: " . $drName .  "\n Dr Phone: " . $drPhone . "\nMedication : " . $medication . "\nMessage: " .$message;

mail($to, "Contacto desde New Prescription", $content);
header("location: ../index.html");





/*
header('Content-type: application/json');

$errors = '';

if(empty($errors))
{

    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);


    $from_first = $request->first;
    $from_last = $request->last;
    $from_email = $request->email;
    $from_phone = $request->phone;
    $from_drName = $request->drName;
    $from_drPhone = $request->drPhone;
    $from_medication = $request->medication;
    $message = $request->message;


    $to_email = "info@qubitmarketing.com";

    $contact = "<p><strong>Email:</strong> $from_email</p>";

    $content = "<p><strong>First:</strong> $from_first</p>
                <p><strong>Last:</strong> $from_last</p>
                <p><strong>Phone:</strong> $from_phone</p>
                <p><strong>DrName:</strong> $from_drName</p>
                <p><strong>DrPhone:</strong> $from_drPhone</p> 
                <p><strong>Medication:</strong> $from_medication</p>
                <p>$message</p>";

    $website = 'Premier Pharmacy ';
    $email_subject = "$website: Contact New Prescription $from_first ";

    $email_body = '<html><body>';
    $email_body .= "$contact $content";
    $email_body .= '</body></html>';

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "From: $from_email\n";
    $headers .= "Reply-To: $from_email";

    mail($to_email,$email_subject,$email_body,$headers);

    $response_array['status'] = 'success';
    $response_array['from'] = $from_email;
    echo json_encode($response_array);
    echo json_encode($from_email);
    header($response_array);
    return $from_email;
} else {
    $response_array['status'] = 'error';
    echo json_encode($response_array);
    header('Location: /error.html');
}*/
?>