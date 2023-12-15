<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sarok Shop Verification Email</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 
  <style>
    html {
      line-height: 1.15; /* 1 */
      -webkit-text-size-adjust: 100%; /* 2 */
    }

    body {
      margin: 0;
    }

    a {
      background-color: transparent;
      text-decoration: none;
      color: inherit;
    }

    b,
    strong {
      font-weight: bolder;
    }

    img {
      border-style: none;
    }
  </style>
</head>

<body style="font-family: 'Inter', sans-serif; box-sizing: border-box;">
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 0 auto; text-align: center;">
    <tr>
      <td>
       
      </td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; background: #F1F1F2; text-align: center; margin: 0 auto; border-top: 1px solid #d42941; padding: 32px 40px 18px;">
    <tr>
      <td>
        <h2 style="font-size: 24px; font-weight: 600; color: #000; margin: 0 0 23px; padding: 0; color: #000000;">Verify your email address</h2>
        <h3 style="font-size: 20px; font-weight: 500; color: #000; margin: 0 0 20px; padding: 0; line-height: 1.5em;">Hi {{$data['fullname']}}</h3>
        <p style="font-size: 14px; font-weight: 400; color: #464646; margin: 26px 0; padding: 0; line-height: 22px;">We’ve received a request to verify your email address for SarokShopOnline account assoicated with <span style="font-weight: 600;">{{$data['email']}}</span>.</p>
        <p style="font-size: 14px; font-weight: 500; color: #000; margin: 0; padding: 0; line-height: 1.5em;">Click on the button below to verify your account</p>
      </td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100% !important; background: #F1F1F2; text-align: center; margin: 0 auto; text-align: center;">
    <tr>
      <td>
        <a href="{{url('email-verify/'.$data['token'])}}" style="background: #d42941; color: #ffffff; font-size: 16px; font-weight: 600; display: block; padding: 15px 0; margin: 0; text-decoration: none; width: 198px; margin: 0 auto; border-radius: 4px;">Verify My Account</a>
      </td>
    </tr>
  </table>
</body>
</html>