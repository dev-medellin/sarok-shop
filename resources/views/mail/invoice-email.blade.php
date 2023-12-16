<!DOCTYPE html>
<html lang="en">

<head>
  <title>[SINGAPRINTING]Order Complete</title>
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
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; border-bottom: 1px solid #d42941; width: 100%; margin: 0 auto; text-align: center;">
    <tr>
      <td>
        <a href="/static" style="padding: 15px 0; display: inline-block; margin: 0;">
          <img src="https://static.singaprinting.com/v2/images/email/logo_email.png" alt="Main Logo">
        </a>
      </td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 0 auto; padding: 48px 40px 33px;">
    <tr>
      <td>
        <h2 style="font-size: 24px; font-weight: 600; margin: 0 0 26px; padding: 0; color: #000000;">Thank you for your order!</h2>
        <h3 style="font-size: 18px; font-weight: 600; color: #000; margin: 0 0 20px; padding: 0; line-height: 1.5em;">Hi, {{$data['fullname']}}!</h3>
        <p style="font-size: 14px; color: #000; margin: 0; padding: 0; line-height: 1.5em;">Order number is {{$data['order_id']}}.</p>
        <p style="font-size: 14px; color: #000; margin: 0; padding: 0; line-height: 1.5em;">You can check the status of your order on My Account at any time.</p>
      </td>
    </tr>
  </table>
  <table style="width: 100%; max-width: 640px; margin: 0 auto;">
    <tr>
      <td style="border-bottom: 1px solid #DADADA;"></td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 0 auto; padding: 32px 40px 20px;">
    <tr>
      <td style="width: 50%; vertical-align: top;">
        <h4 style="margin: 0; padding: 0 0 5px; color: #828282; font-size: 12px; font-weight: 600; text-transform: uppercase;">Order Date</h4>
        <p style="margin: 0; padding: 0; color: #000; font-size: 14px; font-weight: 500;">{{$data['order_date']}}</p>
      </td>
      <td style="width: 50%; vertical-align: top;">
        <h4 style="margin: 0; padding: 0 0 5px; color: #828282; font-size: 12px; font-weight: 600; text-transform: uppercase;">Payment Method</h4>
        <p style="margin: 0; padding: 0; color: #000; font-size: 14px; font-weight: 500;">{{($data['payment_method'] == 'cash' ? 'Cash on Delivery' : ($data['payment_method'] == 'ewallet' ? 'E-Wallet' : 'Bank Transfer'))}}</p>
      </td>
    </tr>
      <td style="padding-top: 21px;">
        <h4 style="margin: 0; padding: 0 0 5px; color: #828282; font-size: 12px; font-weight: 600; text-transform: uppercase;">Billing Address</h4>
        <p style="margin: 0; padding: 0 0 4px; color: #000; font-size: 14px; font-weight: 700;">{{$data['fullname']}}</p>
        <p style="margin: 0; padding: 0; color: #000; font-size: 14px; font-weight: 400; line-height: 17px;">
            {{$data['house_number']}}<br />
            {{$data['town_city']}}<br />
          {{$data['country']}} {{$data['postal_code']}}
        </p>
      </td>
    </tr>
  </table>
  <table style="width: 100%; max-width: 640px; margin: 0 auto;">
    <tr>
      <td style="border-bottom: 1px solid #DADADA;"></td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="margin: 0 auto; padding:0 40px; max-width: 720px; width: 100%;">
    <tr style="color: #828282; font-size: 12px; font-weight: 600; background: #ffff; margin: 0;">
      <td style="padding: 13px 0; margin: 0; text-align: left; width: 160px;">PRODUCT</td>
      <td style="padding: 13px 0 13px 30px; margin: 0;">DESCRIPTION</td>
      <td style="padding: 13px 0; margin: 0; text-align: right; width: 150px;">PRICE</td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="margin: 0 auto; padding:0 40px; max-width: 720px; width: 100%;">
    <tr>
      <td style="border-bottom: 1px dashed #DADADA;"></td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="margin: 0 auto; padding:0 40px; max-width: 720px; width: 100%;">
    <tr>
      <td style="margin: 0; text-align: center; width: 160px; padding: 20px 0 24px;">
        <img src="https://static.singaprinting.com/v2/images/quote/quote_banner_dummy_img.jpg" alt="Dummy Image" style="width: 160px; height: 160px; object-fit: cover; display: inline-block;  margin: 0; border-radius: 8px;" />
      </td>
      <td style="padding: 24px 0 24px 30px; margin: 0; vertical-align: top;">
        <h4 style="font-size: 16px; font-weight: 600; color: #000; line-height: 1.3em; display: block; margin: 0 0 9px;">Art Paper Stickers</h4>
        <span style="font-size: 14px; font-weight: 400; line-height: 17px; display: block; color: #757575; margin-bottom: 4px;">2x2in</span>
        <span style="font-size: 14px; font-weight: 400; line-height: 17px; display: block; color: #757575; margin-bottom: 4px;">Die Cut (Square Corner)</span>
        <span style="font-size: 14px; font-weight: 400; line-height: 17px; display: block; color: #757575; margin-bottom: 4px;">Gloss</span>
        <span style="font-size: 14px; font-weight: 400; line-height: 17px; display: block; color: #757575; margin-bottom: 4px;">Normal</span>
        <span style="font-size: 14px; font-weight: 400; line-height: 17px; display: block; color: #757575; margin-bottom: 4px;">Qty : 100</span>
        <span style="font-size: 14px; font-weight: 400; line-height: 17px; display: block; color: #757575; margin-bottom: 4px;">Express Shipping</span>
      </td>
      <td style="margin: 0; text-align: right; vertical-align: top; width: 150px; padding: 24px 0;">
        <span style="font-size: 16px; font-weight: 600; color: #000;">$42.00</span>
      </td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 0 auto 10px; background: #F3F3F3; padding: 23px 40px 28px;">
    <tr>
      <td>
        <div style="min-width: 450px; float: right; line-height: 1.5em; font-size: 14px;">
          <div style="color: #000; font-size: 14px; margin-bottom: 3px;">
            <span>Subtotal</span>
            <span style="float: right;">$42.00</span>
          </div>
          <div style="color: #000; font-size: 14px; margin-bottom: 3px;">
            <span>Shipping Fee</span>
            <span style="float: right;">$0.00</span>
          </div>
          <div style="color: #000; font-size: 14px; margin-bottom: 3px;">
            <span>Point Discount</span>
            <span style="float: right;">-0P</span>
          </div>
          <div style="color: #000; font-size: 14px; margin-bottom: 3px;">
            <span>Coupon Discount</span>
            <span style="float: right;">-$0.00</span>
          </div>
          <div style="border-top: 1px solid #A6A6A6; font-weight: 600; font-size: 18px; color: #000; padding: 15px 0 0; margin: 21px 0 0;">
            <div>
              <span>Total Cost</span>
              <span style="float: right;">$42.00</span>
            </div>
          </div>
        </div>
      </td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 16px auto; text-align: center;">
    <tr>
      <td>
        <a href="javascript:;" style="background: #CB2842; color: #ffffff; font-size: 14px; font-weight: 700; display: block; padding: 13px 26px; margin: 0; text-decoration: none; float: right; border-radius: 6px;">View Order</a>
      </td>
    </tr>
  </table>
  <table style="width: 100%; max-width: 720px; margin: 0 auto;">
    <tr>
      <td style="border-bottom: 1px solid #DADADA;"></td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin: 0 auto; padding: 24px 0 0;">
    <tr>
      <td>
        <h2 style="margin:0; font-size: 16px; font-weight: 600;">You may also like</h2>
      </td>
    </tr>
    <tr>
      <td style="margin: 0; text-align: left; vertical-align: top; width: 166px; padding: 13px 18px 0 0;">
        <img src="https://static.singaprinting.com/v2/images/quote/bumper/bumper.jpg" alt="Dummy Image" style="width: 166px; height: 110px; display: inline-block;  margin: 0; border-radius: 8px;" />
        <h3 style="font-size: 14px; font-weight: 600; color: #CB2842; margin: 8px 0 4px;">Bumper Stickers</h3>
        <p style="font-size: 12px; color: #000; font-weight: 600; margin: 0;">Starts at <span style="font-size: 14px;">$23.00</span></p>
      </td>
      <td style="margin: 0; text-align: left; vertical-align: top; width: 166px; padding: 13px 18px 0 0;">
        <img src="https://static.singaprinting.com/v2/images/quote/standardvinyl/standard-vinyl.jpg" alt="Dummy Image" style="width: 166px; height: 110px; display: inline-block;  margin: 0; border-radius: 8px;" />
        <h3 style="font-size: 14px; font-weight: 600; color: #CB2842; margin: 8px 0 4px;">Standard Vinyl Stickers</h3>
        <p style="font-size: 12px; color: #000; font-weight: 600; margin: 0;">Starts at <span style="font-size: 14px;">$23.00</span></p>
      </td>
      <td style="margin: 0; text-align: left; vertical-align: top; width: 166px; padding: 13px 18px 0 0;">
        <img src="https://static.singaprinting.com/v2/images/quote/transparent/transparent.jpg" alt="Dummy Image" style="width: 166px; height: 110px; display: inline-block;  margin: 0; border-radius: 8px;" />
        <h3 style="font-size: 14px; font-weight: 600; color: #CB2842; margin: 8px 0 4px;">Transparent Stickers</h3>
        <p style="font-size: 12px; color: #000; font-weight: 600; margin: 0;">Starts at <span style="font-size: 14px;">$23.00</span></p>
      </td>
      <td style="margin: 0; text-align: left; vertical-align: top; width: 166px; padding: 13px 0 0;">
        <img src="https://static.singaprinting.com/v2/images/quote/classicpaper/classic-paper.jpg" alt="Dummy Image" style="width: 166px; height: 110px; display: inline-block;  margin: 0; border-radius: 8px;" />
        <h3 style="font-size: 14px; font-weight: 600; color: #CB2842; margin: 8px 0 4px;">Classic Paper Stickers</h3>
        <p style="font-size: 12px; color: #000; font-weight: 600; margin: 0;">Starts at <span style="font-size: 14px;">$23.00</span></p>
      </td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="margin: 0 auto; padding:32px 0; max-width: 720px; width: 100%;">
    <tr>
      <td style="border-bottom: 1px solid #DADADA;"></td>
    </tr>
  </table>
  <table role="presentation" cellpadding="0" cellspacing="0" style="max-width: 720px; width: 100%; margin:0 auto; text-align: center;">
    <tr>
      <td>
        <p style="color: #9B9B9B; font-size: 13px; font-weight: 400; margin: 0 0 13px;">Copyright © 2006-2022 SingaPrinting. All Rights Reserved.</p>
        <a href="javascript:;" style="display: inline-block; vertical-align: middle; margin: 0 7px;"><img src="https://static.singaprinting.com/v2/images/email/icon_fb_black.png" alt="Facebook"></a>
        <a href="javascript:;" style="display: inline-block; vertical-align: middle; margin: 0 7px;"><img src="https://static.singaprinting.com/v2/images/email/icon_twitter_black.png" alt="Twitter"></a>
        <a href="javascript:;" style="display: inline-block; vertical-align: middle; margin: 0 7px;"><img src="https://static.singaprinting.com/v2/images/email/icon_insta_black.png" alt="Instagram"></a>
        <a href="javascript:;" style="display: inline-block; vertical-align: middle; margin: 0 7px;"><img src="https://static.singaprinting.com/v2/images/email/icon_youtube_black.png" alt="Youtube"></a>
      </td>
    </tr>
  </table>
</body>
</html>
